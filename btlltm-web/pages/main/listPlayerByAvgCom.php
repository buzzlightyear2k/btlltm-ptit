<?php
  $sql_listPlayer = "SELECT * FROM users ORDER BY avgCompetitor DESC";
  $querry_listPlayer= mysqli_query($mysqli, $sql_listPlayer);
?>

<table id="tbl_avgCom" style="display: none;">
  <thead>
    <tr>
      <th class="rank"></th>
      <th class="nick">Nickname</th>
      <th class="score">Score</th>
      <th class="win">Win</th>
      <th class="draw">Draw</th>
      <th class="lose">Lose</th>
      <th class="avgCom">AVG Competitor</th>
      <th class="avgTime">AVG Time in Win</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $i = 0;
      while ($row = mysqli_fetch_array($querry_listPlayer)) {
        $i++;
    ?>

      <tr>
        <td class="rank"><?php echo $i ?></td>
        <td class="nick"><?php echo $row['username'] ?></td>
        <td class="score"><?php echo $row['score'] ?></td>
        <td class="win"><?php echo $row['win'] ?></td>
        <td class="draw"><?php echo $row['draw'] ?></td>
        <td class="lose"><?php echo $row['lose'] ?></td>
        <td class="avgCom"><?php echo $row['avgCompetitor'] ?></td>
        <td class="avgTime"><?php echo $row['avgTime'] ?></td>
      </tr>

    <?php
      }
    ?>
  </tbody>
</table>