<?php
function isPalindrome($str) {
    $n = strlen($str);
    for ($i = 0; $i < $n/2; $i++) {
        if ($str[$i] != $str[$n-$i-1]) {
            return false;
        }
    }
    return true;
}

function longestPalindrome($str) {
    $n = strlen($str);
    $longest = "";
    for ($i = 0; $i < $n; $i++) {
        for ($j = $i+1; $j <= $n; $j++) {
            $sub = substr($str, $i, $j-$i);
            if (isPalindrome($sub) && strlen($sub) > strlen($longest)) {
                $longest = $sub;
            }
        }
    }
    return $longest;
}

$str = "abcbadeffedabcba";
$longest = longestPalindrome($str);
echo "Longest palindrome: " . $longest . "\n";
?>