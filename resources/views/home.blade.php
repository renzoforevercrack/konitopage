<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konitwo FanPage</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Merriweather:wght@400;700&display=swap">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="title-banner">
                <h1>Konitwo FanPage</h1>
            </div>
        </div>
    </header>
    <main>
        <section class="presentation">
            <h2>Presentación</h2>
            <p>Bienvenidos a la página oficial de Konitwo. Aquí encontrarás todo lo relacionado con nuestro canal de YouTube, incluyendo videos destacados, actualizaciones y más. ¡Gracias por visitarnos!</p>
        </section>
        <section class="image-carousel">
            <h2>Galería de Imágenes</h2>
            <div class="carousel">
                <button class="carousel-button prev">&#10094;</button>
                <div class="carousel-images">
                    <img src="{{ asset('images/image1.jpg') }}" alt="Imagen 1">
                    <img src="{{ asset('images/image2.jpg') }}" alt="Imagen 2">
                    <img src="{{ asset('images/image3.jpg') }}" alt="Imagen 3">
                    <img src="{{ asset('images/image4.jpg') }}" alt="Imagen 4">
                    <img src="{{ asset('images/image5.jpg') }}" alt="Imagen 5">
                    <img src="{{ asset('images/image6.jpg') }}" alt="Imagen 6">
                </div>
                <button class="carousel-button next">&#10095;</button>
            </div>
        </section>
        <section class="join-team">
            <h2>Únete al Equipo</h2>
            <p>¿Te apasiona el contenido de Konitwo y quieres formar parte de nuestro equipo? Haz clic en el enlace a continuación para obtener más información sobre cómo unirte a nosotros.</p>
            <a href="{{ url('/unete') }}" class="btn btn-primary">Únete al equipo</a>
            <style>
    .btn-primary {
        background-color: #007bff;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 10px 2px;
        cursor: pointer;
        border-radius: 8px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>

        </section>
    </main>
    <footer>
        <p>&copy; 2024 Konitwo. Todos los derechos reservados.</p>
    </footer>
    <audio id="background-music" src="{{ asset('music/background-music.mp3') }}" preload="auto"></audio>
    <button id="music-toggle">Play</button>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
