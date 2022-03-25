var mapa = document.getElementById("mapa");

function obtieneUbicacion() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(muestraPosicion);
  } else {
    var alerta = document.getElementById("alerta");
    alerta.innerHTML = "El navegador no dispone de GeoLocalización";
  }
}

function muestraPosicion(posicion) {
  var coordenadas = posicion.coords.latitude + "," + posicion.coords.longitude;

  var imagenmapa = document.getElementById("imagenmapa");

  imagenmapa.src =
    "https://maps.googleapis.com/maps/api/staticmap?center=" +
    coordenadas +
    "&zoom=18&size=800x800&key=AIzaSyCMrQgga-C5zCuZLTVk2MPVzX7naqKZXZU";
}
