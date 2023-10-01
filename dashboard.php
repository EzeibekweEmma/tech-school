<?php 
session_start();
if (!isset($_SESSION['student_id'])) {
    header('Location: ./src/auth/login.php');
    exit();
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/svg" href="./src/assets/favicon.svg" />
  <link href="./dist/output.css" rel="stylesheet" />
  <title>Tech School | Dashboard Page</title>
</head>
<!-- Dashboard Page -->

<body class="bg-[#f5f6f8] overflow-x-hidden">
  <div class="flex flex-col justify-between min-h-screen">
    <!-- header -->
    <?php include "./src/components/header.php"; ?>

    <!-- main -->
    <main class="flex items-center justify-center">
      <section class="flex flex-col items-center w-[85vw]">

        <?php
echo 'Welcome, ' . $_SESSION['student_full_name'] . '!';
    var_dump($_SESSION);
?>
      </section>
    </main>
    <!-- footer -->
    <?php include "./src/components/footer.php"; ?>
  </div>
</body>

</html>