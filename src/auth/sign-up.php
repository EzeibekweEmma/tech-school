<?php 
session_start();
if (isset($_SESSION['student_id'])){
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/svg" href="../assets/favicon.svg" />
  <link href="../../dist/output.css" rel="stylesheet" />
  <link rel="stylesheet" href="../styles/main.css">
  <title>Sign-up Page</title>
</head>
<!-- Sign-up Page -->

<body class="bg-bgColor overflow-x-hidden">
  <div class="flex flex-col justify-between min-h-screen">
    <!-- header -->
    <? //php include "../components/header.php"; 
    ?>
    <!-- main -->
    <main>
      <section class="background-image">
        <div class="background-blur">
          <h1>Hello Friend 👋</h1>
          <p>Connect with us, sign up your personal information and start to explore!</p>
          <a href="./login.php">Login</a>
        </div>
      </section>
      <section class="auth-container">
        <img src="../assets/favicon.svg" alt="logo" class="logo" />
        <form class="auth-form" method="POST" action="" enctype="multipart/form-data">
          <label for="fullName"><span>Full Name:</span>
            <input type="text" id="fullName" name="fullName" placeholder="Eg: First-name Last-name" required
              value="<?php echo isset($_POST['fullName']) ? htmlspecialchars($_POST['fullName']) : ''; ?>">
          </label>
          <label for="email"><span>Email:</span>
            <input type="email" id="email" name="email" placeholder="Eg: example@email.com" required
              value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
          </label>
          <label for="phone"><span>Phone Number:</span>
            <input type="tel" id="phone" name="phone" placeholder="Eg: +1234567890" pattern="[+]{1}[0-9]*" required
              value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
          </label>
          <label for="profile"><span>Profile Picture:</span>
            <input type="file" id="profile" name="profile" accept=".png, .jpg, .jpeg" />
          </label>
          <label for="password"><span>Password:</span>
            <input type="password" id="password" name="password" placeholder="Enter Your Password" minlength="8"
              required>
          </label>
          <label for="confirmPassword"><span>Confirm Password:</span>
            <input type="password" id="confirmPassword" name="confirmPassword" minlength="8"
              placeholder="Confirm Your Password" required>
          </label>
          <input type="submit" value="SIGN UP" name="signup">
          <span>Already have an account? <a class="quick-link" href="./login.php">logIn here!</a></span>
        </form>
      </section>
      <!-- PHP code to handle sign-up form submission -->
      <section class="absolute top-2 left-1">
        <?php
        include "./config-db.php";

        if (isset($_POST["signup"])) {
          $fullName = $_POST["fullName"];
          $email = $_POST["email"];
          $phone = $_POST["phone"];
          $confirmPassword = $_POST["confirmPassword"];
          $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

          // Handle profile picture upload (move the file to a folder and store the path)
          $targetDir = basename($_FILES["profile"]["name"]) ? "../assets/profile_pictures/" : "";
          $targetFile = $targetDir . basename($_FILES["profile"]["name"]);
          move_uploaded_file($_FILES["profile"]["tmp_name"], $targetFile);

          // Check if the email already exists in the database
          $checkEmailQuery = "SELECT * FROM students WHERE email = '$email'";
          $result = $conn->query($checkEmailQuery);

          if ($result->num_rows > 0) {
            echo '<div id="alertMessage" class="flex items-center py-2 bg-yellow-600/70 w-[96vw] space-x-2 px-5 text-white rounded-lg">
                      <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                      <span>Email already exists. Please use a different email address.</span>
                  </div>';
          } else {
            if ($confirmPassword !== $_POST["password"]) {
              echo '<div id="alertMessage" class="flex items-center py-2 bg-yellow-600/70 w-[96vw] space-x-2 px-5 text-white rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                        <span>Passwords do not match. Please retype your password.</span>
                    </div>';
            } else {
              // Insert student data into the "students" table
              $sql = "INSERT INTO students (full_name, email, phone, profile_picture, password)
                                    VALUES ('$fullName', '$email', '$phone', '$targetFile', '$password')";

              if ($conn->query($sql) === TRUE) {
                header('Location: ./login.php');
                exit();
              } else {
                echo '<div id="alertMessage" class="flex items-center py-2 bg-red-600/70 w-[96vw] space-x-2 px-5 text-white rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6"
                            fill="none" viewBox="0 0 24 24"><path stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2"
                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>Error: ' . $sql . '<br>' . $conn->error . '</span>
                    </div>';
              }
            }
          }
        }

        // Close the database connection
        $conn->close();
        ?>
        <script>
        // Function to hide the alert after 5 seconds
        setTimeout(function() {
          var alertMessage = document.getElementById("alertMessage");
          if (alertMessage) {
            alertMessage.style.display = "none";
          }
        }, 5000);
        </script>
      </section>
    </main>
    <!-- footer -->
    <?php include "../components/footer.php"; ?>
  </div>
</body>

</html>