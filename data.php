<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Store</title>
</head>
<body>
</body>
</html>

<?php



$email = $_POST['email'];
$pass = $_POST['pass'];

if ($email == $_POST['email']){
   if($pass == $_POST['pass']){
    echo "Login Success";
   }else {
    echo "Login Failed";
   }
}else {
    echo "Invalid Email/Password";
};


// $email = $_POST['email'];
// $pass = $_POST['pass'];

// if(isset($_POST['email']) && isset($_POST['pass']))  {
//     $email = $_POST['email'];
//     $pass = $_POST['pass'];

//     if(!empty($email) && !empty($pass)){
//        echo "Login Success";
//     }else{
//         echo "login failed";
//     }
// }
// else {
//     "Invalid Email/Password";
// };

?>