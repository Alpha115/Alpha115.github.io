<script>
    $(document).ready(function() {
      var chatWindow = $("#chat-window");
      var inputBox = $("#input-box");

      // 메시지 추가 버튼 클릭 시 새 메시지 추가
      $("#send-button").click(function() {
        var user = $("#user_id").val();
        var message = inputBox.val();

        $.ajax({
			url: "test_page2.php",
			type: "post",
			dataType: "json",
			data: { user: user, message: message },
			success: function(response) {
				console.log(response);
				if (response && response.length) {
					chatWindow.empty();
					for (var i = response.length - 1; i >= 0; i--) {
						var messageDiv = $("<div></div>").html("<strong>" + response[i].user + "</strong>: " + response[i].message);
						chatWindow.append(messageDiv);
					}
				}
			},
		  error: function(xhr, status, error) {
			console.log(xhr.responseText);
		  }
		});

		$("#input-box").val("");
	  });

      // 일정 시간마다 새로운 메시지 가져오기
      setInterval(function() {
        // AJAX 요청
        $.ajax({
          url: "test_page2.php",
          type: "GET",
          success: function(response) {
            var messages = JSON.parse(response);
            chatWindow.empty();
            for (var i = messages.length - 1; i >= 0; i--) {
              var messageDiv = $("<div></div>");
              messageDiv.html("<strong>" + messages[i].user + "</strong>: " + messages[i].message);
              chatWindow.append(messageDiv);
            }
          }
        });
      }, 1000);
    });
	
  </script>