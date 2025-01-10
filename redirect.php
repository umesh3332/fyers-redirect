<?php
if (isset($_GET['auth_code'])) {
    $auth_code = $_GET['auth_code'];
    echo "Authorization Code: " . htmlspecialchars($auth_code);
} else {
    echo "Authorization Code not found.";
}
?>
