<?php

$str = (string)$_POST['inputstr'];

function isitabbr ($word)
{
        $flag = True;
        for ($i=0;$i<strlen($word);$i++)
                {
                if ($word[$i] < 'A' or $word[$i] > 'Z') $flag = False;
                }
        return $flag;
}

function IsItNumber ($word)
{
        $flag = True;
        for ($i=0;$i<strlen($word);$i++)
                {
                if ($word[$i] < '0' or $word[$i] > '9') $flag = false;
                }
        return $flag;
}

function IsItWord ($word)
{
        $flag = True;
        for ($i=1;$i<strlen($word);$i++)
                {
                if ($word[$i] < 'a' or $word[$i] > 'z') $flag = false;
                }
        if ($word[0]>'A' and $word[0]<'Z' and $flag) return True;
        else return False;
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
