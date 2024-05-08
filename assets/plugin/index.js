import Termynal from "./termynal/termynal";
import "./termynal/termynal.css";
import $ from "jquery";


if ($("#termynal").length > 0) {
    const termynal = new Termynal("#termynal");

    let ternimal_coutner = 6500;

    for(let i = 0; i < ternimal_coutner; i++) {
        termynal._wait(i).then(() => {
            if ($("#termynal>span").length >= 15) {
                $("#termynal>span").remove()
            }
        })
    }

    termynal._wait(ternimal_coutner).then(() => { window.location.href = "/"; })
}