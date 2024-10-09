<?php
$correct_password = "password123";
do {
    echo "Please enter the password: ";
    $input_password = trim(fgets(STDIN)); // Reads user input from the terminal
    if ($input_password !== $correct_password) {
        echo "Incorrect password.\n";
    }
} while ($input_password !== $correct_password);

echo "Access Granted.";
?>

<form method="post">
    <label for="password">Please enter the password:</label>
    <input type="password" name="password" id="password">
    <button type="submit">Submit</button>
</form>