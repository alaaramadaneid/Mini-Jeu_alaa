<?php
require_once 'classes.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedHeroType = $_POST['hero'];
    $selectedOpponent = $_POST['opponent'];

    if ($selectedHeroType === "Warrior") {
        $hero = new Warrior("Nom du Guerrier");
    } else if ($selectedHeroType === "Mage") {
        $hero = new Mage("Nom du Mage");
    }

    echo "Combat terminé!";
} else {
    header("Location: index.php");
    exit;
}
?>
