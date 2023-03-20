 <?php
echo("<prev>");
$first_name=$_POST['firstname'] ;
$last_name=$_POST['lastname'];
$username=$_POST['username'];
$password=$_POST['password'];
// hashing the password
$password = password_hash($password,PASSWORD_DEFAULT);
$conn= mysqli_connect("localhost","root","","groove");
$sql= "SELECT * FROM users WHERE username='{$username}'";
// $res=$conn->query($sql);
// echo ("hello");
// If($res->rows!=0)
// {
//     echo("User  with same username already exists on database");
//     die();  
// }
$last_seen = time();
$reg_date = time();
$sql_1="INSERT INTO users (
        username,
        last_seen,
        password,
        first_name,
        photo
        ) VALUES (
        ' {$username} ' ,
        ' {$last_seen} ,
        ' {$password} ' ,
        ' {$first_name} ' ,
        ''
        )";
// if($conn->query($sql_1)){
//     $u  = get_user_by_username($conn,$username);
//     message("Your account was created successfully","success");
//     $_SESSION['user'] = $u;
//     header("Location: my_account.php");
//     die();
//  }else{
//     message("Something went wrong while creating your account. Please try again.","danger");
//     header("Location: login.php");
//     die();
//  }
?>
your details are noted
