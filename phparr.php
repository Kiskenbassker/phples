<?php

// http://archive-ipq-co.narod.ru/l1/arrays.html - Task 1

error_reporting(-1);

/* Оценки, которые поставили фотке анона в одноклассниках */
$rates = array(3, 5, 3, 2, 1, 8, 4, 3, 4, 3, 2, 3);

/* Посчитаем среднюю оценку. Для этого найдем сумму всех оценок, и поделим 
ее на их количество */
$ratesSum = array_sum($rates);
$ratesCount = count($rates); /* Количество оценок — эту строчку надо дописать самому */
$averageRate = $ratesSum / $ratesCount; /* Средняя оценка — допиши сам */

echo "Анону поставили {$ratesCount} оценок, их сумма = {$ratesSum}<br/>Средний балл — {$averageRate}<br/><br/>";

// http://archive-ipq-co.narod.ru/l1/arrays.html - Task 2

$anonHeight = 169; /* Рост анона */

/* Рост одноклассников анона */
$classmates = array(
	'Антон'	=>	172,
	'Семен'	=>	165,
	'Лена'	=>	189,
	'Иван'	=>	171,
	'Петр'	=>	182,
	'Сидор'	=>	176,
	'Аня'		=>	180,
	'Таня'	=>	179,
	'Маня'	=>	171
);

$number = 0; /* Сколько человек в классе выше анона */

/* Перебираем всех одноклассников */
foreach ($classmates as $name => $height) {
    echo "Имя: {$name}, рост: {$height} см.<br/>";
    if($height > $anonHeight) {
        echo "{$name} выше анона<br/>";
        $number++;
    }
}

echo "В классе {$number} человек выше анона<br/><br/>";

// http://archive-ipq-co.narod.ru/l1/arrays.html - Task 3

$answers = array(
    1 => 'да',
    2 => 'нет',
    3 => 'не знаю',
    4 => 'никогда',
    5 => 'это зависит от тебя',
    6 => 'спроси анона'
);

$question = 'Выучу ли я PHP без регистрации и СМС?';
//$random = rand(1, 6);
$answer = $answers[array_rand($answers)];

echo "Вопрос: {$question}<br/>";
echo "Ответ: {$answer}<br/><br/>";

// http://archive-ipq-co.narod.ru/l1/arrays.html - Task 4

/* Слоги, из которых составляется имя */
$letters = array(
    'ко',   'и',    'дзу',  'ми',
    'са',   'ку',   'ра',   'да',
    'чи',   'а',    'ки',   'ми',
    'на',   'го',   'ха',   'ру'
);

/* В эту переменную запишем получившееся имя */
$name = '';

/* Гененрируем 4 слога */
for ($i = 1; $i <= 4; $i++) {   
    /* Выкидываем случайное число (count - число элементов в массиве) */
    $random = array_rand($letters); 
    $randomText = $letters[$random];
    
    echo "Выпало число {$random}, слог {$randomText}<br/>";
    $name = $name . $randomText;
}

echo "------<br/>";
echo "Советую имя: {$name} - не прогадаешь!<br/><br/>";