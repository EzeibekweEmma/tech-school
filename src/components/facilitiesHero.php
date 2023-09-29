<!-- Slide -->
<section class="slide h-[50vh] md:h-[65vh] lg:h-[80vh] w-[80vw] duration-500 rounded-3xl border-2 border-emerald-700"
  style="background: url('../assets/classroom-1.png') no-repeat center center / cover;">
  <div class="relative flex items-center justify-center h-full w-full">
    <button id="prevSlide"
      class="absolute bottom-[40%] left-3 border-2 border-emerald-700 rounded-lg hover:bg-emerald-700 hover:text-white text-emerald-700 duration-700 w-7 h-16">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>

    </button>
    <button id="nextSlide"
      class="absolute bottom-[40%] right-3 border-2 border-emerald-700 rounded-lg hover:bg-emerald-700 hover:text-white text-emerald-700 duration-700 w-7 h-16">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
      </svg>

    </button>
  </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", function() {
  const slide = document.querySelector(".slide");
  const prevSlideButton = document.querySelector("#prevSlide");
  const nextSlideButton = document.querySelector("#nextSlide");
  let currentSlideIndex = 0;
  const slideNumber = 5;

  function updateSlide() {
    // Update the slide's properties
    slide.style.backgroundImage = `url('../assets/classroom-${currentSlideIndex + 1}.png')`;
  }

  function prevSlide() {
    currentSlideIndex = (currentSlideIndex - 1 + slideNumber) % slideNumber;
    updateSlide();
  }

  function nextSlide() {
    currentSlideIndex = (currentSlideIndex + 1) % slideNumber;
    updateSlide();
  }

  prevSlideButton.addEventListener("click", prevSlide);
  nextSlideButton.addEventListener("click", nextSlide);

  function animateSlide() {
    // Animate the slide every 10 seconds
    setInterval(nextSlide, 10000);
  }

  // Start the slide animation
  animateSlide();
});
</script>