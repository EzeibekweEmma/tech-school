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
    <main class="flex items-center justify-center relative">
      <section class="flex flex-col items-center w-[85vw]">

        <?php
        echo 'Welcome, ' . $_SESSION['student_full_name'] . '!';
        var_dump($_SESSION);
        ?>

        <!-- alert message -->
        <section class="absolute top-2 left-1">
          <?php
          // if (isset($error)) {
          //   echo '<div id="alertMessage" class="flex items-center py-2 bg-yellow-600/70 w-[96vw] space-x-2 px-5 text-white rounded-lg">
          //             <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
          //             <span>' . $error . '</span>
          //         </div>';
          // }
          if (isset($_SESSION['login-successful'])) {
            echo '<div id="alertMessage" class="flex items-center py-2 bg-green-600/70 w-[96vw] space-x-2 px-5 text-white rounded-lg">
                      <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                      <span>Login Successful</span>
                  </div>';
          }
          unset($_SESSION['login-successful']);
          ?>
        </section>
      </section>
    </main>
    <!-- footer -->
    <?php include "./src/components/footer.php"; ?>
  </div>
  <!-- Function to hide the alert after 10 seconds -->
  <script src="./src/components/hide-alert.js"></script>
</body>

</html>