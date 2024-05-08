import $ from "jquery";

export default class HeaderComponent {
    private selector: string = ".button-header-link";
    private selectorChilder: string = ".subcategories";

    public constructor() {
        this.showAllElements();
        this.onMouseEnterBind();
        this.onMouseLeaveBind();
        this.slideUpAllElements();
    }

    private onMouseEnterBind() {
        const elements = $(this.selector);
        elements.on("mouseenter", this.onMouseEnter.bind(this));
    }

    private onMouseLeaveBind() {
        const elements = $(this.selector);
        elements.on("mouseleave", this.onMouseLeave.bind(this));
    }

    private onMouseEnter(event: JQuery.TriggeredEvent) {
        $(event.currentTarget).find(this.selectorChilder).stop().fadeIn();
    }

    private onMouseLeave(event: JQuery.TriggeredEvent) {
        $(event.currentTarget).find(this.selectorChilder).stop().fadeOut();
    }

    private showAllElements() {
        const elements = $(this.selector).find(this.selectorChilder);
        elements.fadeOut(0.001);
    }

    private slideUpAllElements() {
        const elements = $(this.selector).find(this.selectorChilder);
        elements.slideUp();
    }
}