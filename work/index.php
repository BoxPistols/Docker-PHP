<?php
  $dates =  date('y') .'.' .date('m') .'.' .date('d') .'_' .date('h') .':' .date('m');

  if (date('H') >= 12) {
    $time = 'PM';
  } else {
    $time = 'AM';
  }

  $name =  'Mr.';
?>
<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- <link rel="icon" href="favicon.ico"> -->
    <meta name="description" content="My Portfolio">
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>
    <header>
      <div class="container">
        <div class="icon">
          <img src="http://placehold.jp/80x80.jpg" width="80" height="80" alt="icon">
        </div>
        <div class="info">
          <h1><?= $name ?>TARO</h1>
          <p>I'm Designer</p>
          <ul>
            <li>
              <a href="#" target="_blank">
                <img src="http://placehold.jp/40x40.jpg" width="40" height="40" alt="my image">
              </a>
            </li>
          </ul>
          <p>
            <span> <?= $dates .$time?></span>
          </p>
        </div>
      </div>
    </header>

    <section class="works">
      <h1>WORKS</h1>
      <section>
        <img src="http://placehold.jp/320x180.jpg" width="320" height="auto" alt="勇者ゲームの紹介画像">
        <h1>My Work</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae minima quaerat autem.</p>
      </section>
    </section>

    <footer>
      <p>(c) my company</p>
    </footer>
  </body>

</html>