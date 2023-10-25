//Esta funcion de JS lo que hace es que al pasar el mouse por arriba del boton te sale una ventana emergente//


function mostrarNotificacion() {
    const notificacion = document.getElementById("fd-notif");
    notificacion.style.display = "block";
}

// Función para ocultar la notificación emergente
function ocultarNotificacion() {
    const notificacion = document.getElementById("fd-notif");
    notificacion.style.display = "none";
}

document.addEventListener("DOMContentLoaded", function () {
    const boton = document.getElementById("fd-Boton");
    boton.addEventListener("mouseover", mostrarNotificacion);
    boton.addEventListener("mouseout", ocultarNotificacion);
    
    // Mostrar la notificación emergente al cargar la página
    mostrarNotificacion();
});