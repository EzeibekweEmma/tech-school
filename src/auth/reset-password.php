<!Doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/svg" href="../assets/favicon.svg" />
  <link href="../../dist/output.css" rel="stylesheet" />
  <link rel="stylesheet" href="../styles/main.css">
  <link rel="stylesheet" href="../styles/main2.css">
  <title>Reset Password Page</title>
</head>
<!-- Reset Password Page -->

<body class="bg-bgColor overflow-x-hidden">
  <div class="flex flex-col justify-between min-h-screen">
    <!-- header -->
    <?php include "../components/header.php"; ?>
    <!-- main -->
    <main>
      <section class="background-image background-image3">
        <section class="auth-container">
          <img src="../assets/favicon.svg" alt="logo" class="logo" />
          <form class="auth-form" method="POST" action="login.php">
            <label for="password"><span>Password:</span>
              <input type="password" id="password" name="password" placeholder="Enter Your Password" minlength="8"
                required>
            </label>
            <label for="confirmPassword"><span>Confirm Password:</span>
              <input type="password" id="confirmPassword" name="confirmPassword" minlength="8"
                placeholder="Confirm Your Password" required>
            </label>
            <input type="submit" value="SET PASSWORD" name="reset-password">
          </form>
        </section>
      </section>
    </main>
    <!-- footer -->
    <?php include "../components/footer.php"; ?>
  </div>
</body>

</html>