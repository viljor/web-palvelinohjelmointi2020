<?php
$koodi = isset($_GET['koodi']) ? $_GET['koodi'] : '';
echo get_page($koodi);


if(preg_match("/^[0-9]{5}|[0-9]{5}[-][0-9]{4}$/", $koodi)) {
   echo "<code>$koodi</code> on ok!<br>\n";
}
else {
  echo ("<code>$koodi</code> EI ole ok!<br>\n");
}


function get_page($koodi) {
  $page = <<<EOPage

  <title>Harjoitus 7 Tehtävä 1</title>
  <style>code {background-color: #ff0;} </style>
  <form method="get" action="">
    <input type="text" name="koodi" size="20" value="$koodi"><br>
    <input type="submit" value="Tarkista">
  </form>
EOPage;

  return $page;
}
?>