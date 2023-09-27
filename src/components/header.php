<header class="flex justify-center bg-white sticky top-0 shadow-lg z-20">
  <section class="flex justify-between items-center h-16 w-[85vw]">
    <a href="/" class="flex">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-9 h-9 text-emerald-700">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M4.098 19.902a3.75 3.75 0 005.304 0l6.401-6.402M6.75 21A3.75 3.75 0 013 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 003.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008z" />
      </svg>
      <h2 class="text-2xl font-semibold font-mono border-emerald-700 border-2"><span
          class="text-white bg-emerald-700 p-1 pt-0.5">Tech</span><span
          class="text-lg font-sans text-emerald-700 px-0.5">School</span>
      </h2>
    </a>

    <!-- Desktop Menu (Initially Visible) -->
    <nav class="hidden md:block">
      <div class="flex justify-between items-center space-x-4 text-lg text-emerald-700 font-semibold">

        <a href="/" class="group w-fit h-9 overflow-x-hidden"><span class="w-full h-full px-1.5 py-1">Home</span>
          <div class="h-1 w-full bg-emerald-700 duration-500 -translate-x-24 group-hover:translate-x-0"></div>
        </a>

        <a href="#" class="group w-fit h-9 overflow-x-hidden"><span class="w-full h-full px-1.5 py-1">Courses</span>
          <div class="h-1 w-full bg-emerald-700 duration-500 -translate-x-24 group-hover:translate-x-0"></div>
        </a>

        <a href="#" class="group w-fit h-9 overflow-x-hidden"><span class="w-full h-full px-1.5 py-1">Facilities</span>
          <div class="h-1 w-full bg-emerald-700 duration-500 -translate-x-24 group-hover:translate-x-0"></div>
        </a>

        <a href="#" class="group w-fit h-9 overflow-x-hidden"><span
            class="w-full h-full px-1.5 py-1">About&nbsp;Us</span>
          <div class="h-1 w-full bg-emerald-700 duration-500 -translate-x-24 group-hover:translate-x-0"></div>
        </a>

      </div>
    </nav>

    <!-- Mobile Menu (Initially Hidden) -->
    <nav class="block md:hidden" id="menu-toggle">
      <!-- hamburger icon  -->
      <label class="btn btn-circle swap swap-rotate text-emerald-700">
        <!-- this hidden checkbox controls the state -->
        <input type="checkbox" id="checkbox-toggle" />

        <!-- hamburger icon -->
        <svg class="swap-off fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
          viewBox="0 0 512 512">
          <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
        </svg>

        <!-- close icon -->
        <svg class="swap-on fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
          viewBox="0 0 512 512">
          <polygon
            points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49" />
        </svg>

      </label>
      <!-- </div> -->
    </nav>
  </section>
  <!-- Mobile drop down -->
  <div class="mobile-menu absolute top-16 md:hidden translate-x-[50rem] text-white
      duration-500 bg-emerald-700 w-full flex justify-center py-5">
    <div class="flex flex-col font-semibold items-center">
      <a href="/" class="group w-fit h-9 overflow-x-hidden"><span class="w-full h-full px-1.5 py-1">Home</span>
        <div class="h-1 w-full bg-white duration-500 -translate-x-24 group-hover:translate-x-0"></div>
      </a>

      <a href="#" class="group w-fit h-9 overflow-x-hidden"><span class="w-full h-full px-1.5 py-1">Courses</span>
        <div class="h-1 w-full bg-white duration-500 -translate-x-24 group-hover:translate-x-0"></div>
      </a>

      <a href="#" class="group w-fit h-9 overflow-x-hidden"><span class="w-full h-full px-1.5 py-1">Facilities</span>
        <div class="h-1 w-full bg-white duration-500 -translate-x-24 group-hover:translate-x-0"></div>
      </a>

      <a href="#" class="group w-fit h-9 overflow-x-hidden"><span class="w-full h-full px-1.5 py-1">About&nbsp;Us</span>
        <div class="h-1 w-full bg-white duration-500 -translate-x-24 group-hover:translate-x-0"></div>
      </a>
    </div>
  </div>
</header>

<!-- hamburger functionality -->
<script>
document.addEventListener("DOMContentLoaded", function() {
  const checkboxToggle = document.getElementById("checkbox-toggle");
  const menuToggle = document.getElementById("menu-toggle");
  const mobileMenu = document.querySelector(".mobile-menu");

  menuToggle.addEventListener("click", () => {
    mobileMenu.className = checkboxToggle.checked ?
      mobileMenu.className.replace("translate-x-[50rem]", "translate-x-0") :
      mobileMenu.className.replace("translate-x-0", "translate-x-[50rem]");
  });
});
</script>