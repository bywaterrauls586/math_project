 <?php
function generateRandomCode() {
    $code = "";
    for ($i = 0; $i < 8; $i++) {
        $code .= chr(rand(97, 122)); // generates a random lowercase letter between 'a' and 'z'
    }
    return $code;
}
?>