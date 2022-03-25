AOS.init();

function iniciaMapa() {
  var coordenadas = {
    lat: 21.1495241,
    lng: -101.718227711,
  };

  var map = new google.maps.Map(document.getElementById("mapa"), {
    center: coordenadas,
    zoom: 15,
  });

  var marcador = new google.maps.Marker({
    position: coordenadas,
    map: map,
  });
}
