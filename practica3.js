$(document).ready(function(){
    var contador=0;
    $('img').click(function (e){
        var nombre_img = $(this).attr('data-id')
        $(this).attr('src','fotos/'+ nombre_img);
    });
});