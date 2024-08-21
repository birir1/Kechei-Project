document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('kechei-gallery-modal');
    const modalImage = document.getElementById('modal-image');
    const modalCaption = document.getElementById('modal-caption');
    const closeButton = document.querySelector('.kechei-close');
    
    const galleryItems = document.querySelectorAll('.kechei-gallery-item');
    
    galleryItems.forEach(item => {
        item.addEventListener('click', () => {
            const img = item.querySelector('img').src;
            const caption = item.querySelector('.kechei-gallery-caption').textContent;
            modalImage.src = img;
            modalCaption.textContent = caption;
            modal.style.display = 'block';
        });
    });
    
    closeButton.addEventListener('click', () => {
        modal.style.display = 'none';
    });
    
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
});
