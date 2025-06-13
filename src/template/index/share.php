<!DOCTYPE html>
<html>
<!-- 1.250404 -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
<style type="text/css">
main {
    white-space: pre-line;
    word-break: break-all;
    overflow-wrap: break-word;
    word-spacing: normal;
}

textarea {
    height: 500px;
    width: 100%;
}
</style>
</head>
<body>
<?php
extract($view['row']);
// print_r(get_defined_vars());
$pattern = '#\r\n#';
$preg_split = preg_split($pattern, $content);
// print_r($preg_split);
?>

<h1><?=$id?></h1>
<main>
<?php
foreach ($preg_split as $key => $value) {
    if (!$value) {
        echo PHP_EOL;
        continue;
    }
    echo "<textarea>$value</textarea>";
}
?>
    <?=0#nl2br($content, false)?>
</main>
</body>
</html>
