<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>


<h3>Online conference registration</h3>

<form action="K_2.php" method="post" enctype="multipart/form-data">
    <label> First name:
        <input type="text" name="firstName" required>
    </label>
    <br><br>
    <label> Last name:
        <input type="text" name="lastName" required>
    </label>
    <br><br>
    <label> E-mail:
        <input type="email" name="email" required>
    </label>
    <br><br>
    <label> I will attend:<br>
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
</body>
</html>