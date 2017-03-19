<?php

$str = (string)$_POST['inputstr'];

function isitabbr ($word)
{
        if (preg_match('/^[A-Z]+$/',$word)>0) return true;
        else return false;
}
function IsItNumber ($word)
{
        if (preg_match('/^[0-9]+$/',$word)>0) return true;
        else return false;
}

function IsItWord ($word)
{
       if (preg_match('/^[A-Z][a-z]+$/',$word)>0) return true;
        else return false;
}

$words = explode(" ",$str);
echo "<p>";

foreach ($words as $word)
{
if (IsItAbbr($word)) echo "<font color='red'>$word </font>";
else if (ISItNumber($word)) echo "<u>$word</u> ";
else if (IsItWord($word)) echo "<font color='green'>$word </font>";
else echo "$word ";
}
echo "</p>";

?>

<form action=' ' method='post'>
                <p>Insert string </p>
        <input type='text' name='inputstr'>
</form>
