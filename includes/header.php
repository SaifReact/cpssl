<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!-- Google Fonts: Poppins -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">
<nav class="navbar navbar-expand-lg fixed-top" style="background: linear-gradient(90deg, #ffecd2 0%, #fcb69f 100%); min-height: 64px; box-shadow: 0 2px 12px rgba(0,0,0,0.08); font-family: 'Poppins', Arial, sans-serif;">
    <div class="container">
        <a href="index.php" style="text-decoration:none;">
            <span style="
                display: inline-block;
                font-family: 'Poppins', Arial, sans-serif;
                font-size: 1.1rem;
                font-weight: 700;
                color: #b85c38;
                letter-spacing: 1.5px;
                text-shadow: 1px 2px 8px #fff8, 0 2px 8px #b85c3822;
                padding: 0.2em 1.2em 0.2em 1.2em;
                margin: 0.2em 0;
            ">
                <span style="vertical-align:middle;">কোডার <span style='color:#e7b17a;'>পেশাজীবী</span> সমবায় সমিতি লিঃ</span>
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto" style="font-size: .9rem; font-family: 'Poppins', Arial, sans-serif;">     
                <?php if (isset($_SESSION['user_id'])): ?>
                    <?php if ($_SESSION['role'] === 'Admin'): ?>
                        <li class="nav-item"><a class="nav-link" href="#">Welcome, <b><?php echo htmlspecialchars($_SESSION['user_name']); ?></b>!</a></li>
                    <?php elseif ($_SESSION['role'] === 'user'): ?>
                        <li class="nav-item"><a class="nav-link" href="#">Welcome, <b><?php echo htmlspecialchars($_SESSION['user_name']); ?></b>!</a></li>
                    <?php endif; ?>
                    <li class="nav-item"><a class="nav-link" href="../logout.php">Logout (লগআউট)</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home (প্রচ্ছদ)</a></li>
                    <li class="nav-item"><a class="nav-link" href="members.php">Members (সদস্যগণ)</a></li>
                    <li class="nav-item"><a class="nav-link" href="member_register.php">Registration (নিবন্ধন)</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login (লগইন)</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
