document.addEventListener('DOMContentLoaded', function() {
    // Carousel functionality
    const prevButton = document.querySelector('.carousel-button.prev');
    const nextButton = document.querySelector('.carousel-button.next');
    const carouselImages = document.querySelector('.carousel-images');
    let index = 0;
    const imageCount = document.querySelectorAll('.carousel-images img').length;
    const intervalTime = 2000; // Tiempo en milisegundos (2 segundos)
    let interval;

    function updateCarousel() {
        const offset = -index * 100;
        carouselImages.style.transform = `translateX(${offset}%)`;
    }

    function startAutoSlide() {
        interval = setInterval(() => {
            index = (index + 1) % imageCount;
            updateCarousel();
        }, intervalTime);
    }

    function stopAutoSlide() {
        clearInterval(interval);
    }

    prevButton.addEventListener('click', function() {
        if (index > 0) {
            index--;
        } else {
            index = imageCount - 1;
        }
        updateCarousel();
    });

    nextButton.addEventListener('click', function() {
        if (index < imageCount - 1) {
            index++;
        } else {
            index = 0;
        }
        updateCarousel();
    });

    // Iniciar el desplazamiento automático al cargar la página
    startAutoSlide();

    // Detener el desplazamiento automático cuando se interactúa con los botones
    prevButton.addEventListener('mouseover', stopAutoSlide);
    nextButton.addEventListener('mouseover', stopAutoSlide);
    prevButton.addEventListener('mouseout', startAutoSlide);
    nextButton.addEventListener('mouseout', startAutoSlide);

    // Music functionality
    const musicToggle = document.getElementById('music-toggle');
    const backgroundMusic = document.getElementById('background-music');

    musicToggle.addEventListener('click', function() {
        if (backgroundMusic.paused) {
            backgroundMusic.play();
            musicToggle.textContent = 'Pause';
        } else {
            backgroundMusic.pause();
            musicToggle.textContent = 'Play';
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('signup-form');
    const message = document.getElementById('message');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Evitar el envío del formulario por defecto

        const formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            message.textContent = data.message;
            message.classList.remove('hidden');
            setTimeout(() => {
                window.location.href = data.redirect; // Redirigir a la página de inicio
            }, 2000); // Espera 2 segundos antes de redirigir
        })
        .catch(error => console.error('Error:', error));
    });
});

