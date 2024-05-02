<!DOCTYPE html>
<html>
<head>
    <title>Reproductor de Video</title>
    <!-- Agrega tus enlaces CSS aquí -->
</head>
<body>
    <div id="video-player">
        <video id="video" controls>
            <source src="{{ asset('assets/videos/video-1.mp4') }}" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>
    </div>

    <div id="video-controls">
        <button class="video-button" data-src="{{ asset('assets/videos/video-1.mp4') }}">Video 1</button>
        <button class="video-button" data-src="{{ asset('assets/videos/video-2.mp4') }}">Video 2</button>
        <button class="video-button" data-src="{{ asset('assets/videos/video-3.mp4') }}">Video 3</button>
        <button class="video-button" data-src="{{ asset('assets/videos/video-4.mp4') }}">Video 4</button>
        <button id="play-button">Play/Pausa</button>
        <button id="mute-button">Silenciar</button>
    </div>

    <!-- Agrega tus scripts JavaScript aquí -->
    <script src="{{ asset('js/video.js') }}"></script>

</body>
</html>
