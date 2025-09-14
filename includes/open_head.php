<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.php'; ?>
<body>
<?php include '../includes/header.php'; ?>
<div class="container-fluid py-5">
    <div class="row">
        <!-- Sidebar (col-3) -->
        <?php include '../includes/side_bar.php'; ?>
        <!-- Main Content (col-9) -->
        <main class="col-12 col-md-10 col-lg-10 px-md-4">
            <div class="pt-4">