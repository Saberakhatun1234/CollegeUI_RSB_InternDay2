<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About - College UI</title>
  <link href="output.css" rel="stylesheet" />
  <script src="script/nav.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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
          <a href="index.php" class="hover:underline">Home</a>
          <a href="about.php" class="underline bg-blue-700 rounded px-2 py-1">About</a>
           <a
            href="sports.php"
            class="hover:underline "
            >Sports</a
          >
          <!-- <a
            href="infrastructure.php"
            class="hover:underline"
            >Infrastructure</a
          > -->
          <a
            href="admissions.php"
            class="hover:underline"
            >Admissions</a
          >
          <a href="contact.php" class="hover:underline">Contact</a>
        </div>
      </div>
    </nav>
  <!-- Main Content -->
  <main class="flex-grow container mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold mb-6 text-blue-800">About Our College</h1>
    <p class="text-lg mb-6 text-gray-700 leading-relaxed">
       R.T.C  Inter College is dedicated to providing quality education and fostering a vibrant learning environment.
      Our mission is to empower students with knowledge, skills, and values to excel in their chosen fields.
    </p>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-5 w-full text-center"><a href="infrastructure.php">Go To College Infrastructure <i class="fa-solid fa-arrow-right"></i></a></button>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-8">
      <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold mb-4 text-blue-700">Our Vision</h2>
        <p class="text-gray-700 leading-relaxed">
          To be a premier institution providing quality education that equips students to become responsible citizens,
          reflective thinkers, and future leaders devoted to lifelong learning and societal advancement.
        </p>
      </div>
       

      <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold mb-4 text-blue-700">Our Mission</h2>
        <p class="text-gray-700 leading-relaxed mb-4">
          To create a secure, inclusive, and intellectually rich environment where students can <strong>achieve academic, emotional, and social growth.</strong>
        </p>
        <ul class="list-disc list-inside text-gray-700 space-y-2">
          <li>To develop innovation, creativity, and leadership through balanced education and co-curricular experiences.</li>
          <li>To instill values of ethics, discipline, and global and community responsibility.</li>
          <li>To foster inquiry, curiosity, and independent thought through contemporary approaches to teaching and committed mentorship.</li>
        </ul>
      </div>
    </div>
    <section class="py-16 bg-gray-50 m-5">
  <div class="container mx-auto px-4">
    <!-- Title -->
    <h2 class="text-4xl font-bold text-center text-blue-800 mb-12 m-5">Our Core Values</h2>

    <!-- Card Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Card 1 -->
      <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center text-center">
        
        <h3 class="text-xl font-semibold text-blue-700 mb-2">Respect</h3>
        <p class="text-gray-600">Respect for diversity, equity, and inclusion in all aspects of our campus and community.</p>
      </div>

      <!-- Card 2 -->
      <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center text-center">
       
        <h3 class="text-xl font-semibold text-blue-700 mb-2">Integrity</h3>
        <p class="text-gray-600">We uphold honesty, openness, and ethical conduct in all that we do.</p>
      </div>

      <!-- Card 3 -->
      <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center text-center">
      
        <h3 class="text-xl font-semibold text-blue-700 mb-2">Excellence</h3>
        <p class="text-gray-600">We strive for the best in academics and personal behavior.
</p>
      </div>

      <!-- Card 4 -->
      <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center text-center">
        
        <h3 class="text-xl font-semibold text-blue-700 mb-2">Collaboration</h3>
        <p class="text-gray-600">Community engagement and involvement in our campus and beyond.</p>
      </div>

      <!-- Card 5 -->
      <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center text-center">
       
        <h3 class="text-xl font-semibold text-blue-700 mb-2">Discipline</h3>
        <p class="text-gray-600"> We promote the culture of self-discipline, time keeping, and
accountability</p>
      </div>

      <!-- Card 6 -->
      <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center text-center">
  
        <h3 class="text-xl font-semibold text-blue-700 mb-2">Social Responsibility </h3>
        <p class="text-gray-600">We encourage the act of contributing to society and taking
care of the environment.</p>
      </div>

      <!-- Card 7 -->
      <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center text-center sm:col-span-2 lg:col-span-1">
        
        <h3 class="text-xl font-semibold text-blue-700 mb-2">Innovation</h3>
        <p class="text-gray-600">  We are open to creativity and progressive thinking in learning and
instruction.</p>
      </div>
      
    </div>
  </div>
</section>


  </main>

  <!-- Footer -->
   <footer class="bg-blue-800 text-white text-center p-4 mt-8">
      <div class="container mx-auto">
        &copy; 2024  R.T.C  Inter College. All rights reserved.
      </div>
    </footer>

</body>
</html>
