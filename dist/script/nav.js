document.addEventListener("DOMContentLoaded", function () {
  const navToggle = document.getElementById('nav-toggle');
  const navLinks = document.getElementById('nav-links');
  if (navToggle && navLinks) {
    navToggle.addEventListener('click', function () {
      navLinks.classList.toggle("hidden");
       navToggle.querySelector("i").classList.toggle("fa-bars");
       navToggle.querySelector("i").classList.toggle("fa-xmark");
    });
  }
});


