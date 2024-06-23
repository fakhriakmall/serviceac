<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $dob = htmlspecialchars($_POST['dob']);

    // Simulate saving the data, e.g., to a database or a file
    // For demonstration, we'll just display the data
    $profile = array(
        'name' => $name,
        'email' => $email,
        'dob' => $dob
    );

    // Optionally, save to a JSON file (uncomment if needed)
    // $profiles = [];
    // if (file_exists('profiles.json')) {
    //     $profiles = json_decode(file_get_contents('profiles.json'), true);
    // }
    // $profiles[] = $profile;
    // file_put_contents('profiles.json', json_encode($profiles));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Submitted</title>
</head>
<body>
    <h1>Profile Submitted</h1>
    <p><strong>Name:</strong> <?php echo $profile['name']; ?></p>
    <p><strong>Email:</strong> <?php echo $profile['email']; ?></p>
    <p><strong>Date of Birth:</strong> <?php echo $profile['dob']; ?></p>
    <br>
    <a href="profil.php">Back to Home</a>
</body>
</html>
