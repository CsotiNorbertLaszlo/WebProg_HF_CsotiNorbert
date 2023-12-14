<?php


if (isset($_POST['email'], $_POST['firstName'], $_POST['lastName'],
    $_POST['attend'], $_POST['tshirt'])) {

    $email = htmlspecialchars($_POST['email']);
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);

    $attend = $_POST['attend'];
    $tshirt = $_POST['tshirt'];

    echo "firstName : " . $firstName . "<br>" . "lastName :  " . $lastName . " <br>" . "email : " . $email . "<br>";
    foreach ($attend as $item) {
        echo "event : " . $item . "<br>";
    }

    echo "tshirt :  " . $tshirt . "<br >";




    if ($_FILES['abstractFile']['error'] == 0) {
        if (($_FILES['abstractFile']['size'] <= 3000000) && $_FILES['abstractFile']['type'] == 'application/pdf') {
            echo "abstractFile : " . $_FILES['abstractFile']['name'] . "<br>";
            echo "abstractFile size : " . $_FILES['abstractFile']['size'] . "<br>";
            echo "abstractFile type : " . $_FILES['abstractFile']['type'] . "<br>";
        } else {
            echo "File is too big or not a PDF.";
        }
    } else {
        echo "Error: 'abstractFile' file not uploaded.";
    }


} else {
    die();

}
