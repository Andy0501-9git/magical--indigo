function showFullScreen(image) {
    var fullScreenOverlay = document.querySelector('.full-screen-overlay');
    var fullScreenImage = document.querySelector('.full-screen-image');
    
    fullScreenImage.src = image.src;
    
    fullScreenOverlay.classList.add('show');
    fullScreenImage.classList.add('show');
    document.body.style.overflow = 'hidden';
  }
  
  function hideFullScreen() {
    var fullScreenOverlay = document.querySelector('.full-screen-overlay');
    var fullScreenImage = document.querySelector('.full-screen-image');
    
    fullScreenOverlay.classList.remove('show');
    fullScreenImage.classList.remove('show');
    document.body.style.overflow = 'auto';
  }
  