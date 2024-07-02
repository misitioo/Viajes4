// Función para agregar un evento de clic a los botones de reservar
function agregarEventoClicBotonesReservar() {
    const botonesReservar = document.querySelectorAll('.boton');

    for (const boton of botonesReservar) {
        boton.addEventListener('click', function(event) {
            event.preventDefault();

            const enlace = this.getAttribute('href');
            window.open(enlace, '_blank');
        });
    }
}

// Ejecutar la función cuando se cargue la página
window.addEventListener('load', agregarEventoClicBotonesReservar);

//banner
const bannerAnimado = document.querySelector('.banner-animado');
const imagenes = bannerAnimado.querySelectorAll('img');

let indiceImagenActual = 0;

function mostrarSiguienteImagen() {
    imagenes[indiceImagenActual].style.opacity = 0;

    indiceImagenActual++;

    if (indiceImagenActual >= imagenes.length) {
        indiceImagenActual = 0;
    }

    imagenes[indiceImagenActual].style.opacity = 1;
}

setInterval(mostrarSiguienteImagen, 2000); 