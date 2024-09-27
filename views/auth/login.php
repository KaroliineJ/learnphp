<?php include __DIR__ . '/../partials/header.php'; ?>

<main class="container">
<?php if(isset($_SESSION['error'])): ?>
        <div class="alert alert-danger" role="alert">
            <?=$_SESSION['error']?>
        </div>
    <form method="POST" action="/login">
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input name="email" type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input name="password" type="password" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <label for="password_confirm" class="form-label">password confirm</label>
            <input name="epassword_confirm" type="password" class="form-control" id="password_confirm">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Login">
        </div>
    </form>
</main>

<?php include __DIR__ .  '/../partials/footer.php'; ?>