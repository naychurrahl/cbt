<?php

    if(!isset($_COOKIE['start'])){
        header("Refresh: 2; url=login.php");
        echo "Kindly log in first <br> <!--";
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
        }
        #questions > ol > li {
            margin-top: 16px;
        }
        ol#options {
            list-style-type: lower-alpha;
        }
    </style>
</head>
<body style="display: flex; flex-direction: column; gap: 16px; min-height: 90vh; width: 100wh;">
    <header style="display: flex; align-items: center; justify-content: center;">
        <h1 style="font-size: 64px;">CISCO EXAMS</h1>
    </header>
    <main style="display: flex; flex-direction: column; min-height: 30vh; width: 100wh; background-color: green; padding: 16px;">
        <div id="instructions">
            <h3>Instructions:</h3>
            <ul>
                <li>Answer all questions</li>
                <li>Make no noise</li>
            </ul>
        </div>
        <h3 style="align-self: center;">Questions</h3>
        <form action="result.php" method="post">
            <div id="questions">
                <ol>
                    <li>
                        <div id="question">
                            <div id="question" style="width: 100wh;">
                                A computer is an electronic device that accepts and processes ________ to give us ___________
                            </div>
                            <ol style="display: flex; flex-direction: row; gap: 32px;" id="options">
                                <li>
                                    <div id="options">
                                        data ... information
                                        <input type="radio" name="question1" id="1" value="a">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        data ... stuff
                                        <input type="radio" name="question1" id="1" value="b">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        information ... data
                                        <input type="radio" name="question1" id="1" value="c">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        information ... fact
                                        <input type="radio" name="question1" id="1" value="d">
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </li>
                    <li>
                        <div id="question">
                            <div id="question" style="width: 100wh;">
                                The ________ are the visible and touchable part of a computer
                            </div>
                            <ol style="display: flex; flex-direction: row; gap: 32px;" id="options">
                                <li>
                                    <div id="options">
                                        machine
                                        <input type="radio" name="question2" id="1" value="a">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        software
                                        <input type="radio" name="question2" id="1" value="b">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        hardware
                                        <input type="radio" name="question2" id="1" value="c">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        data
                                        <input type="radio" name="question2" id="1" value="d">
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </li>
                    <li>
                        <div id="question">
                            <div id="question" style="width: 100wh;">
                                The ________ memory is the primary storage of a computer
                            </div>
                            <ol style="display: flex; flex-direction: row; gap: 32px;" id="options">
                                <li>
                                    <div id="options">
                                        RAM
                                        <input type="radio" name="question3" id="1" value="a">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        GOAT
                                        <input type="radio" name="question3" id="1" value="b">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        SHEEP
                                        <input type="radio" name="question3" id="1" value="c">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        ROM
                                        <input type="radio" name="question3" id="1" value="d">
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </li>
                    <li>
                        <div id="question">
                            <div id="question" style="width: 100wh;">
                                ROM stands for
                            </div>
                            <ol style="display: flex; flex-direction: row; gap: 32px;" id="options">
                                <li>
                                    <div id="options">
                                        Random onion memory
                                        <input type="radio" name="question4" id="1" value="a">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        Random Only Memory
                                        <input type="radio" name="question4" id="1" value="b">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        Read Only Memory
                                        <input type="radio" name="question4" id="1" value="c">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        Reaction Of Machine
                                        <input type="radio" name="question4" id="1" value="d">
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </li>
                    <li>
                        <div id="question">
                            <div id="question" style="width: 100wh;">
                                The ________ is responsible for supplying electricity to the computer
                            </div>
                            <ol style="display: flex; flex-direction: row; gap: 32px;" id="options">
                                <li>
                                    <div id="options">
                                        Power line
                                        <input type="radio" name="question5" id="1" value="a">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        Socket
                                        <input type="radio" name="question5" id="1" value="b">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        Power supply
                                        <input type="radio" name="question5" id="1" value="c">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        Temperature
                                        <input type="radio" name="question5" id="1" value="d">
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </li>
                    <li>
                        <div id="question">
                            <div id="question" style="width: 100wh;">
                                The motherboard is a very important component of a computer
                            </div>
                            <ol style="display: flex; flex-direction: row; gap: 32px;" id="options">
                                <li>
                                    <div id="options">
                                        No
                                        <input type="radio" name="question6" id="1" value="a">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        Yes
                                        <input type="radio" name="question6" id="1" value="b">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        Maybe
                                        <input type="radio" name="question6" id="1" value="c">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        I don't know
                                        <input type="radio" name="question6" id="1" value="d">
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </li>
                    <li>
                        <div id="question">
                            <div id="question" style="width: 100wh;">
                                Is it true that a computer can overheat without a cooling system?
                            </div>
                            <ol style="display: flex; flex-direction: row; gap: 32px;" id="options">
                                <li>
                                    <div id="options">
                                        No
                                        <input type="radio" name="question7" id="1" value="a">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        Yes
                                        <input type="radio" name="question7" id="1" value="b">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        Maybe
                                        <input type="radio" name="question7" id="1" value="c">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        I don't know
                                        <input type="radio" name="question7" id="1" value="d">
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </li>
                    <li>
                        <div id="question">
                            <div id="question" style="width: 100wh;">
                                The RAM is usually Larger than the ROM
                            </div>
                            <ol style="display: flex; flex-direction: row; gap: 32px;" id="options">
                                <li>
                                    <div id="options">
                                        No
                                        <input type="radio" name="question8" id="1" value="a">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        Yes
                                        <input type="radio" name="question8" id="1" value="b">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        Maybe
                                        <input type="radio" name="question8" id="1" value="c">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        I don't know
                                        <input type="radio" name="question8" id="1" value="d">
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </li>
                    <li>
                        <div id="question">
                            <div id="question" style="width: 100wh;">
                                Which of the computer memory stores information permanently
                            </div>
                            <ol style="display: flex; flex-direction: row; gap: 32px;" id="options">
                                <li>
                                    <div id="options">
                                        RAM
                                        <input type="radio" name="question9" id="1" value="a">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        CMOS
                                        <input type="radio" name="question9" id="1" value="b">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        ROM
                                        <input type="radio" name="question9" id="1" value="c">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        Motherboard
                                        <input type="radio" name="question9" id="1" value="d">
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </li>
                    <li>
                        <div id="question">
                            <div id="question" style="width: 100wh;">
                                An operating system is a software
                            </div>
                            <ol style="display: flex; flex-direction: row; gap: 32px;" id="options">
                                <li>
                                    <div id="options">
                                        No
                                        <input type="radio" name="question0" id="1" value="a">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        Yes
                                        <input type="radio" name="question0" id="1" value="b">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        Maybe
                                        <input type="radio" name="question0" id="1" value="c">
                                    </div>
                                </li>
                                <li>
                                    <div id="options">
                                        I don't know
                                        <input type="radio" name="question0" id="1" value="d">
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </li>
                </ol>
            </div>
            <div id="submit">
                <input type="submit" value="submit" name="done">
            </div>
        </form>
    </main>
</body>
</html>