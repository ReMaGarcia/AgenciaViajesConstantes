<?php
require_once "config.php";
include BASE_PATH . "includes/header.php"; ?>

<section class="hero">

    <h1>Agència de Viatges</h1>

    <p>
        Descobreix les millors destinacions
        per a les teves vacances.
    </p>

</section>

<section class="cards">

    <article class="cardparis">

        <h2>París</h2>

        <p>
            Visita la Torre Eiffel i els
            seus museus.
        </p>

    </article>

    <article class="cardroma">

        <h2>Roma</h2>

        <p>
            Descobreix la història de
            l'Imperi Romà.
        </p>

    </article>

    <article class="cardlondres">

        <h2>Londres</h2>

        <p>
            Gaudeix dels seus monuments
            i mercats.
        </p>

    </article>

</section>

<div class="table-form"> 
    <div>
        <?php include BASE_PATH . "includes/destins.php";?>
    </div>
    <div>
        <?php include BASE_PATH . "includes/formcontacte.php";?>
    </div>
</div>

<?php include BASE_PATH . "includes/footer.php"; ?>