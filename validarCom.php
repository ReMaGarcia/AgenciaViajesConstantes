<?php 
$nom = trim($_POST['fuser'] ?? "");
$mail = trim($_POST['fmail'] ?? "");
$missatge = trim($_POST['fmessage'] ?? "");
$data = $_POST['fdata'] ?? "";

$errors = [];

//validar
if (empty($nom)) $errors[] = "Inscriu un nom";
if (strlen($nom) < 3) $errors[] = "El nom ha de tenir com a mínim 3 lletres.";
if (strlen($nom) > 50) $errors[] = "Has superat el máxim de 50 caràcters.";
if (!preg_match("/^[a-zA-ZáéíóúñÑüÜ\s\-]+$/", $nom)) $errors[] = "Has introduït caràcters invàlids.";

if (empty($mail)) $errors[] = "Inscriu un mail.";
if (strlen($mail) > 100) $errors[] = "Has superat el máxim de 100 caràcters.";
if (!filter_var($mail, FILTER_VALIDATE_EMAIL) ) $errors[] = "Correu no vàlid.";

if (strlen($missatge) > 500) $errors[] = "Has superat el màxim de 500 caràcters.";
if(strpos($missatge, "<script>")!== false) $errors[] = "No es permet codi HTML.";

if (empty($data)) $data = date('d/m/Y H:i:s');
?>

<?php if (!empty($errors)):?>
    <div class="error-container">
        <h2>Errors:</h2>
        <ul>
            <?php foreach ($errors as $error): ?>
            <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="javascript:history.back()">Tornar</a>
    </div>
    <?php else: ?>
        <div class="totok-container">
        <h2>Comentari Desat!</h2>
        <a href="index.php">Tornar a Inici</a>
    </div>
<?php endif; ?>