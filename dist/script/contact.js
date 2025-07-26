
      document
        .getElementById("contactForm")
        .addEventListener("submit", function (e) {
          e.preventDefault();
          var name = document.getElementById("contactName").value.trim();
          var email = document.getElementById("contactEmail").value.trim();
          var message = document.getElementById("contactMessage").value.trim();
          if (name && email && message) {
            document
              .getElementById("contactSuccess")
              .classList.remove("hidden");
            this.reset();
          }
        });
    