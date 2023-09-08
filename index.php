<?php
    # Setting the required params for the endpoints
if (
    isset($_GET['Praise-Ebuka']) &&
    isset($_GET['current_day']) &&
    isset($_GET['utc_time']) &&
    isset($_GET['track']) &&
    isset($_GET['https://github.com/Praisebuka/Zuri-s-Training/blob/main/index.php']) &&
    isset($_GET['https://github.com/Praisebuka/Zuri-s-Training']) &&
    isset($_GET['status_code'])
) {
    #Getting the values and sending them to a variable 
    $slackName = $_GET['slack_name'];
    $currentDay = $_GET['current_day'];
    $utcTime = $_GET['utc_time'];
    $track = $_GET['track'];
    $githubFileUrl = $_GET['github_file_url'];
    $githubRepoUrl = $_GET['github_repo_url'];
    $statusCode = $_GET['status_code'];
    
    # Using an assoc array to store the gotten values
    $response = array(
        'slack_name' => $slackName,
        'current_day' => $currentDay,
        'utc_time' => $utcTime,
        'track' => $track,
        'github_file_url' => $githubFileUrl,
        'github_repo_url' => $githubRepoUrl,
        'status_code' => $statusCode
    );

    # Setting the type to a json format.
    header('Content-Type: application/json');

    # Sending the responose from the array
    // dd($response);
    echo json_encode($response);
} else {
    #Throwing an error if any params are missing.
    $response = array(
        'error' => 'Please make sure that all required fields are filled.'
    );

    header('Content-Type: application/json');

    echo json_encode($response);
}
?>

        <!-- Testing -->
<!-- https://zuriways.vercel.app/?slack_name=praise_ebuka&current_day=Monday&utc_time=2023-08-21T15:04:05Z&track=backend&github_file_url=https://github.com/Praisebuka/Zuri-s-Training/blob/main/index.php&github_repo_url=https://github.com/Praisebuka/Zuri-s-Training&status_code=200 -->
