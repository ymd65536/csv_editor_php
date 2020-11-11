<html lang="ja">
<head>

  <meta charset="utf-8" />
  <link rel="stylesheet" href="../css/show.css">
  <title>CSVを表形式で表示</title>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="../js/show.js"></script>
</head>
<body>
  <div class="top-wrapper">
    <div class="container">
      <div id="table_content"></div>
    </div>
  </div>
</div>
</body>
<script type="text/javascript">
  $.ajax({
    type: 'POST', // HTTPリクエストメソッドの指定
    url: './show/show.php', // 送信先URLの指定
    async: true, // 非同期通信フラグの指定
    dataType: 'text', // 受信するデータタイプの指定
    timeout: 3000, // タイムアウト時間の指定
  })
  .done(function(data) {
    alert("通信成功");
    // 通信が成功したときの処理
    data.split("\n",data);
		let sTable = showTables(data);
    $("#table_content").html(sTable);

  })
  .fail(function() {
    // 通信が失敗したときの処理
  })
  .always(function() {
    // 通信が完了したときの処理
  });
</script>
</html>