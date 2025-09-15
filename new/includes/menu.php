<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<nav class="navbar navbar-expand-lg navbar-light border-bottom border-2 border-white">
                <a href="index.php" class="navbar-brand">
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
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.html" class="nav-item nav-link active">Home (প্রচ্ছদ)</a>
                        <a href="about.html" class="nav-item nav-link">Registration (নিবন্ধন)</a>
                        <a href="service.html" class="nav-item nav-link">Login (লগইন)</a>
                        <a href="contact.html" class="nav-item nav-link">Contact (যোগাযোগ)</a>
                    </div>
                </div>
            </nav>