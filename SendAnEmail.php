<html>
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <?php
      mb_language("Japanese");
      mb_internal_encoding("UTF-8");
      $to = "takaki@1st-re.jp";
      $title = "test";
      $content = "test";
      mb_send_mail($to, $title, $content);
    ?>
  </body>
</html>
