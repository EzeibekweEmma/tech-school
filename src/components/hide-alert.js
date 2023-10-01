// Function to hide the alert after 10 seconds
setTimeout(function () {
  let alertMessage = document.getElementById("alertMessage");
  if (alertMessage) {
    alertMessage.style.display = "none";
  }
}, 10000);
