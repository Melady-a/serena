<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<link rel="stylesheet" href="style.css" type="text/css" /> -->
<link rel="stylesheet" href="bootstrap-4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="bootstrap-4.4.1/js/bootstrap.min.js" ></script>
<title>Untitled Document</title>
<script language="javascript" src="string_js.js">

</script>
<style type="text/css">
<!--
.style4 {color:#663333}
.style5 {
	font-family: "Bookman Old Style";
	font-weight: bold;
	color:#000099
}
.style6 {font-size: 12px}
.style7 {font-family: "Bookman Old Style"; font-weight: bold; color: #999900; font-size: 12px; }
.style8 {font-family: "Bookman Old Style"; font-weight: bold; color: #66FFFF; font-size: 14px; }
-->
</style>
</head>

<body >
<img src="img/php.jpg" width="100%" height="150" />
<table width="240" height="232" border="1" bordercolor="#CC6699" class="menu" >
  <tr>
    <td width="228" class="mtd"><a href="index.php"  class="a style4"  style="text-decoration:none">История PHP </a></td>
  </tr>
  <tr>
    <td class="mtd"><a href="bases.php"  class="a style4"  style="text-decoration:none">Основы PHP</a></td>
  </tr>
  <tr>
    <td height="24" class="mtd"><a href="operators.php"  class="a style4"  style="text-decoration:none"><span class="style4">Операторы языка PHP</span></a></td>
  </tr>
  <tr>
    <td class="mtd"><a href="array.php"  class="a style4"  style="text-decoration:none">Массивы </a></td>
  </tr>
  <tr>
    <td class="mtd"><a href="function.php" class="a style4"  style="text-decoration:none">Функции </a></td>
  </tr>
  <tr>
    <td class="mtd"><a href="file.php" class="a style4"  style="text-decoration:none"> Работа с файлами  </a></td>
  </tr>
  <tr>
    <td height="41" class="mtd"><a href="expression.php"  class="a style4"  style="text-decoration:none" >Регулярные выражения  </a></td>
  </tr>
    <tr>
    <td height="37" class="mtd"><a href="phpsql.php"  class="a style4"  style="text-decoration:none" >PHP и MySQL. Совместная работа  </a></td>
  </tr>
</table>
<table  style="position:fixed; width: 241px; left: 14px; top: 476px; height: 244px;" border="0" bordercolor="#CC6699" >
  <tr>
    <td width="228" class="mtd"><a href="string.php#sf"  class="style7"  style="text-decoration:none">Строковые функции PHP</a></td>
  </tr>
  <tr>
    <td height="25" class="mtd"><a href="string.php#ht"  class="style7"  style="text-decoration:none">Htmlspecialchars</a></td>
  </tr>
  <tr>
    <td height="24" class="mtd"><a href="string.php#sl"  class="style7"  style="text-decoration:none">Функции поиска в тексте</a></td>
  </tr>
  <tr>
    <td class="mtd"><a href="string.php#st"  class="style7"  style="text-decoration:none">Функции strlen(), chr() и ord() </a></td>
  </tr>
  <tr>
    <td class="mtd"><a href="string.php#strim" class="style7"  style="text-decoration:none">Trim-функции (функции удаления пробельных символов)</a></td>
  </tr>
  <tr>
    <td class="mtd"><a href="string.php#sp" class="style7"  style="text-decoration:none">Функции форматного вывода. Спецификаторы преобразования</a></td>
  </tr>
   <tr>
    <td class="mtd"><a href="string.php#examples" class="style7"  style="text-decoration:none">Примеры</a></td>
  </tr>
 
</table>

<div class="pclass" style="position:absolute; left: 272px; top: 176px; width: 672px; height: 302px;">
  <h4 align="center" class="style4">Строковые функции PHP</h4>
  <a name=#sf>
  <h4 class="style5">Строковые функции PHP</h4>
  <p>Несмотря на то, что эта глава написана скорее в духе справочника,   материал, изложенный в ней, достаточно серьезен, хотя и не самый сложный для   понимания. Умение грамотно работать со <strong>строками</strong> очень важно для   программиста. <strong>Строковых функций в PHP</strong> немало, причем многие из   них, так или иначе, просто дублируют друг друга. Однако, приемы работы с   основными блоками функций (функции поиска и замены в тексте, функции удаления   пробельных символом (trim-функции), функции форматного вывода) надо представлять   очень четко. </p>
  <blockquote>Вообще говоря, по определению, строка – это   последовательность символов типа <strong>char</strong>, которая заканчивается нулевым   символом. Поэтому, можно, конечно, радоваться тому, что при работе со строками,   нам не приходится жонглировать указателями в стиле C/C++, однако не стоит   забывать о том, что цена этому удобству – быстродействие. Поэтому некоторые   приводимые здесь функции мы будем обсуждать в том числе и с точки зрения их   быстродействия. </blockquote>
  <p><br />
  </p>
  <a name=#ht>
  <h4 class="style5">Функция htmlspecialchars</h4>
  <p>Вообще говоря, эта функция относится к функциям преобразования   символов, о которых мы тоже будем говорить в этой главе. Эту функцию мы вынесли   в самое начало из-за того, что она делает одну простую, но важную вещь –   производит преобразование спецсимволов в их HTML эквиваленты. Попросту говоря,   эта функция гарантирует, что если Вы вдруг вздумаете написать в гостевой книге   или на форуме какой-то код (php, javascript и т.д.) он отобразиться совершенно   нормально, но выполняться не будет! Т.е. функцию надо применять, если нужно   вывести в броузере какой-то код. Кроме того, эта функция избавляет Вас от всяких   кретинов, которым нечем заняться кроме как писать в Ваших гостевых книгах (и   любых формах ввода) какие либо скрипты. Ну а теперь, собственно, о функции.</p>
  <p><strong><em>Синтаксис:</em></strong></p>
  <blockquote>
    <pre>string <strong>htmlspecialchars</strong><em>(</em>string <strong>str</strong> [, int <strong>quote_style</strong> [, string <strong>charset</strong>]]<em>)</em>;  </pre>
  </blockquote>
  <p>Первый аргумент – строка, в которой надо выполнить преобразование.   В качестве второго необязательного аргумента принимается одна из двух констант:   ENT_QUOTES или ENT_QUOTES. Первая константа передается если надо транслировать   кавычки, а вторая, если этого делать не надо. Третий необязательный аргумент   принимает строку, представляющую набор символов, используемых в преобразовании   (по умолчанию ISO-8859-1).</p>
  <p>К примеру, если Вы обрабатываете какое-то сообщение <strong>$msg</strong> формы, то обработка его функцией <strong>htmlspecialchars()</strong> возможна следующим   образом:</p>
  <blockquote>
    <pre><strong>$msg</strong> = <strong>htmlspecialchars</strong><em>(</em><strong>$msg</strong><em>)</em>;  </pre>
  </blockquote>
  <a name=#sl>
  <h4 class="style5">Функции поиска в тексте</h4>
 <br>
  <h1><strong>substr()</strong></h1>
  <p><em>Синтаксис:</em></p>
  <blockquote>
    <pre>string <strong>substr</strong><em>(</em>string <strong>string</strong>, int <strong>start</strong>[, int <strong>length</strong>]<em>)</em>  </pre>
  </blockquote>
  <p>Эта функция возвращает часть строки. Первый аргумент – исходная   строка; второй – положение в строке, которую надо вернуть, первого символа   (отсчет начинается с нуля); третий – длина строки в символах, которую надо   вернуть. Если третий аргумент не указан, то возвращается вся оставшаяся часть   строки.</p>
  <h1><strong>strpos()</strong></h1>
  <p><em>Синтаксис:</em></p>
  <blockquote>
    <pre>string <strong>strpos</strong>(string <strong>haystack</strong>, string <strong>needle</strong>[, int <strong>offset</strong>])  </pre>
  </blockquote>
  <p>Эта функция обеспечивает действие, обратное функции <strong>substr</strong>.   Т.е. она возвращает позицию в строке <strong>haystack</strong>, в которой найдена   переданная ей подстрока <strong>needle</strong>.</p>
  <p>Необязательный параметр <strong>offset</strong> позволяет указать в строке позицию, с   которой надо начинать поиск:</p>
  <h1><strong>strrpos()</strong></h1>
  <p><em>Синтаксис:</em></p>
  <blockquote>
    <pre>string <strong>strrpos</strong><em>(</em>string <strong>haystack</strong>, string <strong>needle</strong><em>)</em>  </pre>
  </blockquote>
  <p>Эта функция ищет в строке <strong>haystack</strong> последнюю позицию, где   встречается символ <strong>needle</strong>.</p>
  <h1><strong>strstr()</strong></h1>
  <p><em>Синтаксис:</em></p>
  <blockquote>
    <pre>string <strong>strstr</strong><em>(</em>string <strong>haystack</strong>, string <strong>needle</strong><em>)</em>  </pre>
  </blockquote>
  <p>Функция <strong>strstr()</strong> возвращает участок строки, заданной в   параметре <strong>haystack</strong>, начиная с первого фрагмента, указанного в параметре <strong>needle</strong> и до конца строки. В случае неудачи функция возвращает <strong>false</strong>. </p>
  <p>Эта функция чувствительна к регистру. Заметим также, что в случае,   если <strong>needle</strong> не является строкой, то значение преобразуется в целое и   используется как код искомого символа.</p>
  <br />
  <h1><strong>strchr()</strong></h1>
  <p><em>Синтаксис:</em></p>
  <blockquote>
    <pre>string <strong>strchr</strong><em>(</em>string <strong>haystack</strong>, string <strong>needle</strong><em>)</em>  </pre>
  </blockquote>
  <p>Данная функция работает абсолютно идентично функции <strong>strstr()</strong>:</p>
  <h1><strong>stristr()</strong></h1>
  <p><em><strong>Синтаксис:</strong></em></p>
  <blockquote>
    <pre>string <strong>stristr</strong><em>(</em>string <strong>haystack</strong>, string <strong>needle</strong><em>)</em>  </pre>
  </blockquote>
  <p>Эта функция работает абсолютно аналогично функции <strong>strstr</strong>(),   только является нечувствительной к регистру.</p>
  <br />
  <h1><strong>strrchr()</strong></h1>
  <p><em><strong>Синтаксис:</strong></em></p>
  <blockquote>
    <pre>string <strong>strrchr</strong><em>(</em>string <strong>haystack</strong>, string <strong>needle</strong><em>)</em>  </pre>
  </blockquote>
  <p>А эта функция отличается от аналогичных ей тем, что осуществляет   поиск последнего вхождения подстроки. Т.е. функция <strong>strrchr</strong>() возвращает   участок строки, заданной в параметре <strong>haystack</strong>, начиная с последнего   фрагмента, указанного в параметре <strong>needle</strong> и до конца строки. В случае   неудачи возвращает <strong>false</strong>.</p>
  <p>Чувствительна к регистру. В случае, если <strong>needle</strong> не является   строкой, то значение преобразуется в целое и используется как код искомого   символа.</p>
  <h1><strong>substr_count()</strong></h1>
  <p><em>Синтаксис:</em></p>
  <blockquote>
    <pre>int <strong>substr_count</strong><em>(</em>string <strong>haystack</strong>, string <strong>needle</strong><em>)</em>  </pre>
  </blockquote>
  <p>Функция <strong>substr_count</strong>() находит количество вхождений   фрагмента в строку. Она возвращает число фрагментов <strong>needle</strong>,   присутствующих в строке <strong>haystack</strong>.</p>
  <h1><strong>strspn()</strong></h1>
  <p><em>Синтаксис:</em></p>
  <blockquote>
    <pre>int <strong>strspn</strong><em>(</em>string <strong>str1</strong>, string <strong>str2</strong><em>)</em>  </pre>
  </blockquote>
  <p>Функция <strong>strspn</strong>() определяет присутствие начальных символов   в строке. Она возвращает длину начального фрагмента строки <strong>str1</strong>,   состоящего полностью из символов, которые есть в строке <strong>str2</strong>.</p>
  <h1><strong>strcspn()</strong></h1>
  <p><em>Синтаксис:</em></p>
  <blockquote>
    <pre>int <strong>strcspn</strong><em>(</em>string <strong>str1</strong>, string <strong>str2</strong><em>)</em>  </pre>
  </blockquote>
  <p>Обратная функции <strong>strspn</strong>() функция <strong>strcspn</strong>()   Определяет отсутствие начальных символов в строке.</p>
  <p>Функция <strong>strcspn</strong>() возвращает длину начального фрагмента   строки <strong>str1</strong>, состоящего полностью не из символов, которые есть в строке <strong>str2</strong>.</p>
 
  <p class="pclass" >&nbsp;</p>
  <a name=#st>
     <h4 class="style5">Функции strlen(), chr() и ord() </h4>
     <h1>strlen()</h1>
     <p>возвращает длину строки, которую принимает в качестве аргумента</p>
     <h1>chr()</h1>
     <p>Эта функция принимает в качестве аргумента ASCII код символа и   возвращает соответствующий этому коду фактический символ</p>
     <h1>ord()</h1>
     <p>Выполняет действие, обратное функции <strong>chr</strong>():</p>
     <p>.</p>

 <a name=#strim>
    <h4 class="style5">Trim-функции (функции удаления пробельных символов)</h4>
 <br>
 <p>Это очень полезная группа функций, без которых сложно обойтись при   работе со строками. К пробельным символам относятся символы &quot;\n&quot;, &quot;\r&quot;, &quot;\t&quot;,   &quot;\v&quot;, &quot;\0&quot; и собственно пробел. Особенно часто мы с этими функциями будем   работать при изучении файлового ввода-вывода.</p>
 <h1>trim()</h1>
 <p>Эта функция принимает в качестве своего единственного аргумента   строку, и удаляет из нее пробелы слева и справа. </p>
 Функция <strong>ltrim()</strong> удаляет из строки начальные пробельные   символы (т.е., те которые слева); <strong>rtrim()</strong>– конечные   пробельные символы. Функция <strong>chop</strong>() является синонимом   функции <strong>rtrim</strong>().
 <p class="pclass" >&nbsp;</p>
 <blockquote>&nbsp;</blockquote>
 <a name=#sp>
     <h4 class="style5">Функции форматного вывода. Спецификаторы преобразования</h4>
 <br>
 <h1>printf() и sprintf()</h1>
 <p><strong><em>Синтаксис:</em></strong></p>
 <blockquote>
   <pre>int <strong>printf</strong><em>(</em>string <strong>format</strong> [, mixed <strong>args</strong>]<em>)</em>  string <strong>sprintf</strong><em>(</em>string <strong>format</strong> [, mixed <strong>args</strong>]<em>)</em>  </pre>
 </blockquote>
 <p>Об этих функциях мы поговорим несколько подробнее, чем о   предыдущих функциях работы со строками, нами рассмотренных. Сразу скажем, что   эти две функции предназначены для форматного вывода и что отличаются они тем,   что функция <strong>printf</strong>() производит форматирование и выводит результаты в   выходной поток (браузер или консоль), а <strong>sprintf</strong>() после осуществления   требуемого форматирования просто возвращает строку. </p>
 <p>С одной стороны этими функциями можно пользоваться просто как   функциями вывода</p>
 <p>Но использовать их только так, как мы сейчас продемонстрировали –   простое расточительство, так как эти функции способны на большее. Дело в том,   что аргумент <strong>format</strong> этих функций представляет собой строку, содержащую   специальные символы, использующиеся при форматировании данных, содержащихся в   списке аргументов. Эти спецсимволы называются спецификаторами преобразования, а   символы, которые остаются неизменными при форматировании строки, называют   директивами. </p>
 <p>Спецификация определяется символом &quot;<strong>%</strong>&quot;, за которым может   следовать до пяти спецификаторов в следующем порядке:</p>
 <ol>
   <li><strong>Спецификатор заполнения</strong>
       <blockquote>Устанавливает символ, которым строка заполняется до заданного   размера. По умолчанию используется пробел. Спецификатор заполнения действует   только при наличии спецификатора минимальной ширины</blockquote>
   </li>
   <li><strong>Спецификатор выравнивания</strong>
       <blockquote>По умолчанию дополнение строки до минимальной ширины производится с   левого края (т.е., строка выравнивается по правому краю). Если добавлен символ   дефиса, то строка выравнивается по левому краю </blockquote>
   </li>
   <li><strong>Спецификатор минимальной ширины</strong>
       <blockquote>
         <p>Представляет собой целое число, задающее минимальный размер   форматированной строки. Если переданная строка меньше, то она дополняется   символами, указанными в спецификаторе заполнения</p>
         <p>&nbsp;</p>
         <ul>
           <li><strong>Спецификатор точности</strong>
               <blockquote>Предназначен для указания количества десятичных знаков в   представлении чисел с плавающей точкой. При применении этого спецификатора для   форматирования строк, он определяет максимальное количество символов, которое   нужно взять из переданной строки</blockquote>
           </li>
           <li><strong>спецификатор типа</strong>
               <blockquote>Этот спецификатор предназначен для указания типа данных, которые   переданы в качестве аргумента. Спецификатор может принимать одно из следующих   значений:</blockquote>
             <ul>
                 <li>b – целое число, представляемое в двоичном виде; </li>
               <li>с – целое число, представляемое в виде символа с тем же ASCII кодом; </li>
               <li>d – целое число, представляемое в десятичном виде; </li>
               <li>f – число с плавающей точкой, представляемое в виде десятичной дроби; </li>
               <li>o – целое число, представляемое в восьмеричном виде; </li>
               <li>s – строка; </li>
               <li>x – целое число, представляемое в шестнадцатеричном виде в нижнем регистре; </li>
               <li>X – целое число, представляемое в шестнадцатеричном виде в верзнем регистре </li>
             </ul>
           </li>
           <li>
             <p>Еще одна форматная функция</p>
             <h1>функция sscanf()</h1>
             <p><strong><em>Синтаксис:</em></strong></p>
             <blockquote>
               <pre>mixed <strong>sscanf</strong><em>(</em>string <strong>str</strong>, string <strong>format</strong> [, string <strong>var1</strong> ...]<em>)</em>  </pre>
             </blockquote>
             <p>Эта функция является полной противоположностью функции <strong>printf()</strong>. Она интерпретирует строку <strong>str</strong> согласно формату <strong>format</strong>, аналогично спецификации <strong>printf()</strong>. При указании только двух   аргументов полученные значения возвращаются как массив.</p>
           </li>
         </ul>
         
      </blockquote>
   </li>
 </ol>

 <blockquote>&nbsp;
 </blockquote>

 <a name=#examples>
 <h4 class="style5">Примеры</h4>
 <img  style=" left: 277px; top: 3078px; height: 200px; width: 671px;"src="img/z67.jpg" />
<p class="pclass">Zadacha #67</p>
<form method="POST" name="Myform">
n <input type="text" name="nz67">

<input type="submit" name="knopkaz67" onClick="return Checkz67()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/67.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 200px; width: 671px;"src="img/z68.jpg" />
</p>
<p class="pclass">Zadacha #68</p>
<form method="POST" name="Myform">
n <input type="text" name="nz68">

<input type="submit" name="knopkaz68" onClick="return Checkz68()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/68.php");
?>
  </p>
<p><img  style=" left: 277px; top: 3078px; height: 150px; width: 671px;"src="img/z74.jpg" />
</p>
<p class="pclass">Задача #74</p>
<form method="POST" name="Myform">
n <input type="text" name="nz74">

<input type="submit" name="knopkaz74" onClick="return Checkz74()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/74.php");
?>
 </p>
<p>  <img  style=" left: 277px; top: 3078px; height: 200px; width: 671px;"src="img/z86.jpg" />
</p>
<p class="pclass">Задача #86</p>
<form method="POST" name="Myform">
n <input type="text" name="nz86">

<input type="submit" name="knopkaz86" onClick="return Checkz86()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/86.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z87.jpg" />
</p>
<p class="pclass">Задача #87</p>
<form method="POST" name="Myform">
n <input type="text" name="nz87">
m <input type="text" name="mz87">

<input type="submit" name="knopkaz87" onClick="return Checkz87()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/87.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 200px; width: 671px;"src="img/z88.jpg" />
</p>
<p class="pclass">Задача #88</p>
<form method="POST" name="Myform">
n <input type="text" name="nz88">

<input type="submit" name="knopkaz88" onClick="return Checkz88()" value="OK"/> 
</form>
<?php
include("tasks/88.php");
?>


</div>

</body>

</html>
