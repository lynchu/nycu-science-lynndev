$(() => {

    const left_sbs = document.getElementsByClassName("left_sb_a");
    const depart_secs = document.getElementsByClassName("depart_sec");
    let priv_dep = depart_secs[0].id;


    left_sbs[0].style.borderLeft = "solid 2px rgb(var(--dark))";
    left_sbs[0].style.fontWeight = "500";

    let clear = () => {
        Array.from(left_sbs).forEach((el) => {
            el.removeAttribute("style");
        });
    };

    Array.from(left_sbs).forEach((el_a) => {
        el_a.addEventListener("click", () => {
            clear();
            el_a.style.borderLeft = "solid 2px rgb(var(--dark))";
            el_a.style.fontWeight = "500";
        })
    });

    let halfViewportHeight = window.innerHeight / 2;

    $(window).scroll(() => {
        Array.from(depart_secs).forEach((el_a) => {
            let h = el_a.getBoundingClientRect().y;
            if (-100 < h && h < halfViewportHeight && el_a.id != priv_dep) {
                priv_dep = el_a.id;
                clear();
                Array.from(left_sbs).forEach((el_b) => {
                    if (el_a.id == el_b.hash.substr(1)) {
                        el_b.style.borderLeft = "solid 2px rgb(var(--dark))";
                        el_b.style.fontWeight = "500";
                    }
                    if (el_a.id == "ep") {
                        left_sbs[0].style.borderLeft = "solid 2px rgb(var(--dark))";
                        left_sbs[0].style.fontWeight = "500";
                    }
                });
            }
        });
    });
});