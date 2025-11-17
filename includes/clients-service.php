<?php
function getClientImages($dir) {
    $allowed = ['jpg','jpeg','png','gif','webp','svg'];
    $files = is_dir($dir) ? scandir($dir) : [];
    $images = [];
    foreach ($files as $f) {
        if ($f === '.' || $f === '..') continue;
        $ext = strtolower(pathinfo($f, PATHINFO_EXTENSION));
        if (in_array($ext, $allowed)) $images[] = $f;
    }
    natsort($images);
    return array_values($images);
}

function renderClientLogos($images, $basePath) {
    $count = count($images);
    echo '<div class="clients-track" style="--logo-count: '.$count.'; --logo-width: 180px; --logo-gap: 3rem;">';
    foreach ($images as $img) {
        $alt = ucwords(strtolower(trim(pathinfo($img, PATHINFO_FILENAME))));
        echo '<div class="client-logo"><img src="'.$basePath.'assets/img/clients/'.$img.'" alt="'.$alt.'"></div>';
    }
    foreach ($images as $img) {
        $alt = ucwords(strtolower(trim(pathinfo($img, PATHINFO_FILENAME))));
        echo '<div class="client-logo"><img src="'.$basePath.'assets/img/clients/'.$img.'" alt="'.$alt.'"></div>';
    }
    echo '</div>';
}