<?php
include "./src/auth/config-db.php";

if (isset($_POST["subscribe"])) {
  $email = trim($_POST["email"]);
  $error = '';

  $checkEmailQuery = "SELECT * FROM newsletter WHERE email = '$email'";
  $result = $conn->query($checkEmailQuery);

  if ($result->num_rows > 0) {
    $error = $email . ' already subscribe to our Newsletter.';
  } else {
    $sql = "INSERT INTO newsletter (email) VALUES ('$email')";

    if ($conn->query($sql) === TRUE) {
      $_SESSION['subscribe_successful'] = 'subscribe_successful';
      exit();
    } else {
      $error = ' $sql . <br> . $conn->error';
    }
  }
}
