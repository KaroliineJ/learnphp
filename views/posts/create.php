<?php include 'views/partials/header.php'; ?>

<main class="container">
<form method="POST" action="/admin/posts">
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="title" name="text" class="form-control" id="title">
    </div>
    <div class="mb-3" class="form-label">content</label>
        <textarea name="body" class="form-control" id="body" rows="3"></textarea>
    </div>
    <div class="mb-3">
      <input type="submit" class="btn btn-primary" value="Send">
    </div>
  </form>
</main>

<?php include 'views/partials/footer.php'; ?>