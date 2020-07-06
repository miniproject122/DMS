<?php
session_start();

if(isset($_SESSION['username']))
{
    header('location: dashboard.html');
}
else{
    
}
$servername = "localhost";
$serverusername = "neha";
$serverpassword = "neha";
$dbname = "document";
$conn = new mysqli($servername, $serverusername, $serverpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




if(isset($_POST['username']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];



//login with user
    if (empty($username) || empty($password)) 
    {
    $errormsg = "Username or password values are blank, please try again.";
    }
    else 
    {
        $login = "select username , password from student where username = '$username' and password = '$password' LIMIT 1";
        $result = mysqli_query($conn,$login) or die(mysqli_error($conn)."errorsss");
            if(mysqli_num_rows($result)>0)
            {
            
            $_SESSION['is_logged_in'] = true;
            $_SESSION['username'] = $username;
            header('location: dashboard.html');
            
            }   
            else

            $errormsg = "User login or password is not valid";
                 
    }

}




?>
<?php
function login()
    
{
    alert("you are successfully registered");
    window.location="file:///C:/xampp/htdocs/dashboard.html";
    
}
?>