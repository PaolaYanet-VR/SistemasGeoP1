function iniciaMapa() {

  var coordenadas = { lat: 21.152639, lng: -101.711598 }

  var propiedades1 = {
    center: coordenadas,
    zoom: 12
  }

  var mapa1 = new google.maps.Map(document.getElementById('mapa1'), propiedades1)

  var propiedades2 = {
    center: coordenadas,
    zoom: 12,
    disableDefailtUI: true
  }
  
  var mapa2 = new google.maps.Map(document.getElementById('mapa2'), propiedades2)

  var propiedades3 = {
    center: coordenadas,
    zoom: 12,
    zoomControl: false,
    scaleControl: false
  }
  
  var mapa3 = new google.maps.Map(document.getElementById('mapa3'), propiedades3)
  
  var propiedades4 = {
    center: coordenadas,
    zoom: 12,
    mapTypeControl: true,
    mapTypeControlOptions: {
      style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
      mapTypeIds: ['roadmap', 'satellite', 'terrain']
    }
  }
  
  var mapa4 = new google.maps.Map(document.getElementById('mapa4'), propiedades4)

}