var paises = document.getElementById("paises");

fetch("../json/paises.json").then((response) => {
  console.log(response);
  response.json().then((datos) => {
    let contador = 1;

    datos.forEach((registro) => {
      let renglon = document.createElement("div");
      renglon.className = "row border by-light m-2";
      paises.appendChild(renglon);

      let columna = document.createElement("div");
      columna.className = "col-12";
      renglon.appendChild(columna);

      let nombre = document.createElement("p");
      nombre.textContent = contador + ") " + registro.CountryName;
      columna.appendChild(nombre);

      contador++;
    });
  });
});
