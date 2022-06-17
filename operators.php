<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<title>Untitled Document</title>

<script language="javascript" src="operators_js.js">

</script>
<style type="text/css">
<!--
.style4 {color:#663366}
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
    <td class="mtd"><a href="bases.php"  class="a style4"  style="text-decoration:none">Основы PHP</a></td>
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
    <td width="228" class="mtd"><a href="operators.php#if"  class="style7"  style="text-decoration:none">Операторы выбора/ if...else</a></td>
  </tr>
  <tr>
    <td height="25" class="mtd"><a href="operators.php#sw"  class="style7"  style="text-decoration:none">Операторы выбора/ Переключатель switch</a></td>
  </tr>
  <tr>
    <td height="24" class="mtd"><a href="operators.php#circle"  class="style7"  style="text-decoration:none">Операторы цикла</a></td>
  </tr>
  <tr>
    <td class="mtd"><a href="operators.php#wi"  class="style7"  style="text-decoration:none">Операторы цикла/ While</a></td>
  </tr>
  <tr>
    <td class="mtd"><a href="operators.php#do" class="style7"  style="text-decoration:none">Операторы цикла/ Do…while</a></td>
  </tr>
  <tr>
    <td class="mtd"><a href="operators.php#for" class="style7"  style="text-decoration:none">Операторы цикла/ For</a></td>
  </tr>
   <tr>
    <td class="mtd"><a href="operators.php#examples" class="style7"  style="text-decoration:none">Примеры</a></td>
  </tr>
 
</table>

<div class="pclass" style="position:absolute; left: 275px; top: 170px; width: 672px; height: 302px;">
  <h4 align="center" class="style4">Операторы языка PHP</h4>
  <a name=#if>
  <h4 class="style5">Операторы выбора/ if...else</h4>
  <p>К операторам выбора относят: условный оператор <em>(if...else)</em> и переключатель <em>(switch)</em>. Синтаксис   условного оператора: <br />
      <em>if(</em><strong>condition</strong><em>)</em> <strong>statement 1</strong> <em>else</em> <strong>statement 2</strong> </p>
  <p>Условие <strong>condition</strong> может быть любым выражением. Если оно   истинно, то выполняется оператор <strong>statement 1</strong>. В противном случае   выполняется оператор <strong>statement 2</strong>. Допустима сокращенная форма записи   условного оператора, в которой отсутствуют <em>else</em> и оператор <strong>statement 2</strong>. </p>
  <p>В свою очередь, операторы <strong>statement 1</strong> и <strong>statement 2</strong> могут быть условными, что позволяет организовывать цепочки проверок любой   глубины вложенности. И в этих цепочках каждый условный оператор может быть как   полным, так и сокращенным. В связи с этим возможны ошибки неоднозначного   сопоставления <em>if</em> и <em>else</em>. </p>
  <p>Синтаксис языка предполагает, что при вложенных условных   операторах каждое <em>else</em> соответствует ближайшему <em>if</em>.</p>
  <p>Заметим, что проверка дополнительных условий возможна при помощи оператора elseif. Оператор if может включать сколько угодно блоков elseif, но else в каждом if может быть только один. Как правило, в конструкциях if…elseif…else оператор else определяет, что нужно делать, если никакие другие условия не являются true. Однако, вообще говоря, использование оператора elseif довольно сильно ухудшает читабельность кода, и лучше в этом случае пользоваться переключателем (switch). 

РНР предоставляет также возможность альтернативного синтаксиса условного оператора – без фигурных скобок, а с применением оператора endif.</p>
  <p>РНР также, как и С++, Java предоставляет возможность заменять   блоки <em>if…else</em> условной операцией (в отличие от унарных и   бинарных операций условная операция используется с тремя операндами). В   изображении условной операции присутствуют два размещенных не подряд символа ‘?’   и ‘:’ и три операнда выражения: </p>
  <p><strong>выражение_1 ? выражение_2 : выражение_3</strong> </p>
  <p>Первым вычисляется значение <strong>выражения_1</strong>. Если оно истинно   (т.е. не равно нулю), то вычисляется значение <strong>выражения_2</strong>, которое и   становится результатом. Если при вычислении значения <strong>выражения_1</strong> получится ноль (ложь), то в качестве результата берется <strong>выражение_3</strong>.   Классическим примером условной операции является выражение </p>
  <p>
    <center>
      <strong>x &lt; 0 ? –x : x;</strong>
    </center>
  </p>
  <p>Это выражение возвращает абсолютное значение переменой x.<br />
  <a name=#sw>
  <h4 class="style5">Операторы выбора/ Переключатель switch</h4>
  <p>Переключатель <em>switch</em> является наиболее удобным   средством для организации мультиветвления. Синтаксис переключателя таков: </p>
  <blockquote>
    <pre><em>switch</em>(<strong>expression</strong>) // <em>переключающее выражение</em>  <em>{</em>     <em>
case</em> <strong>value1</strong>: // <em>константное выражение 1</em>       
 <strong>statements</strong>; // блок операторов     <em>break</em>;    
 <em>case</em> <strong>value2</strong>: // <em>константное выражение 2</em>        
<strong>statements</strong>;     <em>break</em>;    
 <em>default</em>:                
<strong>statements</strong>;  <em>}</em></pre>
  </blockquote>
  <p>Управляющая структура <em>switch</em> передает управление   тому из помеченных <em>case</em> операторов, для которого значение   константного выражения совпадает со значением переключающего выражения. Если   значение переключающего выражения не совпадает ни с одним из константных   выражений, то выполняется переход к оператору, помеченному меткой <em>default</em>. В каждом переключателе может быть не более одной метки <em>default</em>, однако она может отсутствовать вообще.</p>
  <p>Кроме уже сказанного о переключателе, приведенная программа   демонстрирует действие оператора <em>break</em>, с помощью которого   происходит выход из переключателя. Если поместить операторы <em>break</em> после вывода каждой из цифр, то в окне браузера мы увидим   название только одной нечетной цифры. </p>
  <p>Как видим, после конструкции <em>switch</em> приведен   составной оператор, однако это совершенно не обязательно – после <em>switch</em> может находиться любой оператор, помеченный служебным   словом <em>case</em>. </p>
  <blockquote>Напомним, что составной оператор, это заключенная в   фигурные скобки последовательность операторов.</blockquote>
  <p>Заметим также, что в PHP в качестве меток <em>case</em> могут использоваться не только литералы, но и сами метки могут быть переменными.   В качестве меток <em>case</em> в PHP не могут выступать только массивы   и объекты. </p>

 <a name=#circle>
   <h4 class="style5">Операторы цикла</h4>
 <br>
  <p class="pclass" >Операторы цикла задают многократное исполнение операторов в теле цикла. В PHP   определены 4 разных оператора цикла: </p>
  <ul>
    <li>цикл с предусловием:<br />
        <em>while</em>(<strong>condition</strong>) <em>{</em> <strong>statements</strong>; <em>}</em><br />
    </li>
    <li>цикл с постусловием:<br />
        <em>do</em> <em>{</em> <strong>statements</strong>; <em>} while</em>(<strong>condition</strong>); <br />
    </li>
    <li>итерационный цикл:<br />
        <em>for</em>(<strong>expression1</strong>;<strong>expression2</strong>;<strong>expression3</strong>) <em>{</em> <strong>statements</strong>; <em>}</em> <br />
    </li>
    <li>итерационный цикл foreach:<br />
        <em>foreach</em> (<em>array as</em> [<strong>$key</strong> =&gt;] <strong>$value</strong>) <em>{</em> <strong>statements</strong>; <em>}</em> </li>
  </ul>
  Если 3 первых оператора цикла берут свое начало от С-подобных языков, то   последний оператор позаимствован у языка Perl (кстати, цикл <em>foreach</em> мы разберем попозже – в главе 4, посвященной массивам).
<p class="pclass" >&nbsp;</p>
  <a name=#wi>
     <h4 class="style5">Операторы цикла/ While</h4>
 <br>
 <p class="pclass" >Оператор <em>while</em> называется оператором цикла с предусловием. При   входе в цикл вычисляется выражение условие, и, если его значение отлично от   нуля, выполняется тело цикла. Затем вычисления выражения условия и операторов   тела цикла выполняется до тех пор, пока значение выражения условия не станет   равным нулю. Оператором <em>while</em> удобно пользоваться для   просмотра всевозможных последовательностей, если в конце них находится заранее   известный символ. (Это очень удобно в C++, к примеру для определения длины   строки, поскольку в С++, по определению, строка есть последовательность символов   типа char, заканчивающаяся нулевым символом). </p>
 <p class="pclass" >Для выхода из цикла применяется оператор <em>break</em>. При   обнаружении этого оператора текущая итерация цикла прекращается, и последующие   итерации не происходят.</p>
 <p class="pclass" >Иногда бывает нужно прервать только текущую итерацию, и перейти сразу к   следующей. Для этого применяется оператор <em>continue</em>: </p>
 <p>Бесконечный цикл реализуется при помощи оператора <em>while</em> следующим образом:</p>
 <blockquote>
   <pre>   <em>while</em>(1)     <em>{</em>          ...     <em>}</em>  </pre>
 </blockquote>
 <p>Это тоже самое, что и запись <em>while</em>(<strong>true</strong>).</p>

 <a name=#do>
    <h4 class="style5">Операторы цикла/ Do…while</h4>
 <br>
 <p class="pclass" >Этот оператор называется оператором цикла с постусловием. При входе в цикл в   любом случае выполняется тело цикла (т.е. цикл всегда будет выполнен хотя бы   один раз), затем вычисляется условие, и если оно не равно 0, вновь выполняется   тело цикла.</p>
 <p>Цикл с постусловием бывает полезен при обработке некоторых   последовательностей, когда обработку нужно заканчивать не до, а после появления   концевого признака. </p>
 <p>Бесконечный цикл реализуется так:</p>
 <blockquote>
   <pre>   <em>do</em> ; <em>while</em>(1); </pre></blockquote>
 <a name=#for>
     <h4 class="style5">Операторы цикла/ For</h4>
 <br>
 <p>Как уже говорилось, итерационный цикл имеет следующий формат:</p>
 <blockquote>
   <pre>   <em>for</em>(<strong>expression1</strong>;<strong>expression2</strong>;<strong>expression3</strong>)     <em>{</em>        <strong>statements</strong>;     <em>}</em>  </pre>
 </blockquote>
 <p>Здесь <strong>expression1</strong> (инициализация цикла) –   последовательность определений и выражений, разделяемая запятыми. Все выражения,   входящие в инициализацию, вычисляются только один раз при входе в цикл. Как   правило, здесь устанавливаются начальные значения счетчиков и параметров цикла.   Смысл выражения-условия (<strong>expression2</strong>) такой же как и у циклов с пред- и   постусловиями. При отсутствии выражения-условия предполагается, что его значение   всегда истинно. Выражения <strong>expression3</strong> вычисляются в конце каждой итерации   после выполнения тела цикла. </p>
 <p>Бесконечный цикл можно организовать следующим образом:</p>
 <blockquote>
   <pre>   <em>for</em>(;;);  </pre>
 </blockquote>
 <p>или</p>
 <blockquote>
   <pre>   <em>for</em>(;1;);  </pre>
 </blockquote>
 <p class="pclass" ><a name=#examples> </p>
 <a name=#examples>
 <h4 class="style5">Примеры</h4>
 <img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z36.jpg" />
 <a name="#z36">
 <p class="pclass">Задача #36</p>
 <form method="POST" name="Myform">
a <input type="text" name="az36" >
b<input type="text" name="bz36">
c<input type="text" name="cz36">
<a href="operators.php#z36" ></a><input type="submit" name="knopkaz36" onClick="return Checkz36()" value="OK"/> 

</form>
<p>
  <?php
include("tasks/36.php");
?>
  </p>
<p><img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z37.jpg" />
</p>
<p class="pclass">Задача #37</p>
<form method="POST" name="Myform">
a <input type="text" name="az37" >
b<input type="text" name="bz37">
c<input type="text" name="cz37">
<input type="submit" name="knopkaz37" onClick="return Checkz37()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/37.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z38.jpg" />
</p>
<p class="pclass">Задача #38</p>
<form method="POST" name="Myform">
x <input type="text" name="xz38">
y <input type="text" name="yz38">
<input type="submit" name="knopkaz38" onClick="return Checkz38()" value="OK"/> 
</form>

<p>
  <?php
include("tasks/38.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z39.jpg" />
</p>
<p class="pclass">Задача #39</p>
<form method="POST" name="Myform">
x <input type="text" name="xz39">
y <input type="text" name="yz39">
<input type="submit" name="knopkaz39" onClick="return Checkz39()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/39.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z40.jpg" />
</p>
<p class="pclass">Zadacha #40</p>
<form method="POST" name="Myform">
x <input type="text" name="xz40">
y <input type="text" name="yz40">
<input type="submit" name="knopkaz40" onClick="return Checkz40()" value="OK"/> 
</form>
<p>
<?php
include("tasks/40.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z41.jpg" />
<p>Задача #41</p>
<form method="POST" name="Myform">
a<input type="text" name="az41" >
b<input type="text" name="bz41">
c<input type="text" name="cz41">
<input type="submit" name="knopkaz41" onClick="return Checkz41()" value="OK"/> 
</form>
<p>
<?php
include("tasks/41.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z42.jpg" />
<p>Задача #42</p>
<form method="POST" name="Myform">
 
x <input type="text" name="xz42">
y <input type="text" name="yz42">
<input type="submit" name="knopkaz42" onClick="return Checkz42()" value="OK"/> 
</form>
  <p>
<?php
include("tasks/42.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z43.jpg" />
<p>Задача #43</p>
<form method="POST" name="Myform">
x <input type="text" name="xz43" >
y<input type="text" name="yz43">
z<input type="text" name="zz43">
<input type="submit" name="knopkaz43" onClick="return Checkz43()" value="OK"/> 
</form>
<p>
<?php
include("tasks/43.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z44.jpg" />
<p>Задача #44</p>
<form method="POST" name="Myform">
x <input type="text" name="xz44" >
y<input type="text" name="yz44">
z<input type="text" name="zz44">
<input type="submit" name="knopkaz44" onClick="return Checkz44()" value="OK"/> 
</form>
<p>
<?php
include("tasks/44.php");
?>
<p><img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z45.jpg" />
<p>Задача #45</p>
<form method="POST" name="Myform" >
  <p>a 
    <input type="text" name="az45" >
    b
  <input type="text" name="bz45">
   </p>
  <p> c
    <input type="text" name="cz45">
    d
    <input type="text" name="dz45">
      <input type="submit" name="knopkaz45" onClick="return Checkz45()" value="OK"/> 
    </p>
</form> 

<p>
<?php
include("tasks/45.php");
?>
<img  style=" left: 277px; top: 3078px; height: 150px; width: 671px;"src="img/z46.jpg" />
<p>Задача #46</p>
<form method="POST" name="Myform">
x <input type="text" name="xz46">
y <input type="text" name="yz46">
<input type="submit" name="knopkaz46" onClick="return Checkz46()" value="OK"/> 
</form>

<p>
<?php
include("tasks/46.php");
?>
<img  style=" left: 277px; top: 3078px; height: 120px; width: 671px;"src="img/z47.jpg" />
<p>Задача #47</p>
<form method="POST" name="Myform">
x <input type="text" name="xz47" >
y<input type="text" name="yz47">
z<input type="text" name="zz47">
<input type="submit" name="knopkaz47" onClick="return Checkz47()" value="OK"/> 
</form>
<p>
<?php
include("tasks/47.php");
?>
<img  style=" left: 277px; top: 3078px; height: 120px; width: 671px;"src="img/z48.jpg" />
<p>Задача #48</p>
<form method="POST" name="Myform">
a <input type="text" name="az48" >
b<input type="text" name="bz48">
c<input type="text" name="cz48">

<input type="submit" name="knopkaz48" onClick="return Checkz48()" value="OK"/> 
</form>
<p>
<?php
include("tasks/48.php");
?>
<img  style=" left: 277px; top: 3078px; height: 230px; width: 671px;"src="img/z49.jpg" />
<p>Задача #49</p>
<form method="POST" name="Myform">
h <input type="text" name="hz49" >
<input type="submit" name="knopkaz49" onClick="return Checkz49()" value="OK"/> 
</form>
<p>
<?php
include("tasks/49.php");
?>
<img  style=" left: 277px; top: 3078px; height: 200px; width: 671px;"src="img/z50.jpg" />
<p>Задача  #50</p>
<form method="POST" name="Myform">
  <p>a1 
    <input type="text" name="a1z50" >
    b1
  <input type="text" name="b1z50">c1
    <input type="text" name="c1z50">
  </p>
  <p>
    a2 
      <input type="text" name="a2z50" >
  b2
    <input type="text" name="b2z50">
    c2
    <input type="text" name="c2z50">
    
      <input type="submit" name="knopkaz50" onClick="return Checkz50()" value="OK"/> 
    </p>
  </form>
<p>
<?php
include("tasks/50.php");
?>
<p>
<img  style=" left: 277px; top: 3078px; height: 150px; width: 671px;"src="img/z51.jpg" /> 
<p>Задача  #51</p>
<form method="POST" name="Myform">
a <input type="text" name="az51" >
b<input type="text" name="bz51">
c<input type="text" name="cz51">
<input type="submit" name="knopkaz51" onClick="return Checkz51()" value="OK"/> 
</form>
<p>
<?php
include("tasks/51.php");
?>
<img  style=" left: 277px; top: 3078px; height:150px; width: 671px;"src="img/z52.jpg" />
<p>Задача #52</p>
<form method="POST" name="Myform">
  <p>a 
    <input type="text" name="az52" >
    b
  <input type="text" name="bz52">
    </p>
  <p>c
    <input type="text" name="cz52">
    d 
    <input type="text" name="dz52" >
  </p>
  <p>
    s
    <input type="text" name="sz52">
    t
    <input type="text" name="tz52">
    u
    <input type="text" name="uz52">
    <input type="submit" name="knopkaz52" onClick="return Checkz52()" value="OK"/> 
  </p>
</form>
<p>
<?php
include("tasks/52.php");
?>
<img  style=" left: 277px; top: 3078px; height: 150px; width: 671px;"src="img/z53.jpg" />

<p>Задача  #53</p>

<form method="POST" name="Myform">
  <p>a 
    <input type="text" name="az53" >
    b
  <input type="text" name="bz53">
  </p>
  <p>
    c
    <input type="text" name="cz53">d 
    <input type="text" name="dz53" >
    </p>
  <p>e
    <input type="text" name="ez53">
    f
    <input type="text" name="fz53">
  </p>
  <p>
    g
    <input type="text" name="gz53">
      
      h
      <input type="text" name="hz53">
      <input type="submit" name="knopkaz53" onClick="return Checkz53()" value="OK"/> 
    </p>
</form>
 </p>
 
<?php
include("tasks/53.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z54.jpg" />
<p>Задача  #54</p>
<form method="POST" name="Myform">
  <p>x1 
    <input type="text" name="x1z54" >
    x2
  <input type="text" name="x2z54">
    x3
  <input type="text" name="x3z54">
    </p>
  <p>y1 
    <input type="text" name="y1z54" >
    y2
    <input type="text" name="y2z54">
    y3
    <input type="text" name="y3z54">
      <input type="submit" name="knopkaz54" onClick="return Checkz54()" value="OK"/> 
    </p>
</form>
<p>
<?php
include("tasks/54.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z55.jpg" />
<p>Задача #55</p>
<form method="POST" name="Myform" >
  <p>a 
    <input type="text" name="az55" >
    b
  <input type="text" name="bz55">
   </p>
  <p> c
    <input type="text" name="cz55">
    d
    <input type="text" name="dz55">
      <input type="submit" name="knopkaz55" onClick="return Checkz55()" value="OK"/> 
    </p>
</form>
<p>
<?php
include("tasks/55.php");
?>
<img  style=" left: 277px; top: 3078px; height: 150px; width: 671px;"src="img/z56.jpg" />
<p>Задача  #56</p>
<form method="POST" name="Myform">
  <p>a 
    <input type="text" name="az56" >
    b
  <input type="text" name="bz56">
    c
  <input type="text" name="cz56">
    </p>
  <p>x 
    <input type="text" name="xz56" >
    y
    <input type="text" name="yz56">
    
    
      <input type="submit" name="knopkaz56" onClick="return Checkz56()" value="OK"/> 
    </p>
</form>
<p>
<?php
include("tasks/56.php");
?>
<img  style=" left: 277px; top: 3078px; height: 270px; width: 671px;"src="img/z57.jpg" />
<p>Задача  #57</p>
<form method="POST" name="Myform">
a <input type="text" name="az57" >

<input type="submit" name="knopkaz57" onClick="return Checkz57()" value="OK"/> 
</form>
<p>
<?php
include("tasks/57.php");
?>
<img  style=" left: 277px; top: 3078px; height: 100px; width: 671px;"src="img/z58.jpg" />
<p>Задача  #58</p>
<form method="POST" name="Myform">
a <input type="text" name="az58" >

<input type="submit" name="knopkaz58" onClick="return Checkz58()" value="OK"/> 
</form>
<p>
<?php
include("tasks/58.php");
?>
<img  style=" left: 277px; top: 3078px; height: 100px; width: 671px;"src="img/z59.jpg" />
<p>Задача  #59</p>
<p>Skoro budet</p>
<p>
<?php
include("tasks/59.php");
?>

<img  style=" left: 277px; top: 3078px; height:450px; width: 671px;"src="img/z60.jpg" />
<p>Задача  #60</p>

<p>Skoro budet<p/>
<p>
  <?php
include("tasks/60.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 150px; width: 671px;"src="img/z61.jpg" />
</p>
<p>Задача #61</p>
<form method="POST" name="Myform">
x <input type="text" name="xz61">

<input type="submit" name="knopkaz61" onClick="return Checkz61()" value="OK"/> 
</form>
<p>
<?php
include("tasks/61.php");
?>
<img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z62.jpg" />
<p>Задача #62</p>
<form method="POST" name="Myform">
a <input type="text" name="az62">

<input type="submit" name="knopkaz62" onClick="return Checkz62()" value="OK"/> 
</form>
<p>
<?php
include("tasks/62.php");
?>
<img  style=" left: 277px; top: 3078px; height: 80px; width: 671px;"src="img/z63.jpg" />
<p>Задача #63
 
</p>
<form method="POST" name="Myform" >
  <p>a 
    <input type="text" name="az63" >
    b    <input type="text" name="bz63" /> </p>
  <p>r
    <input type="text" name="rz63">
    s
    <input type="text" name="sz63">
      <input type="submit" name="knopkaz63" onClick="return Checkz63()" value="OK"/> 
    </p>
</form>
<p>
<?php
include("tasks/63.php");
?>

<img  style=" left: 277px; top: 3078px; height: 80px; width: 671px;"src="img/z64.jpg" />
<p>Задача  #64</p>
<form method="POST" name="Myform">
n <input type="text" name="nz64">

<input type="submit" name="knopkaz64" onClick="return Checkz64()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/64.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 90px; width: 671px;"src="img/z65.jpg" />
</p>
<p>Задача  #65</p>
<form method="POST" name="Myform">
n <input type="text" name="nz65">
<input type="submit" name="knopkaz65" onClick="return Checkz65()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/65.php");
?>
<img src="img/z66.jpg" height="266"  style=" left: 277px; top: 3078px; height: 100px; width: 671px;" />

<p>Задача  #66</p>
<form method="POST" name="Myform" >
  <p>x 
    <input type="text" name="xz66" >
    y
  <input type="text" name="yz66">
    z
  <input type="text" name="zz66">
    </p>
  <p>k
    <input type="text" name="kz66">
    m
    <input type="text" name="mz66">
      <input type="submit" name="knopkaz66" onClick="return Checkz66()" value="OK"/> 
    </p>
</form>
<p>
  <?php
include("tasks/66.php");
?>
</p>
<p>&nbsp;</p>
<p>Задача  #69<img  style=" left: 277px; top: 3078px; height: 200px; width: 671px;"src="img/z69.jpg" /></p>
<form method="POST" name="Myform">
f <input type="text" name="fz69">
<input type="submit" name="knopkaz69" onClick="return Checkz69()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/69.php");
?>
<img  style=" left: 277px; top: 3078px; height: 200px; width: 671px;"src="img/z70.jpg" />
<p>Задача  #70</p>
<form method="POST" name="Myform" >
m<input type="text" name="mz70">
n<input type="text" name="nz70">
<input type="submit" name="knopkaz70" onClick="return Checkz70()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/70.php");
?>
</p>
<img  style=" left: 277px; top: 3078px; height: 200px; width: 671px;"src="img/z71.jpg" />
<p>Задача  #71</p>
<form method="POST" name="Myform">
a <input type="text" name="az71">
<input type="submit" name="knopkaz71" onClick="return Checkz71()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/71.php");
?>

<img  style=" left: 277px; top: 3078px; height: 200px; width: 671px;"src="img/z72.jpg" />
<p>Задача  #72</p>
<form method="POST" name="Myform">
a <input type="text" name="az72">
<input type="submit" name="knopkaz72" onClick="return Checkz72()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/72.php");
?>
<img  style=" left: 277px; top: 3078px; height: 150px; width: 671px;"src="img/z73.jpg" />
<p>Задача  #73</p>
<form method="POST" name="Myform" >
k<input type="text" name="kz73">
l<input type="text" name="lz73">
<input type="submit" name="knopkaz73" onClick="return Checkz73()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/73.php");
?>
<img  style=" left: 277px; top: 3078px; height: 150px; width: 671px;"src="img/z75.jpg" />
<p>Задача  #75</p>
<form method="POST" name="Myform">
n <input type="text" name="nz75">

<input type="submit" name="knopkaz75" onClick="return Checkz75()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/75.php");
?>
<img  style=" left: 277px; top: 3078px; height: 300px; width: 671px;"src="img/z76.jpg" />
<p>Задача  #76</p>
<form method="POST" name="Myform" >
  <p>k 
    <input type="text" name="kz76" >
    l
  <input type="text" name="lz76">
    </p>
  <p>m
    <input type="text" name="mz76">
    n
    <input type="text" name="nz76">
      <input type="submit" name="knopkaz76" onClick="return Checkz76()" value="OK"/> 
    </p>
</form>
<p>
<?php
include("tasks/76.php");
?>
<img  style=" left: 277px; top: 3078px; height: 300px; width: 671px;"src="img/z77.jpg" />
<p>Задача  #77</p>
<form method="POST" name="Myform">
n <input type="text" name="nz77">

<input type="submit" name="knopkaz77" onClick="return Checkz77()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/77.php");
?>
<img  style=" left: 277px; top: 3078px; height: 350px; width: 671px;"src="img/z78.jpg" />
<p>Задача  #78</p>
<form method="POST" name="Myform">
n <input type="text" name="nz78">
a <input type="text" name="az78">

<input type="submit" name="knopkaz78" onClick="return Checkz78()" value="OK"/> 
</form>
  <?php
include("tasks/78.php");
?>
<img  style=" left: 277px; top: 3078px; height: 80px; width: 671px;"src="img/z79.jpg" />
<p>Задача  #79</p>
<form method="POST" name="Myform" >
<input type="submit" name="knopkaz79" value="Vichislit"/> 
</form>
<p>
  <?php
include("tasks/79.php");
?>
<img  style=" left: 277px; top: 3078px; height: 80px; width: 671px;"src="img/z80.jpg" />
<p>Задача  #80</p>
<form method="POST" name="Myform">
x <input type="text" name="xz80">
<input type="submit" name="knopkaz80" onClick="return Checkz80()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/80.php");
?>
<img  style=" left: 277px; top: 3078px; height: 80px; width: 671px;"src="img/z81.jpg" />
<p>Задача  #81</p>
<form method="POST" name="Myform">
n <input type="text" name="nz81">
a <input type="text" name="az81">
x <input type="text" name="xz81">

<input type="submit" name="knopkaz81" onClick="return Checkz81()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/81.php");
?>
<img  style=" left: 277px; top: 3078px; height: 100px; width: 671px;"src="img/z82.jpg" />
<p>Задача  #82</p>
<form method="POST" name="Myform">
x <input type="text" name="xz82">
<input type="submit" name="knopkaz82" onClick="return Checkz82()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/82.php");
?>
<img  style=" left: 277px; top: 3078px; height: 200px; width: 671px;"src="img/z83.jpg" />
<p>Задача  #83</p>
<form method="POST" name="Myform">
a <input type="text" name="az83">
<input type="submit" name="knopkaz83" onClick="return Checkz83()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/83.php");
?>
<img  style=" left: 277px; top: 3078px; height: 200px; width: 671px;"src="img/z84.jpg" />
<p>Задача  #84</p>
<form method="POST" name="Myform">
n 
  <input type="text" name="nz84" />
x 
<input type="text" name="xz84">

<input type="submit" name="knopkaz84" onClick="return Checkz84()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/84.php");
?>
<img  style=" left: 277px; top: 3078px; height: 250px; width: 671px;"src="img/z118.jpg" />
<p>Задача  #118</p>

<form method="POST" name="Myform" >
<input type="submit" name="knopkaz118"   onclick="return Checkz118()" value="Vichislit"/>
    
    </p>
</form>
<p>
  <?php
include("tasks/118.php");
?>
</div>

</body>

</html>
