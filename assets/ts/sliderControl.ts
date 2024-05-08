import Splide from "@splidejs/splide";
import $ from "jquery";

export default class SlideControll {
    private splide: Splide | null = null;
    
    constructor(slider: Splide) {
        this.splide = slider;
    }

    public goToSlider(index: number) {
        if (this.splide) {
            this.splide.go(index);
        }
    }

    public smoothSwithToElementBySliderIndex(index: number) {
        const sliderIdFormat = "#splide01-slide" + (index >= 10 ? index.toString() : "0" + index.toString());
        const sliderElement = $(sliderIdFormat);
        $('html, body').animate({
            scrollTop: sliderElement.offset()?.top
        }, 1000);
    }
}