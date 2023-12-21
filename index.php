<?php

//loop
//for loop

echo "1. Loop = initialize + condition + increament(++)/decrament(--)<br><br>";

//example-01

echo "1.example-01 <br><br>";

for ( $init = 0; $init <= 10; $init++) {
   echo "Hello world <br>";
}

// example-02

echo " <br>2.example-02 <br><br>";

$startyear = 1990;
$endyear = 2023;

for( $init2 = $startyear; $init2 <= $endyear; $init2++ ) {
    echo "$init2" .'<br>';
}

echo " <br>3.example-03 <br><br>";

?>

<!-- // example-03 -->

<select name="" id="">
    <option value="">1990</option>

<?php


$startyear = 1990;
$endyear = 2023;

for( $init2 = $startyear; $init2 <= $endyear; $init2++ ) {
    echo "$ <option>$init2</option>" .'<br>';
}

?>

</select>

<!-- example-04 -->

<?php

echo "<br><br>example-04<br><br>";

$num = 2 ; 

for($init3 = 1; $init3 <= 10; $init3++){

    $result = $num * $init3;

   echo "$num * $init3 = $result" . "<br>";
}

// <!-- example-04 -->

echo "<br><br>example-05 => Array  for loop. <br><br>";

$array = [
    'Fruits',
    'Apple',
    'Banana',
    'Orange',
    'Jackfruit'
];

$count = count($array);
// count 4 er choto hole  jackfruit asbe na
for ($init4 = 0; $init4 < $count; $init4++){
    echo $array[$init4] . "<br>";
}

// example-05

// forward loop
$num2 = "*";

for ($init5 = 1; $init5 <= 10; $init5++ ){

    $test = str_repeat("$num2",$init5);
    echo $test  ."<br>";
}

// Backward lOOP
for ($init5 = 10; $init5 >= 1; $init5-- ){
    $test = str_repeat("$num2",$init5);
    echo $test  ."<br>";
}


// example-06
echo "<br><br>example-06 => Nested Loop.<br><br>";

$num3 = 3 ;

for ($init6 = 1; $init6 <= $num3; $init6++){
    for ($n = 1; $n <= 10; $n++){
        $answer = $init6 * $n;

        echo "$init6 * $n =  $answer" ."<br>";
    }
}

?>


<!-- Bootstrap form  using -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Form</title>
    <link rel="icon" href="../58481791cef1014c0b5e4994.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<section id="form">
<div class="container">
<div class="row">
<div class="col-6 mx-auto bg-light bg-gradient p-5">
<form action="data.php" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email" type="email" placeholder="enter your email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="pass" type="password" placeholder="enter your password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-secondary">Submit</button>
</form>
</div>
</div>
</div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

