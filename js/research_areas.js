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


});