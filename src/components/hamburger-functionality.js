//  hamburger functionality
document.addEventListener("DOMContentLoaded", function () {
  const checkboxToggle = document.getElementById("checkbox-toggle");
  const menuToggle = document.getElementById("menu-toggle");
  const mobileMenu = document.querySelector(".mobile-menu");
  const profileBtn = document.querySelector(".profile-btn");
  const labelToggle = document.querySelector(".label-toggle");
  const profileBtnToggle = document.getElementById("profileBtn-toggle");

  menuToggle.addEventListener("click", () => {
    mobileMenu.className = checkboxToggle.checked
      ? mobileMenu.className.replace("translate-x-[50rem]", "translate-x-0")
      : mobileMenu.className.replace("translate-x-0", "translate-x-[50rem]");
  });

  labelToggle.addEventListener("click", () => {
    profileBtn.className = profileBtnToggle.checked
      ? profileBtn.className.replace("translate-x-[25rem]", "translate-x-0")
      : profileBtn.className.replace("translate-x-0", "translate-x-[25rem]");
  });
});
