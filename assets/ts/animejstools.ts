import { AnimeInstance } from "animejs";

export default class AnimeJsIntersectionObserver {
    private static options = {
        root: null,
        rootMargin: '0px',
        threshold: 1
    };

    static createObserver(animation: AnimeInstance, element: HTMLElement, customOptions = {}) {
        const options = { ...this.options, ...customOptions };

        const observer = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    animation.play();
                    observer.unobserve(entry.target);
                }
            });
        }, options);

        observer.observe(element);
    }
}