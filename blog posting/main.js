// ... (existing code)
document.addEventListener('DOMContentLoaded', getPosts);

function submitPost() {
  const title = document.getElementById('title').value;
  const content = document.getElementById('content').value;
  const author = document.getElementById('author').value;

  fetch('/api/posts', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({ title, content, author }),
  })
    .then(response => response.json())
    .then(data => {
      getPosts(); // Refresh the posts after submitting
    })
    .catch(error => console.error('Error:', error));
}

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


function submitPost() {
    // ... (existing code)
  
    fetch('/api/posts', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({ title, content, author }),
    })
      .then(response => response.json())
      .then(data => {
        getPosts(); // Refresh the posts after submitting
  
        // Redirect to the blog page after posting
        window.location.href = 'blog.html';
      })
      .catch(error => console.error('Error:', error));
  }
  
  // ... (existing code)
  