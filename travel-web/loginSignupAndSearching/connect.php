<?php
$name = $_POST['name'];
$password = $_POST['password'];


$conn = new mysqli('localhost:3308', 'root', '', 'trip');

if ($conn->connect_error) {
    die('connection failed :' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("select * from signup where name = ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if ($data['password'] === $password) {
            echo "<script>
            alert('Logged in Sucessfully');
            window.location.href='/travel-web/index.html';
            </script>";
        } else {
            echo "<script>
            alert('WorngUsername Or password');
            window.location.href='login.html';
            </script>";
        }
    }
    $stmt->close();
    $conn->close();
}
