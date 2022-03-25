var mapa = document.getElementById("mapa");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(muestraPosicion);
  }
}

function muestraPosicion(posicion) {
  mapa.innerHTML =
    "Latitud: " +
    posicion.coords.latitude +
    "<br/>" +
    "Longitud: " +
    posicion.coords.longitude;
}
