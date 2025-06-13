<!DOCTYPE html>
<html>
<!-- 1.250211 -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>

<?php
$ols = [];
for ($i=1; $i < 32; $i++) {
    $cls = 8 === $i ? ' class="red"' : null;
    $ol = <<<HEREDOC
<ul>
<dt><a href="javascript:"$cls>$i</a></dt>
<dd></dd>
</ul>
HEREDOC;

    $ols[] = $ol;
}

$ul = implode(PHP_EOL, $ols);

$ols = [];
for ($i=1; $i < 13; $i++) {
    $ol = <<<HEREDOC
<ol>
<li>$i</li>
$ul
</ol>
HEREDOC;

    $ols[] = $ol;
}

echo implode(PHP_EOL, $ols);
?>


    <form>
        <input type="search" name="q">
        <button type="submit">search</button>
    </form>
<form method="post">
    <textarea name="content"></textarea>
    <button type="submit">paste</button>
</form>
<?php
$pieces = [];
foreach ($sel as $key => $value) {
    extract($value);
    $pieces[] = $dl = <<<HEREDOC
<dl>
<dt>$id</dt>
<dd>$content</dd>
</dl>
HEREDOC;
}

// echo implode(PHP_EOL, $pieces);
?>

<?php

// echo date_default_timezone_get();
// echo date_default_timezone_set('PRC');


echo $strtotime = strtotime('2025-02-02');
$time = 1738454400;

$arr = [];
for ($i = 0; $i < 29; $i++) {
    $diff = 86400 * $i;
    $time2 = $time + $diff;
    $date = date('Y-m-d H:i:s', $time2);
    $arr[] = [$time2, $date];
}
// print_r($arr);

print_r(array_chunk($arr, 7));
// echo $date = date('Y-m-d H:i:s', 1738454400);
?>
</body>
</html>
