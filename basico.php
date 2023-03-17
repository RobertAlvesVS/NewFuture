<?php include "nav.php"; 
$stmt = $conectar->prepare("SELECT * FROM cards WHERE category = 'basico'");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<main id = "basic">
    <?php foreach ($results as $cards):?>
        <div class="new-button">
        <div>
            <img src="<?= $cards["image"]?>"/>
        </div>
        <div>
            <h2><?= $cards["text"] ?></h2>
        </div>
        </div>
        <?php endforeach;?>
</main>

<?php 
$stmt = $conectar->prepare("SELECT * FROM cards WHERE category = 'intermediario'");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<main id = "intermediario">
    <?php foreach ($results as $cards):?>
        <div class="new-button">
        <div>
            <img src="<?= $cards["image"]?>"/>
        </div>
        <div>
            <h2><?= $cards["text"] ?></h2>
        </div>
        </div>
        <?php endforeach;?>
</main>

<?php 
$stmt = $conectar->prepare("SELECT * FROM cards WHERE category = 'avancado'");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<main id = "avancado">
    <?php foreach ($results as $cards):?>
        <div class="new-button">
        <div>
            <img src="<?= $cards["image"]?>"/>
        </div>
        <div>
            <h2><?= $cards["text"] ?></h2>
        </div>
        </div>
        <?php endforeach;?>
</main>
<script src="js/script.js"></script>
</body>

</html>