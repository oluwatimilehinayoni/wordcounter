<!--
    PHP Word Counter 1.0
    Author: Oluwatimilehin Ayoni
    Email: ayonitimilehin58@gmail.com
-->

<?php
// Counting the number of characters and words in the input

$q = $_REQUEST['q'];
$word = strtolower($q);
$word_count = str_word_count($word);
//$alpha = strlen($word);

// Assigning vowels in the input

$vowel1 = "a";
$vowel2 = "e";
$vowel3 = "i";
$vowel4 = "o";
$vowel5 = "u";

// Assigning consonants in the input
$b = "b";
$c = "c";
$d = "d";
$f = "f";
$g = "g";
$h = 'h';
$j = "j";
$k = "k";
$l = "l";
$m = "m";
$n = "n";
$p = "p";
$q = "q";
$r = "r";
$s = "s";
$t = "t";
$v = "v";
$w = "w";
$x = "x";
$y = "y";
$z = "z";

// Counting the number of consonants in the input
$alpha_b = substr_count($word, $b);
$alpha_c = substr_count($word, $c);
$alpha_d = substr_count($word, $d);
$alpha_f = substr_count($word, $f);
$alpha_g = substr_count($word, $g);
$alpha_h = substr_count($word, $h);
$alpha_j = substr_count($word, $j);
$alpha_k = substr_count($word, $k);
$alpha_l = substr_count($word, $l);
$alpha_m = substr_count($word, $m);
$alpha_n = substr_count($word, $n);
$alpha_p = substr_count($word, $p);
$alpha_q = substr_count($word, $q);
$alpha_r = substr_count($word, $r);
$alpha_s = substr_count($word, $s);
$alpha_t = substr_count($word, $t);
$alpha_v = substr_count($word, $v);
$alpha_w = substr_count($word, $w);
$alpha_x = substr_count($word, $x);
$alpha_y = substr_count($word, $y);
$alpha_z = substr_count($word, $z);

$conso = $alpha_b + $alpha_c + $alpha_d + $alpha_f + $alpha_g + $alpha_h + $alpha_j + $alpha_k + $alpha_l + $alpha_m +
    $alpha_n + $alpha_p + $alpha_q + $alpha_r + $alpha_s + $alpha_t + $alpha_v + $alpha_w + $alpha_x + $alpha_y + $alpha_z;


// Counting the number of vowels in the input
$alpha_a = substr_count($word, $vowel1);
$alpha_e = substr_count($word, $vowel2);
$alpha_i = substr_count($word, $vowel3);
$alpha_o = substr_count($word, $vowel4);
$alpha_u = substr_count($word, $vowel5);

$totalVowels = $alpha_a + $alpha_e + $alpha_i + $alpha_o + $alpha_u;

$alpha = $conso + $totalVowels;

// Counts the number of sentence
$y = "";
$num_sen = 0;
$index = 0;

while ($word != $y) {
    $y .= $word[$index];
    $can = ctype_alpha($word[$index - 2]);
    if ($can == 1 && ($word[$index] == "." || $word[$index] == "?" || $word[$index] == "!")) {
        $num_sen++;
    }
    $index++;
}

// Counts the number of Paragraph
$p = substr_count($word, "\n");
$para = $p + 1;

function paragraphs($para)
{
    if ($para > 1) {
        return "paragraphs";
    } else {
        return "paragraph";
    }
}

// Print Result
echo "There are ", $word_count, " words, ", $alpha, " characters, ", $conso, " consonants, ",
$totalVowels, " vowels, ", $num_sen++, " ", "sentences", " and ", $para, " ",  paragraphs($para), " ", "in the document.";

?>