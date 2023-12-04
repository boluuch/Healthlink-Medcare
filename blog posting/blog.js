document.addEventListener('DOMContentLoaded', getPosts);

function getPosts() {
  fetch('/api/posts')
    .then(response => response.json())
    .then(posts => {
      const postsContainer = document.getElementById('posts');
      postsContainer.innerHTML = '';
      posts.forEach(post => {
        const postElement = document.createElement('div');
        postElement.innerHTML = `
          <h2>${post.title}</h2>
          <p>${post.content}</p>
          <p><em>Author: ${post.author}</em></p>
          <hr>
        `;
        postsContainer.appendChild(postElement);
      });
    })
    .catch(error => console.error('Error:', error));
}
