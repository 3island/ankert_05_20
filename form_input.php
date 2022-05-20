<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>
  legend {
    font-size: 40px;
    text-align: center;
  }

  form {
    text-align: center;
    margin: 0 auto;
  }

  div {
    margin-bottom: 60px;
    margin-left: 630px;
    text-align: left;

  }

  textarea {
    /* padding: 20px 80px; */
    width: 40%;
    height: 120px;
    font-size: 1.2rem;
    box-shadow: 0 3px #bbb;
  }

  button {
    padding: 10px 40px;
    background-color: #blue;
    box-shadow: 0 7px #bbb;
    margin-left: 140px;
  }
  button:active {
    position: relative;
    top: 7px;
    box-shadow: none;
  }

  select {
    padding: 10px 30px;
  }

  p {
    font-size: 1.2rem;
    font-weight: bold;
  }


</style>
<body>
  <form action="form_create.php" method="POST">
    <fieldset>
      <legend>アンケート</legend>


      <div>
        <p>Q1: 生年月日</p>
        <select name="age">
        <option value="">選択してください</option>
        <option value="20歳未満">20歳未満</option>
        <option value="20-29歳">20-29歳</option>
        <option value="30-39歳">30-39歳</option>
        <option value="40-49歳">40-49歳</option>
        <option value="50-59歳">50-59歳</option>
        <option value="60-69歳">60-69歳</option>
        <option value="70-79歳">70-79歳</option>
        <option value="80歳以上">80歳以上</option>
        </select> 
      </div>


      <div>
        <p>Q2: 性別</p>
        <select name="gender">
          <option value="">選択してください</option>
          <option value="男性">男性</option>
          <option value="女性">女性</option>
        </select>
      </div>


      <div>
        <p>Q3: 普段の生活や仕事で悩みや解決したいことはなんですか？<br></p>
        <textarea name="q_3"></textarea>
      </div>


      <div>
        <p>Q4: その課題の頻度は高いですか？<br></p>
        <select name="hight&low">
          <option value="">選択してください</option>
          <option value="hight">高い</option>
          <option value="low">低い</option>
        </select>
      </div>


      <div>
        <p>Q5: それを解決しようとしたことはなんですか？<br></p>
        <textarea name="q_5"></textarea>
      </div>


      <div>
        <p>Q6: その中で気に入らなかった方法と理由は？<br></p>
        <textarea name="q_6"></textarea>
      </div>


      <div>
        <p>Q7: なりたい自分像は何ですか？<br></p>
        <textarea name="q_7"></textarea>
      </div>


      <div>
        <button>送信</button>
      </div>


      
    </fieldset>
  </form>
</body>
</html>