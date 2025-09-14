
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/header.php'; ?>
    <div class="container">
        <div class="members-table-card mt-5">
            <h2 class="text-center members-title mb-4">Members List (সদস্য তালিকা)</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Member Code</th>
                            <th>Name (Bangla)</th>
                            <th>Name (English)</th>
                            <th>Father's Name</th>
                            <th>Mother's Name</th>
                            <th>NID</th>
                            <th>Mobile</th>
                            <th>Gender</th>
                            <th>Education</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    // DB config
                    $host = 'localhost';
                    $db   = 'samity_db';
                    $user = 'root';
                    $pass = '';
                    $charset = 'utf8mb4';
                    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
                    $options = [
                        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::ATTR_EMULATE_PREPARES   => false,
                    ];
                    try {
                        $pdo = new PDO($dsn, $user, $pass, $options);
                        $stmt = $pdo->query("SELECT * FROM members_info ORDER BY id DESC");
                        while ($row = $stmt->fetch()) {
                            echo '<tr>';
                            echo '<td>' . htmlspecialchars($row['member_code']) . '</td>';
                            echo '<td>' . htmlspecialchars($row['name_bn']) . '</td>';
                            echo '<td>' . htmlspecialchars($row['name_en']) . '</td>';
                            echo '<td>' . htmlspecialchars($row['father_name']) . '</td>';
                            echo '<td>' . htmlspecialchars($row['mother_name']) . '</td>';
                            echo '<td>' . htmlspecialchars($row['nid']) . '</td>';
                            echo '<td>' . htmlspecialchars($row['mobile']) . '</td>';
                            echo '<td>' . htmlspecialchars($row['gender']) . '</td>';
                            echo '<td>' . htmlspecialchars($row['education']) . '</td>';
                            echo '<td><a href="member_view.php?id=' . $row['id'] . '" class="btn btn-sm btn-info">View</a></td>';
                            echo '</tr>';
                        }
                    } catch (PDOException $e) {
                        echo '<tr><td colspan="10" class="text-danger text-center">Database connection failed.</td></tr>';
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/js.php'; ?>
</body>
</html>
