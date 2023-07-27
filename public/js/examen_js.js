


function recorrer_texto() {   
    let finconteo = [];
    let texto = document.getElementById('texto_m').value;     
    let texto_limpio = texto.replace(/[^\w\sñÑáÁéÉíÍóÓúÚ]/g,'').toLowerCase();      //eliminamos caracteres especiales y tranformamos a minusculas    
    //se transforma en un arreglo el texto por cada palabra separada por " "
    let arrtexto = texto_limpio.split(/\s/).sort();
   
   for (let i = 0; i < arrtexto.length; i++) {
    if (arrtexto[i] === arrtexto[i]) {
        console.log(arrtexto[i]);
        finconteo.push(arrtexto[i]);
    }    
   }   
   
  console.log(finconteo);
}
