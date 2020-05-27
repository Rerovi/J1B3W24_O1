<?php
require 'resources/includes/header.php';
require 'resources/includes/data.php';
$characters = getAllCharacters();
?>
<header>
    <h1>Alle <?echo count($characters); ?> characters uit de database</h1>
</header>
<div id="container">
    <?
    foreach ($characters as $character) {

    ?>
    <a class="item" href="character.php?id=<? echo $character ["id"]; ?>">
        <div class="left">
            <img class="avatar" src="resources/images/<? echo $character ["avatar"];?>">
        </div>
        <div class="right">
            <h2><? echo $character ["name"]; ?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span><? echo $character["health"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span><? echo $character["attack"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><? echo $character["defense"]; ?></li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
        <? } ?>
</div>
<?
require 'resources/includes/footer.php';

