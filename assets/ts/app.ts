import $ from "jquery";

export default class App {
    public smoothScrollToElementById(id: string) {
        const element = $(id);
        if (element) {
            $('html, body').animate({
            scrollTop: element.offset()?.top
        }, 1000);
        }
    }
}