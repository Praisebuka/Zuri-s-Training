<?php
date_default_timezone_set('UTC');
header('Content-Type: application/json');
if (isset($_GET['slack_name']) && isset($_GET['track'])) {
    $slackName = $_GET['slack_name'];
    $track = $_GET['track'];
 
    $githubFileURL = 'https://github.com/Praisebuka/Zuri-s-Training/blob/main/api.php';
    $githubSourceURL = 'https://github.com/Praisebuka/Zuri-s-Training';

    $utcDateTime = gmdate('Y-m-d\TH:i:s\Z');
    $currentDay = date('l');
    $response = [
        'slack_name' => $slackName,
        'day_
_of_week' => $currentDay,
        'utc_time' => $utcDateTime,
        'track' => $track,
        'github_file_url' => $githubFileURL,
        'github_source_url' => $githubSourceURL,
        'status_code' => 200,
    ];

    echo json_encode($response);
} else {

    echo json_encode(['error' => 'Missing required parameters']);
    http_response_code(400);
}
?>
