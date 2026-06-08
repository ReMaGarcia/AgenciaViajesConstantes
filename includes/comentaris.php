<h2>Deixa la teva resenya viatgera</h2>

<section class="resenya">
    <form action="validarCom.php" method="post" onsubmit="return validarComentaris()">
        <label for="nomC"></label>
        <input type="text" name="fuser" id="nomC" placeholder="Nom Usuari">
        <span class="error-message" id="error-nomC"></span>

        <label for="emailC"></label>
        <input type="text" name="fmail" id="emailC" placeholder="Email">
        <span class="error-message" id="error-emailC"></span>

        <label for="missatgeC"></label>
        <textarea id="missatgeC" name="fmessage" placeholder="Deixa el teu missatge"></textarea>
        <span class="error-message" id="error-textC"></span>

        <label for="data"></label>
        <input type="hidden" name="fdata" id="data">

        <button type="submit" id="enviarCom">Enviar</button>
        <span class="submit" id="formu-enviatC"></span>

    </form>
</section>