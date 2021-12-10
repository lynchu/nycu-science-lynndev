var jq3 = jQuery.noConflict(true);

jq3(() => { //wait for DOM load
    const dropdowns = document.getElementsByClassName("sub-menu");
    const container = document.getElementById("container");
    const navbar = document.getElementById("navbar");

    let hidedropdowns = () => {
        Array.from(dropdowns).forEach(el => {
            el.removeAttribute("style");
        });
        container.removeAttribute("style");
        navbar.removeAttribute("style");
    }

    jq3(window).on("click", event => {
        if (event.type == "touchstart") {
            jq3(this).off('click')
        }
        let target = event.target.parentNode;
        if (jq3(window).width() > 800) {
            hidedropdowns();
        }
        if (target.matches('.menu-item-has-children')) {
            target.querySelector('ul.sub-menu').style.display = "flex";
            container.style.backgroundColor = "rgba(0, 0, 0, .3)";
            // navbar.style.backgroundColor = "rgba(238, 237, 234, .9)";
        } else {
            hidedropdowns();
        }
    });
});