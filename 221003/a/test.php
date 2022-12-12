<?php

function comp($a1, $a2)
{
  if (!$a1 || !$a2) {
    return false;
  }
  if (is_object($a1)) {
    $a1 = (array)$a1;
  }
  if (is_object($a2)) {
    $a2 = (array)$a2;
  }
  if (count($a1) == 0 || count($a2) == 0) {
    return false;
  }

  foreach ($a2 as $key2 => $value) {
    if (($key1 = array_search(sqrt($value), $a1)) !== false) {
      unset($a1[$key1]);
    }
    else {
      return false;
    }
  }

  array_values($a1);
  return (count($a1) == 0);
}



print "comp\n";
print "----\n";
$a1 = (object) [121, 144, 19, 161, 19, 144, 19, 11];
$a2 = [11 * 11, 121 * 121, 144 * 144, 19 * 19, 161 * 161, 19 * 19, 144 * 144, 19 * 19];
var_dump(comp($a1, $a2));
$a1 = [121, 144, 19, 161, 19, 144, 19, 11];
$a2 = [11 * 21, 121 * 121, 144 * 144, 19 * 19, 161 * 161, 19 * 19, 144 * 144, 19 * 19];
var_dump(comp($a1, $a2));


function validBraces($braces)
{
  while ((strpos($braces, '()') !== false) ||  (strpos($braces, '{}') !== false) ||  (strpos($braces, '[]') !== false)) {
    $braces = str_replace(
      array('()', '[]', '{}'),
      array(''),
      $braces
    );
  }
  return (strlen($braces) === 0);
}

print "\n\nvalidBraces\n";
print "-----------\n";
var_dump(validBraces("(){}[]"));
var_dump(validBraces("([{}])"));
var_dump(validBraces("(}"));
var_dump(validBraces("[(])"));
var_dump(validBraces("[({})](]"));

function reverseWords($str)
{
  return implode(' ', array_map('strrev', explode(' ', $str)));
}

var_dump(reverseWords('elbuod  decaps  sdrow'));


function reverse($str)
{
  $arr = explode(' ', trim($str));
  for ($i = 0; $i < count($arr); $i++) {
    if ($i % 2 !== 0) {
      $arr[$i] = strrev($arr[$i]);
    }
  }
  return implode(' ', $arr);
}
$test = 123;

var_dump(reverse("Did it work?"));

function longest($a, $b)
{
  $arr = array_unique(str_split($a . $b), SORT_REGULAR);
  sort($arr);
  return implode("", $arr);
}

var_dump(longest("loopingisfunbutdangerous", "lessdangerousthancoding"));
