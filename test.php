<?php
$vote = [7, 9, 2, 1, 3, 0];
$odds = [30, 20, 10, 5, 3, 2];

// voteの値を保持したまま、降順にソートした配列を作成
$sorted_vote = $vote;
rsort($sorted_vote);

// voteの値に対応するoddsの値を取得
$vote_to_odds = [];
foreach ($vote as $v) {
    $index = array_search($v, $sorted_vote);
    $vote_to_odds[] = $odds[$index];
}

// 表の出力
echo "<table border='1'>";
echo "<tr><th>行数</th><th>1列目</th><th>2列目</th></tr>";
for ($i = 0; $i < count($vote); $i++) {
    echo "<tr>";
    echo "<td>" . ($i + 1) . "行目</td>";
    echo "<td>" . $vote[$i] . "</td>";
    echo "<td>" . $vote_to_odds[$i] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
