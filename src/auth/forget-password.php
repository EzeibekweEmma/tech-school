<!Doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/svg" href="../assets/favicon.svg" />
  <link href="../../dist/output.css" rel="stylesheet" />
  <link rel="stylesheet" href="../styles/main.css">
  <link rel="stylesheet" href="../styles/main2.css">
  <title>Forget Password Page</title>
</head>
<!-- Forget Password Page -->

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
            <label for="email"><span>Email:</span>
              <input type="email" id="email" name="email" placeholder="Eg: example@email.com" required>
            </label>
            <input type="submit" value="RESET PASSWORD" name="reset-password">
          </form>
        </section>
      </section>
    </main>
    <!-- footer -->
    <?php include "../components/footer.php"; ?>
  </div>
</body>

</html>