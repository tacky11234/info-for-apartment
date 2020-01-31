<html>
      <head>
           <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
           <title>内覧ご予約フォーム</title>
      </head>
      <body>
      <div align="center">
      <font size="4" color="black">[内覧ご予約フォーム]</font><br>
      <hr>内覧を希望されるお客様は恐れ入りますが、ご予約をお願いいたします。</font><br>
      <form action="apartForm_receipt.php"method="POST">
      <table>
      <tr>
      <th bgcolor="#66CCFF" align="left">お名前:</th>
      <td><input type="text"name="onamae"value=""></td>
      </tr>

      <tr>
      <th bgcolor="#66CCFF" align="left">電話番号:</th>
      <td><input type="text" name="num" value""></td>
      </tr>

      <tr>
      <th bgcolor="#66CCFF" align="left">Eメール:</th>
      <td><input type="text"name="mail"value""></td>
      </tr>

      <tr>
      <th bgcolor="#66CCFF" align="left">内覧希望日:</th>
      <td>
      <select name="nen">
      <option value="1">未選択</option>
      <option value="1">2020</option>
      </select>年&nbsp;

      <select name="tsuki">
      <option value="1">未選択</option>
      <option value="1">1</option>
      <option value="1">2</option>
      <option value="1">3</option>
      <option value="1">4</option>
      <option value="1">5</option>
      <option value="1">6</option>
      <option value="1">7</option>
      <option value="1">8</option>
      <option value="1">9</option>
      <option value="1">10</option>
      <option value="1">11</option>
      <option value="1">12</option>
       </select>月&nbsp;

       <select name="hiduke">
      <option value="1">未選択</option>
      <option value="1">1</option>
      <option value="1">2</option>
      <option value="1">3</option>
      <option value="1">4</option>
      <option value="1">5</option>
      <option value="1">6</option>
      <option value="1">7</option>
      <option value="1">8</option>
      <option value="1">9</option>
      <option value="1">10</option>
      <option value="1">11</option>
      <option value="1">12</option>
      <option value="1">13</option>
      <option value="1">14</option>
      <option value="1">15</option>
      <option value="1">16</option>
      <option value="1">17</option>
      <option value="1">18</option>
      <option value="1">19</option>
      <option value="1">20</option>
      <option value="1">21</option>
      <option value="1">22</option>
      <option value="1">23</option>
      <option value="1">24</option>
      <option value="1">25</option>
      <option value="1">26</option>
      <option value="1">27</option>
      <option value="1">28</option>
      <option value="1">29</option>
      <option value="1">30</option>
      <option value="1">31</option>
        </select>日&nbsp;
      </td>
      </tr>

      <tr>
      <th bgcolor="#66CCFF" align="left">内覧を希望される部屋:</th>
      <td>
      <input type="radio" name="heya" value="0" >105
      <input type="radio" name="heya" value="1" >201
      <input type="radio" name="heya" value="1" >208
      </td>
      </tr>

      <tr>
      <th bgcolor="#66CCFF" align="left">当アパートをお知りになった<br>きっかけ:(複数回答可)</th>

      <td>
      <input type="checkbox" name="kikkake[]" value="1">当サイト
      <input type="checkbox" name="kikkake[]" value="2">不動産会社の紹介
      <input type="checkbox" name="kikkake[]" value="3">検索サイト
      <input type="checkbox" name="kikkake[]" value="4">その他
      </td>
      </tr>

      <tr>
      <th bgcolor="#66CCFF" align="left">備考:</th>
      <td><textarea name="bikou" rows="3" cols="45"></textarea></td>
      </tr>

      <tr>
      <td colspan="2" align="center">
      <input type="submit" name="okuru" value="申し込む">
      <input type="reset" name="torikeshi" value="入力取り消し">
      </td>
      </tr>

      </table>
      </div>
      </form>
      </body>
</html>