<!DOCTYPE html>
<html>
<!-- 1.250211 -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<?php

class Cal
{

    function dl()
    {

    }

    function ol($st = 1, $ed = 4, $i = 1, $n = 3)
    {
        $r = range(5, 31);
        $c = array_chunk($r, 7);
        $f = [];
        foreach ($c as $key => $value) {
            $a = array_shift($value);
            $z = array_pop($value);
            // print_r([$a, $z]);
        }

        $pieces = ['<ol>'];
        $pieces[] = $this->h();
        $pieces[] = '<article>';
        $pieces[] = $this->sec($st, $ed, $i, $n);

        $i = 3;
        foreach ($c as $key => $value) {
            $a = array_shift($value);
            $z = array_pop($value);
            $pieces[] = $this->sec($a, $z, $i, 0);
            $i++;
        }


        $pieces[] = '</article>';
        $pieces[] = '</ol>';
        return implode(PHP_EOL, $pieces);
    }

    function sec($st = 1, $ed = 4, $i = 1, $n = 3)
    {
        $mx = $ed + 1;
        $pieces = ['<section>'];
        $pieces[] = $this->p($i, $n);
        $pieces[] = $this->ul($st, $mx);
        $pieces[] = '</section>';
        return implode(PHP_EOL, $pieces);
    }

    function h($i = 'Jan', $n = 4)
    {
        $w = 50 * $n;
        $style = " style='width: {$w}px'";
        return $h = <<<HEREDOC
<h2>
<span$style>
<b>$i</b>
</span>
</h2>

HEREDOC;
    }

    function p($i = 1, $n = 3)
    {
        $w = 50 * $n + 25;
        $style = " style='width: {$w}px'";
        return $p = "<p$style>$i</p>";
    }

    function ul($st = 1, $mx = 5)
    {
        $dn = date('h');
        $di = (int) $dn;
        $di++;
        $pieces = ['<ul>'];
        for ($i = $st; $i < $mx; $i++) {
            $cls = $i == $di ? ' class="red"' : null;
            $pieces[] = <<<HEREDOC
<li>
<dt><a href="javascript:"$cls>$i</a></dt>
<dd></dd>
</li>

HEREDOC;
        }
        $pieces[] = '</ul>';
        return implode(PHP_EOL, $pieces);
    }
}

$Cal = new Cal;
// echo $Cal->ol();
?>

<body class="drm">
    <div class="nav">
<nav>
<dfn>S</dfn>
<dfn>M</dfn>
<dfn>T</dfn>
<dfn>W</dfn>
<dfn>T</dfn>
<dfn>F</dfn>
<dfn>S</dfn>
</nav>
</div>

<main>



<dl>

    <?=$Cal->ol()?>

<!--ol>
<h2>
<span class="sp3">
<b>Jan</b>
</span>
</h2>
<article>
<section>
    <p class="p3">1</p>
    <ul>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
    </ul>
</section>
<section>
    <p>1</p>
    <ul>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
    </ul>
</section>
</article>
</ol>

<ol>
<h2>
<span class="sp3">
<b>Jan</b>
</span>
</h2>
<article>
<section>
    <p class="p3">1</p>
    <ul>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
    </ul>
</section>
<section>
    <p>1</p>
    <ul>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
    </ul>
</section>
</article>
</ol>

<ol>
<h2>
<span>
<b>Jan</b>
</span>
</h2>
<article>
<section>
    <p class="p6">1</p>
    <ul>
        <li>
            <dt>1</dt>
            <dd></dd>
        </li>
    </ul>
</section>
<section>
    <p>1</p>
    <ul>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
        <li>
            <dt>9</dt>
            <dd></dd>
        </li>
    </ul>
</section>
</article>
</ol-->

</dl>
</main>
</body>

<!--body>

<div class="nav">
<nav>
<dfn>S</dfn>
<dfn>M</dfn>
<dfn>T</dfn>
<dfn>W</dfn>
<dfn>T</dfn>
<dfn>F</dfn>
<dfn>S</dfn>
</nav>
</div>

<main>
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
</main>

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


// echo $strtotime = strtotime('2025-02-02');
$time = 1738454400;

$arr = [];
for ($i = 0; $i < 29; $i++) {
    $diff = 86400 * $i;
    $time2 = $time + $diff;
    $date = date('Y-m-d H:i:s', $time2);
    $arr[] = [$time2, $date];
}
// print_r($arr);

// print_r(array_chunk($arr, 7));
// echo $date = date('Y-m-d H:i:s', 1738454400);
?>
</body-->
</html>
