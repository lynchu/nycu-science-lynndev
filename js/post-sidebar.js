$(() => {
    var copyBtn = $("#copy-link-btn");
    var msg = copyBtn.attr('data-clipboard-text');
    copyBtn.bind( "click", {msg: msg} , function( event ) {
        var copyText = event.data.msg;
        navigator.clipboard.writeText(copyText);
        $(".tooltip .tooltiptext").css('visibility', 'visible')
    });
});