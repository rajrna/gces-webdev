<?php 

require_once "../../utils/db.php";
if (isset($_POST['update'])) {
$id = $_POST['id'] ?? ' ';

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);
$dob = $_POST['dob'] ?? '';
$favorite_color = $_POST['color'] ?? '';
$weight = $_POST['weight'] ?? '';
$gender = $_POST['gender'] ?? '';
$hobbies = implode(",", $_POST['hobbies'] ?? []);
$nationality = $_POST['nationality'] ?? 'NP';
$sql = "UPDATE students SET name='$name',email='$email',dob='$dob',favorite_color='$favorite_color',weight=$weight,gender='$gender',hobbies='$hobbies',nationality='$nationality' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
}
$conn->close();