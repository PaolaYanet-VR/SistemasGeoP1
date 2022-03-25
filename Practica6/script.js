var map;

var coordenadas = {
  lat: 0,
  lng: 0,
};

var propiedades = {
  center: coordenadas,
  zoom: 20,
};

function iniciaMapa() {
  map = new google.maps.Map(document.getElementById("map"), propiedades);

  var icono = {
    url: "https://cdn.discordapp.com/attachments/814002156763349020/837463679209177088/ONI_FINAL_YAAAA.gif",
    scaledSize: new google.maps.Size(100, 100),
    origin: new google.maps.Point(0, 0),
    anchor: new google.maps.Point(0, 0),
  };

  var marker = new google.maps.Marker({
    position: coordenadas,
    icon: icono,
    map: map,
  });

  if (navigator.geolocation) {
    setInterval(() => {
      moverPosicion(marker);
    }, 5000);

    moverPosicion(marker);
  }

  function moverPosicion(marker) {
    navigator.geolocation.getCurrentPosition((posicion) => {
      var pos = {
        lat: posicion.coords.latitude,
        lng: posicion.coords.longitude,
      };
      marker.setPosition(pos);
      map.panTo(pos);
      map.setCenter(pos);
    });
  }
}
