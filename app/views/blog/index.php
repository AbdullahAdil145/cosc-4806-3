<?php require_once 'app/views/templates/header.php'; ?>

<section class="home-section">
    <h2>📰 Latest Blog Posts</h2>
    <div id="blog-container">Loading...</div>
</section>

<script>
fetch("https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/@abdullahadil145")
  .then(res => res.json())
  .then(data => {
    const container = document.getElementById("blog-container");
    if (!data.items || !data.items.length) {
      container.innerHTML = "No blog posts found.";
      return;
    }

    const posts = data.items.slice(0, 3);
    container.innerHTML = posts.map(post => `
      <div class="card mb-4 p-3">
        <h5><a href="${post.link}" target="_blank">${post.title}</a></h5>
        <p><strong>${new Date(post.pubDate).toLocaleDateString()}</strong></p>
        <p>${post.description.slice(0, 200)}...</p>
      </div>
    `).join("");
  })
  .catch(() => {
    document.getElementById("blog-container").innerText = "Failed to load blog posts.";
  });
</script>

<?php require_once 'app/views/templates/footer.php'; ?>
