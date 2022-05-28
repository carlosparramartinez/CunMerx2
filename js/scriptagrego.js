function mostrar(){
    document.getElementById("caja").style.opacity="1";
}
function ocultar(){
    document.getElementById("caja").style.opacity="0";
}
function mostrar_ocultar(){
    if(caja.style.opacity=="0"){
        mostrar()
    }
    else {
        ocultar();
    }
}
//https://www.youtube.com/watch?v=2z1n8qTTItg