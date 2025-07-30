<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>College UI - Home</title>

    <link href="output.css" rel="stylesheet" />
    <script src="script/nav.js" defer></script>
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
           R.T.C  Inter College
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
          <a href="index.php" class="hover:underline  "
            >Home</a
          >
          <a href="faculty.php" class="hover:underline "
            >Faculty Details</a
          >
          <a href="gallery.php" class="underline bg-blue-700 rounded px-2 py-1"
            >Photo Gallery</a
          >
          <a href="about.php" class="hover:underline">About</a>
          <a
            href="infrastructure.php"
            class="hover:underline"
            >Infrastructure</a
          >
           <a
            href="sports.php"
            class="hover:underline "
            >Sports</a
          >
          <a href="admissions.php" class="hover:underline">Admissions</a>
          <a href="contact.php" class="hover:underline">Contact</a>
        </div>
      </div>
    </nav>
    <main>
        <?php
// Array of gallery image file paths
$galleryImages = [
    '../images/infrHero.jpg',
    '../images/infr2.jpg',
    '../images/infr3.jpg',
    '../images/collegeCampus.jpg',
    '../images/sportsHero.jpg',
    '../images/library.jpg',
    
    '../images/computerLab.jpg',
    
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sports Gallery - RTC Inter College</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Header -->
  <header class="bg-blue-900 text-white py-6 text-center shadow">
    <h1 class="text-3xl font-bold">📸 Sports Gallery</h1>
    <p class="mt-2">Relive the exciting moments from our sports tournaments and college  events.</p>
  </header>

  <!-- Gallery Section -->
  <main class="px-4 md:px-20 py-10">
    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
      <?php foreach ($galleryImages as $image): ?>
        <div class="overflow-hidden rounded-2xl shadow hover:shadow-xl transition duration-300 bg-white">
          <img src="<?php echo $image; ?>" alt="Sports event" class="w-full h-64 object-cover hover:scale-105 transform transition" />
        </div>
      <?php endforeach; ?>
    </div>
  </main>

  <!-- Back Button -->
  <div class="text-center mt-10">
    <a href="sports.php" class="inline-block bg-blue-700 hover:bg-blue-800 text-white px-6 py-3 rounded-lg shadow-md transition">
      🔙 Back to Sports Page
    </a>
  </div>

  

</main>
    <!-- Footer -->
    <footer class="bg-blue-800 text-white text-center p-4 mt-8">
      <div class="container mx-auto">
        &copy; 2025  R.T.C  Inter College. All rights reserved.
      </div>
    </footer>
  </body>
</html>
