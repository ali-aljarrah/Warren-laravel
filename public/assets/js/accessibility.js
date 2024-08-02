document.addEventListener('DOMContentLoaded', () => {
    const increaseTextButton = document.getElementById('increase-text');
    const decreaseTextButton = document.getElementById('decrease-text');
    const grayscaleButton = document.getElementById('grayscale');
    const highContrastButton = document.getElementById('high-contrast');
    const negativeContrastButton = document.getElementById('negative-contrast');
    const lightBackgroundButton = document.getElementById('light-background');
    const linksUnderlineButton = document.getElementById('links-underline');
    const readableFontButton = document.getElementById('readable-font');
    const resetButton = document.getElementById('reset');

    let textSizePercent = 100; // Default font size percentage

    // Increase Text Size
    increaseTextButton.addEventListener('click', () => {
        textSizePercent += 10;
        document.documentElement.style.fontSize = `${textSizePercent}%`;
        document.body.classList.remove('decrease-text', 'reset');
        document.body.classList.add('increase-text');
    });

    // Decrease Text Size
    decreaseTextButton.addEventListener('click', () => {
        textSizePercent -= 10;
        document.documentElement.style.fontSize = `${textSizePercent}%`;
        document.body.classList.remove('increase-text', 'reset');
        document.body.classList.add('decrease-text');
    });

    // Grayscale
    grayscaleButton.addEventListener('click', () => {
        document.body.classList.toggle('grayscale');
    });

    // High Contrast
    highContrastButton.addEventListener('click', () => {
        document.body.classList.toggle('high-contrast');
    });

    // Negative Contrast
    negativeContrastButton.addEventListener('click', () => {
        document.body.classList.toggle('negative-contrast');
    });

    // Light Background
    lightBackgroundButton.addEventListener('click', () => {
        document.body.classList.toggle('light-background');
    });

    // Links Underline
    linksUnderlineButton.addEventListener('click', () => {
        document.body.classList.toggle('links-underline');
    });

    // Readable Font
    readableFontButton.addEventListener('click', () => {
        document.body.classList.toggle('readable-font');
    });

    // Reset
    resetButton.addEventListener('click', () => {
        textSizePercent = 100;
        document.documentElement.style.fontSize = `${textSizePercent}%`;
        document.body.classList.remove('increase-text', 'decrease-text', 'reset', 'grayscale', 'high-contrast', 'negative-contrast', 'light-background', 'links-underline', 'readable-font');
        document.body.classList.add('reset');
    });
});
