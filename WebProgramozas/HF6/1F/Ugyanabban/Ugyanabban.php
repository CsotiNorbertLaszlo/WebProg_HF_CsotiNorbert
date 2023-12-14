<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>


<h3>Online conference registration</h3>

<form method="post" enctype="multipart/form-data">
    <label> Vezetéknév:
        <input type="text" name="firstName" required>
    </label>
    <br><br>
    <label> Keresztnév: </label>
        <input type="text" name="lastName" required>
    </label>
    <br><br>
    <label> Emailcímet ide:
        <input type="email" name="email" required>
    </label>
    <br><br>
    <label>időpontok<br>
        <input type="checkbox" name="attend[]" value="Event1">Event 1<br>
        <input type="checkbox" name="attend[]" value="Event2">Event 2<br>
        <input type="checkbox" name="attend[]" value="Event3">Event 3<br>
        <input type="checkbox" name="attend[]" value="Event4">Event 4<br>
    </label>

    <br><br>
    <label> What's your T-Shirt size?<br>
        <select name="tshirt" required>
            <option value="P">Please select</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
        </select>
    </label>
    <br><br>
    <label> Upload your abstract<br>
        <input type="file" name="abstractFile" required/>
    </label>
    <br><br>
    <input type="checkbox" name="terms" value="" required>I agree to terms & conditions.<br>
    <br><br>

    <input type="submit" id="submitButton" name="submit" value="Send registration"/>

</form>


<script>
    document.getElementById('submitButton').addEventListener('click', function (event) {
        // Get all the checkboxes with the name 'attend[]'
        var checkboxes = document.querySelectorAll('input[name="attend[]"]');
        // Initialize a variable to keep track of how many checkboxes are checked
        var checkedCount = 0;
        // Iterate through the checkboxes and count the checked ones
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                checkedCount++;
            }
        }
        // If no checkboxes are checked, prevent form submission
        if (checkedCount === 0) {
            alert('Please select at least one event to attend.');
            event.preventDefault(); // Prevent form submission
        }
    });
</script>
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
?>


</body>
</html>