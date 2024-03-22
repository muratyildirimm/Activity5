<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Preview</title>
</head>
<body>

<h2>Preview</h2>

<?php
// Formdan alınan verileri doğrulayın ve yazdırın.
$name = isset($_POST['name']) ? $_POST['name'] : 'Not provided';
$username = isset($_POST['username']) ? $_POST['username'] : 'Not provided';
$password = isset($_POST['password']) ? $_POST['password'] : 'Not provided'; // Gerçek uygulamada parola gösterilmemeli!
$address = isset($_POST['address']) ? $_POST['address'] : 'Not provided';
$country = isset($_POST['country']) ? $_POST['country'] : 'Not provided';
$zip = isset($_POST['zip']) ? $_POST['zip'] : 'Not provided';
$email = isset($_POST['email']) ? $_POST['email'] : 'Not provided';
$sex = isset($_POST['sex']) ? $_POST['sex'] : 'Not provided';
$language = isset($_POST['language']) ? $_POST['language'] : 'Not provided';
$about = isset($_POST['about']) ? $_POST['about'] : 'Not provided';

echo "<p>$name</p>";
echo "<p>$username</p>";
echo "<p>$password</p>"; // Gerçek uygulamada parola gösterilmemeli!
echo "<p>Address: $address</p>";
echo "<p>$country</p>";
echo "<p>Zip: $zip</p>";
echo "<p>$email</p>";
echo "<p>$sex</p>";
echo "<p>$language</p>";
echo "<p>About: $about</p>";
?>

</body>
</html>
