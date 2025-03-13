<?php

    require_once("required.php");
    if(isset($_POST['submit'])){
        $time = 1;
        $name = strtolower(trim($_POST['username']));
        $Pass = ucfirst(substr($name, 0, strpos($name, " ")));
        $pass = $_POST['password'];
        $name = ucwords($name);

        if ($Pass == $pass) {
            $file = fopen($attendance, "a");
            fwrite($file, "{$name}\n");
            setcookie("start", time(), time() + (60*$time));
            setcookie("name", $name, time() + (60*60*24));
            header("location: ./");
        } else {
            echo "<script>alert('Wrong password')</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CISCO: Exam</title>
    <style>
        * {
            box-sizing: border-box;
            color: green;
        }
        #questions > ol > li {
            margin-top: 16px;
        }
        ol#options {
            list-style-type: lower-alpha;
        }
        html, body {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100vw;
            height: 100vh;
            background-color: black;
        }
    </style>
</head>
<body style="display: flex; flex-direction: column; gap: 16px; min-height: 90vh;">
    <header style="display: flex; align-items: center; justify-content: center;">
        <h1 style="font-size: 64px;">CISCO EXAMS</h1>
    </header>
    <main style="display: flex; flex-direction: column; min-height: 30vh; justify-content: center; align-items: center; width: auto; padding: 16px; gap: 64px;">
       <form action="" method="post">
            <fieldset style="display: flex; flex-direction: column; width: 50vw;">
                <legend>login</legend>
                <label for="username"> Full Name</label>
                <input type="text" name="username" placeholder="John Franklin Doe">
                <label for="password"> Password</label>
                <input type="password" name="password">
                <input type="submit" name="submit" value="submit">
            </fieldset>
       </form>
    </main>
</body>
</html>