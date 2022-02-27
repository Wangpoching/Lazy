<?php
  require_once('./conn.php');
  $sql = "SELECT * FROM `boching_form_responses` ORDER BY `id` ASC";
  $result = $conn->query($sql);
  if (!$result) {
    die($conn->error);
  }
?>
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>管理後台</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./normalize.css">
  <link rel="stylesheet" href="./admin.css">
</head>

<body>
  <div class="all__wrapper">
    <div class="top"></div>
    <form class="form__wrapper" method="POST" action="./submit.php">
      <h1>新拖延運動報名結果一覽</h1>
      <table>
        <tr>
          <th>#</th>
          <th>暱稱</th>
          <th>電子郵件</th>
          <th>手機號碼</th>
          <th>報名類型</th>
          <th>怎麼知道這個活動的？</th>
          <th>其他</th>
        </tr>
        <?php while ($row=$result->fetch_assoc()) { ?>
          <tr>
            <td class="id-sample"><?php echo $row['id']; ?></td>
            <td class="nickname-sample"><?php echo $row['nickname']; ?></td>
            <td class="email-sample"><?php echo $row['email']; ?></td>
            <td class="phone-sample"><?php echo $row['phone']; ?></td>
            <td class="option-sample"><?php echo $row['options'] === '1' ? '躺在床上用想像力實作' : '趴在地上滑手機找現成的'; ?></td>
            <td class="referrer-sample"><?php echo $row['referrer']; ?></td>
            <td class="others-sample"><?php echo $row['others']; ?></td>
          </tr>
        <?php } ?>
      </table>

    </form>
  </div>
  <footer>
    © 2020 © Copyright. All rights Reserved.
  </footer>
</body>
</html>

