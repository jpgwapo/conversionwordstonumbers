<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('convertToNumber')){
function convertToNumber($num = false){
    $num = str_replace(array(',', ''), '' , trim($num));
    if(! $num) {
        return false;
    }
    $num = (int) $num;
    $words = array();
    $list1 = array('', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven',
        'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen');
    $list2 = array('', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety', 'hundred');
    $list3 = array('', 'thousand', 'million', 'billion', 'trillion');
    $num_length = strlen($num);
    $levels = (int) (($num_length + 2) / 3);
    $max_length = $levels * 3;
    $num = substr('00' . $num, -$max_length);
    $num_levels = str_split($num, 3);
    for ($i = 0; $i < count($num_levels); $i++) {
        $levels--;
        $hundreds = (int) ($num_levels[$i] / 100);
        $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' hundred' . ( $hundreds == 1 ? '' : '' ) . ' ' : '');
        $tens = (int) ($num_levels[$i] % 100);
        $singles = '';
        if ( $tens < 20 ) {
            $tens = ($tens ? ' and ' . $list1[$tens] . ' ' : '' );
        } elseif ($tens >= 20) {
            $tens = (int)($tens / 10);
            $tens = ' and ' . $list2[$tens] . ' ';
            $singles = (int) ($num_levels[$i] % 10);
            $singles = ' ' . $list1[$singles] . ' ';
        }
        $words[] = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_levels[$i] ) ) ? ' ' . $list3[$levels] . ' ' : '' );
    } 
    $commas = count($words);
    if ($commas > 1) {
        $commas = $commas - 1;
    }
    $words = implode(' ',  $words);
    $words = preg_replace('/^\s\b(and)/', '', $words );
    $words = trim($words);
    $words = ucfirst($words);
    $words = $words . ".";
    // echo $words;
    return $words;
}
}


if ( ! function_exists('convertToWord')){
 function convertToWord($word) {
    $word = strtr(
        $word,
        array(
            'zero'      => '0',
            'a'         => '1',
            'one'       => '1',
            'two'       => '2',
            'three'     => '3',
            'four'      => '4',
            'five'      => '5',
            'six'       => '6',
            'seven'     => '7',
            'eight'     => '8',
            'nine'      => '9',
            'ten'       => '10',
            'eleven'    => '11',
            'twelve'    => '12',
            'thirteen'  => '13',
            'fourteen'  => '14',
            'fifteen'   => '15',
            'sixteen'   => '16',
            'seventeen' => '17',
            'eighteen'  => '18',
            'nineteen'  => '19',
            'twenty'    => '20',
            'thirty'    => '30',
            'forty'     => '40',
            'fifty'     => '50',
            'sixty'     => '60',
            'seventy'   => '70',
            'eighty'    => '80',
            'ninety'    => '90',
            'hundred'   => '100',
            'thousand'  => '1000',
            'million'   => '1000000',
            'billion'   => '1000000000',
            'trillion'   => '1000000000000',
            'and'       => '',
        )
    );

    $parts = array_map(
        function ($val) {
            return floatval($val);
        },
        preg_split('/[\s-]+/', $word)
    );

    $stack = new SplStack; 
    $sum   = 0; 
    $last  = null;

    foreach ($parts as $part) {
        if (!$stack->isEmpty()) {
            if ($stack->top() > $part) {
                if ($last >= 1000) {
                    $sum += $stack->pop();
                    $stack->push($part);
                } else {
                    $stack->push($stack->pop() + $part);
                }
            } else {
                $stack->push($stack->pop() * $part);
            }
        } else {
            $stack->push($part);
        }
        $last = $part;
    }
    $number = $sum + $stack->pop();
    // echo $number;
     return $number; 
}
}



