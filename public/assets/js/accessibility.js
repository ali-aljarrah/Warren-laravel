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

    // Function to update font size
    const updateFontSize = (percent) => {
        document.documentElement.style.fontSize = `${percent}%`;
    };

    // Increase Text Size
    increaseTextButton.addEventListener('click', () => {
        textSizePercent += 10;
        updateFontSize(textSizePercent);
    });

    // Decrease Text Size
    decreaseTextButton.addEventListener('click', () => {
        textSizePercent -= 10;
        updateFontSize(textSizePercent);
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
        updateFontSize(textSizePercent);
        document.body.className = ''; // Remove all classes
    });
});
