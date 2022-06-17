<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<title>Untitled Document</title>
<script language="javascript" src="function_js.js">

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
   <td class="mtd"><a href="bases.php"  class="a style4"  style="text-decoration:none">Основы PHP </a></td> 
  </tr>
  <tr>
  <td class="mtd"><a href="operators.php"  class="a style4"  style="text-decoration:none">Операторы языка PHP</a></td>
     
  </tr>
  <tr>
  <td height="24" class="mtd"><a href="string.php"  class="a style4"  style="text-decoration:none">Строковые функции PHP</a></td>
   
  </tr>
  <tr>
    <td class="mtd"><a href="array.php" class="a style4"  style="text-decoration:none">Массивы </a></td>
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
    <td width="228" height="38" class="mtd"><a href="function.php#def"  class="style7"  style="text-decoration:none">Определения и вызовы функций</a></td>
  </tr>
  <tr>
    <td height="25" class="mtd"><a href="function.php#see"  class="style7"  style="text-decoration:none">Область видимости переменных</a></td>
  </tr>
  <tr>
    <td height="30" class="mtd"><a href="function.php#time"  class="style7"  style="text-decoration:none">Время жизни переменной</a></td>
  </tr>
  <tr>
    <td height="30" class="mtd"><a href="function.php#rec"  class="style7"  style="text-decoration:none">Что такое рекурсия</a></td>
  </tr>
 
 <tr>
    <td height="27" class="mtd"><a href="function.php#examples"  class="style7"  style="text-decoration:none" >Примеры</a></td>
  </tr>
</table>

<div class="pclass" style="position:absolute; left: 269px; top: 169px; width: 715px; height: 302px;">
  <h4 align="center" class="style4"> Функции</h4>
  <a name=#def>
  <h4 class="style5">Определения и вызовы функций</h4>
  <p>Функция объявляется при помощи ключевого слова <strong>function</strong>,   после которого в фигурных скобках записываются различные операторы, составляющие   тело функции:</p>
  <blockquote>
    <pre><em>function</em> <strong>MyFunction</strong><em>()</em>  <em>{</em>  <em> // операторы</em>  <em>}</em>  </pre>
  </blockquote>
  <p>Если функция принимает аргументы, то они записываются как   переменные в объявлении функции. <strong>Аргумент функции</strong> представляет собой   переменную, передаваемую в тело функции для дальнейшего использования в   операциях. В случае, когда функция принимает больше одного аргумента, эти   переменные разделяются запятыми:</p>
  <blockquote>
    <pre><em>function</em> <strong>MyFunction</strong><em>(</em><strong>$var, $var1, $var2</strong><em>)</em>  </pre>
  </blockquote>
  <p>Если функция возвращает какое-либо значение, в теле функции   обязательно должен присутствовать оператор <strong>return:</strong></p>
  <blockquote>
    <pre><em>function</em> <strong>MyFunction</strong><em>()</em>  <em>{</em>    <em>return</em> <strong>$ret</strong><em>;</em><em> // возвращается значение переменной $ret</em>  <em>}</em> 
</pre>
    <p>Для того чтобы переменные переданные функции сохраняли свое   значение при выходе из нее, применяется передача параметров по ссылке. Для этого   перед именем переменной необходимо поместить амперсанд (<strong>&amp;</strong>):</p>
    <blockquote>
      <pre>  <em>function</em> <strong>get_sum</strong><em>(</em><strong>$var, $var1, &amp;$var2</strong><em>)</em>  </pre>
    </blockquote>
    <p>В этом случае переменные <strong>$var</strong> и <strong>$var1</strong> будут переданы   по значению, а переменная <strong>$var2</strong> - по ссылке. В случае, если аргумент   передается по ссылке, при любом изменении значения параметра происходит   изменение переменной-аргумента</p>
    <pre>&nbsp; </pre>
  </blockquote>
    <a name=#see>
  <h4 class="style5">Область видимости переменных</h4>
 <br>
  <p>Локальную переменную можно сделать глобальной, если перед ее именем указать   ключевое слово <strong>global</strong>. Если внешняя переменная объявлена как <strong>global</strong>, то к ней возможен доступ из любой функции</p>
  <p>Доступ к глобальным переменным можно получить также через ассоциативный массив <strong>$GLOBALS</strong></p>
  <p>Массив <strong>$GLOBALS</strong> доступен в области видимости любой функции и содержит все   глобальные перемене, которые используются в программе.</p>
  <blockquote>&nbsp;
  </blockquote>
 <a name=#time>
     <h4 class="style5">Время жизни переменной</h4>
 <br>
 <p><strong>Временем жизни</strong> переменной называется интервал выполнения   программы, в течение</p>
 <p> которого она существует. Поскольку локальные переменные   имеют своей областью видимости функцию, то время жизни локальной переменной   определяется временем выполнения функции,</p>
 <p> в которой она объявлена. Это означает,   что в разных функциях совершенно независимо друг </p>
 <p>от друга могут использоваться   переменные с одинаковыми именами. Локальная переменная</p>
 <p> при каждом вызове функции   инициализируется заново, поэтому функция-счетчик, </p>
 <p>в приведенном ниже примере   всегда будет возвращать значение 1:</p>
 <blockquote>
   <pre>  <em>function</em> <strong>counter</strong><em>()</em>    <em>{</em>     
 <strong>$counter</strong><em> = </em>0<em>;</em>     
 <em>return</em> <strong>++$counter</strong><em>;</em>    <em>}</em>  </pre>
 </blockquote>
 <p>Для того, чтобы локальная переменная сохраняла свое предыдущее   значение при новых вызовах функции, ее можно объявить статической при помощи   ключевого слова <strong>static</strong>:</p>
 <blockquote>
   <pre>  <em>function</em> <strong>counter</strong><em>()</em>    <em>{</em>   
   <em>static</em> <strong>$counter</strong><em> = </em>0<em>;</em>     
 <em>return</em> <strong>++$counter</strong><em>;</em>    <em>}</em>  </pre>
 </blockquote>
 <p>Временем жизни статических переменных является время выполнения   сценария. Т. е., если пользователь перезагружает страницу, что приводит к новому   выполнению сценария, переменная <strong>$counter</strong> в этом случае инициализируется   заново.</p>
   <a name=#rec>
 <h4 class="style5">Что такое рекурсия</h4>
 <br>
 <p><strong>Рекурсией</strong> называется такая конструкция, при которой функция   вызывает саму себя. Различают прямую и косвенную рекурсии. Функция называется   прямо рекурсивной, если содержит в своем теле вызов самой себя. Если же функция   вызывает другую функцию, которая в свою очередь вызывает первую, то такая   функция называется косвенно рекурсивной.</p>
 <p>Рассмотрим классические примеры использования рекурсии -   реализацию операции возведения в степень и вычисление факториала числа. Заметим,   что эти примеры являются классическими только из-за их удобства для объяснения   понятия рекурсии, однако они не дают выигрыша в программной реализации по   сравнению с итерационным способом решения этих задач.</p>
 <blockquote>
   <pre><em>&lt;?</em>    <em>function</em> <strong>degree</strong><em>(</em><strong>$x,$y</strong><em>)</em>   
 <em>{</em>      <em>if(</em><strong>$y</strong><em>)</em>    
  <em>{</em>       
 <em>return</em> <strong>$x</strong><em>*</em>degree<em>(</em><strong>$x</strong>,<strong>$y</strong><em>-</em>1<em>);</em>    
  <em>}</em>     
 <em>return</em> 1<em>;</em>   
 <em>}  
 echo(</em><strong>degree</strong><em>(</em>2,4<em>));</em><em> // выводит 16</em> 
 <em>?&gt;</em>  </pre>
 </blockquote>

 <a name=#walk>

    
	<a name=#examples>
 <h4 class="style5">Примеры</h4>
 <img src="img/z33.jpg" width="680" height="115"  style=" left: 277px; top: 3078px; height: 140px; width: 671px;" />
 <p class="pclass">Задача #33</p>
<form method="POST" name="Myform">
a <input type="text" name="az33">
b <input type="text" name="bz33">
<input type="submit" name="knopkaz33" onClick="return Checkz33()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/33.php");
?>
</p>
<p>
  <img  style=" left: 277px; top: 3078px; height: 120px; width: 671px;"src="img/z34.jpg" />
</p>
<p class="pclass">Задача #34</p>
<form method="POST" name="Myform">
x 
  <input type="text" name="xz34" />
y
<input type="text" name="yz34" />
z
<input type="text" name="zz34">
<input type="submit" name="knopkaz34" onClick="return Checkz34()" value="OK"/> 
</form>
<p>
<?php
include("tasks/34.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 120px; width: 671px;"src="img/z35.jpg" />
</p>
<p class="pclass">Задача #35</p>
<form method="POST" name="Myform">
x <input type="text" name="xz35" >
y<input type="text" name="yz35">
z<input type="text" name="zz35">
<input type="submit" name="knopkaz35" onClick="return Checkz35()" value="OK"/> 
</form>
<p>
 <?php
include("tasks/35.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z36.jpg" />
</p>
<p class="pclass">Задача #36</p>
<form method="POST" name="Myform">
a <input type="text" name="az36" >
b<input type="text" name="bz36">
c<input type="text" name="cz36">
<input type="submit" name="knopkaz36" onClick="return Checkz36()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/36.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 300px; width: 671px;"src="img/z89.jpg" />
</p>
<p class="pclass">Zadacha #89</p>
<form method="POST" name="Myform" >
m<input type="text" name="mz89">
n<input type="text" name="nz89">
<input type="submit" name="knopkaz89" onClick="return Checkz89()" value="OK"/> 
</form>
<p>
<?php
include("tasks/89.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z90.jpg" />
</p>
<p>Задача #90</p>
<form method="POST" name="Myform" >
m<input type="text" name="mz90">
n<input type="text" name="nz90">
<input type="submit" name="knopkaz90" onClick="return Checkz90()" value="OK"/> 
</form>
<?php
include("tasks/90.php");
?>


</div>

</body>

</html>
