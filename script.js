document.addEventListener('DOMContentLoaded', () => {
    const sky = document.getElementById('sky');

    sky.addEventListener('click', (e) => {
        const star = document.createElement('div');
        star.classList.add('star');
        star.style.left = `${e.clientX - 2.5}px`;
        star.style.top = `${e.clientY - 2.5}px`;
        sky.appendChild(star);

        setTimeout(() => {
            star.style.transform = 'scale(1.5)';
            star.style.opacity = '0';
        }, 2000);

        setTimeout(() => {
            sky.removeChild(star);
        }, 3000);
    });
});
