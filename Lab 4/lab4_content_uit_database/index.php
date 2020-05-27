<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 4 - Dynamische content</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?
require 'includes/header.php';
$id = 1;
if ($_GET["id"]) {
    $id = $_GET["id"];
}
?>
<div class="main">
<?
$servername = "localhost";
$username = "root";
$password = "mysql";

try {
    $conn = new PDO("mysql:host=$servername;dbname=databank_php", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$sql = "select * from onderwerpen where id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$page = $stmt->fetch();
echo "<h1>".$page ["name"]."</h1>";
echo nl2br($page ["description"]);
echo "<img id='image'"."src ='".$page ["image"]."'".">";
?>
</div>
<?
require 'includes/footer.php';
?>
</body>
</html>