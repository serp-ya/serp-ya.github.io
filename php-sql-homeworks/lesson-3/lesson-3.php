<style>
	body {
		max-width: 600px;
		margin: 0 auto;
	}
</style>

<?php 

$array = array(
	'Africa' => array('Okapia johnstoni', 'Tragelaphus eurycerus', 'Hexaprotodon liberiensis', 'Panthera leo'),
	'Antarctica' => array('Phocidae gray', 'Leptonychotes weddellii', 'Lobodon carcinophagus', 'Lagenorhynchus cruciger'),
	'Asia' => array('Canis lupus pallipes', 'Sciurillus pusillus', 'Prionailurus Severtzov', 'Trachypithecus hatinhensis'),
	'Australia' => array('Notoryctes typhlops', 'Thylacinus cynocephalus', 'Ornithorhynchus anatinus', 'Sarcophilus laniarius'),
	'Europe' => array('Dicerorhinus binagadensis', 'Atelerix algirus', 'Halichoerus grypus', 'Sicista caucasica'),
	'North America' => array('Vulpes macrotis', 'Vulpes velox', 'Lepus alleni', 'Canis lycaon'),
	'South America' => array('Mustela africana', 'Echinoprocta rufescens', 'Pithecia pithecia', 'Sapajus nigritus')
);

echo "<h2>Первый вариант</h2>";

####################  ВАРИАНТ №1  #################################

foreach ($array as $continent => $fauna) 							// Разбираем исходный массив по контенентам => фауне
{
	foreach ($fauna as $key => $animal) 								// Разбираем массивы фауны на фауна => животное
	{
		if (!is_string($animal)) return NULL;							// Если элемент Животное не строка, возвращаем NULL
		if (substr_count($animal, ' ') != 1) continue;		// Если в элементе Животное не 2 слова, отбрасываем его

		$new_array[] = $animal;														// Переносим каждое животное в новый массив
	}
}

foreach ($new_array as $key => $animal) 							// Разбираем новый массив на ключ => животное
{
	if (!is_string($animal)) return NULL;								// Если элемент Животное не строка, возвращаем NULL
	$pos = strpos($animal, ' ');												// Ищем пробел в каждом элементе
	$second_word = substr($animal, $pos);								// Вырезаем второе слово в каждом элементе

	$first_word_len = (strlen($animal) - strlen($second_word)); // Считаем длину первого слова
	/* Здесь у меня возник вопрос, strlen($second_word) у меня
	 * высчитывается почему-то === (длина_второго_слова + 1)...
	 * 
	 * Сколько не думал, не смог понять, почему так
	 */
	
	$first_word = substr($animal, 0, $first_word_len);	// Вырезаем первое слово

	$array_fst_word[] = $first_word;										// Убираем первые слова в отдельный массив
	$array_sec_word[] = $second_word;										// Убираем вторые слова в отдельный массив
}

shuffle($array_fst_word);															// Перемешиваем массивы
shuffle($array_sec_word);															// ==||==

for ($i=0; $i < count($array_fst_word) ; $i++) { 			// Т.к. по условиям предыдущих операций, кол-во элементов не может отличаться в обоих массивах с вырезанными словами, не стал делать дополнительных проверок и задал кол-во итераций === кол-ву элементов в массиве с первыми словами
	echo "$array_fst_word[$i] $array_sec_word[$i]<br>";	// 
}
###################################################################

echo "<br><br><br><h2>Второй вариант</h2>";

####################  ВАРИАНТ №2  #################################

foreach ($array as $continent => $fauna) 							// Разбираем исходный массив по контенентам => фауне
{
	foreach ($fauna as $key => $animal) 								// Разбираем массивы фауны на фауна => животное
	{
		if (!is_string($animal)) return NULL;							// Если элемент Животное не строка, возвращаем NULL
		if (substr_count($animal, ' ') != 1) continue;		// Если в элементе Животное не 2 слова, отбрасываем его

		$pos = strpos($animal, ' ');											// Ищем пробел в каждом элементе
		$second_word = substr($animal, $pos);							// Вырезаем второе слово в каждом элементе

		$first_word_len = (strlen($animal) - strlen($second_word)); // Считаем длину первого слова
		$first_word = substr($animal, 0, $first_word_len);// Вырезаем первое слово

		$array_sec_word2[] = $second_word;								// Переносим вторые слова в отдельный массив

		$new_array2[$continent][] = $first_word;					// Переносим первые слова в отдельный массив
	}
}

shuffle($array_sec_word2);														// Мешаем массив со вторыми словами
$example = 0;																					// Создаём отдельную переменную - счётчик для цикла добавления вторых слов

foreach ($new_array2 as $continent => $fst_wrd) 			// Разбиваем исходный массив на континент => первое_слово
{
	echo "<h2>$continent</h2>";													// Выводим h2 заголовок с соответствующим континентом

	$comma = count($fst_wrd);														// Считаем кол-во элементов в каждом массиве Континент
	$commas_p = $comma-1;																// Создаём переменную, для простановки запятых, меньше на 1 от кол-ва элементов в массиве Континент

	shuffle($fst_wrd);																	// Перемешиваем массивы с Первыми словами
	foreach ($fst_wrd as $key => $value) 								// Разбиваем этот массив
	{
		echo "$value $array_sec_word2[$example]";					// Выводим нужное фантастическое животное
		$example++;																				// Меняем значение счётчика Вторых слов

		if ($commas_p !=0) echo ", ";											// Проверяем переменную проставки запятых, выводим запятую, если переменная != нулю
		$commas_p--; 																			// Минусуем переменную простановки запятых
	}
}
###################################################################

echo "<br><br><br><br><br>";													// Отодвигаю низ страницы для удобства чтения

?>