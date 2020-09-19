$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.messageInputForm_input').keypress(function (event) {
        if(event.which === 13){
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: '/message/chat/',
                data: {
                    chat_room_id: chat_room_id,
                    user_id: user_id,
                    message: $('.messageInputForm_input').val(),
                },
            
            })
            
            .done(function(data){
                //console.log(data);
                event.target.value = '';
            });

            
        }
    });

    window.Echo.channel('ChatRoomChannel')
    .listen('ChatPusher', (e) => {
        console.log(e, e.message.user_id);
        if(e.message.user_id === user_id){
            console.log(true);
            scrollTimer();
        $('.messages').append(
            '<div class="message"><div class="messageRight"><div class="nameRight-position"><span>' + current_user_name + 
            '</span></div><div class="commonMessage"><div>' + e.message.message + '</div></div></div></div>');
        }else{
            console.log(false);
            scrollTimer();
        $('.messages').append(
            '<div class="message"><div class="messageLeft"><div class="nameLeft-position"><span>' + chat_room_user_name + 
            '</span></div><div class="commonMessage"><div>' + e.message.message + '</div></div></div></div>');
        }
    });


});

function scrollTimer(){
    setTimeout(function() {
        window.scrollBy(0, window.innerHeight - 60);
        },30)
}
