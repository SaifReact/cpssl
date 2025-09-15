<?php
// Ensure the correct path to config.php
include_once __DIR__ . '/../config/config.php';

// Check if $pdo is defined
if (!isset($pdo)) {
    die('Database connection not established.');
}

// Fetch banners from the database
try {
    $stmt = $pdo->query("SELECT banner_name_bn, banner_name_en, banner_image FROM banner ORDER BY id DESC");
    $banners = $stmt->fetchAll();
} catch (Exception $e) {
    die('Error fetching banners: ' . $e->getMessage());
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
        <?php foreach ($banners as $index => $banner): ?>
        <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="<?= $index; ?>" class="<?= $index === 0 ? 'active' : ''; ?>" aria-current="<?= $index === 0 ? 'true' : 'false'; ?>" aria-label="Slide <?= $index + 1; ?>"></button>
        <?php endforeach; ?>
    </div>

    <!-- Carousel Items -->
    <div class="carousel-inner">
        <?php foreach ($banners as $index => $banner): ?>
        <div class="carousel-item <?= $index === 0 ? 'active' : ''; ?>">
            <img src="banner/<?= htmlspecialchars($banner['banner_image']); ?>" class="d-block w-100" alt="<?= htmlspecialchars($banner['banner_name_en']); ?>" style="max-height: 500px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
                <h5><?= htmlspecialchars($banner['banner_name_en']); ?></h5>
                <p><?= htmlspecialchars($banner['banner_name_bn']); ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
