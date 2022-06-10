<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>jqueryのajaxのサンプル</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$( function() {

$("#button1").click(
function(){
	$("#span6").text("データ取得中です");

	// 1.$.ajaxメソッドで通信を行います。
	//  20行目のdataは、フォームの内容をserialize()している
	//  →serialize()の内容は、cs1=custom1&cs2=custom2
	$.ajax({	
		url:"http://localhost/api/ver", // 通信先のURL"http://localhost/api/ver"
		type:"GET",		// 使用するHTTPメソッド
		data:$("#form1").serialize(), // 送信するデータ
		dataType:"json", // 応答のデータの種類 
						// (xml/html/script/json/jsonp/text)
		timespan:1000, 		// 通信のタイムアウトの設定(ミリ秒)
		// async: false, 同期にする場合はasync:falseを追加する
		// 2. doneは、通信に成功した時に実行される
		//  引数のdata1は、通信で取得したデータ
		//  引数のtextStatusは、通信結果のステータス
		//  引数のjqXHRは、XMLHttpRequestオブジェクト
		}).done(function(data1,textStatus,jqXHR) {
				$("#span1").text(jqXHR.status); //例：200
				$("#span2").text(textStatus); //例：success

				// 3. キーを指定して値を表示 
				$("#span4").text(data1["version"]);

				// 4. JavaScriptオブジェクトをJSONに変換
				var data2 = JSON.stringify(data1);
				console.log(data2); //コンソールにJSONが表示される

				// 5.JSONをJavaScriptオブジェクトにし、
				// キーを指定して値(httpbin.org)を表示
				var data3 = JSON.parse(data2);
				$("#span5").text(data3["min_version"]);

		// 6. failは、通信に失敗した時に実行される
		}).fail(function(jqXHR, textStatus, errorThrown ) {
				$("#span1").text(jqXHR.status); //例：404
				$("#span2").text(textStatus); //例：error
				$("#span3").text(errorThrown); //例：NOT FOUND

		// 7. alwaysは、成功/失敗に関わらず実行される
		}).always(function(){
				$("#span6").text("complete");
				
	});
});
});
</script>
</head>
<body >
<p>jqXHR.statusを表示：<span id="span1"></span></p>
<p>textStatusを表示：<span id="span2"></span></p>
<p>errorThrownを表示：<span id="span3"></span></p>
<p>表示1：<span id="span4"></span></p>
<p>表示2：<span id="span5"></span></p>
<p>表示3：<span id="span6"></span></p>

<p>ボタンを押すと通信が始まります</p>

<form id="form1">
<input type="button" id="button1" value="ボタン1">
<p>バージョン</p>
<input type="text" name="version" value="version" maxlength="10">
<p>初期バージョン</p>
<input type="text" name="min_version" value="min_version" maxlength="10">
</form>
</body>
</html>