<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<title>Untitled Document</title>
<script language="javascript" src="bases_js.js">

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

<body>
<img src="img/php.jpg" width="100%" height="150" />
<table width="240" height="232" border="1" bordercolor="#CC6699" class="menu" >
  <tr>
    <td width="228" class="mtd"><a href="index.php"  class="a style4"  style="text-decoration:none">История PHP </a></td>
  </tr>
  <tr>
    <td class="mtd"><a href="operators.php"  class="a style4"  style="text-decoration:none">Операторы языка PHP</a></td>
  </tr>
  <tr>
    <td height="24" class="mtd"><a href="string.php"  class="a style4"  style="text-decoration:none">Строковые функции PHP</a></td>
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
    <td width="228" class="mtd"><a href="bases.php#prog"  class="style7"  style="text-decoration:none">PHP программы</a></td>
  </tr>
  <tr>
    <td height="25" class="mtd"><a href="bases.php#coments"  class="style7"  style="text-decoration:none">Комментарии</a></td>
  </tr>
  <tr>
    <td height="24" class="mtd"><a href="bases.php#perem"  class="style7"  style="text-decoration:none">Переменные</a></td>
  </tr>
  <tr>
    <td class="mtd"><a href="bases.php#vneshperem"  class="style7"  style="text-decoration:none">Внешние переменные</a></td>
  </tr>
  <tr>
    <td class="mtd"><a href="bases.php#const" class="style7"  style="text-decoration:none">Константы</a></td>
  </tr>
  <tr>
    <td class="mtd"><a href="bases.php#types" class="style7"  style="text-decoration:none">Типы данных в РНР. Преобразование типов</a></td>
  </tr>
  <tr>
    <td height="27" class="mtd"><a href="bases.php#operators"  class="style7"  style="text-decoration:none" >Операторы</a></td>
  </tr>
  <tr>
    <td height="27" class="mtd"><a href="bases.php#examples"  class="style7"  style="text-decoration:none" >Примеры</a></td>
  </tr>
</table>

<div class="pclass" style="position:absolute; left: 271px; top: 169px; width: 672px; height: 302px;">
  <h4 align="center" class="style4"> Основы PHP</h4>
  <a name=#prog>
  <h4 class="style5">PHP программы</h4>
<p class="pclass">Программы PHP могут выполняться двумя способами: как сценарное приложение Web-сервером и как консольные программы. Поскольку, нашей задачей является программирование web-приложений, мы преимущественно будем рассматривать первый способ. 

Дело в том, что на PHP, как правило, используется сугубо для программирования приложений, связанных с Интернетом. Однако, PHP можно еще использовать в качестве интерпретатора командной строки, в основном в *nix-системах. Последнее возможно при помощи CORBA и COM интерфейсов, а также при помощи расширения PHP-GTK. При таком использовании PHP возможно решение следующих задач: </p>
<ul tupe="circle" >
<li class="pclass">создание приложений интерактивной командной строки;</li>
<li class="pclass" >создание кросс-платформенных GUI приложений при помощи библиотеки PHP-GTK;</li>
<li class="pclass">автоматизация некоторых задач под Windows и Linux </li></ul>

<li class="pclass">1.Инструкция обработки XML: </li>
<br>
<br>
<img src="img/c1.jpg" />
<br>
<br>
<li class="pclass">2.Инструкция обработки SGML: </li>
<br>
<br>
<img src="img/c2.jpg" />
<br>
<br>
<li class="pclass">3.Инструкция обработки сценариев HTML:</li>
<br>
<img src="img/c3.jpg" />
<br>
<li class="pclass">4.Инструкция в стиле ASP:</li>
<br>
<img src="img/c4.jpg" />
<br>
<p class="pclass" >Команда echo в PHP применяется для вывода фактически всего, что встречается на web-страницах (текст, разметку HTML, числа). Смысл ее действия, мы думаем, понятен из приведенного примера. </p>
<a name=#coments>
 <h4 class="style5">Комментарии</h4>
 <br>
 <p class="pclass" >PHP предоставляет несколько методов для вставки комментариев. Проще всего пользоваться двойным слэшем (//), после чего PHP машина игнорирует все, что расположено до конца строки. Также можно пользоваться многострочными комментариями в стиле С (/*…*/). Для однострочных комментариев можно еще пользоваться символом решетки (#) (комментарий скриптовых языков UNIX). 
  </p>
  <a name=#perem>
   <h4 class="style5">Переменные</h4>
 <br>
  <p class="pclass" >В РНР переменные начинаются со знака доллара ($). За этим знаком может следовать любое количество буквенно-цифровых символов и символов подчеркивания, но первый символ не может быть цифрой или подчеркиванием. Следует также помнить, что имена переменных в РНР чувствительны к регистру, в отличие от ключевых слов. 

При объявлении переменных в РНР не требуется явно указывать тип переменной, при этом одна и та же переменная может иметь на протяжении программы разные типы. 

Переменная инициализируется в момент присваивания ей значения и существует до тех пор, пока выполняется программа. Т.е., в случае web-страницы это означает, что до тех пор, пока не завершен запрос. 

  </p>
  <a name=#vneshperem>
     <h4 class="style5">Внешние переменные</h4>
 <br>
 <p class="pclass" >После того, как запрос клиента проанализирован веб-сервером и передан РНР машине, последняя устанавливает ряд переменных, которые содержат данные, относящиеся к запросу и доступны все время его выполнения. Сначала РНР берет переменные окружения Вашей системы и создает переменные с теми же именами и значениями в окружении сценария РНР для того чтобы сценариям, расположенным на сервере были доступны особенности системы клиента. Эти переменные помещаются в ассоциативный массив $HTTP_ENV_VARS</p>
 <p class="pclass">Естественно, что переменные массива $HTTP_ENV_VARS являются системно зависимыми (поскольку это фактически переменные окружения). Посмотреть значения переменных окружения для Вашей машины Вы можете при помощи команды env (Unix) или set (Windows). 

Затем РНР создает группу GET-переменных, которые создаются при анализе строки запроса. Строка запроса хранится в переменной $QUERY_STRING и представляет собой информацию, следующую за символом "?" в запрошенном URL. РНР разбивает строку запроса по символам & на отдельные элементы, а затем ищет в каждом из этих элементов знак "=". Если знак "=" найден, то создается переменная с именем из символов, стоящих слева от знака равенства.</p>
<a name=#const>
    <h4 class="style5">Константы</h4>
 <br>
 <p class="pclass" >Константы объявляются в РНР при помощи функции define():

define(CONSTANT, value) 

Первый параметр этой функции – имя константы, второй – её значение. При использовании константы на неё ссылаются по имени.
По традиции имена констант пишут буквами верхнего регистра. И хотя это только традиция, мы Вам рекомендуем ей следовать, поскольку плохие программисты получаются в том числе и из тех, кто не следовал хорошим традициям J. Существует функция defined(), которая проверяет, определена ли константа
</p>
<a name=#types>
     <h4 class="style5">Типы данных в РНР. Преобразование типов</h4>
 <br>
 <p class="pclass" >Как уже было сказано, PHP предоставляет определенную гибкость в отношении типов переменных, т.е. с одной и той же переменной на протяжении программы можно работать и как со строкой, и как с числом. Однако, несмотря на это в РНР существуют набор основных типов данных, которые могут явно указываться при работе с переменными: </p>
 <li class="pclass">integer; </li>
 <li class="pclass">string;</li>
 <li class="pclass">boolean; </li>
 <li class="pclass">double; </li>
 <li class="pclass">array; </li>
 <li class="pclass">object; </li>
 <p class="pclass">Есть функция gettype(), возвращающая тип, который РНР назначил переменной.Существует также функция settype(), которая явно устанавливает тип</p>
 <a name=#operators>

     <h4 class="style5">Операторы</h4>
 	<h6 class="style5">Арифметические операторы</h6>
	<li class="pclass">+ Сложение </li>
 	<li class="pclass">- Вычитание  </li>
 	<li class="pclass">* Умножение  </li>
 	<li class="pclass">/ Деление е </li>
 	<li class="pclass">% Вычисление остатка по модулю (к примеру: 5 % 2=1) </li>
	<h6 class="style5">Поразрядные операторы</h6>

 <p class="pclass" >Эта группа операторов работает с битовыми представлениями значений целочисленных операндов. В основном эти операторы применяются для создания набора булевых флагов. В наших упражнениях мы будем использовать эти операторы очень редко, однако на всякий случай ниже приведен пример с использованием этих операторов. </p>
    <li class="pclass">& Поразрядная конъюнкция (AND)  </li>
 	<li class="pclass">| Поразрядная дизъюнкция (OR)  </li>
 	<li class="pclass">^ Поразрядное исключающее ИЛИ (XOR)   </li>
 	<li class="pclass">~ Поразрядное отрицание (NOT)  </li>
 	<li class="pclass"><< Сдвиг влево битового представления значения левого целочисленного операнда на количество разрядов, равное значению правого целочисленного операнда  </li>
	<li class="pclass">>> Сдвиг вправо битового представления значения левого целочисленного операнда на количество разрядов, равное значению правого целочисленного операнда   </li>
 <p class="pclass" >Операторы этой группы, в отличие от поразрядных, работают с логическими переменными (boolean) и интенсивно используются в управляющих конструкциях: циклы и условия. Логические переменные, или более правильно, переменные типа Boolean имеют лишь два значения: true(истина) и false(ложь). В выражениях true и false можно заменить на 1(любое отличное от 0 число) и 0, соответственно. Возможность замены true и false на 1 и 0 – это «наследство» языка С, в котором не было специальных переменных true и false. </p>
 <a name=#examples>
 <h4 class="style5">Примеры</h4>
 <img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z1.jpg" />
 <p class="pclass">Задача #1</p>
<form method="POST" name="Myform">
a <input type="text" name="az1">
b <input type="text" name="bz1">
<input type="submit" name="knopkaz1" onClick="return Checkz1()" value="OK"/> 
</form>
<?php
include("tasks/1.php");
?>

<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z2.jpg" />
<p class="pclass">Задача #2</p>
<form method="POST" name="Myform">
x <input type="text" name="xz2">
y <input type="text" name="yz2">
<input type="submit" name="knopkaz2" onClick="return Checkz2()" value="OK"/> 
</form>
<?php
include("tasks/2.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z3.jpg" />
<p class="pclass">Задача #3</p>
<form method="POST" name="Myform">
x <input type="text" name="xz3">
<input type="submit" name="knopkaz3" onClick="return Checkz3()" value="OK"/> 
</form>
<?php
include("tasks/3.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z4.jpg" />
<p class="pclass">Задача #4</p>
<form method="POST" name="Myform">
x <input type="text" name="xz4">
y <input type="text" name="yz4">
<input type="submit" name="knopkaz4" onClick="return Checkz4()" value="OK"/> 
</form>
<?php
include("tasks/4.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z5.jpg" />
<p class="pclass">Zadacha #5</p>
<form method="POST" name="Myform">
x <input type="text" name="xz5">
y <input type="text" name="yz5">
<input type="submit" name="knopkaz5" onClick="return Checkz5()" value="OK"/> 
</form>
<?php
include("tasks/5.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z6.jpg" />
<p>Задача #6</p>
<form method="POST" name="Myform">
x <input type="text" name="xz6">
y <input type="text" name="yz6">
<input type="submit" name="knopkaz6" onClick="return Checkz6()" value="OK"/> 
</form>
<?php
include("tasks/6.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z7.jpg" />
<p>Задача #7</p>
<form method="POST" name="Myform" >
  <p>t1 
    <input type="text" name="t1z7" >
    t2
  <input type="text" name="t2z7">
  </p>
  <p>
    v1
    <input type="text" name="v1z7">v2
    <input type="text" name="v2z7">
      <input  type="submit" name="knopkaz7" onclick="return Checkz7()" value="OK"/>
  </p>
  </form>
<?php
include("tasks/7.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z8.jpg" />
<p>Задача #8</p>
<form method="POST" name="Myform">
n <input type="text" name="nz8" >
r<input type="text" name="rz8">
<input type="submit" name="knopkaz8" onClick="return Checkz8()" value="OK"/> 
</form>
<?php
include("tasks/8.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z9.jpg" />
<p>Задача #9</p>
<form method="POST" name="Myform" >
r1 <input type="text" name="r1z9" >
r2<input type="text" name="r2z9">
r3<input type="text" name="r3z9">
<input type="submit" name="knopkaz9" onClick="return Checkz9()" value="OK"/> 
</form>
<?php
include("tasks/9.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z10.jpg" />
<p>Задача #10</p>
<form method="POST" name="Myform" >
h <input type="text" name="hz10" >

<input type="submit" name="knopkaz10" onClick="return Checkz10()" value="OK"/> 
</form>
<?php
include("tasks/10.php");
?>
<img  style=" left: 277px; top: 3078px; height: 500px; width: 671px;"src="img/z11.jpg" />
<p>Задача #11</p>
<form method="POST" name="Myform" >
x <input type="text" name="xz11" >
y<input type="text" name="yz11">
z<input type="text" name="zz11">
<input type="submit" name="knopkaz11" onClick="return Checkz11()" value="OK"/> 
</form>
<?php
include("tasks/11.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z12.jpg" />
<p>Задача #12</p>
<form method="POST" name="Myform" >
n <input type="text" name="nz12" >

<input type="submit" name="knopkaz12" onClick="return Checkz12()" value="OK"/> 
</form>
<?php
include("tasks/12.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z13.jpg" />
<p>Задача #13</p>
<form method="POST" name="Myform" >
L<input type="text" name="lz13" >
<input type="submit" name="knopkaz13" onClick="return Checkz13()" value="OK"/> 
</form>
<?php
include("tasks/13.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z14.jpg" />
<p>Задача #14</p>
<form method="POST" name="Myform" >
m1 <input type="text" name="m1z14" >
m2<input type="text" name="m2z14">
r<input type="text" name="rz14">
<input type="submit" name="knopkaz14" onClick="return Checkz14()" value="OK"/> 
</form>
<?php
include("tasks/14.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z15.jpg" />
<p>Задача  #15</p>
<form method="POST" name="Myform">
Gipatenuza <input type="text" name="gz15" >
Katet 1<input type="text" name="k1z15">
<input type="submit" name="knopkaz15" onClick="return Checkz15()" value="OK"/> 
</form>
<?php
include("tasks/15.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z16.jpg" />
<p>Задача #16</p>
<form method="POST" name="Myform">
C <input type="text" name="cz16" >

<input type="submit" name="knopkaz16" onClick="return Checkz16()" value="OK"/> 
</form>
<?php
include("tasks/16.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z17.jpg" />
<p>Задача #17</p>
<form method="POST" name="Myform">
r <input type="text" name="rz17" >
<input type="submit" name="knopkaz17" onClick="return Checkz17()" value="OK"/> 
</form>
<?php
include("tasks/17.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z18.jpg" />
<p>Задача  #18</p>
<table width="90%">
<form method="POST" name="Myform" >
  <tr>
    <td align="center"> R &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="rz18" ></td>
    <td align="center">Alfa<input type="text" name="az18"></td>
  </tr>
  <tr>
    <td align="center"> Betta <input type="text" name="bz18"></td>
    <td align="center">Gamma <input type="text" name="gz18"><input type="submit" name="knopkaz18" onClick="return Checkz18()" value="OK"/> </td>
  </tr>
   </form>
</table>

    </p>
 
<?php
include("tasks/18.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z19.jpg" />
<p>Zadacha #19</p>
<form method="POST" name="Myform">
a <input type="text" name="az19" >
v<input type="text" name="vz19">
s<input type="text" name="sz19">

<input type="submit" name="knopkaz19" onClick="return Checkz19()" value="OK"/> 
</form>
<?php
include("tasks/19.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z20.jpg" />
<p>Задача #20</p>
<form method="POST" name="Myform" >
a <input type="text" name="az20" >
d<input type="text" name="dz20">
n<input type="text" name="nz20">
<input type="submit" name="knopkaz20" onClick="return Checkz20()" value="OK"/> 
</form>
<?php
include("tasks/20.php");
?>
<img  style=" left: 277px; top: 3078px; height: 250px; width: 671px;"src="img/z21.jpg" />
<p>Задача  #21</p>
<form method="POST" name="Myform">
c <input type="text" name="cz21" >
d<input type="text" name="dz21">
<input type="submit" name="knopkaz21" onClick="return Checkz21()" value="OK"/> 
</form>
<?php
include("tasks/21.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z22.jpg" />
<p>Задача  #22</p>
<form method="POST" name="Myform" >
a <input type="text" name="az22" >
b<input type="text" name="bz22">
alfa<input type="text" name="alfaz22">
<input type="submit" name="knopkaz22" onClick="return Checkz22()" value="OK"/> 
</form>
<?php
include("tasks/22.php");
?>
<img  style=" left: 277px; top: 3078px; height: 200px; width: 671px;"src="img/z23.jpg" />
<p>Задача  #23</p>
<form method="POST" name="Myform" >
a <input type="text" name="az23" >
b<input type="text" name="bz23">
c<input type="text" name="cz23">
<input type="submit" name="knopkaz23" onClick="return Checkz23()" value="OK"/> 
</form>
<?php
include("tasks/23.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z24.jpg" />
<p>Задача  #24</p>
<form method="POST" name="Myform" >
  <p>X1 
    <input type="text" name="x1z24" >
    X2
  <input type="text" name="x2z24">
   </p>
  <p> Y1
    <input type="text" name="y1z24">
    Y2
    <input type="text" name="y2z24">
      <input type="submit" name="knopkaz24" onClick="return Checkz24()" value="OK"/> 
    </p>
</form>
<?php
include("tasks/24.php");
?>
<img  style=" left: 277px; top: 3078px; height: 120px; width: 671px;"src="img/z25.jpg" />
<p>Задача  #25</p>
<form method="POST" name="Myform" >
  <p>X1 
    <input type="text" name="x1z25" >
    X2
  <input type="text" name="x2z25">
    X3
  <input type="text" name="x3z25">
   </p>
  <p> Y1
    <input type="text" name="y1z25">
    Y2
    <input type="text" name="y2z25">
    Y3
    <input type="text" name="y3z25">
    
      <input type="submit" name="knopkaz25" onClick="return Checkz25()" value="OK"/> 
    </p>
</form>
<?php
include("tasks/25.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z26.jpg" />
<p>Задача #26</p>
<form method="POST" name="Myform">
r <input type="text" name="rz26">
f <input type="text" name="fz26">
<input type="submit" name="knopkaz26" onClick="return Checkz26()" value="OK"/> 
</form>
<?php
include("tasks/26.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z27.jpg" />
<p>Задача #27</p>
<form method="POST" name="Myform" >
a <input type="text" name="az27" >
b<input type="text" name="bz27">
c<input type="text" name="cz27">
<input type="submit" name="knopkaz27" onClick="return Checkz27()" value="OK"/> 
</form>
<?php
include("tasks/27.php");
?>
<img  style=" left: 277px; top: 3078px; height: 120px; width: 671px;"src="img/z28.jpg" />
<p>Задача #28</p>
<form method="POST" name="Myform">
x <input type="text" name="xz28">

<input type="submit" name="knopkaz28" onClick="return Checkz28()" value="OK"/> 
</form>
<?php
include("tasks/28.php");
?>
<img  style=" left: 277px; top: 3078px; height: 120px; width: 671px;"src="img/z29.jpg" />
<p>Задача  #29</p>
<form method="POST" name="Myform">
x <input type="text" name="xz29">
y <input type="text" name="yz29">
<input type="submit" name="knopkaz29" onClick="return Checkz29()" value="OK"/> 
</form>
<?php
include("tasks/29.php");
?>
<img  style=" left: 277px; top: 3078px; height: 120px; width: 671px;"src="img/z30.jpg" />
<p>Задача  #30</p>
<form method="POST" name="Myform">
x <input type="text" name="xz30">
y <input type="text" name="yz30">
<input type="submit" name="knopkaz30" onClick="return Checkz30()" value="OK"/> 
</form>
<?php
include("tasks/30.php");
?>
<img  style=" left: 277px; top: 3078px; height: 400px; width: 671px;"src="img/z31.jpg" />
<p>Задача  #31</p>
<form method="POST" name="Myform">
a <input type="text" name="az31">
<input type="submit" name="knopkaz31" onClick="return Checkz31()" value="OK"/> 
</form>
<?php
include("tasks/31.php");
?>
<img  style=" left: 277px; top: 3078px; height: 350px; width: 671px;"src="img/z32.jpg" />
<p>Задача  #32</p>
<form method="POST" name="Myform">
a <input type="text" name="az32">

<input type="submit" name="knopkaz32" onClick="return Checkz32()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/32.php");
?>
</p>

</div>

</body>

</html>
