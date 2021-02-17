import Splide from '@splidejs/splide';

class Carousel {
    constructor() {
        if (document.querySelector('.splide')) {
            this.carousel = document.querySelector('.splide')
            this.events()
        }
    }

    events() {
        new Splide('.splide', {
            type: 'fade',
            rewind: true,
            autoplay: true,
            interval: 3000,
            width: '100%',
            height: 'auto',
        }).mount();
    }
}

export default Carousel 