<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="icon" type="image/svg+xml" href="/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home Smart</title>
  <!-- @vite('resources/css/app.css') -->
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<!-- Main container-->

<body class="bg-white mx-auto max-w-[2000px] text-neutral-100 dark:text-neutral-500">
  <nav class="bg-amber-400 mx-auto p-4">
    <!-- Content within box of navbar being justified between ( lhs logo - rhs menu ) -->
    <div class="flex justify-between items-center mx-auto container">
      <!-- Anchor tag (contains logo) which work like a container within itself it contains breakpoint classes like lg: which says size will change based on change of screen dimensions  -->
      <a href="/"
        class="lg:top-9 lg:left-1/2 z-50 lg:absolute hover:opacity-70 rounded-sm focus:outline-none ring-neutral-400 focus-visible:ring-4 ring-offset-4 lg:-translate-x-1/2"
        aria-label="go to home page">
        <img src="./assets/logo.svg" width="200" class="w-48 md:w-64 lg:w-72" alt="home smart logo" />
      </a>

      <button id="menu"
        class="lg:hidden rounded-sm focus:outline-none ring-neutral-400 focus-visible:ring-4 ring-offset-4 ring-offset-amber-400 text-neutral-900 hover:text-neutral-500 transition-colours"
        aria-expanded="false" aria-label="Open menu">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-8 h-8">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>

      <!-- Menu bar items by defining role of div as same and anchor tags for each menu bar ITEM - ALL THESE ARE TECHNICALLY containers too boxes within boxes  -->
      <div role="menubar"
        class="hidden top-16 right-0 left-0 z-40 lg:static absolute flex lg:flex lg:flex-row flex-col lg:justify-between items-center gap-4 bg-amber-400 shadow-xl lg:shadow-none p-6 lg:w-full text-lg text-center">
        <!-- display hidden means display none property as we want to show it only when clicked -->
        <a role="menuitem"
          class="px-6 py-1 rounded-sm focus:outline-none ring-neutral-900 focus-visible:ring-4 ring-offset-4 ring-offset-amber-400 hover:text-neutral-500 dark:text-neutral-900 transition-colours"
          href="/">Home</a>

        <a role="menuitem"
          class="px-6 py-1 rounded-sm focus:outline-none ring-neutral-900 focus-visible:ring-4 ring-offset-4 ring-offset-amber-400 hover:text-neutral-500 transition-colours"
          href="/">Contact</a>

        <a role="menuitem"
          class="lg:mr-auto px-6 py-1 rounded-sm focus:outline-none ring-neutral-900 focus-visible:ring-4 ring-offset-4 ring-offset-amber-400 hover:text-neutral-500 dark:text-neutral-900 transition-colours"
          href="/">Login</a>

        <a role="menuitem"
          class="bg-teal-800 shadow-2xl hover:shadow-none px-6 py-2 rounded-md focus:outline-none ring-neutral-900 focus-visible:ring-4 ring-offset-4 ring-offset-amber-400 text-neutral-900 text-white transition-shadow"
          href="/">Sign Up</a>
      </div>
    </div>
  </nav>

  <header class="relative pt-16 md:pt-24 lg:pt-48">
    <div class="bottom-8 md:bottom-24 xl:bottom-32 -z-10 absolute inset-0 bg-gradient-to-b from-amber-400 to-amber-600">
    </div>
    <div class="place-items-end grid grid-rows-1 mx-auto px-2 container">
      <img src="./assets/couch.png" class="col-start-1 col-end-2 row-start-1 row-end-2 mx-auto" alt="couch" />
      <img src="./assets/app.svg"
        class="col-start-1 col-end-2 row-start-1 row-end-2 mx-auto w-40 sm:w-52 md:w-60 lg:w-64" alt="app" />
    </div>
  </header>

  <main class="gap-12 sm:gap-16 md:gap-24 lg:gap-32 grid overflow-hidden">
    <a href="#"
      class="flex gap-2 bg-amber-400 shadow-2xl hover:shadow-none mx-auto my-12 px-6 py-2 rounded-md focus:outline-none ring-neutral-900 focus-visible:ring-4 ring-offset-4 ring-offset-transparent dark:ring-offset-neutral-200 dark:text-neutral-900 transition-shadow">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
      </svg>

      <span class="">Download the app</span>
    </a>

    <section aria-labelledby="qualities" class="relative">
      <img src="./assets/dots.svg" class="hidden lg:block top-1/2 -left-24 xl:-left-7 absolute -traslate-y-1/2"
        alt="dots" aria-hidden="true" />
      <img src="./assets/dots.svg" class="hidden lg:block top-1/2 -right-24 xl:-right-7 absolute -traslate-y-1/2"
        alt="dots" aria-hidden="true" />

      <h2 id="qualities " class="sr-only">Our Qualities</h2>

      <div class="flex flex-wrap justify-center md:justify-between items-start gap-12 mx-auto max-w-5xl container">
        <div class="md:flex-1 justify-items-center gap-4 grid text-center">
          <div class="p-4 border-8 border-amber-400 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-14 h-14">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
            </svg>
          </div>
          <h3 class="font-bold text-3xl">Safe</h3>
          <p>Our products are safe secure and private out of the box</p>
        </div>
        <!---   -------------    -->

        <div class="md:flex-1 justify-items-center gap-4 grid text-center">
          <div class="p-4 border-8 border-amber-400 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-14 h-14">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
            </svg>
          </div>
          <h3 class="font-bold text-3xl">Efficient</h3>
          <p>
            You say it and you got it , its our job to keep things like
            initial stages of relationship only never end that stage
          </p>
        </div>
        <!--0----------------->
        <div class="md:flex-1 justify-items-center gap-4 grid text-center">
          <div class="p-4 border-8 border-amber-400 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-14 h-14">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
            </svg>
          </div>
          <h3 class="font-bold text-3xl">Proven</h3>
          <p>Leading the smart home world for 10 years</p>
        </div>
      </div>
    </section>
    <!-- section partners-->
    <section aria-labelledby="partners" class="place-items-center gap-8 grid text-center">
      <div class="gap-4 grid div">
        <h2 id="partners" class="font-bold text-amber-400 text-4xl">
          Partners
        </h2>
        <p class="w-full max-w-lg">
          We have partnered with hundreds of smart home brands to help you
          create a smart home that fits your needs and doesn't lock you in
          (😇)
        </p>
      </div>

      <div class="flex flex-wrap justify-center gap-8 md:gap-x-16 mx-auto max-w-2xl">
        <div class="bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl p-4 rounded-md">
          <img src="./assets/partner1.svg" alt="Partner" class="w-16 h-16" />
        </div>
        <div class="bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl p-4 rounded-md">
          <img src="./assets/partner2.svg" alt="Partner" class="w-16 h-16" />
        </div>
        <div class="bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl p-4 rounded-md">
          <img src="./assets/partner3.svg" alt="Partner" class="w-16 h-16" />
        </div>
        <div class="bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl p-4 rounded-md">
          <img src="./assets/partner4.svg" alt="Partner" class="w-16 h-16" />
        </div>
        <div class="bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl p-4 rounded-md">
          <img src="./assets/partner5.svg" alt="Partner" class="w-16 h-16" />
        </div>
        <div class="bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl p-4 rounded-md">
          <img src="./assets/partner6.svg" alt="Partner" class="w-16 h-16" />
        </div>
        <div class="bg-white dark:bg-neutral-600 shadow-md dark:shadow-xl p-4 rounded-md">
          <img src="./assets/partner7.svg" alt="Partner" class="w-16 h-16" />
        </div>
      </div>
    </section>

    <section aria-labelledby="home" class="relative">
      <div class="flex flex-wrap-reverse justify-center gap-8">
        <div class="flex flex-col flex-wrap lg:justify-center items-start gap-6">
          <div class="flex flex-col flex-wrap items-start gap-2">
            <h2 class="font-bold text-4xl">Relax, you’re home!</h2>
            <p class="max-w-md">
              All our supported hardware includes traditional inputs so you
              can integrate our products into your house in a way that’s best
              for everyone.
            </p>
          </div>
          <a href="#"
            class="flex gap-2 bg-amber-400 shadow-xl hover:shadow-none px-6 py-2 rounded-md focus:outline-none ring-neutral-900 focus-visible:ring-4 dark:ring-amber-400 ring-offset-4 ring-offset-white dark:ring-offset-neutral-800 dark:text-neutral-900 transition-shadow">
            Sign Up
          </a>
        </div>
        <img src="./assets/table.png" alt="Table" />
      </div>
      <div
        class="-right-32 -bottom-6 -z-10 absolute border-amber-400 md:border-8 rounded-full md:w-64 lg:w-96 xl:max-w-lg aspect-square">
      </div>
      <div class="-bottom-8 -z-10 xl:absolute bg-teal-900 -mx-8 mt-12 xl:mt-0 w-screen h-24 xl:h-48"></div>
    </section>
  </main>

  <section aria-labelledby="contact" class="mx-auto px-8 overflow-hidden container">
    <div class="flex flex-wrap justify-center gap-12 md:gap-6 lg:gap-20">
      <div class="relative md:flex-1 md:max-w-sm">
        <img src="./assets/lamp.png" alt="Lamp" class="mx-auto" />
        <a href="#"
          class="flex gap-2 bg-amber-400 shadow-xl hover:shadow-none mx-auto mt-12 md:mb-12 px-6 py-2 rounded-md focus:outline-none ring-neutral-900 focus-visible:ring-4 dark:ring-amber-400 ring-offset-4 ring-offset-white dark:ring-offset-neutral-800 w-max dark:text-neutral-900 transition-shadow">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
          </svg>
          <span>Download the App</span>
        </a>
        <img src="/assets/app.svg" alt="app" width="240"
          class="hidden md:block left-1/2 absolute drop-shadow-xl max-w-16 xl:max-w-xs -translate-x-1/2" />
        <div
          class="-bottom-18 left-1/2 -z-10 absolute border-amber-400 md:border-8 rounded-full md:w-72 lg:w-96 aspect-square -translate-x-1/2">
        </div>
      </div>
      <form
        class="relative md:flex-1 gap-8 grid bg-white dark:bg-neutral-800 my-4 md:my-12 lg:my-16 p-6 border-8 border-neutral-900 rounded-lg w-full md:max-w-lg">
        <h2 id="contact" class="font-bold text-3xl">Let’s Connect</h2>
        <div class="relative">
          <input type="text" id="name"
            class="peer dark:bg-amber-400 form-input border-4 border-amber-400 focus:border-amber-400 rounded-md focus:outline-none focus:ring-4 focus:ring-amber-400 dark:focus:ring-offset-2 w-full dark:text-neutral-900 placeholder-transparent"
            placeholder="Your Name" />
          <label for="name"
            class="peer-focus:-top-4 peer-focus:left-2 peer-placeholder-shown:left-4 peer-placeholder-shown:top-1/2 -top-4 left-2 absolute font-bold text-neutral-500 peer-focus:text-neutral-600 dark:peer-focus:text-neutral-300 peer-placeholder-shown:text-neutral-900 text-sm uppercase transition-all -translate-y-1/2">
            Your Name
          </label>
        </div>
        <div class="relative">
          <input type="email" id="email"
            class="peer dark:bg-amber-400 form-input border-4 border-amber-400 focus:border-amber-400 rounded-md focus:outline-none focus:ring-4 focus:ring-amber-400 dark:focus:ring-offset-2 w-full dark:text-neutral-900 placeholder-transparent"
            placeholder="Your Email" />
          <label for="email"
            class="peer-focus:-top-4 peer-focus:left-2 peer-placeholder-shown:left-4 peer-placeholder-shown:top-1/2 -top-4 left-2 absolute font-bold text-neutral-500 peer-focus:text-neutral-600 dark:peer-focus:text-neutral-300 peer-placeholder-shown:text-neutral-900 text-sm uppercase transition-all -translate-y-1/2">
            Your Email
          </label>
        </div>
        <div class="relative">
          <textarea name="content" id="content" cols="20" rows="5"
            class="peer dark:bg-amber-400 form-textarea border-4 border-amber-400 focus:border-amber-400 rounded-md focus:outline-none focus:ring-4 focus:ring-amber-400 dark:focus:ring-offset-2 w-full dark:text-neutral-900 resize-none placeholder-transparent"
            placeholder="How can we help?"></textarea>
          <label for="content"
            class="peer-focus:-top-4 peer-focus:left-2 peer-placeholder-shown:left-4 peer-placeholder-shown:top-6 -top-3 left-2 absolute font-bold text-neutral-500 peer-focus:text-neutral-600 dark:peer-focus:text-neutral-300 peer-placeholder-shown:text-neutral-900 text-sm uppercase transition-all -translate-y-1/2">
            How can we help?
          </label>
        </div>
        <a role="menuitem"
          class="bg-neutral-900 shadow-xl hover:shadow-none px-6 py-2 rounded-md focus:outline-none ring-neutral-900 focus-visible:ring-4 ring-offset-4 ring-offset-white dark:ring-offset-amber-400 w-max text-white transition-shadow"
          href="/">
          Sign Up
        </a>
      </form>
    </div>
  </section>
</body>

</html>