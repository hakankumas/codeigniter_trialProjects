$(document).ready(function () {
    $(".js-switch").each(function(){
        new Switchery(this);
    })
    $("body").on("change", ".js-switch", function(){
        var $completed = $(this).prop("checked");
        var $url = $(this).data("url")
        var $el = $(this)
        
        if ($completed) {
            $($el[0]).closest('tr.row-wrapper').addClass('selected')
        } else {
            $($el[0]).closest('tr.row-wrapper').removeClass('selected')
        }
        $.post($url,{ completed : $completed }, function(){
            console.log('lorem ipsum.');
        });
    })
})