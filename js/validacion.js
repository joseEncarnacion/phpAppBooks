// alert("javascript");
// console.log("javascript")

document
  .getElementById("contactForm")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission

    var nombre = document.getElementsByName("nombre")[0].value.trim();
    var correo = document.getElementsByName("correo")[0].value.trim();
    var asunto = document.getElementsByName("asunto")[0].value.trim();
    var comentario = document.getElementsByName("comentario")[0].value.trim();

    // Simple validation, you can add more checks as needed
    if (nombre === "" || correo === "" || asunto === "" || comentario === "") {
      alert("Por favor, completa todos los campos.");
      return;
    }

    // Submit the form if validation passes
    event.target.submit();
  });