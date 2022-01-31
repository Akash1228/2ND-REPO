<?PHP
$db_hostname="localhost";
$db_username = "root";
$db_password="";
$db_name="akash";

$conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);

if(!$conn){
    echo "could'nt connect to mysqli server :".mysqli_connect_error();
    exit;
}

$name = $_POST['name'];
$password = $_POST['password'];

$sql ="INSERT INTO customerdetails(name,password) values ('$name','$password');";

$result = mysqli_query($conn,$sql);

if(!$result){
    echo "error" . mysqli_error($conn);
    exit;
}

echo "regestration successful";

mysqli_close($conn);

?>