<?php
$reCaptcha = new ReCaptcha($secret);
if (isset($_POST["g-recaptcha-response"])) {
    $resp = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
                );
    if ($resp != null && $resp->success) {
        echo "OK";
    } else {
        echo "CAPTCHA incorrect";
    }
}