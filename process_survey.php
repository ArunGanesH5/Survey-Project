<?php
// Database connection
$host = "localhost";
$username = "root"; // Replace with your database username
$password = "";     // Replace with your database password
$database = "SurveyDB";

// Connect to the database
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $q1 = htmlspecialchars($_POST['q1']);
    $q2 = htmlspecialchars($_POST['q2']);
    $q3 = htmlspecialchars($_POST['q3']);
    $q4 = htmlspecialchars($_POST['q4']);
    $q5 = htmlspecialchars($_POST['q5']);
    $q6 = htmlspecialchars($_POST['q6']);
    $q7 = htmlspecialchars($_POST['q7']);
    $q8 = htmlspecialchars($_POST['q8']);
    $q9 = htmlspecialchars($_POST['q9']);
    $q10 = htmlspecialchars($_POST['q10']);
    $q11 = htmlspecialchars($_POST['q11']);
    $q12 = htmlspecialchars($_POST['q12']);
    $q13 = htmlspecialchars($_POST['q13']);
    $q14 = htmlspecialchars($_POST['q14']);
    $q15 = htmlspecialchars($_POST['q15']);
    $q16 = htmlspecialchars($_POST['q16']);
    $q17 = htmlspecialchars($_POST['q17']);
    $q18 = htmlspecialchars($_POST['q18']);
    $q19 = htmlspecialchars($_POST['q19']);
    $q20 = htmlspecialchars($_POST['q20']);
    $q21 = htmlspecialchars($_POST['q21']);
    $q22 = htmlspecialchars($_POST['q22']);
    $q23 = htmlspecialchars($_POST['q23']);
    $q24 = htmlspecialchars($_POST['q24']);
    $q25 = htmlspecialchars($_POST['q25']);
    $q26 = htmlspecialchars($_POST['q26']);
    $q27 = htmlspecialchars($_POST['q27']);
    $q28 = htmlspecialchars($_POST['q28']);
    $q29 = htmlspecialchars($_POST['q29']);
    $q30 = htmlspecialchars($_POST['q30']);


    // Insert data into the database
    $stmt = $conn->prepare(
        "INSERT INTO survey_responses (email, question_1, question_2, question_3, question_4, question_5,question_6,question_7,question_8,question_9,question_10,
        question_11,question_12,question_13,question_14,question_15,
        question_16,question_17,question_18,question_19,question_20,
        question_21,question_22,question_23,question_24,question_25,
        question_26,question_27,question_28,question_29,question_30)
        VALUES (?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"
    );
    $stmt->bind_param("sssssssssssssssssssssssssssssss", $email, $q1, $q2, $q3, $q4, $q5,
    $q6,$q7,$q8,$q9,$q10,
    $q11,$q12,$q13,$q14,$q15,
    $q16,$q17,$q18,$q19,$q20,
    $q21,$q22,$q23,$q24,$q25,
    $q26,$q27,$q28,$q29,$q30
);

    if ($stmt->execute()) {
        echo "Thank you for completing the survey!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid Request.";
}
?>