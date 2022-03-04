// var $ = jQuery.noConflict(true);

$(() => { //wait for DOM load
    const dropdowns = document.getElementsByClassName("sub-menu");
    const blocker = document.getElementById("blocker");
    const left_sbs = document.getElementsByClassName("left_sb_a");

    let hidedropdowns = () => {
        Array.from(dropdowns).forEach(el => {
            el.removeAttribute("style");
        });
        Array.from(left_sbs).forEach(el => {
            el.removeAttribute("style");
        });
        blocker.removeAttribute("style");
    }

    $(window).on("click", event => {
        if (event.type == "touchstart") {
            $(this).off('click')
        }
        let target = event.target;
        let targetParent = target.parentNode;
        if ($(window).width() > 800) {
            hidedropdowns();
        }
        if (targetParent.matches('.menu-item-has-children')) {
            targetParent.querySelector('ul.sub-menu').style.display = "flex";
            $('#blocker').css('display','block');
        } else if (target.matches('.left_sb_a')){
            target.style.borderLeft = "solid 2px rgb(var(--dark))";
        } else {
            hidedropdowns();
        }
    });

    // $("#navBtn").click(() => {
    //     $("#navbar ul").slideToggle();
    // });

    // window.onresize = () => {
    //     if (jq3(window).width() > 800) {
    //         jq3("#navbar ul").css("display", "");
    //     }
    // }

    $('#topBtn').click(() => {
        $("html, body").animate({
            scrollTop: 0
        }, 500);
    });

    let currentScrollPos = window.pageYOffset
    let prevScrollpos = currentScrollPos
    $(window).scroll(() => {
        if ($(this).scrollTop() > 400) {
            $('#topBtn').fadeIn();
        } else {
            $('#topBtn').fadeOut();
        }

        //common variable
        currentScrollPos = window.pageYOffset
        //scroll down hide navbar
        // if (prevScrollpos > currentScrollPos) {
        //     $('#navbar').css('visibility', 'visible');
        // } else {
        //     $('#navbar').css('visibility', 'hidden');
        // }
        prevScrollpos = currentScrollPos
    });

    $('#single_cat_title>ul>li>a').remove();

});