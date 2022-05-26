$(() => {

    $("thead").remove();
    // $("td:nth-child(3)").after('<div>'+$("td:nth-child(3)").text()+'</div>');
    let td3 = document.querySelectorAll("td:nth-child(3)");
    td3.forEach(ele1 => {
        let text = ele1.innerHTML;
        let chair = null;
        let retire = null;

        text = text.replaceAll("<br>", "").replaceAll("&nbsp;", "").replaceAll(" ", "");

        if (text.includes("講座教授")) {
            const textchair = text.split("講座教授：");
            text = textchair[0];
            chair = textchair[1];
            const chairs = chair.split("、");
            chair = "";
            let count_chair = 0;
            chairs.forEach(ele2 => {
                count_chair += 1;
                if (count_chair % 3 == 0) {
                    chair += "<span>" + ele2 + "</span><br>";
                } else {
                    chair += "<span>" + ele2 + "</span>";
                }
            });
        }
        if (text.includes("兼任退休教授")) {
            const textretire = text.split("兼任退休教授：");
            text = textretire[0];
            retire = textretire[1];
            const retires = retire.split("、");
            retire = "";
            let count_retire = 0;
            retires.forEach(ele3 => {
                count_retire += 1;
                if (count_retire % 3 == 0) {
                    retire += "<span>" + ele3 + "</span><br>";
                } else {
                    retire += "<span>" + ele3 + "</span>";
                }
            });
        }

        const texts = text.split("、");
        text = "";
        let count_text = 0;
        texts.forEach(ele4 => {
            count_text += 1;
            if (count_text % 3 == 0) {
                text += "<span>" + ele4 + "</span><br>";
            } else {
                text += "<span>" + ele4 + "</span>";
            }
        });

        if (chair != null && retire != null) {
            ele1.innerHTML =
                '<div>'+
                '<div><span>研究成員</span><p>' + text + '</p></div>' +
                '<div><span>兼任退休教授</span><p>' + retire + '</p></div>' +
                '<div><span>講座教授</span><p>' + chair + '</p></div>'+
                '</div>';
        } else if (chair != null) {
            ele1.innerHTML =
                '<div>'+
                '<div><span>研究成員</span><p>' + text + '</p></div>' +
                '<div><span>講座教授</span><p>' + chair + '</p></div>'+
                '</div>';
        } else if (retire != null) {
            ele1.innerHTML =
                '<div>'+
                '<div><span>研究成員</span><p>' + text + '</p></div>' +
                '<div><span>兼任退休教授</span><p>' + retire + '</p></div>'+
                '</div>';
        } else {
            ele1.innerHTML =
                '<div>'+
                '<div><span>研究成員</span><p>' + text + '</p></div>'+
                '</div>';
        }


    });

    $('h2').each(function() {
        let $this = $(this);
        if($this.html().replace(/\s| /g, '').length == 0)
            $this.remove();
    });
    $('p').each(function() {
        let $this = $(this);
        if($this.html().replace(/\s| /g, '').length == 0)
            $this.remove();
    });


    let h2 = document.querySelectorAll("h2");
    h2.forEach(element => {
        console.log(element);
        console.log(element.nextElementSibling.tagName);
        if (element.nextElementSibling.tagName == "P") {

        }
        if(element.innerText.includes('出國交換')){
            let img = new Image();
            img.src = templateUrl+"/images/student_abroad/cloud1.webp";
            element.outerHTML = "<div id='exchange' class='field_wrapper'>"+element.outerHTML+img.outerHTML+"</div>";
        }
        if(element.innerText.includes('出國短期')){
            let img = new Image();
            img.src = templateUrl+"/images/student_abroad/cloud2.webp";
            element.outerHTML = "<div id='short_term_program' class='field_wrapper'>"+element.outerHTML+img.outerHTML+"</div>";
        }
        if(element.innerText.includes('姊妹校短期')){
            let img = new Image();
            img.src = templateUrl+"/images/student_abroad/cloud3.webp";
            element.outerHTML = "<div id='short_term_course' class='field_wrapper'>"+element.outerHTML+img.outerHTML+"</div>";
        }
        if(element.innerText.includes('海外實習')){
            let img = new Image();
            img.src = templateUrl+"/images/student_abroad/cloud4.webp";
            element.outerHTML = "<div id='overseas' class='field_wrapper'>"+element.outerHTML+img.outerHTML+"</div>";
        }
        if(element.innerText.includes('雙聯學位')){
            let img = new Image();
            img.src = templateUrl+"/images/student_abroad/cloud5.webp";
            element.outerHTML = "<div id='dual_degree' class='field_wrapper'>"+element.outerHTML+img.outerHTML+"</div>";
        }
        if(element.innerText.includes('國外校際')){
            let img = new Image();
            img.src = templateUrl+"/images/student_abroad/cloud6.webp";
            element.outerHTML = "<div id='virtual' class='field_wrapper'>"+element.outerHTML+img.outerHTML+"</div>";
        }
    });

});


$(() => {

    const left_sbs = document.getElementsByClassName("left_sb_a");
    const depart_secs = document.getElementsByClassName("field_wrapper");
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
                    if (el_a.id == "exchange") {
                        left_sbs[0].style.borderLeft = "solid 2px rgb(var(--dark))";
                        left_sbs[0].style.fontWeight = "500";
                    }
                });
            }
        });
    });
});