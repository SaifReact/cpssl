<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/header.php'; ?>
    <div class="login-card py-5 mt-8">
        <div class="text-center mb-4">
            <img src="assets/logo.png" alt="Logo" style="max-width:120px; max-height:120px;">
        </div>
        <h2 class="text-center login-title mb-4">Login</h2>
        <form method="post" action="process/login_process.php">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required autofocus>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="d-grid gap-2 mt-4">
                <button type="submit" class="btn btn-login btn-lg shadow-sm">Login</button>
            </div>
        </form>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
