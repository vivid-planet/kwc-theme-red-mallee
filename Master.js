Kwf.Utils.StickyHeader('.switchLanguage');

var socket = io.connect('http://localhost:3800');

socket.on('com', function(data){
    switch(data.command) {
        case "rs":
            window.location.reload();
            break;
        case "m":
        case "message":
            var h = $('<p>'+data.message+'</p>');
            $('body').prepend($(h));
            setTimeout(function(){
                $(h).hide().remove();
            }, 3000)
            break;
        default:
            return false;
    }
})