<?php 

require_once "../../utils/db.php";

if (isset($_POST['submit'])) {

    if (isset($_FILES['profile'])) {
        $errors = array();

        $file_name = $_FILES['profile']['name'];

        $file_size = $_FILES['profile']['size'];

        $file_tmp = $_FILES['profile']['tmp_name'];
        $file_type = $_FILES['profile']['type'];

        $file_ext = end(explode('.', $file_name));



        $extensions = array("png");

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "This extension file not allowed, Please choose a png file.";
        }


        $new_name = time() . "-" . basename($file_name);
        $target = "../stdImage/" . $new_name;

        if (
            empty($errors) == true
        ) {
            move_uploaded_file($file_tmp, $target);
        } else {
            print_r($errors);
            die();
        }
    }


	$name = $_POST['name'] ?? '';
	$email = $_POST['email'] ?? '';
	$password = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);
	$dob = $_POST['dob'] ?? '';
	$favorite_color = $_POST['color'] ?? '';
	$weight = $_POST['weight'] ?? '';
	$gender = $_POST['gender'] ?? '';
	$hobbies = implode(",", $_POST['hobbies'] ?? []);
	$nationality = $_POST['nationality'] ?? 'NP';


    $sql = "INSERT INTO students (`name`, `email`, `password`, `dob`, `color`, `weight`, `gender`, `hobbies`, `nationality`,`profile`)
          VALUES('$name','$email','$password','$dob','$favorite_color',$weight,'$gender','$hobbies','$nationality','$new_name');";



    if ($conn->query($sql) == TRUE) {
        // die("SUCESS");
        header('Location:../create/?sucess=sucess');
        // echo "<p>Sucess</p>";
    } else {
        header('Location:../create/?sucess=error');
    }
}
if (isset($_POST['update'])) {





    $id = $_POST['id'] ?? ' ';


    $name = $_POST['name'] ?? ' ';
    $email = $_POST['email'];

    $dob = $_POST['dob'];
    $favorite-color = $_POST['color'];
    $weight = $_POST['weight'];
    $gender = $_POST['gender'];
    $hobbies = implode(",", $_POST['hobbies']);
    $nationality = $_POST['nationality'];



    $sql = "UPDATE students SET name='$name',email='$email',dob='$date',favorite_color='$color',weight=$weight,gender='$gender',hobbies='$hobby',nationality='$nation' WHERE id='$id'";









    if ($conn->query($sql) == TRUE) {
        // die("SUCESS");
        header('Location:../../../?sucess=sucess');
        // echo "<p>Sucess</p>";
    } else {
        header('Location:../../../?sucess=error');
    }
}