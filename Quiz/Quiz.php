<?php

$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];

$total = 0;

if($q1 == 1 || $q1 == 2 || $q1 == 3 || $q1 == 4)
{
    echo "Question 1: What is 2+2?<br>";
    echo "You answered: " . $q1 . "<br>";
    echo "Correct answer: 4";
    echo "<br>";
    echo "<br>";

    if($q1 == 4)
    {
        $total = $total + 1;
    }
}

if($q2 == 1 || $q2 == 2 || $q2 == 3 || $q2 == "4")
{
    echo "Question 2: What is 2-2+1?<br>";
    echo "You answered: " . $q2 . "<br>";
    echo "Correct answer: 1";
    echo "<br>";
    echo "<br>";

    if($q2 == 1)
    {
        $total = $total + 1;
    }
}

if($q3 == 1 || $q3 == 2 || $q3 == 3 || $q3 == 4)
{
    echo "Question 3: What is 2*2?<br>";
    echo "You answered: " . $q3 . "<br>";
    echo "Correct answer: 4";
    echo "<br>";
    echo "<br>";

    if($q3 == 4)
    {
        $total = $total + 1;
    }
}

if($q4 == 1 || $q4 == 2 || $q4 == 3 || $q4 == 4)
{
    echo "Question 4: What is 2/2?<br>";
    echo "You answered: " . $q4 . "<br>";
    echo "Correct answer: 1";
    echo "<br>";
    echo "<br>";

    if($q4 == 1)
    {
        $total = $total + 1;
    }
}

if($q5 == 1 || $q5 == 2 || $q5 == 3 || $q5 == 4)
{
    echo "Question 5: What is 2^2?<br>";
    echo "You answered: " . $q5 . "<br>";
    echo "Correct answer: 4";
    echo "<br>";
    echo "<br>";

    if($q5 == 4)
    {
        $total = $total + 1;
    }
}

if($q1 != 0 || $q2 != 0 || $q3 != 0 || $q4 != 0 || $q5 != 0)
{
        echo "Correct: " . $total . "<br>";
        echo "Percentage: " . ($total / 5 * 100) . "%<br>";
}




?>
