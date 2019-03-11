<?php
function checkWord($word = ""){
    $blacklist = explode(",", file_get_contents("blacklist.txt"));
    if(!empty($word)){
        if(!in_array($word, $blacklist)){
            return "allowed";
        }
        else{
            return "not allowed";
        }
    }
    else{
        return "missing parameter";
    }
}
echo checkWord(isset($_GET['word']) ? $_GET['word'] : "");