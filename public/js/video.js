document.addEventListener('DOMContentLoaded', function () {
    // Función para manejar el cambio de video y el estado de reproducción
    function handleVideo(video, playButton, pauseIcon, playIcon) {
        playButton.addEventListener('click', function () {
            if (video.paused) {
                video.play();
                pauseIcon.style.display = 'block';
                playIcon.style.display = 'none';
            } else {
                video.pause();
                pauseIcon.style.display = 'none';
                playIcon.style.display = 'block';
            }
        });
    }

    // Función para manejar el estado de silencio
    function handleMute(video, muteButton, muteIcon, soundIcon) {
        muteButton.addEventListener('click', function () {
            if (video.muted) {
                video.muted = false;
                muteIcon.style.display = 'none';
                soundIcon.style.display = 'block';
            } else {
                video.muted = true;
                muteIcon.style.display = 'block';
                soundIcon.style.display = 'none';
            }
        });
    }

    // Función para manejar el cambio de video al hacer clic en un botón
    function handleVideoButtonClick(video, button, pauseIcon, playIcon) {
        button.addEventListener('click', function() {
            // Remover la clase 'bg-red-600' de todos los botones de video
            document.querySelectorAll('.video-button').forEach(function(el) {
                el.classList.remove('bg-red-600');
                el.classList.add('bg-red-100');
            });

            // Añadir la clase 'bg-red-600' solo al botón de video seleccionado
            button.classList.remove('bg-red-100');
            button.classList.add('bg-red-600');

            // Cambiar el video
            var src = button.getAttribute('data-src');
            video.src = src;
            video.load();
            video.play();
            pauseIcon.style.display = 'block';
            playIcon.style.display = 'none';
        });
    }

    // Primer video
    let video = document.getElementById('video');
    let playButton = document.getElementById('play-button');
    let muteButton = document.getElementById('mute-button');
    let pauseIcon = document.getElementById('pause-icon');
    let playIcon = document.getElementById('play-icon');
    let muteIcon = document.getElementById('mute-icon');
    let soundIcon = document.getElementById('sound-icon');

    handleVideo(video, playButton, pauseIcon, playIcon);
    handleMute(video, muteButton, muteIcon, soundIcon);

    // Segundo video
    let video2 = document.getElementById('video2');
    let playButton2 = document.getElementById('play-button2');
    let muteButton2 = document.getElementById('mute-button2');
    let pauseIcon2 = document.getElementById('pause-icon2');
    let playIcon2 = document.getElementById('play-icon2');
    let muteIcon2 = document.getElementById('mute-icon2');
    let soundIcon2 = document.getElementById('sound-icon2');

    handleVideo(video2, playButton2, pauseIcon2, playIcon2);
    handleMute(video2, muteButton2, muteIcon2, soundIcon2);

    // Evento para manejar el cambio de video al hacer clic en los botones
    let videoButtons = document.querySelectorAll('.video-button');
    videoButtons.forEach(function(button) {
        handleVideoButtonClick(video, button, pauseIcon, playIcon);
    });

    let videoButtons2 = document.querySelectorAll('.video-button2');
    videoButtons2.forEach(function(button) {
        handleVideoButtonClick(video2, button, pauseIcon2, playIcon2);
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const showMenu = document.getElementById("showMenu");
    const hiddenMenu = document.getElementById("hiddenMenu");
    const mainMenu = document.getElementById("mainMenu");

    showMenu.addEventListener("click", function () {
        mainMenu.classList.toggle("translate-x-60");
    });

    hiddenMenu.addEventListener("click", function () {
        mainMenu.classList.add("translate-x-60");
        console.log('aaa');
    });
});

const header = document.querySelector('header');
const headerHeight = header.offsetHeight;

function toggleHeaderBackground() {
  if (window.scrollY > headerHeight) {
    header.classList.add('bg-black');
  } else {
    header.classList.remove('bg-black');
  }
}
window.addEventListener('scroll', toggleHeaderBackground);
