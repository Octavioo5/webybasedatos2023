$(document).ready(function(){
var valor_dado=0;

    $("#boton").click(function(e){
    var valor_dado=Math.floor( Math.random()*6*+1)
    console.log("sacaste un:" + valor_dado)
    $("#dado").attr("src", "fotos/Dado" + valor_dado +".png");
    $("#numero").html(valor_dado)

    });
});