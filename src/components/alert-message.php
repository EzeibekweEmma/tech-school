<!-- Alert Messages -->
<section class="fixed top-20 w-screen flex justify-center z-50">
  <div class="w-[90vw] flex">
    <?php
    // Success message
    // alert for dashboard page
    if (isset($_SESSION['login-successful'])) {
      echo '<div id="alertMessage" class="flex items-center py-2 bg-green-600/70 w-[96vw] space-x-2 px-5 text-white rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
              <span>Login Successful</span>
          </div>';
    }
    unset($_SESSION['login-successful']);

    // alert home page 
    if (isset($_SESSION['logout-successful'])) {
      echo '<div id="alertMessage" class="flex items-center py-2 bg-green-600/70 w-[94vw] lg:w-[97vw] space-x-2 px-5 text-white rounded-lg">
                      <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                      <span>Log Out Successful</span>
                    </div>';
    }
    unset($_SESSION['logout-successful']);

    // alert for login page
    if (isset($_SESSION['reset-successful'])) {
      echo '<div id="alertMessage" class="flex items-center py-2 bg-green-600/70 w-[96vw] space-x-2 px-5 text-white rounded-lg">
      <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
      <span>Password Reset Successful</span>
      </div>';
    } else if (isset($_SESSION['signup-successful'])) {
      echo '<div id="alertMessage" class="flex items-center py-2 bg-green-600/70 w-[96vw] space-x-2 px-5 text-white rounded-lg">
      <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
      <span>Registration Successful</span>
      </div>';
    }

    // alert for about page
    if (isset($_SESSION['email-successful'])) {
      echo '<div id="alertMessage" class="flex items-center py-2 bg-green-600/70 w-[94vw] lg:w-[97vw] space-x-2 px-5 text-white rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
              <span>Email Sent Successfully!</span>
            </div>';
    }
    unset($_SESSION['email-successful']);

    // alert for edit Profile page
    if (isset($_SESSION['update_successful'])) {
      echo '<div id="alertMessage" class="flex items-center py-2 bg-green-600/70 w-[94vw] lg:w-[97vw] space-x-2 px-5 text-white rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
              <span>Profile updated successfully</span>
            </div>';
    }
    unset($_SESSION['update_successful']);

    // alert for footer
    if (isset($subscribe_successful)) {
      echo '<div id="alertMessage" class="flex items-center py-2 bg-green-600/70 w-[94vw] lg:w-[97vw] space-x-2 px-5 text-white rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
              <span>Successfully subscribe to newsletter.</span>
            </div>';
    }
    unset($subscribe_successful);

    if (isset($subscribe_already)) {
      echo '<div id="alertMessage" class="flex items-center py-2 bg-green-600/70 w-[94vw] lg:w-[97vw] space-x-2 px-5 text-white rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
              <span>Already subscribe to our Newsletter.</span>
            </div>';
    }
    unset($subscribe_already);

    // Warning message
    // alert for dashboard, edit Profile, about, forget password, sign, login & reset password page
    if (isset($error)) {
      echo '<div id="alertMessage" class="flex items-center py-2 bg-yellow-600/70 w-[96vw] space-x-2 px-5 text-white rounded-lg">
                      <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                      <span>' . $error . '</span>
                  </div>';
    }
    ?>
  </div>
</section>