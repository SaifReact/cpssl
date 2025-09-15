<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        .features-section {
            padding: 60px 0;
        }
        .features-section .feature-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: 200px; /* Fixed height */
            width: 150px; /* Fixed width */
            margin: auto; /* Center alignment */
        }
        .features-section .feature-card img {
            max-width: 100%;
            height: auto;
        }
        .features-section .feature-card h5 {
            font-size: 1rem;
            font-weight: 600;
            margin-top: 10px;
        }
        .news-section {
            padding: 60px 0;
        }
        .news-section .news-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
    </style>
<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/slider.php'; ?>
    <div class="container features-section">
        <div class="row text-center">
            <div class="col-md-2">
                <div class="feature-card">
                    <img src="https://via.placeholder.com/150" alt="Finance" class="img-fluid">
                    <h5>Coder Mart</h5>
                </div>
            </div>
            <div class="col-md-2">
                <div class="feature-card">
                    <img src="https://via.placeholder.com/150" alt="Corporate" class="img-fluid">
                    <h5>Coder Station</h5>
                </div>
            </div>
            <div class="col-md-2">
                <div class="feature-card">
                    <img src="https://via.placeholder.com/150" alt="Public Sector" class="img-fluid">
                    <h5>Coder Finance</h5>
                </div>
            </div>
            <div class="col-md-2">
                <div class="feature-card">
                    <img src="https://via.placeholder.com/150" alt="Outsourcing" class="img-fluid">
                    <h5>Coder Builders</h5>
                </div>
            </div>
            <div class="col-md-2">
                <div class="feature-card">
                    <img src="https://via.placeholder.com/150" alt="Outsourcing" class="img-fluid">
                    <h5>Coder Umrah</h5>
                </div>
            </div>
            <div class="col-md-2">
                <div class="feature-card">
                    <img src="https://via.placeholder.com/150" alt="Outsourcing" class="img-fluid">
                    <h5>Coder Foundation</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container news-section">
        <h2 class="text-center">News & Events</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="news-card">
                    <img src="https://via.placeholder.com/300x200" alt="News 1" class="img-fluid mb-3">
                    <h5>Inter Software Company Badminton Tournament 2025</h5>
                    <p>Feb 10, 2025</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-card">
                    <img src="https://via.placeholder.com/300x200" alt="News 2" class="img-fluid mb-3">
                    <h5>Rangs Champions Trophy 2025</h5>
                    <p>Jan 15, 2025</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-card">
                    <img src="https://via.placeholder.com/300x200" alt="News 3" class="img-fluid mb-3">
                    <h5>Champions of Inter Software Company Futsal Tournament 2025</h5>
                    <p>Mar 24, 2025</p>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/js.php'; ?>
</body>
</html>
