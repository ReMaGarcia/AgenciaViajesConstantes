
function validarForm() {

    const nombre = document.getElementById("nom").value.trim();
    const correo = document.getElementById("email").value.trim();
    const textArea = document.getElementById("missatge").value.trim();

    const errorNom = document.getElementById("error-nom");
    const inputNom = document.getElementById("nom");

    const errorMail = document.getElementById("error-email");
    const inputMail = document.getElementById("email");

    const errorText = document.getElementById("error-text");
    const inputText = document.getElementById("missatge");

    const mensajeExitoso = document.getElementById("formu-enviat");

    //limpiar inputs
    inputNom.style.border = "";
    inputMail.style.border = "";
    inputText.style.border = "";
    errorNom.textContent = "";
    errorMail.textContent = "";
    errorText.textContent = "";

    //validar nombre:

    if (!nombre) {
        errorNom.textContent = "El nombre es obligatorio";
        inputNom.style.border = "2px solid red";
        return false;
        //el css del span en la hoja de estilo pero el input mejor controlar el estilo desde aquí js. El textContent es más seguro que innerHTML ya que con innerHTML se puede inyectar etiquetas <script> o eventos como onclick, causando un ataque XSS (cross-site scripting). textContent no interpreta html, lo convierte en texto plano.

    } else {
        inputNom.style.border = "2px solid green";
    }

    if (nombre.length < 3) {
        inputNom.style.border = "2px solid red";
        errorNom.textContent = "El nombre debe incluir un mínimo de 3 carácteres";
        return false;
    } else {
        inputNom.style.border = "2px solid green";
    }

    if (nombre.length > 50) {
        inputNom.style.border = "2px solid red";
        errorNom.textContent = "Has superado el máximo de 50 carácteres.";
        return false;
    } else {
        inputNom.style.border = "2px solid green";
    }

    if (!/^[a-zA-ZáéíóúñÑüÜ\s\-]+$/.test(nombre)) {
        inputNom.style.border = "2px solid red";
        errorNom.textContent = "carácteres no permitidos: Utilice letras,guiones,espacios,acentos,mayúsculas y mínusculas";
        return false;
        //si niego la expresion del regexp no necesito declarar la constante.
    } else {
        inputNom.style.border = "2px solid green";
    }

    //validar email:

    if (!correo) {
        errorMail.textContent = "Introduce un email por favor.";
        inputMail.style.border = "2px solid red";
        return false;
    } else {
        inputMail.style.border = "2px solid green";
    }

    if (correo.length > 100) {
        errorMail.textContent = "Has superado el límite de carácteres (100)";
        inputMail.style.border = "2px solid red";
        return false;
    } else {
        inputMail.style.border = "2px solid green";
    }

    if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(correo)) {
        errorMail.textContent = "Email no valido. Ej: formato@valido.es";
        inputMail.style.border = "2px solid red";
        return false;
    } else {
        inputMail.style.border = "2px solid green";
    }

    //validar textarea

    if (textArea.length > 500) {
        errorText.textContent = "El mensaje no puede superar el límite máximo de carácteres (500)";
        inputText.style.border = "2px solid red";
        return false;
    } else {
        inputText.style.border = "2px solid green";
    }

    if (textArea.includes("<script>")) {
        errorText.textContent = "No se permite código HTML";
        inputText.style.border = "2px solid red";
        return false;
    } else {
        inputText.style.border = "2px solid green";
    }

    if (mensajeExitoso) {
        mensajeExitoso.textContent = "Formulario enviado correctamente";
        mensajeExitoso.style.color = "green";

        setTimeout(() => {
            mensajeExitoso.textContent = "";
        }, 3000); // ocultar mensaje en 3 seg
    }

    // añadir fecha y hora

    const fechaInput = document.getElementById("fecha");
    const ahora = new Date();
    const fechaHoraFormateada = ahora.toLocaleString('es-ES', {
        year: 'numeric',
        month: '2-digit',
        day: '2-digit',
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit'
    });
    fechaInput.value = fechaHoraFormateada;

    return true;


}

function validarComentaris() {

    const nombreCom = document.getElementById("nomC").value.trim();
    const correoCom = document.getElementById("emailC").value.trim();
    const textAreaCom = document.getElementById("missatgeC").value.trim();
    const fechaHora = document.getElementById("data").value;

    const errorNom = document.getElementById("error-nomC");
    const inputNom = document.getElementById("nomC");

    const errorMail = document.getElementById("error-emailC");
    const inputMail = document.getElementById("emailC");

    const errorText = document.getElementById("error-textC");
    const inputText = document.getElementById("missatgeC");

    const mensajeExitoso = document.getElementById("formu-enviatC");

    //limpiar inputs
    inputNom.style.border = "";
    inputMail.style.border = "";
    inputText.style.border = "";
    errorNom.textContent = "";
    errorMail.textContent = "";
    errorText.textContent = "";

    //validar nombre:

    if (!nombreCom) {
        errorNom.textContent = "El nombre es obligatorio";
        inputNom.style.border = "2px solid red";
        return false;
    } else {
        inputNom.style.border = "2px solid green";
    }

    if (nombreCom.length < 3) {
        inputNom.style.border = "2px solid red";
        errorNom.textContent = "El nombre debe incluir un mínimo de 3 carácteres";
        return false;
    } else {
        inputNom.style.border = "2px solid green";
    }

    if (nombreCom.length > 50) {
        inputNom.style.border = "2px solid red";
        errorNom.textContent = "Has superado el máximo de 50 carácteres.";
        return false;
    } else {
        inputNom.style.border = "2px solid green";
    }

    if (!/^[a-zA-ZáéíóúñÑüÜ\s\-]+$/.test(nombreCom)) {
        inputNom.style.border = "2px solid red";
        errorNom.textContent = "carácteres no permitidos: Utilice letras,guiones,espacios,acentos,mayúsculas y mínusculas";
        return false;
        //si niego la expresion del regexp no necesito declarar la constante.
    } else {
        inputNom.style.border = "2px solid green";
    }

    //validar email:

    if (!correoCom) {
        errorMail.textContent = "Introduce un email por favor.";
        inputMail.style.border = "2px solid red";
        return false;
    } else {
        inputMail.style.border = "2px solid green";
    }

    if (correoCom.length > 100) {
        errorMail.textContent = "Has superado el límite de carácteres (100)";
        inputMail.style.border = "2px solid red";
        return false;
    } else {
        inputMail.style.border = "2px solid green";
    }

    if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(correoCom)) {
        errorMail.textContent = "Email no valido. Ej: formato@valido.es";
        inputMail.style.border = "2px solid red";
        return false;
    } else {
        inputMail.style.border = "2px solid green";
    }

    //validar textarea

    if (textAreaCom.length > 500) {
        errorText.textContent = "El mensaje no puede superar el límite máximo de carácteres (500)";
        inputText.style.border = "2px solid red";
        return false;
    } else {
        inputText.style.border = "2px solid green";
    }

    if (textAreaCom.includes("<script>")) {
        errorText.textContent = "No se permite código HTML";
        inputText.style.border = "2px solid red";
        return false;
    } else {
        inputText.style.border = "2px solid green";
    }

    if (mensajeExitoso) {
        mensajeExitoso.textContent = "Comentari afeigit!";
        mensajeExitoso.style.color = "green";

    } 
        // añadir fecha y hora

        const fechaInput = document.getElementById("data");
        const ahora = new Date();
        const fechaHoraFormateada = ahora.toLocaleString('es-ES', {
            year: 'numeric',
            month: '2-digit',
            day: '2-digit',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        });
        fechaInput.value = fechaHoraFormateada;

        return true;

    
}












// document
//     .getElementById("btnEnviar")
//     .addEventListener(
//         "click",
//         function(){

//             let nom =
//                 document.getElementById("nom")
//                 .value
//                 .trim();

//             if(nom===""){

//                 alert(
//                     "Introdueix el teu nom"
//                 );

//                 return;
//             }

//             alert(
//                 "Missatge enviat correctament"
//             );

//         }
//     );

