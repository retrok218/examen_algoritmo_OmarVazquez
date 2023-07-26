


function recorrer_texto() {   
    let texto = document.getElementById('texto_m').value;     
    let texto_limpio = texto.replace(/[^\w\sñÑáÁéÉíÍóÓúÚ]/g, '').toLowerCase();      //eliminamos caracteres especiales y tranformamos a minusculas

    //se transforma en un arreglo el texto por cada palabra separada por " "
    let arrtexto = texto_limpio.split(/\s/);
    
    function filtradocontador(params) {
        
    }

    console.log( arrtexto);

}

