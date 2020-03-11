<?php
function wordTodigit($sentence){
    $listOfWords =explode(';',$sentence);
    $result = '';
    foreach ($listOfWords as $word){
        switch (trim($word)){
            case 'zero':
                $result .= '0';
                break;
            case 'one':
                $result .= '1';
                break;
            case 'two':
                $result .= '2';
                break;
            case 'three':
                $result .= '3';
                break;
            case 'four':
                $result .= '4';
                break;
            case 'five':
                $result .= '5';
                break;
            case 'six':
                $result .= '6';
                break;
            case 'seven':
                $result .= '7';
                break;
            case 'eight':
                $result .= '8';
                break;
            case 'nine':
                $result .= '9';
                break;
        }

    }
    return $result;
}
echo wordTodigit("zero;three;five;six;eight;one")."\n";
echo wordTodigit("seven;zero;one")."\n";
?>
