


function recorrer_texto() {   
    
    let texto = document.getElementById('texto_m').value;     
    let texto_limpio = texto.replace(/[^\w\sñÑáÁéÉíÍóÓúÚ]/g,'').toLowerCase();//eliminamos caracteres especiales y tranformamos a minusculas    
    let tex_2_ok = texto_limpio.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
    const arrtexto = tex_2_ok.split(/\s/).sort(); //se transforma en un arreglo el texto por cada palabra separada por " "        
    const conteo_palabra = [];
    for (let i = 0; i < arrtexto.length; i++) {
        if (conteo_palabra.hasOwnProperty(arrtexto[i])) {           
            conteo_palabra[arrtexto[i]] += 1;
        }else{
            conteo_palabra[arrtexto[i]] = 1;
        }                   
    }       
    
    console.log(conteo_palabra);
    const elementohtml = document.getElementById('conteo_texto');
    let palabre_vista = '';
    for (const word in conteo_palabra) {
        palabre_vista += `<h4>${word}: ${conteo_palabra[word]}</h4>   <br>`;    
                  
    }
   
    
    elementohtml.innerHTML = palabre_vista;
    
}


