export default class TerminalyControll {
    constructor() {
        if (sessionStorage.getItem("fake_loading")) {
            return;
        } else {
            sessionStorage.setItem("fake_loading", "true");
            window.location.href = "/load";
        }
    }
}