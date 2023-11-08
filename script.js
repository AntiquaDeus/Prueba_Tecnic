function GenerarTabla(){
    var input_usuario = document.getElementById("Tabla_nombre");
    var nombre_tabla = input_usuario.value;
    var vision_tabla = document.getElementById("VisionTabla")
    document.getElementById("Nombre_tabla").innerHTML = nombre_tabla;
    vision_tabla.style.visibility = "visible"
}

function AddRegistro(){
    
}