<!--

На вход подается строка целых чисел, разделенных пробелами.

Найдите максимальную разницу между двумя элементами строки при условии, что меньшее число должно находиться справа от большего.

Например, для строки "1 6 4 3" правильный ответ: "3" (6-3)
-->

<?php

function maxDifferent ($strNums) {

$arrStr = explode(" ", $strNums);

foreach ($arrStr as $thisKey => $thisValue) {
	foreach ($arrStr as $twoKey => $twoValue) {
		if ($thisKey === $twoKey) {
			continue;
		}
		if (($thisValue > $twoValue) && ($twoKey > $thisKey)) {
			$difference = $thisValue - $twoValue;
			$arrDiff[] = $difference;
		}
	}
}
return max($arrDiff);
}

echo maxDifferent ('5 1 4 2');

?>