document.addEventListener("DOMContentLoaded", function () {
  const dom = {
    admissionsForm: document.getElementById("admissionsForm"),
    admissionsMessage: document.getElementById("admissionsMessage"),
    name: document.getElementById("name"),
    email: document.getElementById("email"),
    program: document.getElementById("program"),
  };
  console.log(dom);

  dom.admissionsForm.addEventListener("submit", function (e) {
    e.preventDefault();
    // Basic validation
    let name = dom.name.value.trim();
    let email = dom.email.value.trim();
    let program = dom.program.value;
    if (name && email && program) {
      dom.admissionsMessage.classList.remove("hidden");
      dom.admissionsForm.reset();
    }
  });
});
