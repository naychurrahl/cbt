<?php

    require_once("required.php");
    if (!isset($_POST['done'])) {
        header("location: ./");
    }

    $answer = [
        "question1" => "a",
        "question2" => "c",
        "question3" => "a",
        "question4" => "c",
        "question5" => "c",
        "question6" => "b",
        "question7" => "b",
        "question8" => "a",
        "question9" => "c",
        "question0" => "b",
    ];

    $score = 0;
    foreach ($_POST as $key => $value) {
        if ($key == "done") continue;
        if ($value == $answer[$key]) $score++;
    }

    $file = fopen($results, "a");
    fwrite($file, "{$_COOKIE['name']} -> {$score}\n");
    setcookie("start", time(), time() - (60*11));
    setcookie("name", "", time() - (60*11));
    header("refresh: 2; ./");
    echo "Your score has been recorded";
?>