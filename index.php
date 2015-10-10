<?php
require_once __DIR__ . '\models\articles.php';

if(!empty($_GET['specific_article'])){
    $title_temp = $_GET['specific_article'];
    $object_specific_title = new Database('localhost', 'root', 'root', 'ml2_hw');
    $object_specific_title->read_from_db_specific_article($title_temp);
    if ($object_specific_title->array_spec_article_temp != false) {
        $art_specific = $object_specific_title->array_spec_article_temp;
        include __DIR__ . '\views\article_specific.php';
        die();
    }
}

include __DIR__ . '\views\main.php';
?>