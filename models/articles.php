<?php

class Database {
    public $article_title;
    public $article_content;
    public $array_temp;
    public $temp;
    public $array_spec_article_temp;
    public function Database ($db_server, $db_server_l, $db_server_p, $databse) {
        mysql_connect($db_server, $db_server_l, $db_server_p);
        mysql_select_db($databse);
    }
    //query methods to db
    public function write_to_db() {
        mysql_query("INSERT INTO test (title, conent) VALUES ('" . $this->article_title . "', '" . $this->article_content . "')");
    }
    public function update_to_db() {
        mysql_query("UPDATE test SET title='" . $this->article_title . "', conent='" . $this->article_content . "' WHERE title='" . $this->article_title . "'");
    }
    public function read_from_db() {
        $temp = mysql_query("SELECT * FROM test");
        $articles = array();
        do {
            $temp2 = mysql_fetch_assoc($temp);// шагаем по дискриптору
            if($temp2 !== false){// вытяги и записывая каждую title в массив $artilces 
                $articles[] = $temp2['title'];
            }
        }while($temp2 !== false);
        return $this->array_temp = $articles;
    }
    public function read_from_db_specific_article($a) {
        $temp = mysql_query("SELECT * FROM test WHERE title='". $a . "'");
            $temp2 = mysql_fetch_assoc($temp);// шагаем по дискриптору
            if($temp2 !== false){// вытяги и записывая каждую title в массив $artilces 
                $article = $temp2;
                return $this->array_spec_article_temp = $article;
            }
        return $this->array_spec_article_temp = false;
    }
}

$test = new Database('localhost', 'root', 'root', 'ml2_hw');
$test->article_title = 'Latvia in EU';
$test->article_content = 'Latvia joins to the EU in 2007 so you can...';
$test->read_from_db();
//var_dump($test);

echo '<br/><br/><br/><br/>';


//2nd task

abstract class Articles {
    
    
}






//Library functions


?>