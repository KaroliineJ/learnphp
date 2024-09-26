<?php include __DIR__ . '/../partials/header.php'; ?>

<main class="container">
    <form method="POST" action="/register">
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
            <input type="submit" class="btn btn-primary" value="Register">
        </div>
    </form>
</main>

<?php include __DIR__ .  '/../partials/footer.php'; ?>