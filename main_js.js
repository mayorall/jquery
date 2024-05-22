$(document).ready(function(){
    $(".submit").on('click',function(){
        let input = $(".input").val()
        let textarea = $(".textarea").val()

        $.ajax({
            url: '/zapolnenie.php',
            method: 'post',
            data: {name: input, text: textarea},
            success: function(data){
            }
        });
    })
})