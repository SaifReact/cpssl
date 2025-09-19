<?php
session_start();
if (!isset($_SESSION['user_id']) || ($_SESSION['role'] ?? '') !== 'Admin') {
    header('Location: ../login.php');
    exit;
}
?>

<?php include_once __DIR__ . '/../includes/open.php';?>

<!-- Hero Start -->
<div class="container-fluid pb-5 hero-header bg-light">
  ...
</div>
<!-- Hero End -->

<?php include_once __DIR__ . '/../includes/end.php'; ?>
