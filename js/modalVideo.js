document.addEventListener("DOMContentLoaded", function() {
    const playIcon = document.querySelector('.fa-question');
    const popupModal = document.querySelector('.popup-modal');
    const closeModal = document.querySelector('.btn-cerrar');
    const iframe = document.querySelector('.iframe');

    playIcon.addEventListener('click', function() {
        popupModal.style.display = 'block';
        iframe.style.display = 'block';
        popupModal.style.zIndex = 1;

        // Reproducir el video automáticamente al abrir la ventana modal
        iframe.contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
    });

    closeModal.addEventListener('click', function() {
        popupModal.style.display = 'none';
        iframe.style.display = 'none';

        // Detener la reproducción del video al cerrar la ventana modal
        iframe.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
    });
});