import $ from "jquery";

export default class HeaderMobileComponent {
    private selectorId: string = "#header-button-mobile";
    private buttonSelectorId: string = "#header-mobile-button-show";

    constructor() {
        this.onClickButtonBind();
        this.showHeaderButtonBind();
    }

    public onClickButtonBind() {
        $(document).on("click", this.selectorId, this.onClickButton);
    }

    public showHeaderButtonBind() {
        $(document).on("click", this.buttonSelectorId, this.onShowHideHeader);
    }

    public onShowHideHeader(event: JQuery.TriggeredEvent) {
        const header = $(document).find("#header-mobile");

        if (header.css("margin-left") == "-500px") {
            header.css("margin-left", "0px");
            $(event.currentTarget).addClass("active");
        } else {
            header.css("margin-left", "-500px");
            $(event.currentTarget).removeClass("active");
        }
    }

    public onClickButton(event: JQuery.TriggeredEvent) {
        const subcategories = $(event.currentTarget).find(".subcategories-mobile");

        const icon = $(event.currentTarget).find("#mobile-cursor");

        $(".subcategories-mobile").not(subcategories).css("height", "0px");
        $(".mobile-cursor").not(icon).css("transform", "rotate(90deg)");

        if (subcategories.css("height") == "0px") {
            icon.stop()
            subcategories.css("height", "500px");
            subcategories.css("overflow", "auto");
            icon.css("transform", "rotate(270deg)");
        } else {
            icon.stop()
            subcategories.css("height", "0px");
            subcategories.css("overflow", "hidden");
            icon.css("transform", "rotate(90deg)");
        }
    }
}