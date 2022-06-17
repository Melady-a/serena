<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<title>Untitled Document</title>

<style type="text/css">
<!--
.style4 {color:#663333}
.style5 {
	font-family: "Bookman Old Style";
	font-weight: bold;
	color:#000099
}
.style6 {font-size: 12px}
.style7 {font-family: "Bookman Old Style"; font-weight: bold; color:#999900; font-size: 12px; }
.style8 {font-family: "Bookman Old Style"; font-weight: bold; color: #66FFFF; font-size: 14px; }
-->
</style>
</head>

<body>
<img src="img/php.jpg" width="100%" height="150" />
<table width="240" height="227" border="1" bordercolor="#CC6699" class="menu" >
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
    <td class="mtd"><a href="function.php" class="a style4"  style="text-decoration:none"> Функции  </a></td>
  </tr>
  <tr>
    <td height="34" class="mtd"><a href="file.php"  class="a style4"  style="text-decoration:none" >Работа с файлами  </a></td>
  </tr>
    <tr>
    <td height="37" class="mtd"><a href="phpsql.php"  class="a style4"  style="text-decoration:none" >PHP и MySQL. Совместная работа  </a></td>
  </tr>
</table>
<table width="268" border="0" bordercolor="#CC6699"  style="position:fixed; width: 241px; left: 14px; top: 476px; height: 244px;" >
  <tr>
    <td width="260" height="25" class="mtd"><a href="expression.php#ex"  class="style7"  style="text-decoration:none">Регулярные выражения</a></td>
  </tr>
  <tr>
    <td height="16" class="mtd"><a href="expression.php#gr"  class="style7"  style="text-decoration:none">Групповой символ</a></td>
  </tr>
 
  <tr>
    <td height="16" class="mtd"><a href="expression.php#pipe"  class="style7"  style="text-decoration:none">Ветви</a></td>
  </tr>
  <tr>
    <td height="20" class="mtd"><a href="expression.php#exex"  class="style7"  style="text-decoration:none">Исключающее выражение</a></td>
  </tr>
    <tr>
    <td height="26" class="mtd"><a href="expression.php#kv"  class="style7"  style="text-decoration:none">Квалификаторы</a></td>
  </tr>
    <tr>
    <td height="22" class="mtd"><a href="expression.php#border"  class="style7"  style="text-decoration:none">Границы</a></td>
  </tr>
    <tr>
    <td height="20" class="mtd"><a href="expression.php#unex"  class="style7"  style="text-decoration:none">Подвыражения</a></td>
  </tr>
    <tr>
    <td height="25" class="mtd"><a href="expression.php#str"  class="style7"  style="text-decoration:none">Соответствие началу и концу строки</a></td>
  </tr>
    <tr>
    <td height="25" class="mtd"><a href="expression.php#ssymbol"  class="style7"  style="text-decoration:none">Сопоставление со специальными символами</a></td>
  </tr>
    <tr>
    <td height="25" class="mtd"><a href="expression.php#clas"  class="style7"  style="text-decoration:none">Классы символов</a></td>
  </tr>
    <tr>
    <td height="25" class="mtd"><a href="expression.php#func"  class="style7"  style="text-decoration:none">Функции для работы с регулярными выражениями</a></td>
  </tr>
    <tr>
    <td height="25" class="mtd"><a href="expression.php#perl"  class="style7"  style="text-decoration:none">Perl-совместимые регулярные выражения</a></td>
  </tr>
 

</table>

<div class="pclass" style="position:absolute; left: 277px; top: 184px; width: 686px; height: 302px;">
  <h4 align="center" class="style4"> Регулярные выражения </h4>
  <a name=#ex>
  <h4 class="style5">Регулярные выражения</h4>
  <p>Ранее для поиска в строке подстроки мы использовали строковые   функции, ограничиваясь при этом случаями точного соответствия строк и подстрок.   Для работы со строками можно использовать также <strong>регулярные выражения</strong>,   представляющие собой, по сути, мини-язык описаний для поиска в строках   информации по заданному шаблону.</p>
  <p>С помощью регулярных выражений можно найти в строке подстроку,   удовлетворяющую заданному шаблону и извлечь ее, проверить существует ли заданная   строка и т.д.</p>
  <p>Алгоритм поиска с использованием регулярных выражений был впервые   разработан одним из создателей UNIX Кеном Томпсоном. Интересно, что изначально   регулярные выражения появились не в теории вычислительных систем, а в   нейрофизиологии. Основу теории регулярных выражений заложили нейрофизиологи У.   Мак-Каллох и У. Питтс, работавшие над способами математического описания нервных   процессов. Позднее математик С. Клини, основываясь на этих исследованиях,   опубликовал работу &quot;Представление событий в нейронных сетях&quot;, в которой и было   введено понятие регулярных выражений. Кен Томпсон, основываясь на этих работах,   адаптировал теорию регулярных выражений для алгоритмов поиска информации. Именно   начиная с его работ, регулярные выражения стали использоваться в текстовых   редакторах и вошли во многие языки программирования.</p>
  <h5>Базовый синтаксис и создание регулярных выражений</h5>
  <br />
  <p>Простейшее регулярное выражение можно записать так:</p>
  <blockquote>
    <pre>&quot;abc&quot;  </pre>
  </blockquote>
  <p>Это выражение соответствует любой строке, которая содержит   подстроку &quot;abc&quot;.</p>
  <p>Существует такое понятие, как <strong>выражение в квадратных   скобках</strong>. Квадратные скобки ограничивают поиск теми символами, которые в них   заключены:</p>
  <blockquote>
    <pre>&quot;[abc]&quot;  </pre>
  </blockquote>
  <p>Этому регулярному выражению соответствует любая строка, содержащая   abc либо вместе, либо каждый из них в отдельности. Выражение в квадратных   скобках иногда еще называют <strong>бра-кет выражением</strong>.</p>
  <p>Допустим, нам нужно создать регулярное выражение, соответствующее   всем буквам русского алфавита. В этом случае мы можем, конечно, перечислить все   эти буквы в регулярном выражении. Это допустимо, но утомительно и неэлегантно.   Более коротко такое регулярное выражение можно записать следующим образом:</p>
  <blockquote>
    <pre>&quot;[а-Я]&quot;  </pre>
  </blockquote>
  <p>Это выражение соответствует всем буквам русского алфавита,   поскольку любые два символа, разделяемые дефисом, задают соответствие диапазону   символов, находящихся между ними. Заметьте, что регулярное выражение &quot;[а-Я]&quot;   описывает символы как нижнего, так и верхнего регистров, поэтому более подробно   это выражение можно записать так:</p>
  <blockquote>
    <pre>&quot;[а-яА-Я]&quot;  </pre>
  </blockquote>
  <p>Точно таким же образом задаются регулярные выражения,   соответствующие числам:</p>
  <blockquote>
    <pre>&quot;[0-9]&quot;    или  &quot;[0123456789]&quot;  </pre>
  </blockquote>
  <p>Оба этих выражения эквивалентны и соответствует любой цифре.</p>
  <blockquote>&nbsp;
  </blockquote>
    <a name=#gr>
  <h4 class="style5">Групповой символ</h4>
 <br>
  <p>При создании регулярных выражений часто удобно пользоваться   групповым символом точки &quot;.&quot;, который объединяет два одиночных символа, за   исключением символа \n. К примеру:</p>
  <blockquote>
    <pre>  .ок  </pre>
  </blockquote>
  <p>Это выражение, в частности соответствует строкам &quot;кок&quot;, &quot;док&quot;,   &quot;ток&quot;.</p>
  <p>Выражение</p>
  <blockquote>
    <pre>   &quot;x.[0-9]&quot;  </pre>
  </blockquote>
  <p>соответствует строке, содержащей символ x, за которым идет любой   другой символ и цифры от 0 до 9. Этому критерию, к примеру, удовлетворяют строки   &quot;xy1&quot;, &quot;xz2&quot; и т. д.</p>
  <a name=#pipe>
     <h4 class="style5">Ветви</h4>
 <br>
 <p>В регулярном выражении может быть несколько <strong>ветвей</strong>, которые   разделяются символом |, действующим как оператор OR (ИЛИ). Т. е., если в   выражении используются ветви, то для соответствия регулярного выражения   какой-либо строке, достаточно, чтобы только одна из ветвей соответствовала этой   строке:</p>
 <blockquote>
   <pre>&quot;abc|абв&quot;  </pre>
 </blockquote>
 <p>Этому регулярному выражению соответствует любая строка, содержащая   подстроки &quot;abc&quot; или &quot;абв&quot;. Ветвление удобно применять при проверке расширений и   имен файлов, зон доменных имен и т. д. К примеру, следующее регулярное выражение   проверяет, содержатся ли в строке подстроки &quot;ru&quot;, &quot;com&quot; или &quot;net&quot;:</p>
 <blockquote>
   <pre>&quot;ru|com|net&quot;  </pre>
 </blockquote>
 <a name=#exex>
 <h4 class="style5">Исключающее выражение</h4>
 <br>
 <p>Для исключения последовательности символов из поиска перед этой   ней ставится символ &quot;^&quot;:</p>
 <blockquote>
   <pre>&quot;[^а-я]&quot;  </pre>
 </blockquote>
 <p>Это регулярное выражение отвечает любому символу, не содержащемуся   в диапазоне а-я. Обратите внимание, что символ ^ находится внутри квадратных   скобок, так как только в этом случае он имеет значение &quot;не&quot;. При использовании   символа ^ вне квадратных скобок, он имеет совсем иное значение, о чем пойдет   речь немного позже.</p>
 <p>&nbsp;</p>

  <a name=#kv>
 <h4 class="style5">Квалификаторы</h4>
 <p>Регулярное выражение можно уточнить при помощи <strong>квалификаторов</strong> - так называются символы +, ?, *. Квалификаторы говорят о   том, сколько раз последовательность символов может встретиться в строке и   указываются непосредственно после той части выражения, к которой они   применяются:</p>
 <ul>
   <li>&quot;a+&quot; - хотя бы один а (строки &quot;абв&quot; и &quot;абва&quot; соответствуют этому выражению,   а строка &quot;укр&quot; - нет); </li>
   <li>&quot;a?&quot; - ноль или один а (строки &quot;абв&quot; и &quot;укр&quot; соответствуют этому выражению,   а строка &quot;абва&quot; - нет); </li>
   <li>&quot;a*&quot; - ноль или более а (строки &quot;абв&quot; и &quot;абва&quot; и &quot;укр&quot; соответствуют этому   выражению). </li>
 </ul>
 <p class="pclass">&nbsp;</p>
 <a name=#border>
 <h4 class="style5">Границы</h4>
 
   <p>Границы - это числа в фигурных скобках, указывающие количество   вхождений в строку фрагмента выражения, непосредственно предшествующего   границе:</p>
   <ul>
     <li>&quot;xy{2}&quot; соответствует строке, в которой за x следует два y; </li>
     <li>&quot;xy{2,}&quot; соответствует строке, в которой за x следует не менее двух y (может   быть и больше); </li>
     <li>&quot;xy{2,6}&quot; соответствует строке, в которой за x следует от двух до шести y; </li>
   </ul>
   <p>Для указания количества вхождений не одного символа, а их   последовательности, используются круглые скобки:</p>
   <ul>
     <li>&quot;x(yz){2,6}&quot; соответствует строке, в которой за x следует от двух до шести   последовательностей yz; </li>
     <li>&quot;x(yz)*&quot; соответствует строке, в которой за x следует ноль и более   последовательностей yz; </li>
   </ul>
   <a name=#unex>
   <h4 class="style5">Подвыражения</h4>
     <p>Иногда бывает удобно создавать регулярное выражение таким образом,   чтобы можно было, к примеру, сказать, что, по крайней мере, за одной из строк   &quot;морская&quot;, следует точно строка &quot;волна&quot;. Для этого регулярное выражение   разбивают на <strong>подвыражения</strong> с помощью круглых скобок:</p>
     <blockquote>
       <pre>(морская)*волна  </pre>
     </blockquote>
     <p>Это выражение соответствует строкам &quot;волна&quot;, &quot;морская волна&quot;,   &quot;морская морская волна&quot; и т.д.</p>
     <a name=#str>
     <h4 class="style5">Соответствие началу и концу строки</h4>
     <p>В регулярном выражении можно указать, должно ли конкретное   подвыражение встречаться в начале, в конце строки или и в начале и в конце   строки.</p>
	 <p>Символ ^ соответствует началу строки:</p>
	 <blockquote>
	   <pre>&quot;^xy&quot;  </pre>
  </blockquote>
	 <p>Такое выражение соответствует любой строке, начинающейся с xy.   Обратите внимание, что в этом случае символ ^ ставится за пределами выражения в   скобках, к примеру:</p>
	 <blockquote>
	   <pre>&quot;^[a-z]&quot;  </pre>
  </blockquote>
	 <p>Знак доллара $ соответствует концу строки:</p>
	 <blockquote>
	   <pre>&quot;xy$&quot;  </pre>
  </blockquote>
	 <p>Это регулярное выражение соответствует любой строке,   заканчивающейся на xy.</p>
	 <blockquote>&nbsp;</blockquote>
  <a name=#ssymbol>
    <h4 class="style5">Сопоставление со специальными символами</h4>
	  <p><br />
</p>
    
	  <p>В тех случаях, когда нужно сопоставить выражение строке, в которой   встречаются спецсимволы, о которых говорилось выше в этой главе, такие как $, ^,   { и т. д., перед ними ставится символ обратной косой черты (\). Например, для   того, чтобы найти в строке символ $, в регулярном выражении нужно написать   &quot;\$&quot;.</p>
	  <p><em>В тех случаях, когда перед символом стоит обратная косая черта,   говорят, что символ записан в виде <strong>escape-последовательности</strong>.</em></p>
	  <p>То же самое относится и к самому символу обратной косой черты.   Если нужно провести сопоставление с символом обратной косой черты, то в этом   случае ставится две обратных косых черты, т. е. \\.</p>
	   <a name=#clas>
	  <h4 class="style5">Классы символов</h4>
	  <p><strong>Классами символов</strong> называются сокращенные обозначения для   предопределенных символов.</p>
	  <ul>
        <li>Класс <strong>[[:alnum:]]</strong> - буквенно-цифровые символы </li>
	    <li>Класс <strong>[[:digit:]]</strong> - десятичные цифровые символы </li>
	    <li>Класс <strong>[[:xdigit:]]</strong> - шестнадцатеричные цифровые символы </li>
	    <li>Класс <strong>[[:alpha:]]</strong> - буквенные символы </li>
	    <li>Класс <strong>[[:upper:]]</strong> - прописные буквенные символы </li>
	    <li>Класс <strong>[[:lower:]]</strong> - строчные буквенные символы </li>
	    <li>Класс <strong>[[:punct:]]</strong> - знаки пунктуации </li>
	    <li>Класс <strong>[[:space:]]</strong> - символы пробела </li>
	    <li>Класс <strong>[[:blanc:]]</strong> - символы табуляции и пробела </li>
	    <li>Класс <strong>[[:print:]]</strong> - печатные символы </li>
	    <li>Класс <strong>[[:cntrl:]]</strong> - управляющие символы </li>
	    <li>Класс <strong>[[:graph:]]</strong> - печатные символы, за исключением пробельные </li>
  </ul>
	  <p>Вы можете использовать классы символов в регулярных выражениях   точно также как и остальные символы. К примеру:</p>
	  <ul>
        <li>Эквивалентом выражения &quot;[a-zA-Z_0-9]&quot; является выражение   &quot;<strong>[[:alnum:]]</strong>&quot;; </li>
	    <li>Выражению &quot;[0-9]&quot; эквивалентно выражение &quot;<strong>[[:digit:]]</strong>&quot; </li>
	    <li>Выражению &quot;[a-Z]&quot; эквивалентно регулярное выражение &quot;<strong>[[:alpha:]]</strong>&quot;. </li>
  </ul>
   <a name=#func>
	  <h4 class="style5">Функции для работы с регулярными выражениями</h4>
	  <p>PHP поддерживает два вида записи регулярных выражений: POSIX и   Perl. POSIX расшифровывается как Portable Operating System Interface (интерфейс   переносной операционной системы) и является стандартом для интерфейсов   приложений. В этом разделе мы будем работать с регулярными выражениями в стиле   POSIX, а позже рассмотрим Perl-совместимые регулярные выражения.</p>
	  <p><em>В общем случае, функции для работы с регулярными выражениями   выполняются более медленно, чем строковые функции, предоставляющие аналогичные   возможности. Поэтому, если можно без ущерба для эффективности приложения   использовать строковые функции, их следует использовать.</em></p>
	  <h3>ereg()</h3>
	  <blockquote>
	    <pre>  <em>bool</em> <strong>ereg</strong><em>(string</em> <strong>pattern</strong>, <em>string</em> <strong>string</strong> <em>[, array</em> <strong>regs</strong><em>])</em>  </pre>
  </blockquote>
	  <p>Данная функция ищет в строке <strong>string</strong> соответствие   регулярному выражению, заданному в шаблоне <strong>pattern</strong>. Если соответствия   подвыражений с шаблоном будут найдены, то они сохраняются в массиве соответствий <strong>regs</strong>. При этом <strong>$regs</strong>[0] содержит копию строки string, <strong>$regs</strong>[1] содержит подстроку, начинающуюся с первой левой скобки, <strong>$regs</strong>[2] хранит подстроку, начинающуюся со второй левой скобки и т.д.</p>
	  <h3>ereg_replace()</h3>
	  <blockquote>
	    <pre>  <em>string</em> <strong>ereg_replace</strong><em>(string</em> <strong>pattern</strong>, <em>string</em> <strong>replacement</strong>, <em>string</em> <strong>string</strong><em>)</em>  </pre>
  </blockquote>
	  <p>Эта функция заменяет найденный в строке <strong>string</strong> шаблон <strong>pattern</strong> на строку <strong>replacement</strong> и, если соответствие было найдено,   возвращает модифицированную строку.</p>
	  <p><em>Одной из частых ошибок при замене числовых значений является   указание числа как типа, отличного от строкового, что приводит к неверному   результату. Синтаксис функции таков, что число обязательно должно быть записано   как строка.</em></p>
	  <h3>eregi()</h3>
	  <blockquote>
	    <pre>  <em>bool</em><strong> eregi</strong><em> (string</em> <strong>pattern</strong>, <em>string</em> <strong>string</strong>[, <em>array</em> <strong>regs</strong>]<em>)</em>  </pre>
  </blockquote>
	  <p>Эта функция идентична функции <strong>ereg</strong>, за исключением того,   что она игнорирует регистр.</p>
	  <h3>eregi_replace()</h3>
	  <blockquote>
	    <pre>  <em>string</em> <strong>eregi_replace</strong><em> (string</em><strong> pattern</strong>, <em>string</em><strong> replacement</strong>, <em>string</em><strong> string</strong><em>)</em>  </pre>
  </blockquote>
	  <p>Функция аналогична функции <strong>ereg_replace</strong>, за исключением   того, что она является нечувствительной к регистру.</p>
	  <h3>split()</h3>
	  <blockquote>
	    <pre>  <em>array </em><strong>split</strong><em> (string</em><strong> pattern</strong>, <em>string</em><strong> string</strong> [,<em> int</em><strong> limit</strong>]<em>)</em>  </pre>
  </blockquote>
	  <p>Эта функция возвращает массив строк, которые представляют собой   подстроки строки <strong>string</strong>, образованные в результате разделения строки   string на подстроки в соответствии с регулярным выражением <strong>pattern</strong>. Если   указан необязательный параметр <strong>limit</strong>, то в возвращаемом массиве будет не   больше limit элементов, последний из которых содержит неразделенную часть   строки.</p>
	  <p>Эта функция полезна при разделении дат, доменных имен и т.д.</p>
	  <h3>spliti()</h3>
	  <blockquote>
	    <pre>  <em>array</em> <strong>spliti</strong><em> (string</em><strong> pattern</strong>, <em>string</em><strong> string</strong> [,<em> int</em><strong> limit</strong>]<em>)</em>  </pre>
  </blockquote>
	  <p>Эта функция аналогична функции <strong>split</strong>, за исключением того,   что является нечувствительной к регистру.</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	   <a name=#perl>
	  <h4 class="style5">Perl-совместимые регулярные выражения</h4>
	  <p>PHP поддерживает ряд функций для работы с Perl-совместимыми   регулярными выражениями (PCRE - Perl Compatible Regular Expression). Такие   выражения заключаются в ограничители, в качестве которых, как правило,   используется прямой слеш:</p>
	  <blockquote>
	    <pre>/mail/  </pre>
  </blockquote>
	  <p>Это выражение соответствует строке, содержащей слово &quot;mail&quot;.</p>
	  <p>За ограничителями могут следовать <strong>модификаторы</strong>, уточняющие   регулярное выражение. Наиболее часто используют следующие модификаторы:</p>
	  <ul>
        <li><strong>i</strong> (Игнорировать регистр при поиске соответствия. Т. е. выражение   &quot;/mail/i&quot; будет соответствовать как строке &quot;MAIL&quot;, так и строке &quot;mail&quot;.); </li>
	    <li><strong>x</strong> (Игнорировать пробельные символы). </li>
  </ul>
	  <p>Для PCRE-выражений характерно применение <strong>общих типов   символов</strong>, которые аналогичны классам символов для регулярных выражений в   стиле POSIX. Наиболее часто встречающиеся общие типы символов приведены   ниже.</p>
	  <ul>
        <li><strong>\d</strong> - соответствие десятичной цифре </li>
	    <li><strong>\D</strong> - соответствие любому символу, за исключением десятичных цифр </li>
	    <li><strong>\s</strong> - соответствие пробельным символам </li>
	    <li><strong>\S</strong> - соответствие любым символам, кроме пробельных </li>
	    <li><strong>\h</strong> - наличие границы слова </li>
	    <li><strong>\B</strong> - отсутствие границы слова </li>
	    <li><strong>\Z</strong> - конец строки или символ перевода конца строки </li>
	    <li><strong>\A</strong> - начало строки </li>
  </ul>
	  <p>Теперь рассмотрим основные функции, которые есть в PHP для работы   с PCRE-выражениями.</p>
	  <h3>preg_match()</h3>
	  <blockquote>
	    <pre>  <em>int</em> <strong>preg_match</strong><em> (string</em><strong> pattern</strong>,<em> string</em><strong> subject</strong> [,<em> array</em><strong> matches</strong>]<em>)</em>  </pre>
  </blockquote>
	  <p>Эта функция ищет в строке <strong>subject</strong> соответствие регулярному   выражению <strong>pattern</strong>. Если задан необязательный параметр <strong>matches</strong>, то   результаты поиска помещаются в массив.</p>
	  <h3>preg_replace()</h3>
	  <blockquote>
	    <pre><em>mixed</em><strong> preg_replace</strong><em> (mixed </em><strong>pattern</strong>, <em>mixed</em><strong> replacement</strong>, <em>mixed </em><strong>subject</strong>                              [,<em>int</em><strong> limit</strong>]<em>)</em>  </pre>
  </blockquote>
	  <p>Эта функция ищет в строке <strong>subject</strong> соответствия регулярному   выражению <strong>pattern</strong>, и заменяет их на <strong>replacement</strong>. Необязательного   параметр <strong>limit</strong> задает число соответствий, которые надо заменить.</p>
	  <p>&nbsp;</p>
	  
</div>

</body>

</html>
