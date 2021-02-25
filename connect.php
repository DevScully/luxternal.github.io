<?php


$server = "localhost" ;
$username = "root" ;
$password = " " ;
$dbname = "dbpoheptpoggvs" ;




$conn = mysqli_connect($server, $username, $password, $dbname) ;

if(isset($_POST['submit'])){
    
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['number']) && !empty($_POST['subject']) && !empty($_POST['inquiry']) && !empty($_POST['message'])){

$name = $_POST[ 'name'];
$email = $_POST[ 'email'];
$number = $_POST[ 'number'];
$subject = $_POST[ 'subject'];
$inquiry = $_POST[ 'inquiry'];
$message = $_POST[ 'message'];
$query = "insert into Contact(name,email,number,subject,inquiry,message) values('$name', '$email', '$number', '$subject', '$inquiry', '$message')";
$run = mysqli_query($conn,$query) or die(mysqli_error());

if($run){
    echo "form submitted successfully";
}
else{
    echo "form not submitted";
}

}
else{
    echo "all fields required";
}


}



?>