window.onload = function() {
    document.getElementById("btnajax").addEventListener("click", pedirHeader);
    document.getElementById("reset").addEventListener("click", iniciarHeader);

    function pedirHeader() {
        var solicitud = new XMLHttpRequest();
        solicitud.onreadystatechange = function() {
            if (solicitud.readyState == 4 && solicitud.status == 200) {
                document.getElementById("div1").innerHTML = solicitud.responseText;
            }};
    
        solicitud.open("GET", "01_cargarArchivo.txt", true);
        solicitud.send();
    }

    function iniciarHeader() {
        document.getElementById("div1").innerHTML = "<h2>Titulo Inicial</h2>";
    }
}