//se utiliza $.ajax(), a la cual se le pasa un objeto {}, con la información



function procesarDatos () {

    alert("proceso")

    $.ajax({
        type:"POST", // la variable type guarda el tipo de la peticion GET,POST,..
        url:"php/proceso.php", //url guarda la ruta hacia donde se hace la peticion
        data:{nombre:"pepe",edad:10}, // data recive un objeto con la informacion que se enviara al servidor
        success:function(datos){ //success es una funcion que se utiliza si el servidor retorna informacion
             console.log(datos.promedio)
         },
        dataType: dataType // El tipo de datos esperados del servidor. Valor predeterminado: Intelligent Guess (xml, json, script, text, html).
    })
}

