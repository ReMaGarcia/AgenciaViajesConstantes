<h2>Contacta amb nosaltres</h2>

        <form id="formulari" action="registros.php" method="post" onsubmit="return validarForm()"> <!--con on submit validaré el formulario antes de que se envien los datos. Utilizo return para manejar el envio. Si algo ha ido mal no lo envia y me devuelve false.-->

            <label for="nom"></label>
            <input type="text" name="fnombre" id="nom" placeholder="Nom">
            <span class="error-message" id="error-nom"></span>

            <label for="email"></label>
            <input type="email" name="fmail" id="email" placeholder="Email">
            <span class="error-message" id="error-email"></span>

            <label for="missatge"></label>
            <textarea id="missatge" name="fmensaje" placeholder="Missatge">
            </textarea>
            <span class="error-message" id="error-text"></span>

            <label for="fecha"></label>
            <input type="hidden" name="ffecha" id="fecha">
         
            <button type="submit" id="btnEnviar">Enviar</button>
            <span class="submit" id="formu-enviado"></span>
        </form>