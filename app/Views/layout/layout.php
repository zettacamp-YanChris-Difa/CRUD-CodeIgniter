<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ===== Box Icons ===== -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- ===== Global CSS ===== -->
    <link rel="stylesheet" href="/styles/index.css">
    <!-- ===== Navbar CSS ===== -->
    <link rel="stylesheet" href="/styles/navbar.css">
    <!-- ===== Content CSS ===== -->
    <link rel="stylesheet" href="<?= $css; ?>">
    <!-- ===== Icons CSS ===== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title><?= $title; ?></title>
</head>

<body>

    <?= $this->include('layout/navbar'); ?>

    <?= $this->renderSection('content'); ?>

</body>

</html>