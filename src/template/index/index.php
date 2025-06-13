<!DOCTYPE html>
<html>
<!-- 1.250205 -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <form>
        <input type="search" name="q" value="<?=$hsc_q?>">
        <button type="submit">search</button>
    </form>
<form method="post">
    <textarea name="content"><?=$q?></textarea>
    <button type="submit">paste</button>
</form>

<pre>
<?php
$pieces = [];
foreach ($sel as $key => $value) {
    extract($value);
    $content = mb_substr($content, 0, 255);
    $urldecode = urldecode($content);
    $strlen = strlen($content);
    $mb_strlen = mb_strlen($urldecode);
    $content = htmlspecialchars($content);
    $urldecode = htmlspecialchars($urldecode);
    $pieces[] = $dl = <<<HEREDOC
<dl>
<dt>
<a href="/share/$id">$id</a>
</dt>
<dd></dd>
<pre>$content</pre>
<div></div>
<pre>$urldecode</pre>
<s>$strlen</s>
<mark>$mb_strlen</mark>
</dl>
HEREDOC;
/*
$pieces[] = $dl = <<<HEREDOC
ping $content >>p.txt
HEREDOC;
*/
}

echo implode(PHP_EOL, $pieces);
?>
</pre>

</body>
</html>
