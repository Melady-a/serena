<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<title>Untitled Document</title>
<script language="javascript" src="array_js.js">

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
    <td width="228" class="mtd"><a href="array.php#ini"  class="style7"  style="text-decoration:none">Инициализация массивов</a></td>
  </tr>
  <tr>
    <td height="25" class="mtd"><a href="array.php#for"  class="style7"  style="text-decoration:none">Цикл foreach для обхода массивов</a></td>
  </tr>
  <tr>
    <td height="24" class="mtd"><a href="array.php#arr"  class="style7"  style="text-decoration:none">Многомерные массивы</a></td>
  </tr>
  <tr>
    <td class="mtd"><a href="array.php#sort"  class="style7"  style="text-decoration:none">Функции сортировки массивов</a></td>
  </tr>
  <tr>
    <td height="44" class="mtd"><a href="array.php#cursor" class="style7"  style="text-decoration:none">Работа с курсором (указатель) массива</a></td>
  </tr>
  <tr>
    <td height="36" class="mtd"><a href="array.php#walk" class="style7"  style="text-decoration:none">Функция array_walk()</a></td>
  </tr>
  <tr>
    <td height="27" class="mtd"><a href="array.php#examples"  class="style7"  style="text-decoration:none" >Примеры</a></td>
  </tr>
</table>

<div class="pclass" style="position:absolute; left: 268px; top: 170px; width: 686px; height: 302px;">
  <h4 align="center" class="style4"> Массивы</h4>
  <a name=#ini>
  <h4 class="style5">Инициализация массивов</h4>
  <p>В PHP существует 2 метода инициализации массивов. Первый из них   состоит</p>
  <p> в простом присвоении значений </p>
  <p>элементам массива:</p>
  <blockquote>
    <pre><em>&lt;?</em>     
<strong>$car</strong>[] <em>=</em> &quot;passenger car&quot;<em>;</em>    
 <strong>$car</strong>[] <em>=</em> &quot;land-rover&quot;<em>;</em>     <em>
echo(</em><strong>$car</strong>[1]<em>);</em> <em>// выводит &quot;land-rover&quot;</em>  <em>?&gt;</em>  </pre>
  </blockquote>
  <p>Индекс массива можно указать явно:</p>
  <blockquote>
    <pre><em>&lt;?</em>     <strong>$car</strong>[0] <em>=</em> &quot;passenger car&quot;<em>;</em>     
<strong>$car</strong>[1] <em>=</em> &quot;land-rover&quot;<em>;</em>     
<em>echo(</em><strong>$car</strong>[1]<em>);</em> <em>// выводит &quot;land-rover&quot;</em>  <em>?&gt;</em>  </pre>
  </blockquote>
  <p class="pclass">&nbsp;</p>
  <a name=#for>
<h4 class="style5">Цикл foreach для обхода массивов</h4>
 <br>
  <p>Обход массива в цикле в PHP4 можно организовать при помощи цикла <strong>foreach</strong>, </p>
  <p>который имеет следующий синтаксис:</p>
  <blockquote>
    <pre>foreach <em>(</em>array as [<strong>$key</strong> =&gt;] <strong>$value</strong><em>)  {</em>     statements<em>;  }</em>  </pre>
  </blockquote>
  <p>Смысл этого цикла прост: при проходе каждого элемента массива в   переменную</p>
  <p> <strong>$key</strong> помещается индекс этого элемента, а в переменную <strong>$value</strong> – его значение. </p>
  <p>Имена этих двух переменных совершенно   произвольны.</p>
  <p><strong><em>Пример:</em></strong></p>
  <blockquote>
    <pre><em>&lt;?</em><strong>$car</strong> <em>=</em> array<em>(</em>&quot;passenger car&quot;, &quot;land-rover&quot;, &quot;station-wagon&quot;,&quot;victoria&quot;<em>);</em> 
    foreach<em>(</em><strong>$car</strong> as <strong>$index</strong> =&gt; <strong>$val</strong><em>)   
  {</em>        <em>echo(</em>&quot;<strong>$index</strong> -&gt; <strong>$val</strong> &lt;<strong>br</strong>&gt;&quot;<em>);   
  }</em>  
<em>?&gt;</em>  </pre>
  </blockquote>
  <p>Как видно из синтаксиса, переменная <strong>$key</strong> необязательна и   может быть опущена:</p>
  <blockquote>
    <pre><em>&lt;?</em>     <em>echo(</em>&quot;available cars: &lt;<strong>br</strong>&gt; &lt;<strong>ul</strong>&gt;&quot; <em>);</em>   

  <strong>$car</strong> <em>=</em> array<em>(</em>&quot;passenger car&quot;, &quot;land-rover&quot;, &quot;station-wagon&quot;,&quot;victoria&quot;<em>);</em> 
    foreach<em>(</em><strong>$car</strong> as <strong>$val</strong><em>)   
   {</em>       
 <em>echo(</em>&quot;&lt;<strong>li</strong>&gt;<strong>$val</strong>&lt;<strong>/li</strong>&gt;\n&quot;<em>);    
	}    
 echo(</em>&quot;&lt;<strong>/ul</strong>&gt;&quot;<em>);</em>  
<em>?&gt;</em>  </pre>
  </blockquote>
 <a name=#arr>
     <h4 class="style5">Многомерные массивы</h4>
 <br>
 <p>Для инициализации многомерных массивов используются вложенные   конструкции <strong>array</strong>(). </p>
 <p>Обход многомерных массивов достигается при помощи   вложенных циклов. В следующем </p>
 <p>скрипте показан пример создания и обхода   многомерного массива.</p>
 <p><strong>Пример:</strong></p>
 <blockquote>
   <pre><em>&lt;?</em>     <strong>$ship</strong> <em>=</em> array<em>(</em>&quot;Passenger ship&quot; =&gt; array(&quot;Yacht&quot;,&quot;Liner&quot;,&quot;Ferry&quot;),     
   &quot;War ship&quot; =&gt; array(&quot;Battle-wagon&quot;,&quot;Submarine&quot;,&quot;Cruiser&quot;),      
  &quot;Freight ship&quot; =&gt; array(&quot;Tank vessel&quot;,&quot;Dry-cargo ship&quot;,&quot;Container         
cargo ship&quot;)     <em>);</em>     
foreach<em>(</em><strong>$ship</strong> as <strong>$key</strong> =&gt; <strong>$type</strong><em>)   
  {       
 echo(</em>&quot;&lt;<strong>h2</strong>&gt;<strong>$key</strong>&lt;<strong>/h2</strong>&gt;\n&quot;.&quot;&lt;<strong>ul</strong>&gt;\n&quot;<em>);</em>      
  foreach<em>(</em><strong>$type</strong> as <strong>$ship</strong><em>)       
 {        
   echo(</em>&quot;\t&lt;<strong>li</strong>&gt;<strong>$ship</strong>&lt;<strong>/li</strong>&gt;\n&quot;<em>);       
 }    
 }   
  echo(</em>&quot;&lt;<strong>/ul</strong>&gt;\n&quot;<em>);</em>  
<em>?&gt;</em>  </pre>
 </blockquote>
 <p><strong><em>Результат выполнения этого скрипта::</em></strong></p>
 <br />
 
	   <h2>Passenger ship</h2>
           <ul>
             <li>Yacht </li>
             <li>Liner </li>
             <li>Ferry
               <h2>War ship</h2>
               <ul>
                   <li>Battle-wagon </li>
                 <li>Submarine </li>
                 <li>Cruiser
                   <h2>Freight ship</h2>
                   <ul>
                         <li>Tank vessel </li>
                     <li>Dry-cargo ship </li>
                     <li>Container cargo ship </li>
                   </ul>
                 </li>
               </ul>
             </li>
           </ul>
  
 <p>Ну а теперь, будем рассматривать функции, которые есть в PHP для   работы с массивами.</p>
 <p> И первое с чего мы начнем – это функции сортировки массивов.   Однако до этого</p>
 <p> я еще скажу о трех функциях, которыми мы часто будем   пользоваться в наших примерах.</p>
 <h1>Функция count()</h1>
 <p><strong><em>Синтаксис:</em></strong></p>
 <blockquote>
   <pre>int <strong>count</strong><em>(</em>mixed <strong>var</strong><em>)</em>  </pre>
 </blockquote>
 <p>Эта функция принимает в качестве аргумента массив и возвращает   количество </p>
 <p>элементов в нем. </p>
 <p>Как понимаете, штука незаменимая когда будем бегать   по массиву циклом <strong>for</strong>(). </p>
 <br />
 <h1>Функция in_array()</h1>
 <p><strong><em>Синтаксис:</em></strong></p>
 <blockquote>
   <pre>boolean <strong>in_array</strong><em>(</em>mixed <strong>needle</strong>, array <strong>haystack</strong> [, bool <strong>strict</strong>]<em>)</em>  </pre>
 </blockquote>
 <p>Эта функция ищет в массиве <strong>haystack</strong> значение <strong>needle</strong> и возвращает </p>
 <p><strong>true</strong> если оно найдено и <strong>false</strong> в противном случае. </p>
 <br />
 <h1>Функция reset()</h1>
 <p><strong><em>Синтаксис:</em></strong></p>
 <blockquote>
   <pre>mixed <strong>reset</strong><em>(</em>array <strong>array</strong><em>)</em>  </pre>
 </blockquote>
 <p>Функция <strong>reset</strong>() устанавливает указатель массива на первый   элемент и возвращает значение первого элемента массива.</p>
 <blockquote>
   <p>Небольшое замечание. У каждого массива в PHP есть   внутренний указатель на </p>
   <p>текущий элемент массива. При работе с такими   конструкциями как <strong>foreach</strong> не</p>
   <p> надо думать об указателе, поскольку foreach   устанавливает его в начало массива. </p>
   <p>Однако, многие другие функции массивов,   такие как <strong>prev</strong>(), <strong>next</strong>(), занимаются</p>
   <p> перемещением указателя   массива, что может иметь значение при работе с такими</p>
   <p> функциями, как <strong>array_walk</strong>(), которые начинают обработку массива с того места, </p>
   <p>где   находится указатель.</p>
 </blockquote>
 <p>Ну а теперь вплотную займемся сортировками.</p>
 <a name=#sort>
    <h4 class="style5">Функции сортировки массивов</h4>
 <br>
 <h1>sort()</h1>
 <p>Функция сортировки массива по возрастанию.</p>
 <p><strong><em>Синтаксис:</em></strong></p>
 <blockquote>
   <pre>void <strong>sort</strong><em>(</em>array <strong>array</strong> [, int <strong>sort_flags</strong>]<em>)</em>  </pre>
 </blockquote>
 <p>Функция сортирует массив <strong>array</strong> по возрастанию.   Необязательный аргумент <strong>sort_flags</strong> </p>
 <p>указывает как именно должны   сортироваться элементы (задает флаги сортировки).</p>
 <p> Допустимыми значениями этого   аргумента являются следующие:</p>
 <ul>
   <li>SORT_REGULAR – задает нормальное сравнение элементов (сравнивает элементы   &quot;как есть&quot;) </li>
   <li>SORT_NUMERIC - сравнивает элементы как числа </li>
   <li>SORT_STRING - сравнивает элементы как строки </li>
 </ul>
 <p>Вообще говоря, эта функция предназначена для сортировки списков.   Под </p>
 <p>списком понимается массив, ключи которого начинаются с нуля и не имеют   пропусков.</p>
 <p> Функция <strong>sort</strong>() воспринимает любой массив как список.</p>
 <h1>rsort()</h1>
 <p>Сортировка массива по убыванию.</p>
 <p><strong><em>Синтаксис:</em></strong></p>
 <blockquote>
   <pre>void <strong>rsort</strong><em>(</em>array <strong>arr</strong> [, int <strong>sort_flags</strong>]<em>)</em>  </pre>
 </blockquote>
 <p>Аналогична функции <strong>sort</strong>(), только сортирует по убыванию.   Выполним тот же скрипт,</p>
 <p> что и для функции <strong>sort</strong>(), только вместо   sort(<strong>$arr</strong>) поставим rsort(<strong>$arr</strong>). </p>
 <h1>asort()</h1>
 <p>Сортировка ассоциативного массива по возрастанию.</p>
 <p><strong><em>Синтаксис:</em></strong></p>
 <blockquote>
   <pre>void <strong>asort</strong><em>(</em>array <strong>arr</strong> [, int <strong>sort_flags</strong>]<em>)</em>  </pre>
 </blockquote>
 <p>Функция <strong>asort</strong>() сортирует массив <strong>arr</strong> так, чтобы его   значения шли в алфавитном</p>
 <p> (если это строки) или возрастающем (для чисел)   порядке.</p>
 <p> Важное отличие этой функции от функции <strong>sort</strong>() состоит в</p>
 <p> том, что   при применении функции <strong>asort</strong>()сохраняются связи между</p>
 <p> ключами и   соответствующими им значениями, чего нет в функции <strong>sort</strong>() (там эти связи   попросту разрываются).</p>
 <h1>arsort()</h1>
 <p>Сортировка ассоциативного массива по убыванию.</p>
 <p><strong><em>Синтаксис:</em></strong></p>
 <blockquote>
   <pre>void <strong>arsort</strong><em>(</em>array <strong>arr</strong> [, int <strong>sort_flags</strong>]<em>)</em>  </pre>
 </blockquote>
 <p>Эта функция аналогична функции <strong>asort</strong>(), только она   упорядочивает массив не по возрастанию, а по убыванию.</p>
 <br />
 <h1>ksort()</h1>
 <p>Сортировка массива по возрастанию ключей.</p>
 <p><strong><em>Синтаксис:</em></strong></p>
 <blockquote>
   <pre>int <strong>ksort</strong><em>(</em>array <strong>arr</strong> [, int <strong>sort_flags</strong>]<em>)</em>  </pre>
 </blockquote>
 <p>В этой функции сортировка осуществляется не по значениям, а по   ключам в порядке их возрастания.</p>
 <h1>krsort()</h1>
 <p>Сортировка массива по убыванию индексов.</p>
 <p><strong><em>Синтаксис:</em></strong></p>
 <blockquote>
   <pre>int <strong>krsort</strong><em>(</em>array <strong>arr</strong> [, int <strong>sort_flags</strong>]<em>)</em>  </pre>
 </blockquote>
 <p>То же самое, что и функция <strong>ksort</strong>(), только упорядочивает   массив по ключам</p>
 <p> в обратном порядке (по убыванию).</p>
 <br />
 <h1>array_reverse()</h1>
 <p>Расстановка элементов массива в обратном порядке.</p>
 <p><strong><em>Синтаксис:</em></strong></p>
 <blockquote>
   <pre>array <strong>array_reverse</strong><em>(</em>array <strong>arr</strong> [, bool <strong>preserve_keys</strong>]<em>)</em>  </pre>
 </blockquote>
 <p>Функция <strong>array_reverse</strong>() возвращает массив, элементы   которого следуют в</p>
 <p> обратном порядке относительно массива <strong>arr</strong>, переданного   в параметре.</p>
 <p> При этом связи между ключами и значениями сохраняются. </p>
 <p>Можно еще   необязательный параметр <strong>preserve_keys</strong> сделать <strong>true</strong>,</p>
 <p> тогда в   обратном порядке переставятся еще и ключи.</p>
 <h1>shuffle()</h1>
 <p>Перемешивание элементов массива случайным образом.</p>
 <p><strong><em>Синтаксис:</em></strong></p>
 <blockquote>
   <pre>void <strong>shuffle</strong><em>(</em>array <strong>arr</strong><em>)</em>  </pre>
 </blockquote>
 <p>Функция <strong>shuffle</strong>() перемешивает элементы масиива <strong>arr</strong> случайным образом.</p>
 <br />
 <h1>natsort()</h1>
 <p>Выполняет &quot;естественную&quot; сортировку массива.</p>
 <p><strong><em>Синтаксис:</em></strong></p>
 <blockquote>
   <pre>void <strong>natsort</strong><em>(</em>array <strong>arr</strong><em>)</em>  </pre>
 </blockquote>
 <p>С такой сортировкой мы уже встречались, когда работали со   строками. </p>
 <p>Поработаем с ней еще разок. Как помните, под естественной </p>
 <p>сортировкой   понимается сортировка таким образом, когда элементы </p>
 <p>того, что сортируется   располагаются в &quot;понятном&quot; для человека порядке.</p>
 <p>&nbsp;</p>
 <p class="pclass" >&nbsp;</p>
<a name=#cursor>
     <h4 class="style5">Работа с курсором (указатель) массива</h4>
 <br>
 <p>О функции <strong>reset</strong>() мы с вами уже говорили. Напомним, что эта   функция производит</p>
 <p> сброс курсора массива, т.е. устанавливает внутренний курсор   массива</p>
 <p> на начало массива и возвращает значение первого элемента.</p>
 <p>Функция <strong>end</strong>() выполняет действие, обратное функции <strong>reset</strong>() – </p>
 <p>переносит курсор в конец массива. Синтаксис функции аналогичен   синтаксису функции <strong>reset</strong>():</p>
 <h1>end()</h1>
 <p><strong><em>Синтаксис:</em></strong></p>
 <blockquote>
   <pre>mixed <strong>end</strong><em>(</em>array array arr<em>)</em>  </pre>
 </blockquote>
 <br />
 <h1>next()</h1>
 <p>Функция next() производит перенос курсора массива вперед на одну   позицию.</p>
 <p><strong><em>Синтаксис:</em></strong></p>
 <blockquote>
   <pre>mixed <strong>next</strong><em>(</em>array array arr<em>)</em>  </pre>
 </blockquote>
 <p>Т.е. эта функция перемещает курсор массива на следующий элемент,</p>
 <p> при этом возвращая значение элемента, на котором находился курсор</p>
 <p> до   перемещения. Если элементов в массиве больше не осталось,</p>
 <p> функция возвращает <strong>false</strong>. При работе с этой функцией надо не забывать про</p>
 <p> один моментик, а   именно: <strong>false</strong> также возвращается, если курсору</p>
 <p> повстречается элемент с   пустым значением. Так что, если вы хотите </p>
 <p>работать с массивами, содержащими   пустые элементы, то используйте</p>
 <p> лучше функцию <strong>each</strong>(), о которой мы   поговорим через несколько абзацев.</p>
 <br />
 <h1>prev()</h1>
 <p>Функция <strong>prev</strong>() производит перенос курсора назад на одну   позицию. </p>
 <p>Синтаксис и работа функции полностью аналогичны функции <strong>next</strong>().</p>
 <p><strong><em>Синтаксис:</em></strong></p>
 <blockquote>
   <pre>mixed <strong>prev</strong><em>(</em>array array arr<em>)</em>  </pre>
 </blockquote>
 <h1>current()</h1>
 <p>Для определения текущего элемента массива, без изменения положения   </p>
 <p>курсора, используется функция <strong>current</strong>().</p>
 <p><strong><em>Синтаксис:</em></strong></p>
 <blockquote>
   <pre>mixed <strong>current</strong><em>(</em>array array arr<em>)</em>  </pre>
 </blockquote>
 <p>Функция <strong>current</strong>() возвращает значение элемента, на котором   в данный</p>
 <p> момент находится курсор массива, при этом не сдвигая курсор. </p>
 <p>В том   случае, если курсор оказался за пределами массива, или массив </p>
 <p>состоит из пустых   элементов, функция возвратит <strong>false</strong>.</p>
 <p>Полным синонимом функции <strong>current</strong>() является функция <strong>pos</strong>().</p>
 <h1>key()</h1>
 <p>Функция <strong>key</strong>() возвращает индекс текущего элемента   массива.</p>
 <p><strong><em>Синтаксис:</em></strong></p>
 <blockquote>
   <pre>mixed <strong>key</strong><em>(</em>array array arr<em>)</em>  </pre>
 </blockquote>
 <br />
 <p>Ну а теперь поговорим об обещанной функции <strong>each</strong>().</p>
 <h1>each()</h1>
 <p><strong><em>Синтаксис:</em></strong></p>
 <blockquote>
   <pre>array <strong>each</strong><em>(</em>array array arr<em>)</em>  </pre>
 </blockquote>
 <p>Функция <strong>each</strong>() возвращает пару &quot;индекс - значение&quot; текущего   элемента массива</p>
 <p> и сдвигает курсор массива на следующий элемент. При этом, как   видно, </p>
 <p>функция возвращает массив, причем он имеет четыре элемента:</p>
 <ol>
   <li>[1] =&gt; &quot;значение&quot; </li>
   <li>[value] =&gt; &quot;значение&quot; </li>
   <li>[0] =&gt; индекс </li>
   <li>[key] =&gt; индекс </li>
 </ol>
 <p class="pclass" >&nbsp;</p>
 <a name=#walk>

     <h4 class="style5">Функция array_walk()</h4>
 	 <h1>array_walk()</h1>
 	 <p>Достаточно важная функция, позволяющая применять пользовательскую   </p>
 	 <p>функцию к каждому элементу массива.</p>
 	 <p><strong><em>Синтаксис:</em></strong></p>
 	 <blockquote>
 	   <pre>bool <strong>array_walk</strong><em>(</em>array <strong>arr</strong>, callback <strong>func</strong> [, mixed <strong>userdata</strong>]<em>)</em>  </pre>
  </blockquote>
 	 <p>Как видно из синтаксиса этой функции, она применяет   пользовательскую функцию </p>
 	 <p><strong>func</strong> к каждому элементу массива <strong>arr</strong>. В   пользовательскую функцию передаются</p>
 	 <p> два или три аргумента:</p>
 	 <p> значение текущего   элемента, его индекс и аргумент <strong>userdata</strong>.</p>
 	 <p> Последний аргумент является   необязательным. Заметим, что в случае, </p>
 	 <p>если <strong>func</strong> требует более трех   аргументов, при каждом ее вызове </p>
 	 <p>будет выдаваться предупреждение, и, чтобы они   не выдавались,</p>
 	 <p> нужно поставить знак &quot;<strong>@</strong>&quot; перед функцией <strong>array_walk</strong>(). </p>
 	 <p>Заметим также, что функция <strong>func</strong> получает значения и   индексы массива</p>
 	 <p> <strong>arr</strong> таким образом, что не может их изменять.</p>
 	 <p> Если   возникает такая необходимость, нужно передавать аргумент</p>
 	 <p> <strong>arr</strong> по ссылке. В   этом случае все изменения отразятся в массиве.</p>
    <h6 class="style5">&nbsp;</h6>
	<a name=#examples>
 <h4 class="style5">Примеры</h4>
 <img  style=" left: 277px; top: 3078px; height: 100px; width: 671px;"src="img/z85.jpg" />
 <p class="pclass">Задача #85</p>
<form method="POST" name="Myform">
n <input type="text" name="nz85">
a <input type="text" name="az85">
h <input type="text" name="hz85">

<input type="submit" name="knopkaz85" onClick="return Checkz85()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/85.php");
?>
 </p>
<p>  <img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z91.jpg" />
</p>
<p class="pclass">Задача #91</p>
<form method="POST" name="Myform">
n <input type="text" name="nz91">

<input type="submit" name="knopkaz91" onClick="return Checkz91()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/91.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 120px; width: 671px;"src="img/z92.jpg" />
</p>
<p class="pclass">Задача #92</p>
<form method="POST" name="Myform">
n <input type="text" name="nz92">

<input type="submit" name="knopkaz92" onClick="return Checkz92()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/92.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 120px; width: 671px;"src="img/z93.jpg" />
</p>
<p class="pclass">Задача #93</p>
<form method="POST" name="Myform">
  <p>n 
    <input type="text" name="nz93" >
    q 
  <input type="text" name="qz93">
    </p>
  <p>r 
    <input type="text" name="rz93">
    b 
    <input type="text" name="bz93" >
    </p>
  <p>c 
    <input type="text" name="cz93">
    d 
    <input type="text" name="dz93">
    
      <input type="submit" name="knopkaz93" onClick="return Checkz93()" value="OK"/> 
      </p>
</form>
<p>
  <?php
include("tasks/93.php");
?>
  </p>
<p><img  style=" left: 277px; top: 3078px; height: 150px; width: 671px;"src="img/z94.jpg" />
</p>
<p class="pclass">Zadacha #94</p>
<form method="POST" name="Myform">
n <input type="text" name="nz94">

<input type="submit" name="knopkaz94" onClick="return Checkz94()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/94.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 120px; width: 671px;"src="img/z95.jpg" />
</p>
<p>Задача #95</p>
<form method="POST" name="Myform" >
<input type="submit" name="knopkaz95"  value="Vichislit"/> 
</form>
<p>
  <?php
include("tasks/95.php");
?>
  </p>
<p><img  style=" left: 277px; top: 3078px; height: 180px; width: 671px;"src="img/z96.jpg" />
</p>
<p>Задача #96</p>
<form method="POST" name="Myform">
n <input type="text" name="nz96">
<input type="submit" name="knopkaz96" onClick="return Checkz96()" value="OK"/> 
</form>
<p>
<?php
include("tasks/96.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 120px; width: 671px;"src="img/z97.jpg" />
</p>
<p>Задача #97</p>
<form method="POST" name="Myform">
n <input type="text" name="nz97">

<input type="submit" name="knopkaz97" onClick="return Checkz97()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/97.php");
?>
  </p>
<p><img  style=" left: 277px; top: 3078px; height: 150px; width: 671px;"src="img/z98.jpg" />
</p>
<p>Задача #98</p>
<form method="POST" name="Myform">
n <input type="text" name="nz98">

<input type="submit" name="knopkaz98" onClick="return Checkz98()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/98.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 120px; width: 671px;"src="img/z99.jpg" />
</p>
<p>Задача #99</p>
<form method="POST" name="Myform">
n <input type="text" name="nz99">
u <input type="text" name="uz99">
v <input type="text" name="vz99">

<input type="submit" name="knopkaz99" onClick="return Checkz99()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/99.php");
?>
  </p>
<p><img  style=" left: 277px; top: 3078px; height:150px; width: 671px;"src="img/z100.jpg" />
</p>
<p>Задача #100</p>
<form method="POST" name="Myform" >
<input type="submit" name="knopkaz100"  value="Vichislit"/> 
</form>
<p>
  <?php
include("tasks/100.php");
?>
</p>
<p><img  style=" left: 277px; top: 3078px; height: 150px; width: 671px;"src="img/z101.jpg" /></p>
<p>Задача #101</p>
<form method="POST" name="Myform">
a <input type="text" name="az101">
x <input type="text" name="xz101">
e <input type="text" name="ez101">

<input type="submit" name="knopkaz101" onClick="return Checkz101()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/101.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 150px; width: 671px;"src="img/z102.jpg" />
</p>
<p>Задача #102</p>
<form method="POST" name="Myform" >
<input type="submit" name="knopkaz102" onClick="return Checkz102()" value="Vichislit"/> 
</form>
<p>
  <?php
include("tasks/102.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 150px; width: 671px;"src="img/z103.jpg" />
</p>
<p>Задача #103</p>
<form method="POST" name="Myform">
e <input type="text" name="ez103">

<input type="submit" name="knopkaz103" onClick="return Checkz103()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/103.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 200px; width: 671px;"src="img/z104.jpg" />
</p>
<p>Задача  #104</p>
<form method="POST" name="Myform">
a <input type="text" name="az104">

<input type="submit" name="knopkaz104" onClick="return Checkz104()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/104.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 150px; width: 671px;"src="img/z105.jpg" />
</p>
<p>Задача #105</p>
<form method="POST" name="Myform">
n <input type="text" name="nz105">
x <input type="text" name="xz105">

<input type="submit" name="knopkaz105" onClick="return Checkz105()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/105.php");
?>
  <img  style=" left: 277px; top: 3078px; height: 150px; width: 671px;"src="img/z106.jpg" /></p>
<p>&nbsp;</p>
<p>Задача #106</p>
<form method="POST" name="Myform">
n <input type="text" name="nz106">
a <input type="text" name="az106">
b <input type="text" name="bz106">

<input type="submit" name="knopkaz106" onClick="return Checkz106()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/106.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z107.jpg" />
</p>
<p>Задача  #107</p>
<form method="POST" name="Myform">
m <input type="text" name="mz107">
<input type="submit" name="knopkaz107" onClick="return Checkz107()" value="OK"/> 
</form>

    </p>
 
    <p>
  <?php
include("tasks/107.php");
?>
  </p>
    <p><img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z108.jpg" />
        </p>
		<p>Задача  #108</p>
        <form method="POST" name="Myform">
n <input type="text" name="nz108">

<input type="submit" name="knopkaz108" onClick="return Checkz108()" value="OK"/> 
</form>
    <p>
  <?php
include("tasks/108.php");
?>
  </p>
    <p>        <img  style=" left: 277px; top: 3078px; height: 82px; width: 671px;"src="img/z109.jpg" />
        </p>
    <p>Задача #109</p>
<form method="POST" name="Myform">
n <input type="text" name="nz109">

<input type="submit" name="knopkaz109" onClick="return Checkz109()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/109.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 250px; width: 671px;"src="img/z110.jpg" />
</p>
<p>Задача  #110</p>
<form method="POST" name="Myform" >
<input type="submit" name="knopkaz110"  value="Vichislit"/> 
</form>
<p>
  <?php
include("tasks/110.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 250px; width: 671px;"src="img/z111.jpg" />
</p>
<p>Задача  #111</p>
<form method="POST" name="Myform">
x <input type="text" name="xz111">

<input type="submit" name="knopkaz111" onClick="return Checkz111()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/111.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 150px; width: 671px;"src="img/z112.jpg" />
</p>
<p>Задача  #112</p>
<form method="POST" name="Myform" >
n<input type="text" name="nz112">
k<input type="text" name="kz112">
<input type="submit" name="knopkaz112" onClick="return Checkz112()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/112.php");
?>
  </p>
<p><img  style=" left: 277px; top: 3078px; height: 200px; width: 671px;"src="img/z113.jpg" />
</p>
<p>Задача  #113</p>
<form method="POST" name="Myform">
n <input type="text" name="nz113">

<input type="submit" name="knopkaz113" onClick="return Checkz113()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/113.php");
?>
</p>
<p><img  style=" left: 277px; top: 3078px; height: 280px; width: 671px;"src="img/z114.jpg" />
</p>
<p>Задача  #114</p>
<form method="POST" name="Myform" >
<input type="submit" name="knopkaz114" onClick="return Checkz114()" value="Vichislit"/> 
</form>
<p>
  <?php
include("tasks/114.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 200px; width: 671px;"src="img/z115.jpg" />
</p>
<p>Задача #115</p>
<form method="POST" name="Myform">
n <input type="text" name="nz115">
<input type="submit" name="knopkaz115" onClick="return Checkz115()" value="OK"/> 
</form>
<p>
<?php
include("tasks/115.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 300px; width: 671px;"src="img/z116.jpg" />
</p>
<p>Задача #116</p>
<form method="POST" name="Myform">
n <input type="text" name="nz116">
x <input type="text" name="xz116">

<input type="submit" name="knopkaz116" onClick="return Checkz116()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/116.php");
?>
</p>
<p>  <img  style=" left: 277px; top: 3078px; height: 120px; width: 671px;"src="img/z117.jpg" />
</p>
<p>Задача #117</p>
<form method="POST" name="Myform">
n <input type="text" name="nz117">
<input type="submit" name="knopkaz117" onClick="return Checkz117()" value="OK"/> 
</form>
<p>
  <?php
include("tasks/117.php");
?>
</p>
<p><img  style=" left: 277px; top: 3078px; height: 300px; width: 671px;"src="img/z119.jpg" /></p>
<p>Задача  #119</p>
<form method="POST" name="Myform">
e <input type="text" name="ez119">
<input type="submit" name="knopkaz119" onClick="return Checkz119()" value="OK"/> 
</form>
<?php
include("tasks/119.php");
?>


</div>

</body>

</html>
