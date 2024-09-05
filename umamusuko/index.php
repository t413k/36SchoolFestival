<!DOCTYPE html>

<?php

$vote1 = 1;
$vote2 = 2;
$vote3 = 0;
$vote4 = 0;
// 上から順番になってる
// 文末に;を絶対忘れないで
// 半角で入力

?>

<head>
    <?php include("../config.html"); ?>
    <title>キヨミランド - ウマムスコ</title>
</head>

<body>
    <?php include("../header.html"); ?>
    <h1 class="gamename">ウマムスコ</h1>
    <div class="under_title"></div>
    <span>* 単勝勝ちのみです！<br>開始時刻は放送します！</span><br><span>10分おきに更新</span>
    <div>オッズは人気順に<span class="red-u">2.0倍</span>, <span class="red-u">5.0倍</span>, <span class="red-u">10倍</span>, <span class="red-u">30倍</span>, </div>
    現在の投票数: <?php
                print $vote1 + $vote2 + $vote3 + $vote4;
                ?>
    <main>
    </div>
        <h3>第3回 <b class="red">未定</b></h2>
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
              <td><?php
                print $vote1;
                ?>
              </td>
                <td>シバサンブラック</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2</td>
              <td><?php
                print $vote2;
                ?>
              </td>
                <td>メイコウダイオー</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>3</td>
              <td><?php
                print $vote3;
                ?>
              </td>
                <td>ソーメインパクト</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>4</td>
              <td><?php
                print $vote4;
                ?>
              </td>
                <td>ミズユニバース</td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>

    <details class="accordion-008">
            <summary>> 過去のゲーム</summary>
    </div>
        <h3>第2回 締切 <b class="red">11:00~</b></h2>
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
    </div>
        <h3>第1回 10:00~</h2>
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