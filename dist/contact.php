<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact - College UI</title>

    <link href="output.css" rel="stylesheet" />
    <script src="script/nav.js" defer></script>
    <script src="script/contact.js" defer></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body class="flex flex-col min-h-screen scroll-smooth">
    <!-- Navigation -->
    <nav class="bg-blue-800 text-white p-4">
      <div class="container mx-auto flex justify-between items-center">
        <span class="flex items-center font-bold text-xl gap-2">
          <img
            src="../images/college-university-icon.svg"
            alt="College Icon"
            class="w-8 h-8 inline-block"
          />
          College Campus
        </span>
        <!-- Hamburger button for mobile -->
        <button
          id="nav-toggle"
          class="md:hidden block focus:outline-none"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars text-2xl text-gray-800"></i>
        </button>
        <!-- Navigation links -->
        <div
          id="nav-links"
          class="space-x-4 md:flex hidden flex-col md:flex-row absolute md:static top-16 left-0 w-full md:w-auto bg-blue-800 md:bg-transparent z-50 md:z-auto"
        >
          <a href="index.php" class="hover:underline">Home</a>
          <a href="about.php" class="hover:underline">About</a>
          <a
            href="infrastructure.php"
            class="hover:underline"
            >Infrastructure</a
          >
           <a
            href="infrastructure.php"
            class="hover:underline "
            >Sports</a
          >
          <a href="admissions.php" class="hover:underline">Admissions</a>
          <a href="contact.php" class="underline bg-blue-700 rounded px-2 py-1"
            >Contact</a
          >
        </div>
      </div>
    </nav>
    <main class="flex-grow container mx-auto py-12 px-4">
      <h1 class="text-3xl font-bold mb-6">Contact Us</h1>
      <form
        id="contactForm"
        class="bg-white p-8 rounded shadow-md max-w-lg w-full mx-auto"
      >
        <div class="mb-4">
          <label class="block mb-2 font-semibold" for="contactName">Name</label>
          <input
            class="w-full border border-gray-300 p-2 rounded"
            type="text"
            id="contactName"
            name="contactName"
            required
          />
        </div>
        <div class="mb-4">
          <label class="block mb-2 font-semibold" for="contactEmail"
            >Email</label
          >
          <input
            class="w-full border border-gray-300 p-2 rounded"
            type="email"
            id="contactEmail"
            name="contactEmail"
            required
          />
        </div>
        <div class="mb-4">
          <label class="block mb-2 font-semibold" for="contactMessage"
            >Message</label
          >
          <textarea
            class="w-full border border-gray-300 p-2 rounded"
            id="contactMessage"
            name="contactMessage"
            rows="4"
            required
          ></textarea>
        </div>
        <button
          class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700"
          type="submit"
        >
          Send
        </button>
        <p id="contactSuccess" class="mt-4 text-green-600 hidden">
          Message sent successfully!
        </p>
      </form>
    </main>
    <!-- Footer -->
    <footer class="bg-blue-800 text-white text-center p-4 mt-8">
      <div class="container mx-auto">
        &copy; 2024 College Campus. All rights reserved.
      </div>
    </footer>

    
  </body>
</html>
