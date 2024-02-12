<?
header("Content-type:text/html;charset=utf-8");

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "chat";

// 데이터베이스 연결
$db = new mysqli($servername, $username, $password, $dbname);

// 새 메시지 추가
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = $_POST["user"];
  $message = $_POST["message"];
  $created_at = date("Y-m-d H:i:s");

  $sql = "INSERT INTO test_chat (user, message, created_at) VALUES ('$user', '$message', '$created_at')";
  $db->query($sql);
}

// 메시지 가져오기
$sql = "SELECT * FROM test_chat ORDER BY created_at DESC LIMIT 10";
$result = $db->query($sql);

$data = array();
while ($row = $db->fetch($result)) {
  array_push($data, $row);
}
echo json_encode($data);

?>