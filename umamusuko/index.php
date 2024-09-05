<!DOCTYPE html>

<?php

$vote = file("vote.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$odds = [30, 20, 10, 5, 3, 2]; // 左から順番に低くする！
$No = [1, 2, 3, 4, 5, 6];
$Name = ['', '', '', '', '', ''];
$Win = ["", "", "", "", "", ""];

// voteの降順に並び替えた配列を作成
$sorted_vote = $vote;
rsort($sorted_vote);

// voteの値に対応するoddsの値を取得
$vote_to_odds = [];
foreach ($vote as $v) {
    $index = array_search($v, $sorted_vote);
    $vote_to_odds[] = $odds[$index];
}
?>

<head>
  <?php include("../config.html"); ?>
  <title>キヨミランド - ウマムスコ</title>
</head>

<body class="umamusuko">
  <?php include("../header.html"); ?>
  <h1 class="gamename">ウマムスコ</h1>
  <div class="under_title"></div>
  <main>
    <div class="how_to_play">
      <p>♦ 単勝勝ち (1人1馬のみ投票可能) のみです！</p>
      <p>♦ 開始時刻は放送します！</p>
      <p>♦ オッズ・投票者数は自動的に更新されます．</p>
      <b class="red">♦ 現在の合計投票数: <?php print array_sum($vote)?>      </b>
    </div>




    <!-- <div class="warn-box notify-box">
      <i class="fa-solid fa-circle-info"></i>
      <span>本日はありがとうございました．また明日も運営いたします！<br/>本日換キヨし忘れた方は，明日換キヨできます！</span>
    </div> -->



    <div class="warn-box">
        <i class="fa-solid fa-circle-info"></i>
        <span>まだありません．</span>
    </div>



    <details class="accordion-008">
      <summary>> 過去のゲーム</summary>
      <h2>09/06(金)</h2>
      <div class="warn-box">
          <i class="fa-solid fa-circle-info"></i>
          <span>まだありません．</span>
      </div>
      <h2>09/05(木)</h2>
      <div>
        <h3><b>第4回 <spann class="red">[締切] 15:45~</span></b></h3>
          <table border="solid 2px #FDF2F1" cellspacing="0" cellpadding="10" bgcolor="1b1922">
            <tr>
              <th>No.</th>
              <th>投票数</th>
              <th>名前</th>
              <th>オッズ</th>
              <th>結果</th>
            </tr>
            <tr>
              <td>1</td>
              <td>6
              </td>
              <td>マエダマックイーン</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>2</td>
              <td>4
              </td>
              <td>シバサンブラック</td>
              <td>5</td>
              <td>◎</td>
            </tr>
            <tr>
              <td>3</td>
              <td>6
              </td>
              <td>メイコウダイオー</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>4</td>
              <td>5
              </td>
              <td>シスタンシップ</td>
              <td></td>
              <td></td>
            </tr>
          </table>
      </div>
      <div>
        <h3><b>第3回 <spann class="red">[締切] 14:30~</span></b></h3>
          <table border="solid 2px #FDF2F1" cellspacing="0" cellpadding="10" bgcolor="1b1922">
            <tr>
              <th>No.</th>
              <th>投票数</th>
              <th>名前</th>
              <th>オッズ</th>
              <th>結果</th>
            </tr>
            <tr>
              <td>1</td>
              <td>12
              </td>
              <td>シバサンブラック</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>2</td>
              <td>10
              </td>
              <td>メイコウダイオー</td>
              <td>5</td>
              <td>◎</td>
            </tr>
            <tr>
              <td>3</td>
              <td>11
              </td>
              <td>ソーメインパクト</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>4</td>
              <td>7
              </td>
              <td>ミズユニバース</td>
              <td></td>
              <td></td>
            </tr>
          </table>
      </div>
      <div>
        <h3><b>第2回 <spann class="red">[締切] 11:00~</span></b></h3>
          <table border="solid 2px #FDF2F1" cellspacing="0" cellpadding="10" bgcolor="1b1922">
            <tr>
              <th>No.</th>
              <th>投票数</th>
              <th>名前</th>
              <th>オッズ</th>
              <th>結果</th>
            </tr>
            <tr>
              <td>1</td>
              <td>16
              </td>
              <td>マエダマックイーン</td>
              <td>5</td>
              <td>◎</td>
            </tr>
            <tr>
              <td>2</td>
              <td>10
              </td>
              <td>ソーメインパクト</td>
              <td>10</td>
              <td></td>
            </tr>
            <tr>
              <td>3</td>
              <td>6
              </td>
              <td>ミズユニバース</td>
              <td>30</td>
              <td></td>
            </tr>
            <tr>
              <td>4</td>
              <td>12
              </td>
              <td>シスタンシップ</td>
              <td>2</td>
              <td></td>
            </tr>
          </table>
      </div>
      <div>
        <h3><b>第1回 <spann class="red">[締切] 10:00~</span></b></h3>
          <table border="solid 2px #FDF2F1" cellspacing="0" cellpadding="10" bgcolor="1b1922">
            <tr>
              <th>No.</th>
              <th>投票数</th>
              <th>名前</th>
              <th>オッズ</th>
              <th>結果</th>
            </tr>
            <tr>
              <td>1</td>
              <td>3</td>
              <td>シバサンブラック</td>
              <td>5</td>
              <td></td>
            </tr>
            <tr>
              <td>2</td>
              <td>6</td>
              <td>メイコウダイオー</td>
              <td>5</td>
              <td>◎</td>
            </tr>
            <tr>
              <td>3</td>
              <td>8</td>
              <td>ソーメインパクト</td>
              <td>5</td>
              <td></td>
            </tr>
            <tr>
              <td>4</td>
              <td></td>
              <td>シスタンシップ</td>
              <td>5</td>
              <td></td>
            </tr>
          </table>
      </div>

    </details>
  </main>
  <?php include("../footer.html"); ?>
</body>