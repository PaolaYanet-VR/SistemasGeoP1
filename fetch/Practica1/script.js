var paises = document.getElementById("paises");

fetch("../json/datos.json").then(function (response) {

  console.log(response);

  response.json().then(function (datos) {

    datos.forEach((registro) => {

      let nombre = document.createElement("p");
      nombre.textContent =
        "País: " + registro.country + ", casos: " + registro.cases;
      paises.appendChild(nombre);
      
    });
  });
});
