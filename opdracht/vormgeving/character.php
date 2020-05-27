<?php
require 'resources/includes/header.php';
require 'resources/includes/data.php';
$id = $_GET["id"];
$character = getSingleCharacter($id);
?>
<header><h1><? echo $character ["name"]; ?></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="resources/images/<? echo $character ["avatar"]; ?>">
            <div class="stats" style="background-color: <? echo $character ["color"]; ?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span><? echo $character["health"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span><? echo $character["attack"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><? echo $character["defense"]; ?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>: <? echo $character ["weapon"]; ?></li>
                    <li><b>Armor</b>: <? echo $character ["armor"]; ?></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
                <? echo nl2br($character ["bio"]); ?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<?
require 'resources/includes/footer.php';