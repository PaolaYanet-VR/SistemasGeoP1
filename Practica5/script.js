var informacion = "<h1>Universidad DelaSalle Bajío</h1>";
informacion +=
  "<p><strong>Dirección: Av Universidad 602, Lomas del Campestre</strong></p>";
informacion += "<p><strong>Teléfono: 477 710 8500</strong></p>";

function iniciaMapa() {
  var propiedades = {
    center: {
      lat: 21.152162,
      lng: -101.711022,
    },
    zoom: 14,
  };

  const mapa = document.getElementById("map");

  const map = new google.maps.Map(mapa, propiedades);

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition((position) => {
      let posicion = {
        lat: position.coords.latitude,
        lng: position.coords.longitude,
      };

      let propiedadesMarcador = {
        position: posicion,
        map,
        title: "Marcador",
      };

      const marcador = new google.maps.Marker(propiedadesMarcador);

      map.setCenter(posicion);

      const infoWindow = new google.maps.InfoWindow({
        content: informacion,
      });

      marcador.addListener("click", () => {
        infoWindow.open(map, marcador);
      });
    });
  }
}
