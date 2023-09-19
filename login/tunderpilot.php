<?php
define('SECRET_KEY', '0x4AAAAAAAKPOK0ccq3VUGpZ9_hPczBiiS0');

function handlePost($request) {
    $body = $_POST;
    
    $token = $body['cf-turnstile-response'];
    $ip = $_SERVER['REMOTE_ADDR'];

    
    $formData = array(
        'secret' => SECRET_KEY,
        'response' => $token,
        'remoteip' => $ip
    );

    $ch = curl_init('https://challenges.cloudflare.com/turnstile/v0/siteverify');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $formData);
    $result = curl_exec($ch);
    curl_close($ch);

    $outcome = json_decode($result, true);
    if (!$outcome['success']) {
        return 'The provided Turnstile token was not valid! <br>' . json_encode($outcome);
    }
    
    return 'Turnstile token successfully validated. <br>' . json_encode($outcome);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = handlePost($_POST);
    echo $response;
} else {
    $url = parse_url($_SERVER['REQUEST_URI']);
    header('Content-Type: text/html');
    echo "Net post Zapros";
}
?>