<?php
$title = "Welcome";
require_once __DIR__.'/_header.php';
?>

<?php
$letters = ["a", "b", "c"];
?>

<main>

    <?php
    foreach($letters as $letter){
        echo "<div>$letter</div>";
    }
    ?>




<?php
require_once __DIR__."/db.php";
?>

</main>

<?php require_once __DIR__.'/_footer.php' ?>