<?php
$userEmail = $_POST["userEmail"];
$userPassword = $_POST["userPassword"];
if ($userEmail == "arf") {
    if ($userPassword == "12345") {
echo "succes login";
header('Location: arf/', TRUE, 302);
    }
    else {
echo "password incorrect";
    }
} else {
echo "username incorrect";

}
?>