<?php
$vote = [7, 9, 2, 1, 3, 0];
$odds = [30, 20, 10, 5, 3, 2];
$No = [1, 2, 3, 4, 5, 6];
$Name = ['A', 'B', 'C', 'D', 'E', 'F'];
$Win = ["", "", "", "", "", "◎"];

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

// 表の出力
echo "<table>";
echo "<tr><th>No.</th><th>投票数</th><th>名前</th><th>オッズ</th><th>結果</th></tr>";
for ($i = 0; $i < count($vote); $i++) {
    echo "<tr>";
    echo "<td>" . $No[$i] . "</td>";
    echo "<td>" . $vote[$i] . "</td>";
    echo "<td>" . $Name[$i] . "</td>";
    echo "<td>" . $vote_to_odds[$i] . "</td>";
    echo "<td>" . $Win[$i] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
