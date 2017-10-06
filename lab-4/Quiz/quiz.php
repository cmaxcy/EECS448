<?php
//access the global array called $_POST to get the values from the text fields

$q_count = 0;
$cq_count = 0;

$q1_test = "What is 1 + 1?";
$q1_answer = $_POST["q1"];
$q1_correct = "2";
$q_count++;
if ($q1_answer == $q1_correct) {
    $cq_count++;
}

$q2_test = "What is 3 + 6?";
$q2_answer = $_POST["q2"];
$q2_correct = "9";
$q_count++;
if ($q2_answer == $q2_correct) {
    $cq_count++;
}

$q3_test = "What is 0 + 6?";
$q3_answer = $_POST["q3"];
$q3_correct = "6";
$q_count++;
if ($q3_answer == $q3_correct) {
    $cq_count++;
}

$q4_test = "What is -1 + 3?";
$q4_answer = $_POST["q4"];
$q4_correct = "2";
$q_count++;
if ($q4_answer == $q4_correct) {
    $cq_count++;
}

$q5_test = "What is 2 + 7?";
$q5_answer = $_POST["q5"];
$q5_correct = "9";
$q_count++;
if ($q5_answer == $q5_correct) {
    $cq_count++;
}

echo "Question 1: " . $q1_test . "<br>";
echo "You answered: " . $q1_answer . "<br>";
echo "Correct response: " . $q1_correct . "<br>";
echo "<br>";

echo "Question 2: " . $q2_test . "<br>";
echo "You answered: " . $q2_answer . "<br>";
echo "Correct response: " . $q2_correct . "<br>";
echo "<br>";

echo "Question 3: " . $q3_test . "<br>";
echo "You answered: " . $q3_answer . "<br>";
echo "Correct response: " . $q3_correct . "<br>";
echo "<br>";

echo "Question 4: " . $q4_test . "<br>";
echo "You answered: " . $q4_answer . "<br>";
echo "Correct response: " . $q4_correct . "<br>";
echo "<br>";

echo "Question 5: " . $q5_test . "<br>";
echo "You answered: " . $q5_answer . "<br>";
echo "Correct response: " . $q5_correct . "<br>";
echo "<br>";

echo "Score: " . $cq_count . "/" . $q_count . "<br>";
echo "Percent: " . ($cq_count / $q_count) * 100 . "%";
?>
