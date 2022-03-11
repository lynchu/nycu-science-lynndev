// var $ = jQuery.noConflict(true);

$(() => {
    //wait for DOM load
    const dropdowns = document.getElementsByClassName("sub-menu");
    const blocker = document.getElementById("blocker");
    const left_sbs = document.getElementsByClassName("left_sb_a");

    let hidedropdowns = () => {
        Array.from(dropdowns).forEach((el) => {
            el.removeAttribute("style");
        });
        Array.from(left_sbs).forEach((el) => {
            el.removeAttribute("style");
        });
        blocker.removeAttribute("style");
        // $("#menu-main").removeAttr("style");
    };

    $(window).on("click", (event) => {
        if (event.type == "touchstart") {
            $(this).off("click");
        }
        let target = event.target;
        let targetParent = target.parentNode;

        if (targetParent.matches(".menu-item-has-children")) {
            if ($(window).width() > 800) {
                hidedropdowns();
                targetParent.querySelector("ul.sub-menu").style.display = "flex";
                $("#blocker").css("display", "block");
            } else {
                $(targetParent.querySelector('ul.sub-menu')).slideToggle();
            }
        } else if (target.matches(".left_sb_a")) {
            hidedropdowns();
            target.style.borderLeft = "solid 2px rgb(var(--dark))";
            target.style.fontWeight = "500";
        } else if (targetParent.id == "navBtn") {
            $("#menu-main").slideToggle();
        } else {
            hidedropdowns();
        }
    });

    window.onresize = () => {
        if ($(window).width() > 800) {
            $("#navbar ul").css("display", "");
        }
    };

    $("#topBtn").click(() => {
        $("html, body").animate({
                scrollTop: 0,
            },
            500
        );
    });

    let currentScrollPos = window.pageYOffset;
    let prevScrollpos = currentScrollPos;
    $(window).scroll(() => {
        if ($(this).scrollTop() > 400) {
            $("#topBtn").fadeIn();
        } else {
            $("#topBtn").fadeOut();
        }

        //common variable
        currentScrollPos = window.pageYOffset;
        //scroll down hide navbar
        // if (prevScrollpos > currentScrollPos) {
        //     $('#navbar').css('visibility', 'visible');
        // } else {
        //     $('#navbar').css('visibility', 'hidden');
        // }
        prevScrollpos = currentScrollPos;

        // console.log($("#ep").getBoundingClientRect());
    });

    //remove single_cat_title sidebar default title
    $("#single_cat_title>ul>li>a").remove();
});