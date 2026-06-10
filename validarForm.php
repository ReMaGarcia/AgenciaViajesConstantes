<?php 
// ?? hay valor en el formulario? si no hay dale el valor de vacío "";
$nom = trim($_POST['fnom'] ?? ""); 
$email = trim($_POST['femail'] ?? "");
$missatge = trim($_POST['fmissatge'] ?? "");

//declaro array para poder mostrar los errores todos juntos y no uno a uno.

$errors = [];

//validar
if (empty($nom)) $errors[] = "Inscriu un nom.";
if (strlen($nom) < 3) $errors[] = "El nom ha de tenir com a mínim 3 lletres."; 
if (strlen($nom) > 50) $errors[] = "Has superat el máxim de 50 caràcters.";
if (!preg_match("/^[a-zA-ZáéíóúñÑüÜ\s\-]+$/", $nom)) $errors[] = "Has introduït caràcters invàlids.";

if (empty($email)) $errors[] = "Inscriu un mail.";
if (strlen($email) > 100) $errors[] = "Has superat el máxim de 100 caràcters.";
/*
if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) $errors[] = "Has introduït caràcters invàlids per un correu.";*/

//NOTA: Para validar texto libre como un nombre usamos preg_match(regexp), para validar longitudes strlen(),para textos maliciosos strpos() (devuelve la posición donde encuentra lo que le hemos indicado que busque por ejemplo <script> con intención maliciosa. Si no lo encuentra devuelve false). Para lo demás utilizamos filter_var($variable, constantes predefinidas de php ej: FILTER_VALIDATE_EMAIL (no se puede poner el nombre que quiera, estan predefinidas))

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Correu no vàlid.";

if (strlen($missatge) > 500) $errors[] = "Has superat el màxim de 500 caràcters.";

if (strpos($missatge, "<script>") !== false) $errors[] = "No es permet codi HTML.";
?>

<?php if(!empty($errors)): ?>
    <div class="error-container">
        <h2>Errors:</h2>
        <ul>
            <?php foreach ($errors as $error):?>
                <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="javascript:history.back()">Tornar</a>
    </div>
    <?php else: ?>
    <div class="totok-container">
        <h2>Formulari enviat!</h2>
        <a href="index.php">Tornar a Inici</a>
    </div>
<?php endif; ?>