declare global {
    interface Window {
        sliderControll: SlideControll;
        app: App;
    }
}

/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import "bootstrap";
import "@splidejs/splide/css";
import './styles/app.scss';

import Splide from '@splidejs/splide';
import SlideControll from "./ts/sliderControl";
import HeaderComponent from './ts/header';
import HeaderMobileComponent from "./ts/headerMobile";
import $ from "jquery";
import AnimeJs from "./ts/animejs";
import App from "./ts/app";

if ($(".splide").length > 0) {
    const splide = new Splide(".splide", {
        type: 'loop',
    }).mount();

    window.sliderControll = new SlideControll(splide);
}

new AnimeJs();
new HeaderComponent();
new HeaderMobileComponent();

window.app = new App();