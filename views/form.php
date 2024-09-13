<?php include 'partials/header.php'; ?>

<main class="container">
  <?php if($fname): ?>
  <h3>Hello <?=$fname?> </h3>
  <?php endif; ?>
  <form method="POST" action="/answer">
    <div class="mb-3">
      <label for="fname" class="form-label">First Name</label>
      <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter your name...">
    </div>
    <div class="mb-3">
      <input type="submit" class="btn btn-primary" value="Send">
    </div>
  </form>
</main>

<?php include 'partials/footer.php'; ?>
