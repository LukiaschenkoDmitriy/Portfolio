import anime from "animejs";
import $ from "jquery";
import AnimeJsIntersectionObserver from "./animejstools";

export default class AnimeJs {
    constructor() {
        this.header();
        this.tabs();
        this.sections();
        this.sendMessage();
        this.footer();
    }

    public header() {
        anime({
            targets: '.header',
            opacity: [0, 1],
            "margin-top": ["-100px", "0px"],
            duration: 2000,
            autoplay: true,
        });

        let headerButtons = $(".header-container-wrapper .buttons .button");
        
        headerButtons.each((index, button) => {
            anime({
                targets: button,
                opacity: [0, 1],
                "margin-top": ["-50px", "0px"],
                duration: 2000,
                delay: 50 * index,
                autoplay: true,
            });
        });
    }

    public tabs() {
        anime({
            targets: '.left-tab',
            opacity: [0, 1],
            "margin-left": ["-100px", "0px"],
            duration: 1500,
            delay: 200,
            autoplay: true,
        });

        anime({
            targets: '.right-tab',
            opacity: [0, 1],
            "margin-right": ["-100px", "0px"],
            duration: 1500,
            delay: 200,
            autoplay: true,
        });
    }

    public footer() {
        $(".footer-wrapper .button a").each((index, element) => {
            AnimeJsIntersectionObserver.createObserver(anime({
                targets: element,
                opacity: [0, 1],
                "margin-left": ["-50px", "0px"],
                duration: 2000,
                delay: 50 * index,
                autoplay: false,
            }), element);
        });
    }

    public sendMessage() {
        $("#send-form label").each((index, element) => {
            AnimeJsIntersectionObserver.createObserver(anime({
                targets: element,
                opacity: [0, 1],
                "margin-left": ["-50px", "0px"],
                duration: 2000,
                autoplay: false,
            }), element);
        });

        $("#send-form input").each((index, element) => {
            AnimeJsIntersectionObserver.createObserver(anime({
                targets: element,
                opacity: [0, 1],
                "margin-top": ["-50px", "0px"],
                duration: 2000,
                autoplay: false,
            }), element);
        });
    }

    public sections() {
        $(".section-title").each((index, element) => {
            AnimeJsIntersectionObserver.createObserver(anime({
                targets: element,
                opacity: [0, 1],
                "margin-top": ["-50px", "0px"],
                duration: 2000,
                autoplay: false,
            }), element);
        });

        $(".section-description").each((index, element) => {
            AnimeJsIntersectionObserver.createObserver(anime({
                targets: element,
                opacity: [0, 1],
                "margin-top": ["-50px", "0px"],
                duration: 2000,
                autoplay: false,
            }), element);
        });

        $(".section-image").each((index, element) => {
            AnimeJsIntersectionObserver.createObserver(anime({
                targets: element,
                opacity: [0, 1],
                "margin-top": ["-100px", "0px"],
                duration: 2000,
                autoplay: false,
            }), element, {threshold: .5});
        });

        $(".section-rows .row-name").each((index, element) => {
            AnimeJsIntersectionObserver.createObserver(anime({
                targets: element,
                opacity: [0, 1],
                "margin-left": ["-100px", "0px"],
                duration: 2000,
                autoplay: false,
                delay: 75 * index,
            }), element, {
                threshold: .5
            });
        });

        $(".section-rows .row-value").each((index, element) => {
            AnimeJsIntersectionObserver.createObserver(anime({
                targets: element,
                opacity: [0, 1],
                "margin-right": ["-100px", "0px"],
                duration: 1000,
                autoplay: false,
                delay: 75 * index,
            }), element, {
                threshold: .5
            });
        });
    }
}