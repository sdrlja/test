// Import modules

import baguetteBox from './modules/baguetteBox.js';
import MobileMenu from "./modules/mobile"
// import W3Carousel from './modules/w3carousel.js';

import Carousel from "./modules/carousel"

// Instantiate a new object using our modules/classes
var mobileMenu = new MobileMenu()
// var w3 = new W3Carousel()
var carousel = new Carousel()
baguetteBox.run('.wp-block-gallery', {
  noScrollbars: true,
  animation: 'slideIn'
});


// Allow new JS and CSS to load in browser without a traditional page refresh

if (module.hot) {

  module.hot.accept()

}