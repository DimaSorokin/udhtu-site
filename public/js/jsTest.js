$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var count = 1;
    var pp = $("#loading-example-btn").data("loading-page");
    if(count >= pp){
        $("#loading-example-btn").remove()
    }
    $("#loading-example-btn").click(function(e){
        e.preventDefault();
        var inProgress = false; //флаг для отслеживания того, происходит ли в данный момент ajax-запрос
        count++;
         //начинать пагинацию со 2 страницы, т.к. первая выводится сразу
        $.ajax({
            type:'get',
            url: '?page=' + count,
            data:{ page: count},
            success:function(data){
                $result = $(data).find('#publication').html();
                $("#publication").append($result);
            }, error:function (result) {
                console.log(result)
            }
        }).done(function (data) {
            console.log(count);
            var pp = $("#loading-example-btn").data("loading-page");
            if(count >= pp){
                $("#loading-example-btn").remove()
            }
            inProgress = false;
        });
    });
});
