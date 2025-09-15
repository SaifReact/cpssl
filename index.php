<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <!-- Header Section -->
    <header>
        <?php include 'includes/header.php'; ?>
    </header>

    <!-- Carousel Section -->
    <section id="carousel">
        <?php include 'includes/slider.php'; ?>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5">
        <div class="container features-section">
            <h2 class="text-center my-5">Our Features</h2>
            <div class="row text-center">
                <?php
                // Database connection
                include_once __DIR__ . '/config/config.php';

                // Check if $pdo is defined
                if (!isset($pdo)) {
                    die('Database connection not established.');
                }

                // Fetch companies from the database
                try {
                    $stmt = $pdo->query("SELECT company_name_en, company_name_bn, company_image FROM company ORDER BY id DESC");
                    $companies = $stmt->fetchAll();

                    foreach ($companies as $company): ?>
                    <div class="col-md-2 mb-4">
                        <div class="feature-card">
                            <img src="company/<?= htmlspecialchars($company['company_image']); ?>" alt="<?= htmlspecialchars($company['company_name_en']); ?>" class="img-fluid" style="height: 120px; object-fit: contain;">
                            <h5 class="mt-3">
                                <?= htmlspecialchars($company['company_name_en']); ?> <br>
                                <span style="font-size: 0.9rem; color: #555;"><?= htmlspecialchars($company['company_name_bn']); ?></span>
                            </h5>
                        </div>
                    </div>
                    <?php endforeach;
                } catch (Exception $e) {
                    die('Error fetching companies: ' . $e->getMessage());
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>

    <?php include 'includes/js.php'; ?>
</body>
</html>
