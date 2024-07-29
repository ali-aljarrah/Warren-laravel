document.addEventListener('DOMContentLoaded', function() {
    const shareButtons = document.querySelectorAll('.social-media-btn');
    const urlToShare = encodeURIComponent(window.location.href);
    const textToShare = encodeURIComponent('Check out this Warren Laser Dentistry article !');

    shareButtons.forEach(button => {
        button.addEventListener('click', function() {
            const platform = this.getAttribute('data-platform');
            let shareUrl = '';

            switch (platform) {
                case 'facebook':
                    shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${urlToShare}`;
                    break;
                case 'twitter':
                    shareUrl = `https://twitter.com/intent/tweet?url=${urlToShare}&text=${textToShare}`;
                    break;
                case 'pinterest':
                    shareUrl = `https://www.pinterest.com/pin/create/button/?url=${urlToShare}&description=${textToShare}`;
                    break;
                case 'linkedin':
                    shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${urlToShare}`;
                    break;
                case 'whatsapp':
                    shareUrl = `https://api.whatsapp.com/send?text=${textToShare} ${urlToShare}`;
                    break;
                case 'xing':
                    shareUrl = `https://www.xing.com/spi/shares/new?url=${urlToShare}`;
                    break;
                case 'telegram':
                    shareUrl = `https://t.me/share/url?url=${urlToShare}&text=${textToShare}`;
                    break;
                default:
                    return;
            }

            window.open(shareUrl, '_blank', 'width=600,height=400');
        });
    });
});
