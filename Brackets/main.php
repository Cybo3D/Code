<?php
echo "Brackets: \n";
$input = readline();

$splittedInput = str_split($input);

// print_r($splittedInput);
$OpenBracket = 0;
$ClosedBracket = 0;
$OpenCurlyBracket = 0;
$ClosedCurlyBracket = 0;
$OpenParentheses = 0;
$ClosedParentheses = 0;
for ($x = 0; $x < count($splittedInput); $x++) {

    if (str_contains($splittedInput[$x], "("))
        $OpenParentheses++;
    else if (str_contains($splittedInput[$x], ")"))
        $ClosedParentheses++;
    else if (str_contains($splittedInput[$x], "["))
        $$OpenBracket++;
    else if (str_contains($splittedInput[$x], "]"))
        $$ClosedBracket++;
    else if (str_contains($splittedInput[$x], "{"))
        $OpenCurlyBracket++;
    else if (str_contains($splittedInput[$x], "}"))
        $ClosedCurlyBracket++;
    else {
        echo "Invalid Brackets";
        return;
    }

}
// echo "Open Brackets: " . $OpenBracket . "\n";
// echo "Closed Brackets: " . $ClosedBracket . "\n";

// echo "Open Parentheses: " . $OpenParentheses . "\n";
// echo "Closed Parentheses: " . $ClosedParentheses . "\n";

// echo "Open Curly Brackets: " . $OpenCurlyBracket . "\n";
// echo "Closed Curly Brackets: " . $ClosedCurlyBracket . "\n";

if($OpenBracket == $ClosedBracket && $OpenParentheses == $ClosedParentheses && $OpenCurlyBracket == $ClosedCurlyBracket){
    echo "Its balanced";
}else echo "Its not a bug, but a feature!";
?>