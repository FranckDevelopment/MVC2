$("#mt").click(solicitarTriangulo);
function solicitarTriangulo(){
// Formato de la url para enviar solicitud GET: http://localhost/dwima22/4_jq_bs5/getimg.php?ancho=400&alto=400
var URL = "http://localhost/jue26/getimg.php?ancho=" + $("#txtancho").val() + "&alto=" + $("#txtalto").val();
// alert(URL);
$.get(URL,
 function(datos, estado){
    //alert("Datos retornados por el servidor son: " + datos + "\nEstado de la solicitud: " + estado);
$("#contenido").html(datos);
 }
);
}