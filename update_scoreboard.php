<?php
header('Content-Type: application/json');

$host = 'localhost';
$db = 'scoreboard_db';
$user = 'your_username';
$pass = 'your_password';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true);

$teamA = $conn->real_escape_string($data['teamA']);
$scoreA = intval($data['scoreA']);
$teamB = $conn->real_escape_string($data['teamB']);
$scoreB = intval($data['scoreB']);
$fontColor = $conn->real_escape_string($data['fontColor']);
$backgroundColor = $conn->real_escape_string($data['backgroundColor']);
$teamFont = $conn->real_escape_string($data['teamFont']);
$teamFontSize = $conn->real_escape_string($data['teamFontSize']);
$scoreFont = $conn->real_escape_string($data['scoreFont']);
$scoreFontSize = $conn->real_escape_string($data['scoreFontSize']);

$sql = "UPDATE scoreboard SET
            teamA = '$teamA',
            scoreA = $scoreA,
            teamB = '$teamB',
            scoreB = $scoreB,
            fontColor = '$fontColor',
            backgroundColor = '$backgroundColor',
            teamFont = '$teamFont',
            teamFontSize = '$teamFontSize',
            scoreFont = '$scoreFont',
            scoreFontSize = '$scoreFontSize'
        WHERE id = 1";

if ($conn->query($sql) === TRUE) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $conn->error]);
}

$conn->close();
?>
