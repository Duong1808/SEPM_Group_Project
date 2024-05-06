import { useEffect, useState } from "react";
import { getAuth, onAuthStateChanged } from "firebase/auth";
import {
  getFirestore,
  collection,
  getDocs,
  doc,
  getDoc,
  updateDoc,
  setDoc,
  deleteDoc,
} from "firebase/firestore";
import {
  FaEllipsisH,
  FaHeart,
  FaPen,
  FaRegBookmark,
  FaRegComment,
  FaRegHeart,
  FaTrash,
} from "react-icons/fa";

function BlogFeed() {
  const [posts, setPosts] = useState([]);
  const [userId, setUserId] = useState(null);

  useEffect(() => {
    const auth = getAuth();
    const unsubscribe = onAuthStateChanged(auth, (user) => {
      if (user) {
        setUserId(user.uid);
      } else {
        setUserId(null);
      }
    });
    return () => unsubscribe();
  }, []);

  useEffect(() => {
    const fetchPosts = async () => {
      try {
        const db = getFirestore();
        const postsCollection = collection(db, "posts");
        const postsSnapshot = await getDocs(postsCollection);
        const postsData = await Promise.all(
          postsSnapshot.docs.map(async (postDoc) => {
            const postData = postDoc.data();
            const userDoc = doc(db, "users", postData.userId);
            const userSnap = await getDoc(userDoc);
            const userData = userSnap.data();
            return {
              id: postDoc.id,
              user: userData,
              ...postData,
            };
          })
        );
        setPosts(postsData);
      } catch (error) {
        console.error("Error fetching posts:", error);
      }
    };

    fetchPosts();
  }, [userId]);

  const handleLikePost = async (postId) => {
    try {
      const db = getFirestore();
      const postRef = doc(db, "posts", postId);
      const postDoc = await getDoc(postRef);

      if (postDoc.exists()) {
        const postData = postDoc.data();
        const currentLikes = postData.likes || 0;
        const likeRef = doc(db, "likes", `${userId}_${postId}`);

        const likeDoc = await getDoc(likeRef);

        if (!likeDoc.exists()) {
          await updateDoc(postRef, { likes: currentLikes + 1 });
          await setDoc(likeRef, { userId, postId });
        }
      } else {
        console.error("Error: Post does not exist");
      }
    } catch (error) {
      console.error("Error liking post:", error);
    }
  };

  const handleUnlikePost = async (postId) => {
    try {
      const db = getFirestore();
      const postRef = doc(db, "posts", postId);
      const postDoc = await getDoc(postRef);

      if (postDoc.exists()) {
        const postData = postDoc.data();
        const currentLikes = postData.likes || 0;
        const likeRef = doc(db, "likes", `${userId}_${postId}`);

        const likeDoc = await getDoc(likeRef);

        if (likeDoc.exists()) {
          await updateDoc(postRef, { likes: currentLikes - 1 });
          await deleteDoc(likeRef);
        }
      } else {
        console.error("Error: Post does not exist");
      }
    } catch (error) {
      console.error("Error unliking post:", error);
    }
  };

  return (
    <>
      {posts?.map((post) => (
        <div className="feed" key={post.id}>
          <div className="head">
            <div className="user">
              <div className="profile-photo">
                <img alt="" src={post.user.avatar} />
              </div>
              <div className="info">
                <h3 style={{ fontSize: "1.1em", fontWeight: "bold" }}>
                  {post.user.name}
                </h3>
                <small>
                  {new Date(post.createdAt.seconds * 1000).toLocaleString()}
                </small>
              </div>
            </div>
            <span className="edit">
              <i>
                <FaEllipsisH />
              </i>
              <ul className="edit-menu">
                <li>
                  <i className="uil uil-pen">
                    <FaPen />
                  </i>
                  Edit
                </li>
                <li>
                  <i className="uil uil-trash-alt">
                    <FaTrash />
                  </i>
                  Delete
                </li>
              </ul>
            </span>
          </div>
          <div className="photo">
            <img alt="" src={post.imageUrl} />
          </div>
          <div className="action-buttons">
            <div className="interaction-buttons">
              <span>
                {post.isLiked ? (
                  <i onClick={() => handleUnlikePost(post.id)}>
                    <FaHeart />
                  </i>
                ) : (
                  <i onClick={() => handleLikePost(post.id)}>
                    <FaRegHeart />
                  </i>
                )}
              </span>
              <span>
                <i className="uil uil-comment">
                  <FaRegComment />
                </i>
              </span>
            </div>
            <div className="bookmark">
              <span>
                <i className="uil uil-bookmark">
                  <FaRegBookmark />
                </i>
              </span>
            </div>
          </div>
          <div className="liked-by">
            <p>
              Liked by <b>{post.likes}</b> and <b>{post.others} others</b>
            </p>
          </div>
          <div className="caption">
            <p>
              <b>{post.user.name}</b> {post.content}{" "}
            </p>
          </div>
          <div className="comments text-muted">
            View all {post.commentsCount} comments
          </div>
        </div>
      ))}
    </>
  );
}

export default BlogFeed;
