<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>lazy-form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./normalize.css">
  <link rel="stylesheet" href="./index_modal.css">
</head>

<body>
  <section class="bg-header"></section>
  <section class="main">
    <div class="main__slogon-container">
      <div class="main__slogon">你知道嗎？拖延...可以拯救世界喔</div>
      <img class="main__slogon-img" src="images/travel.png"></img>
    </div>
    <p class="main__paragragh">
      有拖延症的人很奇怪，不是所有的事都拖，只有<span class="highlight">重要的事才拖</span>。並不是動作慢，反而大部分時間手腳還挺快的。偏偏就是那些最需要慢條斯理、按部就班的大計畫，才會拖泥帶水。這是為什麼？
    </p>
    <p class="main__paragragh">
      <span class="highlight">我們都不需要戰勝拖延症，而是與之好好相處</span>，就如同我們的恐懼與黑暗面也是。只要理解背後對你的意義，與其「空性」，所有一切本身都是無害的。而且有時候（是有時候喔……）適時的小拖延，也不外乎是激發創造力與醞釀靈感的方法。願各位與拖延症有更好的相處。
    </p>
  </section>
  <section class="cta">
    <div class="cta__title">我要報名</div>
    <div class="cta__desc">還沒試過拖延救世界的快感嗎？</div>
    <div class="cta__desc">快來一起參與吧，點以下連結拯救人生</div>
    <a aria-role="button" class="cta__btn" href="./form.php">線上報名</a>
  </section>
  <footer>
    © 2020 © Copyright. All rights Reserved.
  </footer>
</body>
</html>

<?php
  if (isset($_GET['status'])) {
    if ($_GET['status'] == 1) {
      echo '<script>alert("報名成功")</script>';
    }
  }
?>