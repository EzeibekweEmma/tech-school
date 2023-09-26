<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/svg" href="./src/assets/favicon.svg" />
  <link href="./dist/output.css" rel="stylesheet" />
  <title>Tech School</title>
</head>

<body class="bg-[#f5f6f8] overflow-x-hidden">
  <div class="flex flex-col justify-between min-h-screen">
    <!-- header -->
    <?php include "./src/components/header.php"; ?>
    <!-- hero -->
    <?php include "./src/components/hero.php"; ?>
    <!-- main -->
    <main class="flex items-center justify-center">
      <section class="flex flex-col items-center w-[85vw]">
        <section class="my-16">
          <h2 class="text-center mb-7 text-xl sm:text-3xl md:text-4xl font-bold text-emerald-700">Claim Your Place
            in the New Global Digital Workforce</h2>
          <p class="text-center text-lg sm:text-xl font-medium">At <span class="text-emerald-700">Tech</span> School,
            our programmes are designed to prepare you for a career in the world's fastest growing industries.</p>
        </section>

        <!-- FAQs -->
        <section class="mb-16 max-w-3xl">
          <h2 class="text-center mb-7 text-xl sm:text-3xl font-bold text-emerald-700">FAQs</h2>
          <div class="join join-vertical w-full">
            <div class="collapse collapse-arrow duration-700 join-item border bg-white border-emerald-700">
              <input type="radio" name="my-accordion-4" />
              <div class="collapse-title text-lg font-medium text-emerald-700">
                What is Tech School?
              </div>
              <div class="collapse-content">
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere omnis voluptas reiciendis fugit.
                </p>
              </div>
            </div>
            <div class="collapse collapse-arrow duration-700 join-item border bg-white border-emerald-900">
              <input type="radio" name="my-accordion-4" />
              <div class="collapse-title text-lg font-medium text-emerald-700">
                How do I register?
              </div>
              <div class="collapse-content">
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere omnis voluptas reiciendis fugit
                  tenetur accusantium sapiente, magnam, error consectetur animi iusto cumque magni facilis officia rerum
                  quis sint nostrum sunt.
                  tenetur accusantium sapiente, magnam, error consectetur animi iusto cumque magni facilis officia rerum
                  quis sint nostrum sunt.
                </p>
              </div>
            </div>
            <div class="collapse collapse-arrow duration-700 join-item border bg-white border-emerald-900">
              <input type="radio" name="my-accordion-4" />
              <div class="collapse-title text-lg font-medium text-emerald-700">
                How does Tech school work?
              </div>
              <div class="collapse-content">
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere omnis voluptas reiciendis fugit
                  tenetur accusantium sapiente.
              </div>
            </div>
            <div class="collapse collapse-arrow duration-700 join-item border bg-white border-emerald-900">
              <input type="radio" name="my-accordion-4" />
              <div class="collapse-title text-lg font-medium text-emerald-700">
                What are the school terms and options?
              </div>
              <div class="collapse-content">
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere omnis voluptas reiciendis fugit
                  tenetur accusantium sapiente, magnam, error consectetur animi iusto cumque magni facilis officia rerum
                  quis sint nostrum sunt.
                </p>
              </div>
            </div>
            <div class="collapse collapse-arrow duration-700 join-item border bg-white border-emerald-900">
              <input type="radio" name="my-accordion-4" />
              <div class="collapse-title text-lg font-medium text-emerald-700">
                Click to open this one and close others
              </div>
              <div class="collapse-content">
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere omnis voluptas reiciendis fugit
                  tenetur accusantium sapiente.
                </p>
              </div>
            </div>
            <div class="collapse collapse-arrow duration-700 join-item border bg-white border-emerald-900">
              <input type="radio" name="my-accordion-4" />
              <div class="collapse-title text-lg font-medium text-emerald-700">
                How do I make payment?
              </div>
              <div class="collapse-content">
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere omnis voluptas reiciendis fugit
                  tenetur accusantium sapiente, magnam, error consectetur animi iusto cumque magni facilis officia rerum
                  quis sint nostrum sunt.
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere omnis voluptas reiciendis fugit
                  tenetur accusantium sapiente, magnam, error consectetur animi iusto cumque magni facilis officia rerum
                  quis sint nostrum sunt.
                </p>
              </div>
            </div>
            <div class="collapse collapse-arrow duration-700 join-item border bg-white border-emerald-900">
              <input type="radio" name="my-accordion-4" />
              <div class="collapse-title text-lg font-medium text-emerald-700">
                Can I pay in my local currency?
              </div>
              <div class="collapse-content">
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere omnis voluptas reiciendis fugit
                  tenetur accusantium sapiente, magnam, error consectetur animi iusto cumque magni facilis officia rerum
                  quis sint nostrum sunt.
                </p>
              </div>
            </div>
          </div>
        </section>
      </section>
    </main>
    <!-- footer -->
    <?php include "./src/components/footer.php"; ?>
  </div>
</body>

</html>