<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio_project";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    echo ("Connection failed: " . $conn->connect_error);
} else {
    if ($_POST['pass'] == $_POST['pass2']) {
        $name = $_POST['username'];
        $mail = $_POST['email'];
        $pass = $_POST['pass']; // Assuming you're storing passwords in plaintext for this example (Not recommended in production)
        $stmt = $conn->prepare("SELECT COUNT(*) FROM User WHERE name=? AND email=?");
        $stmt->bind_param("ss", $name, $mail);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row['COUNT(*)'] > 0) {
            header("Location: ../login.html");
            exit;
        } else {

            $sql = "INSERT INTO User (name, email, password) VALUES ('$name', '$mail', '$pass')";

            if (mysqli_query($conn, $sql)) {
                header("Location: ../H.php"); // Redirect to H.php
                exit; // Ensure no further code is executed after the header redirection
            } else {
                echo 'Error in inserting: ' . mysqli_error($conn);
            }
        }

    }
}
?>

