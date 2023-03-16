    //A partir del siguiente listado filtre los vehículos que tengan una capacidad mayor a 10 y sean de color azul.

    let vehiculo = [
        {"color": "rojo","marca": "bmw","capacidad": 11},
        {"color": "azul","marca": "fiat","capacidad": 2},
        {"color": "negro","marca": "hyundai","capacidad": 6},
        {"color": "amarillo","marca": "jeep","capacidad": 15},
        {"color": "azul","marca": "citroen","capacidad": 20},
        {"color": "azul","marca": "renault","capacidad": 12},
        {"color": "rojo","marca": "ford","capacidad": 4},
        {"color": "gris","marca": "toyota","capacidad": 8}
        ];
    
        const filtro = (vehiculo, color, capacidad) => vehiculo.filter(autos => autos.color==color && autos.capacidad>capacidad);


        
        document.getElementById("ex4").innerHTML = filtro(vehiculo,"azul", 10).map(carro=>
            `<li>Marca: ${carro.marca} Color: ${carro.color} </li>`
            );