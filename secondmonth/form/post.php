<?php

header("Content-Type: text/html; charset=utf-8");

if (!empty($_POST["name"])&&!empty($_POST["email"])&&!empty($_POST["tel"])&&!empty($_POST["password"]))
{
	$name=$_POST['name']; 
	$email=$_POST['email']; 
	$tel=$_POST['tel']; 
	$pass=$_POST['password'];
	$agree=$_POST['agree'];
	$birth=$_POST['date'];
	//echo $agree;
	echo "Hello $name! Your email: $email, phone number: $tel, password is $pass<br>";
	
	
	//echo $birth;
	$signs = array("Козерог", "Водолей", "Рыбы", "Овен", "Телец", "Близнецы", "Рак", "Лев", "Девы", "Весы", "Скорпион", "Стрелец");
    $signsstart = array(1=>21, 2=>20, 3=>20, 4=>20, 5=>20, 6=>20, 7=>21, 8=>22, 9=>23, 10=>23, 11=>23, 12=>23);
    //print_r ($signsstart);
    $date=explode("-", $birth);
    //echo $date;
    $mon=$date[1] % 12;
    //echo $date[1].' '.$mon;\
    echo "Your zodiak is: ";
    if($date[2] < $signsstart[$date[1] + 1])
    	echo $signs[$date[1]-1];
    else echo $signs[$date[1] % 12];
	echo "<br>";
    if ($agree=='yes') echo "You agreed";
	else echo "You didn't agreed";
}
else
{
 	echo "the text is wrong, try again";

}