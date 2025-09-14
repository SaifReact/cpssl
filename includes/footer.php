<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<footer class="pb-3  shadow-lg" style="z-index:1030; background: linear-gradient(135deg, #ffe5b4 0%, #f7cac9 100%); color: #4b3832;">
    <div class="container">
        <?php if (isset($_SESSION['user_id'])): ?>
                    <div class="text-center small text-muted pt-2">
                        &copy; 2025 Coder Peshajibi Samabay Samity Ltd. All rights reserved.
                    </div>
                <?php else: ?>
                    <div class="row text-center text-md-start align-items-center g-4">
            <div class="col-md-4 mb-3 mb-md-0 d-flex flex-column align-items-center align-items-md-start">
                <div class="d-flex flex-column align-items-md-start mb-2">
                    <a href="index.php" style="text-decoration:none;">
            <span style="
                display: inline-block;
                font-family: 'Poppins', Arial, sans-serif;
                font-size: 1.1rem;
                font-weight: 700;
                color: #b85c38;
                letter-spacing: 1.5px;
                text-shadow: 1px 2px 8px #fff8, 0 2px 8px #b85c3822;
            ">
                <span style="vertical-align:middle;">কোডার <span style='color:#e7b17a;'>পেশাজীবী</span> সমবায় সমিতি লিঃ</span>
            </span>
            </a>
                </div>
                <p class="text-muted small mb-0">Empowering your community, beautifully.</p>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <h6 class="text-uppercase fw-bold mb-3">Quick Links</h6>
                <ul class="list-unstyled d-flex flex-column gap-2">
                    <li><a href="index.php" class="text-white text-decoration-none footer-link"><i class="bi bi-house-door me-2"></i>Home (প্রচ্ছদ)</a></li>
                    <li><a href="members.php" class="text-white text-decoration-none footer-link"><i class="bi bi-list-ul me-2"></i>Members (সদস্যগণ)</a></li>
                    <li><a href="member_register.php" class="text-white text-decoration-none footer-link"><i class="bi bi-people me-2"></i>Registration (নিবন্ধন)</a></li>
                    <li><a href="login.php" class="text-white text-decoration-none footer-link"><i class="bi bi-bar-chart me-2"></i>Login (লগইন)</a></li>
                </ul>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center align-items-md-start">
                <h6 class="text-uppercase fw-bold mb-3">Contact</h6>
                <p class="mb-1"><i class="bi bi-geo-alt me-2"></i>123, Dhaka, Bangladesh</p>
                <p class="mb-0"><i class="bi bi-telephone me-2"></i>Mobile: <a href="tel:+8801000000000" class="text-white text-decoration-none">+880 1000-000000</a></p>
            </div>
        </div>
        <hr class="border-secondary my-4">
                <?php endif; ?>
        
        
    </div>
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</footer>
