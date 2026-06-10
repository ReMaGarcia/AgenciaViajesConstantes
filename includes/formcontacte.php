<h2>Contacta amb nosaltres</h2>

        <form id="formulari" action="validarForm.php" method="post" onsubmit="return validarForm()"> <!--con onsubmit validaré el formulario antes de que se envien los datos. Utilizo return para manejar el envio. Si algo ha ido mal no lo envia y me devuelve false.-->

            <label for="nom"></label>
            <input type="text" name="fnom" id="nom" placeholder="Nom">
            <span class="error-message" id="error-nom"></span>

            <label for="email"></label>
            <input type="email" name="femail" id="email" placeholder="Email">
            <span class="error-message" id="error-email"></span>

            <label for="missatge"></label>
            <textarea id="missatge" name="fmissatge" placeholder="Missatge">
            </textarea>
            <span class="error-message" id="error-text"></span>


            <button type="submit" id="btnEnviar">Enviar</button>
            <span class="submit" id="formu-enviat"></span>
        </form>