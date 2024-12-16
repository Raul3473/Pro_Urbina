document.addEventListener('DOMContentLoaded', function () {
    var myCarousel = document.getElementById('carouselExample');
    var carousel = new bootstrap.Carousel(myCarousel, {
      interval: 2000, // Intervalo en milisegundos (2000 ms = 2 segundos)
      ride: 'carousel' // Esto asegura que el carrusel empiece a moverse automáticamente
    });
  });