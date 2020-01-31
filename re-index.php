<html>
      <head>
           <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
      </head>
      <body>
      <div align="center">
      <font size="4" color="black"></font><br>
      <?php
      $name=$_POST["onamae"];
      $mail=$_POST["mail"];
      $num=$_POST["num"];
      if(empty($name) or empty($mail) or empty($num)){
      	echo"入力内容に誤りがあります。<br>
      	お手数ですがお名前、電話番号、Eメール等をご確認ください。";
      }else{
      	echo"ご予約いただき誠にありがとうございます。<br>
      後ほど担当の者より連絡しますので今しばらくお待ちください。";
      }
      ?>
    <br><br>
	<a href="applyForm_apart.php">戻る</a>
	</div>
      </body>
</html>
