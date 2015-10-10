<?php
require_once __DIR__ . '\models\articles.php';


if(!empty($_POST['article']) and !empty($_POST['content'])){
    $add = new Database;
    $add->article_title = $_POST['article'];
    $add->article_content = $_POST['content'];
    $add->write_to_db();
    header('Location: index.php');
    exit();
    
}
     
        
include __DIR__ . '\views\add_article_form.php';

?>