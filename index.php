<? include("scripts/chatserver.php");?>

<!DOCTYPE html>
<html lang="kr">
<head>
	<meta charset="utf-8">
	<title>실시간 채팅</title>
	<style>
		body {
		  background-color: #F9F9F9;
		  font-family: Arial, sans-serif;
		  height: 100vh;
		  text-align: center;
		}

		#chat-window {
		  width: 600px;
		  height: 400px;
		  margin: 0 auto;
		  padding: 10px;
		  background-color: white;
		  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
		  overflow-y: scroll;
		  border-radius: 5px;
		}

		#chat-window::-webkit-scrollbar {
		  width: 10px;
		}

		#chat-window::-webkit-scrollbar-thumb {
		  background-color: #008CBA;
		  border-radius: 5px;
		}

		#chat-window p {
		  margin: 0;
		  font-size: 14px;
		}

		#chat-window .message {
		  margin-bottom: 10px;
		}

		#chat-window .message strong {
		  font-weight: bold;
		  margin-right: 10px;
		  color: #008CBA;
		}

		.input-box {
		  width: 460px;
		  height: 40px;
		  margin-top: 20px;
		  margin-bottom: 10px;
		  padding: 10px;
		  font-size: 16px;
		  border: 2px solid #008CBA;
		  border-radius: 5px;
		  outline: none;
		}

		#send-button {
		  padding: 10px 20px;
		  font-size: 16px;
		  background-color: #008CBA;
		  color: white;
		  border: none;
		  border-radius: 5px;
		  cursor: pointer;
		}

		#send-button:hover {
		  background-color: #005A6E;
		}
	</style>
</head>
<body>
	<script type="text/javascript" src="script/main.js"></script>
  <div id="chat-window"></div>
  <input id="input-box" class="input-box" type="text">
  <input type="text" id="user_id" class="input-box" style="width:130px;" placeholder="사용자 이름"></br>
  <button id="send-button">전송</button>
 </body>
</html>