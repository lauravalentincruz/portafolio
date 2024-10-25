/*document.getElementById("btnMenu").addEventListener("click", function() {
    let elemento = document.getElementById("navbar");
   
    // Alternar entre 'navbar' y 'no_navbar'
    if (elemento.classList.contains("navbar")) {
        elemento.classList.remove("navbar");
        elemento.classList.add("no_navbar");
    } else {
        elemento.classList.remove("no_navbar");
        elemento.classList.add("navbar");
    }
});
*/


const Nombre = document.querySelector("#Nombre");
const Telefono = document.querySelector("#Telefono");
const Email = document.querySelector("#Email");
const Mensaje = document.querySelector("#Mensaje");
const formulario = document.querySelector(".formulario");
formulario.addEventListener("submit", validarFormulario);

function validarFormulario(e) {
    e.preventDefault();

    if (Nombre.value === "" || Telefono.value === "" || Mensaje.value === "" || Email.value === "") {
        mostrarError("Todos los campos son obligatorios");
        return;
    }

    alert("Hemos recibidos su datos, pronto nos pondremos en contacto");

   e.target.submit();
}

function mostrarError(Mensaje) {
    const alert = document.createElement("p");
    alert.textContent = Mensaje;
    alert.style.background = "red";
    alert.style.color = "white";

    formulario.appendChild(alert);

    setTimeout(() => {
        alert.remove();
    }, 5000);
}