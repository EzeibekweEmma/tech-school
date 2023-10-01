<section class="slide h-[50vh] md:h-[65vh] lg:h-[80vh] w-screen duration-500"
  style="background: url('./src/assets/class-1.png') no-repeat center center / cover;">
  <!-- Slide -->
  <div class="relative flex items-center justify-center h-full w-full bg-[#101f3680] ">
    <button id="prevSlide"
      class="absolute md:bottom-[40%] bottom-[25%] left-3 border-2 border-emerald-400 rounded-full hover:bg-white/20 text-emerald-400 duration-700 hover:w-10 w-8 hover:h-10 h-8">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
      </svg>
    </button>
    <button id="nextSlide"
      class="absolute md:bottom-[40%] bottom-[25%] right-3 sm:right-7 border-2 border-emerald-400 rounded-full hover:bg-white/20 text-emerald-400 duration-700 hover:w-10 w-8 hover:h-10 h-8">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
      </svg>
    </button>
    <div class="text-white px-10 md:px-20">
      <h1 class="text-h1 text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-medium">Power Your Future In Tech</h1>
      <p class="text-p text-base sm:text-lg font-bold text-emerald-400">Gain the digital career-ready skills to
        transform your future
      </p>
      <a href="./courses.php"
        class="flex items-center mt-5 py-1.5 px-4 space-x-2 border hover:shadow-lg hover:bg-emerald-700 duration-700 border-emerald-700 w-fit font-medium rounded-full text-base sm:text-lg"><span>Get
          Started</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
          class="w-4 h-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
        </svg>

      </a>
    </div>
  </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", function() {
  const slide = document.querySelector(".slide");
  const textH1 = document.querySelector(".text-h1");
  const textP = document.querySelector(".text-p");
  const prevSlideButton = document.querySelector("#prevSlide");
  const nextSlideButton = document.querySelector("#nextSlide");
  const slideText = [{
      h1: "Power Your Future In Tech",
      p: "Gain the digital career-ready skills to transform your future"
    },
    {
      h1: "Let The Journey Begin With",
      p: "INSPIRATION, INNOVATION, PASSION & DETERMINATION"
    },
    {
      h1: "Code With Purpose",
      p: "Fight for a shared vision to create software that elevates and transforms the community."
    },
    {
      h1: "What Drives Us?",
      p: "Every line of code, every solved problem, every successful project."
    },
    {
      h1: "Are You Ready?",
      p: "To take the next step in your career and join the Tech School community?"
    }
  ];
  let currentSlideIndex = 0;

  function updateSlide() {
    // Update the slide's properties
    slide.style.backgroundImage = `url('./src/assets/class-${currentSlideIndex + 1}.png')`;
    textH1.textContent = slideText[currentSlideIndex].h1;
    textP.textContent = slideText[currentSlideIndex].p;
  }

  function prevSlide() {
    currentSlideIndex = (currentSlideIndex - 1 + slideText.length) % slideText.length;
    updateSlide();
  }

  function nextSlide() {
    currentSlideIndex = (currentSlideIndex + 1) % slideText.length;
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