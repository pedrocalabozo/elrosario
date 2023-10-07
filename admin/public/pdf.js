

function enviosolicitud(){
    let ci = document.getElementById('cedula').value;
    let select = document.getElementById('tipo_d').value;
    let pagomovil = document.getElementById('pagomovil').value;
     let email = document.getElementById('correo').value;

    fetch('http://localhost/mvc-alumnos/admin/nuevo/solicitud/'+ci+'/'+select+'/'+pagomovil+'/'+email)
    .then(response =>response.json())
    .then(jsonStatus)
  
    
  }
  function jsonStatus(json){
  let alert = document.getElementById('estatus');
  alert.innerHTML=json.status
 console.log(json)
  }



// function cargarJson(ci,tipo){
   
  
//     fetch('http://localhost/mvc-alumnos/admin/consulta/jsonconstancias/'+ci)
//     .then(response =>response.json())
//     .then(jsonCargado)
  
    
//   }
  
  
function grados_formater(grado){

let GRADO_FORMATEADO="";
if(grado=='i_nivel_inicial'){

GRADO_FORMATEADO='I Nivel Inicial';

}


else if(grado=='ii_nivel_inicial'){

GRADO_FORMATEADO='II Nivel Inicial';

}else if(grado=='1er_ano'){

GRADO_FORMATEADO='1er_ano de educacion segundaria';

}else if(grado=='2do_ano'){

GRADO_FORMATEADO='2do_ano de educacion segundaria';

}else if(grado=='3er_ano'){

GRADO_FORMATEADO='3cer_ano de educacion segundaria';

}else if(grado=='4to_ano'){

GRADO_FORMATEADO='4arto_ano de educacion segundaria';

}else if(grado=='5to_ano'){

GRADO_FORMATEADO='5to_año de educacion segundaria';

}






else{
  GRADO_FORMATEADO=grado.toUpperCase()+" Educación Primaria"


}
 return GRADO_FORMATEADO.replace("_", " ");

}
  
  function tipodecedula(c){
    let inf=""
if (c=="C.I") {
  inf="Cédula de Identidad"
}else{
  inf="Cédula Escolar"
}
return inf
  }
  


function quitar_alert(){
document.getElementById('estatus').innerHTML="";

}

  function jsonCargado(json,tipo_constan,url_logo){


setTimeout(quitar_alert, 2000)
   
    
    if (json[0].consulta=="0") {


      document.getElementById('estatus').innerHTML="No existe";
    }else{

const grado=json[0].grado




const grado_row=Object.keys(json[0].grado)
   console.log(grado_row)
const datos=json[0].datos

   console.log(datos)


      document.getElementById('estatus').innerHTML="Creando pdf";


  let select = tipo_constan
  
  
  const fontSize = 13;
  const lineSpacing = 12;
  
  
  
  let x=select
  
    let startX = 90;
    let startY = 340;
    const doc = new jsPDF("p", "pt","letter");
  
  
  
    var logo = new Image();
  logo.src = url_logo+'public/logo.jpg';
  
  //hori, vert,tama,tama
  doc.addImage(logo, 'JPEG', 80, 40,90,90);
  
  
  
  
  
  logo.src = url_logo+'public/logo_2.jpg';
  
  //hori, vert,tama,tama
  doc.addImage(logo, 'JPEG', 150, 200,300,300);
  //____________________________________________
  //header
    doc.setFontSize(14);
    doc.setFont("arial", "bold");
    doc.text('         Unidad Educativa ', 220, 70);
    doc.text('    Colegio  Nuestra Señora del Rosario',200, 85);
    doc.text(' Inscrito en el MPPE bajo el Nº S-240D1208', 180, 100);
    doc.text('         Convenio MPPE-AVEC', 200, 115);
    doc.text('         RIF: J-30780044-5', 220,130);
  
    // Creamos array con los meses del año
const meses = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
// Creamos array con los días de la semana
const dias_semana = ['Domingo', 'Lunes', 'martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
// Creamos el objeto fecha instanciándolo con la clase Date
const fecha = new Date();
let dia_actual=' los '+ fecha.getDate() + ' días del mes de ' + meses[fecha.getMonth()] + ' del año ' + fecha.getUTCFullYear()+'.';
  
    doc.setFont("arial", "")
    doc.text('         Constancia que se expide a petición de la parte interesada en Calabozo, a ', 70, 660);
    doc.text(''+dia_actual+'', 70,680);
  
    doc.setFontSize(10);
    doc.text('         Carretera Nacional vía a San Fernando de Apure. Calabozo Estado Guárico', 100, 715);
    doc.text('          Tlf: 0246-8716778. Fax: 8716318. Email: colegiorosario2006@gmail.com', 100, 730);
    doc.text('Desde el corazón de Venezuela, consolidando nuestra misión evangelizadora: "Educar personalidades cristianas"', 70, 745);
  
  let  nacional="vvv"

  if (datos.tipo_ci=="C.I") {
nacional=datos.nacionalidad+"-"
}else{
  nacional=""
}
  
  
    if (select=='estudio') {

doc.setFontSize(15);
doc.setFont("arial", "bold");
doc.text("CONSTANCIA DE ESTUDIOS", 195, 280);

//varios estudios_________________
if (grado_row.length>1) {
//alert(grado_row.length)
//actualmente estudia_______________________
if (datos.activo=='si') {
//alert(datos.activo);
 x=`
    Quien suscribe, Licenciada Carmen Eulalia Martínez de Padilla, portadora
de la cédula  de identidad N° 4.178.320, Directora de la Unidad Educativa Colegio
Nuestra Señora del Rosario, por medio de la presente hace constar que el (la)
estudiante: **${datos.apellido} ${datos.nombre}**,  portador (a) de la ${tipodecedula(datos.tipo_ci)} N° **${nacional} ${datos.cedula}**, cursó en esta Institución:
   
`

  

//estudios pasados____________________




 for (let index = 0; index < grado_row.length-1; index++) {
      console.log("años "+grado[grado_row[index]]);
      console.log("grados "+grado_row[index]);
     
   x+=`
**Año Escolar ${grado[grado_row[index]]}**   ${grados_formater(grado_row[index])}.
      `

    
    }


 //estudio actual_______________________
    x+=`
**Año Escolar ${grado[grado_row[grado_row.length-1]]}  hasta la fecha,** cursa el **${grados_formater(grado_row[grado_row.length-1])}**.

`



 //a estudiado barios grados________________________


}else{

x=`
   Quien suscribe, Licenciada Carmen Eulalia Martínez de Padilla, portadora
de la cédula  de identidad N° 4.178.320, Directora de la Unidad Educativa Colegio
Nuestra Señora del Rosario, por medio de la presente hace constar que el (la)
estudiante: **${datos.apellido} ${datos.nombre}**,  portador (a) de la ${tipodecedula(datos.tipo_ci)} N° **${nacional} ${datos.cedula}**, cursó en esta Institución:
`
 for (let index = 0; index < grado_row.length-1; index++) {
      console.log("años "+grado[grado_row[index]]);
      console.log("grados "+grado_row[index]);
     
   x+=`
**Año Escolar ${grado[grado_row[index]]}**   ${grados_formater(grado_row[index])}.
      `

    
    }
        
    


        }




//a estudiado 1 solo grado_____________________ activo
  }else{
    if (datos.activo=='si') {
    x=`
    Quien suscribe, Licenciada Carmen Eulalia Martínez de Padilla, portadora
de la cédula  de identidad N° 4.178.320, Directora de la Unidad Educativa Colegio
Nuestra Señora del Rosario, por medio de la presente hace constar que el (la)
estudiante: **${datos.apellido} ${datos.nombre}**,  portador (a) de la ${tipodecedula(datos.tipo_ci)} N° **${nacional} ${datos.cedula}**, cursa en esta Institución el **${grados_formater(datos.grado)}**.  Año escolar **${datos.anno}**.

`
    }else{
// 1 solo grado no activo

      x=`
   Quien suscribe, Licenciada Carmen Eulalia Martínez de Padilla, portadora
de la cédula  de identidad N° 4.178.320, Directora de la Unidad Educativa Colegio
Nuestra Señora del Rosario, por medio de la presente hace constar que el (la)
estudiante: **${datos.apellido} ${datos.nombre}**, portador (a) de la ${tipodecedula(datos.tipo_ci)} N° **${nacional} ${datos.cedula}**, cursó en esta Institución el **${grados_formater(datos.grado)}**. Año escolar **${datos.anno}**.
  
  `


    }
  }
    }

    
  if(select=='inscripcion') {

    doc.setFontSize(14);
    doc.setFont("arial", "bold");
    doc.text("CONSTANCIA DE INSCRIPCIÓN", 195, 280);


  x =`      Quien suscribe, Licenciada Carmen Eulalia Martínez de Padilla, portadora
de la cédula  de identidad N° 4.178.320, Directora de la Unidad Educativa Colegio
Nuestra Señora del Rosario, por medio de  la  presente hace  constar que el  (la)
estudiante: **${datos.apellido} ${datos.nombre}**, portador (a) de la ${tipodecedula(datos.tipo_ci)}   N° ** ${nacional} ${datos.cedula}**  está inscrito (a)  en  esta  Institución  para cursar el  **${grados_formater(datos.grado)}**. Año escolar   **${datos.anno}**.`;
  
  
  
  }
  
  if(select=='conducta') {
    doc.setFontSize(14);
    doc.setFont("arial", "bold");
    doc.text("CONSTANCIA DE CONDUCTA", 195, 280);
    

    if (datos.activo=='si'){
 
      x =`    Quien suscribe, Licenciada Carmen Eulalia Martínez de Padilla, portadora de
la cédula de identidad  N°  4.178.320,  Directora de la Unidad  Educativa Colegio
Nuestra Señora del Rosario, por medio de la presente hace constar que el (la) estudiante **${datos.apellido} ${datos.nombre}**, portador (a) de la ${tipodecedula(datos.tipo_ci)} N° **${nacional} ${datos.cedula}**, de  **${grados_formater(datos.grado)}**. Durante su permanencia en el Plantel: Año Escolar **${datos.anno}** demostró **BUENA CONDUCTA**.
      `
    }else{

      x=`    Quien suscribe, Licenciada Carmen Eulalia Martínez de Padilla, portadora de
la cédula  de identidad N° 4.178.320, Directora de la Unidad Educativa Colegio
Nuestra Señora del Rosario, por medio de la presente hace constar que el (la) estudiante **${datos.apellido} ${datos.nombre}**, portador (a) de la ${tipodecedula(datos.tipo_ci)}  N° **${nacional} ${datos.cedula} **. Durante su permanencia en el Plantel demostró  **BUENA  CONDUCTA**.
      `
    }
     

    }

    
    
  
  doc.setFont("arial")
    .setFontSize(fontSize)
    .setFontStyle("normal");
    
    const contenido_constancia =x;
    const endX = 450;
    // red marks to make textwidth visible
    doc.setDrawColor('#fff');
    doc.setLineWidth(1);
    doc.line(startX, startY - 10, startX, startY + 200);
    doc.line(endX, startY - 10, endX, startY + 200);
    let textMap = doc.splitTextToSize(
      contenido_constancia,
      endX
    );
    
    const startXCached = startX;
      let boldOpen = false;
      textMap.map((text, i) => {
          if (text) {
              const arrayOfNormalAndBoldText = text.split('**');
              const boldStr = 'bold';
              const normalOr = 'normal';
              arrayOfNormalAndBoldText.map((textItems, j) => {
                  doc.setFontType(boldOpen ? normalOr : boldStr);
                  if (j % 2 === 0) {
                      doc.setFontType(boldOpen ? boldStr : normalOr);
                  }
                  doc.text(textItems, startX, startY);
                  startX = startX + doc.getStringUnitWidth(textItems) * fontSize;
              });
              boldOpen = isBoldOpen(arrayOfNormalAndBoldText.length, boldOpen);
              startX = startXCached;
              startY += lineSpacing;
          }
      });
  
    doc.save(`Constancia.pdf`);
      
  };
}
  const isBoldOpen = (arrayLength, valueBefore = false) => {
      const isEven = arrayLength % 2 === 0;
      const result = valueBefore !== isEven;
  
      return result;
  }
  
  
  
  
  const printCharacters = (doc, textObject, startY, startX, fontSize, lineSpacing) => {
      const startXCached = startX;
      const boldStr = 'bold';
      const normalStr = 'normal';
  
      textObject.map(row => {
  
          Object.entries(row).map(([key, value]) => {
              doc.setFontType(value.bold ? boldStr : normalStr);
  
              doc.text(value.char, startX, startY);
              startX = startX + doc.getStringUnitWidth(value.char) * fontSize;
          });
          startX = startXCached;
          startY += lineSpacing;
      });


      
  };
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  