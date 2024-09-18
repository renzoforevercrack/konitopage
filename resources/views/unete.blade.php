<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Únete al equipo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }

        h1 {
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        input[type="text"] {
            padding: 10px;
            width: 80%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn {
            background-color: #007bff; /* Azul celeste */
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

        .btn:hover {
            background-color: #0056b3; /* Azul más oscuro al pasar el cursor */
        }

        .message {
            color: green;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Únete al equipo</h1>

    <!-- Reproducir música automáticamente -->
    <audio autoplay>
        <source src="{{ asset('audio/sonidito.mp3') }}" type="audio/mpeg">
        Tu navegador no soporta la reproducción de audio.
    </audio>

    <!-- Mostrar mensaje de confirmación si existe -->
    @if (session('status'))
        <div class="message">
            {{ session('status') }}
        </div>
    @endif

    <!-- Formulario de login -->
    <form action="{{ url('/unete/enviar') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" name="nombre" placeholder="Nombre" required>
        </div>
        <div class="form-group">
            <input type="text" name="usuario" placeholder="Usuario" required>
        </div>
        <button type="submit" class="btn">Enviar</button>
    </form>

    <a href="{{ url('/') }}" class="btn">Regresar al Inicio</a>
</body>
</html>
