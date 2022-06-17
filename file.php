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
    <td class="mtd"><a href="function.php" class="a style4"  style="text-decoration:none"> Функции  </a></td>
  </tr>
  <tr>
    <td height="41" class="mtd"><a href="expression.php"  class="a style4"  style="text-decoration:none" >Регулярные выражения  </a></td>
  </tr>
    <tr>
    <td height="37" class="mtd"><a href="phpsql.php"  class="a style4"  style="text-decoration:none" >PHP и MySQL. Совместная работа  </a></td>
  </tr>
</table>
<table width="268" border="0" bordercolor="#CC6699"  style="position:fixed; width: 241px; left: 14px; top: 476px; height: 244px;" >
  <tr>
    <td width="260" height="25" class="mtd"><a href="file.php#open"  class="style7"  style="text-decoration:none">Открытие файлов</a></td>
  </tr>
  <tr>
    <td height="25" class="mtd"><a href="file.php#show"  class="style7"  style="text-decoration:none">Отображение файлов</a></td>
  </tr>
  <tr>
    <td height="25" class="mtd"><a href="file.php#close"  class="style7"  style="text-decoration:none">Закрытие файлов</a></td>
  </tr>
  <tr>
    <td height="25" class="mtd"><a href="file.php#read"  class="style7"  style="text-decoration:none">Чтение из файлов и запись в файлы</a></td>
  </tr>
    <tr>
    <td height="30" class="mtd"><a href="file.php#copy"  class="style7"  style="text-decoration:none">Копирование, переименование и удаление файлов</a></td>
  </tr>
    <tr>
    <td height="25" class="mtd"><a href="file.php#atribut"  class="style7"  style="text-decoration:none">Атрибуты файлов</a></td>
  </tr>
    <tr>
    <td height="25" class="mtd"><a href="file.php#move"  class="style7"  style="text-decoration:none">Перемещение по файлам</a></td>
  </tr>
    <tr>
    <td height="25" class="mtd"><a href="file.php#cat"  class="style7"  style="text-decoration:none">Работа с каталогами</a></td>
  </tr>
    <tr>
    <td height="25" class="mtd"><a href="file.php#put"  class="style7"  style="text-decoration:none">Методы PUT и POST</a></td>
  </tr>
 
 
</table>

<div class="pclass" style="position:absolute; left: 268px; top: 176px; width: 686px; height: 302px;">
  <h4 align="center" class="style4"> Работа с файлами </h4>
  <a name=#open>
  <h4 class="style5">Открытие файлов</h4>
  <p><strong>Файл</strong> представляет собой последовательность байтов,   хранящуюся на каком-либо физическом носителе информации. Каждый файл имеет   абсолютный путь, по которому определяется его местонахождение. В качестве   разделителя пути в Windows может использоваться как прямой (/), так и обратный   (\) слеш. В других операционных системах используется только прямой слеш.</p>
  <p>Открытие файлов в файловой системе сервера производится при помощи   функции <strong>fopen</strong>:</p>
  <blockquote>
    <pre>  <em>int</em> <strong>fopen</strong>(<em>string</em> <strong>filename</strong>, <em>string</em> <strong>mode</strong> <em>[, int</em> <strong>use_include_path</strong><em>])</em>  </pre>
  </blockquote>
  <p>Первый аргумент <strong>filename</strong> - имя файла или абсолютный путь к   нему. Если абсолютный путь не указывается, то файл должен находится в текущем   каталоге.</p>
  <p>Второй аргумент <strong>mode</strong> говорит о том, для каких действий   открывается файл и может принимать следующие значения:</p>
  <ul>
    <li><em>r</em> (Открыть файл только для чтения; после открытия   указатель файла устанавливается в начало файла); </li>
    <li><em>r+</em> (Открыть файл для чтения и записи; после открытия   указатель файла устанавливается в начало файла); </li>
    <li><em>w</em> (Создать новый пустой файл только для записи; если файл   с таким именем уже есть вся информация в нем уничтожается); </li>
    <li><em>w+</em> (Создать новый пустой файл для чтения записи; если файл   с таким именем уже есть вся информация в нем уничтожается); </li>
    <li><em>a</em> (Открыть файл для дозаписи; данные будут записываться в   конец файла); </li>
    <li><em>a+</em> (Открыть файл для дозаписи и чтения данных; данные   будут записываться в конец файла); </li>
    <li><em>b</em> (Флаг, указывающий на работу (чтение и запись) с   двоичным файлом; указывается только в Windows). </li>
  </ul>
  <p>Третий необязательный аргумент <strong>use_include_path</strong> определяет   должны ли искаться файлы в каталоге <strong>include_path</strong>. (Параметр <strong>include_path</strong> устанавливается в файле php.ini).</p>
  <p>В случае удачного открытия файла, функция <em>fopen</em> возвращает дескриптор файла, в случае неудачи - <em>false</em>. <strong>Дескриптор файла</strong> представляет собой указатель на открытый файл, который   используется операционной системой для поддержки операций с этим файлом.   Возвращенный функцией дескриптор файла необходимо затем указывать во всех   функциях, которые в дальнейшем будут работать с этим файлом.</p>
  <blockquote>&nbsp;
  </blockquote>
    <a name=#show>
  <h4 class="style5">Отображение файлов</h4>
 <br>
  <p>Содержимое открытого файла можно отобразить в браузере с помощью   функции <strong>fpassthru</strong>:</p>
  <blockquote>
    <pre>  <em>int</em> <strong>fpassthru</strong> <em>(int</em> <strong>file</strong><em>)</em>  </pre>
  </blockquote>
  <p>Аргумент <strong>file</strong> представляет собой дескриптор файла.</p>
  <blockquote>
    <pre><em>&lt;?</em>    <strong>$file</strong> <em>=</em> <strong>fopen</strong><em>(</em>&quot;c:/www/html/pavlovo.jpg&quot;,&quot;rb&quot;<em>);  
  if(</em>!<strong>file</strong><em>)      {        
echo(</em>&quot;Ошибка открытия файла&quot;<em>);    
  }      else    
  {       
 </em><strong>fpassthru</strong><em>(</em><strong>$file</strong><em>);    
  }</em>  <em>?&gt;</em>  </pre>
  </blockquote>
  <p>Для текстовых файлов существует еще одна функция отображения <strong>readfile</strong>:</p>
  <blockquote>
    <pre>  <strong>readfile</strong> <em>(string</em> <strong>filename</strong><em>)</em>  </pre>
  </blockquote>
  <p>Обращаем ваше внимание на то, что в качестве аргумента эта функция   принимает имя файла, а не его дескриптор:</p>
  <blockquote>
    <pre><em>&lt;?</em>    <strong>readfile</strong> <em>(</em>&quot;file.txt&quot;<em>);</em>  <em>?&gt;</em>  </pre>
  </blockquote>
  <a name=#close>
     <h4 class="style5">Закрытие файлов</h4>
 <br>
 <p>После того, как вы закончите работу с файлом его необходимо   закрыть. Закрытие файлов осуществляется с помощью функции <strong>fclose</strong>:</p>
 <blockquote>
   <pre>  <em>int</em> <strong>fclose</strong> <em>(int</em> <strong>file</strong><em>)</em>  </pre>
 </blockquote>
 <p>Аргумент <strong>file</strong> представляет собой дескриптор файла, который   необходимо закрыть.</p>
 <a name=#read>
 <h4 class="style5">Чтение из файлов</h4>
 <br>
 <p>Прочитать строку из открытого файла можно с помощью функции <strong>fread</strong>:</p>
 <blockquote>
   <pre>  <em>string</em> <strong>fread</strong> <em>( int</em> <strong>file</strong>, <em>int</em> <strong>length</strong><em> )</em>  </pre>
 </blockquote>
 <p>Эта функция возвращает строку длиной <strong>length</strong> символов из   файла с дескриптором <strong>file</strong>. </p>
 <p>Для чтения из файла можно также пользоваться функцией <strong>fgets</strong>:</p>
 <pre><blockquote>     <em>string</em> <strong>fgets</strong> <em>( int</em> <strong>file</strong>, <em>int</em> <strong>length</strong><em>)</em>  </blockquote>
 </pre>
 <blockquote></blockquote>
 <p>Эта функция читает и возвращает строку длиной <strong>length - 1</strong> байт. Чтение прекращается, когда достигнута новая строка или конец файла. При   достижении конца файла функция возвращает пустую строку.</p>
 <p>Для чтения файла с удалением из него тегов HTML применяется   функция <strong>fgetss</strong>:</p>
 <pre><blockquote>     <em>string</em> <strong>fgetss</strong> <em>(int</em> <strong>file</strong>, <em>int</em> <strong>length</strong> <em>[, string</em> <strong>allowable_tags</strong><em>])</em>  </blockquote>
 </pre>
 <blockquote></blockquote>
 <p>Необязательный третий параметр <strong>allowable_tags</strong> может   содержать строку со списком тегов, которые не должны быть отброшены, при этом   теги в строке записываются через запятую. </p>
 <p>Если необходимо записать содержимое файла в массив, применяется   функция <strong>file</strong>:</p>
 <pre><blockquote>     <em>array</em> <strong>file</strong> <em>(string</em> <strong>filename</strong> <em>[, int</em> <strong>use_include_path</strong><em>])</em>  </blockquote>
 </pre>
 <blockquote></blockquote>
 <p>Функция считывает файл с именем <strong>filename</strong> и возвращает   массив, каждый элемент которого соответствует строке в прочитанном файле. </p>
 <p>Для чтения файлов с расширением <em>*.csv</em> применяется функция <strong>fgetcsv</strong>:</p>
 <blockquote>
   <pre>  <em>array</em> <strong>fgetcsv</strong> <em>( int</em> <strong>file</strong>, <em>int</em> <strong>length</strong>, <em>char</em> <strong>delim</strong><em>)</em>  </pre>
 </blockquote>
 <p>Функция читает строку из файла и разбивает ее по символу <strong>delim</strong>. Параметр delim должен обязательно быть строкой из одного символа,   иначе принимается во внимание только первый символ этой строки. Функция   возвращает получившийся массив или false, если достигнут конец файла. Пустые   строки в файле не игнорируются, а возвращаются как массив из одного элемента -   пустой строки. Параметр <strong>length</strong> задает максимальную длину строки точно так   же, как это делается в функции <strong>fgets</strong>. </p>
 <p>Формат CSV является одним из форматов, в котором может сохранять   файлы MSExcel. В следующем примере производится чтение созданного MSExcel файла   file.csv, содержащего пароли пользователей.</p>
 
 <p >Запись в файлы</p>
 <p>Запись в файлы осуществляется функциями <strong>fputs</strong> и <strong>fwrite</strong>, которые абсолютно идентичны:</p>
 <blockquote>
   <pre>  <em>int</em> <strong>fputs</strong> <em>( </em>int <strong>file</strong>, <em>string</em> <strong>string</strong> <em>[, int</em> <strong>length </strong><em>])</em>    
<em>int</em> <strong>fwrite</strong> <em>( </em>int <strong>file</strong>, <em>string</em> <strong>string</strong> <em>[, int</em> <strong>length </strong><em>])</em>  </pre>
 </blockquote>
 <p>Первый аргумент - дескриптор файла, в который осуществляется   запись. Второй аргумент представляет собой строку, которая должна быть записана   в файл. Третий необязательный аргумент задает количество символов в строке,   которые должны быть записаны. Если третий аргумент не указан, записывается вся   строка.</p>
 <p>&nbsp;</p>

  <a name=#copy>
 <h4 class="style5">Копирование, переименование и удаление файлов</h4>
 <p class="pclass">Копирование файлов осуществляется функцией copy:

  int copy ( string file1, string file2)

Функция копирует файл с именем file1 в файл с именем file2. Если файл file2 на момент копирования существовал, то он перезаписывается.

Переименование файла производится с помощью функции rename:

  int rename ( string old, string new)

Эта функция переименовывает файл с именем old в файл с именем new.

Функция rename не выполняет переименования файла, если его новое имя расположено в другой файловой системе.

Удаление файла осуществляется посредством функции unlink:


  int unlink ( string filename)

</p>
 <a name=#atribut>
 <h4 class="style5">Атрибуты файлов</h4>
 
   <p>Для получения дополнительной информации об атрибутах файла вы   можете воспользоваться перечисленными ниже функциями.</p>
   <p>Функция <strong>file_exists</strong> проверяет, существует ли файл и   возвращает true, если файл существует и false в противном случае:</p>
   <blockquote>
     <pre>  <em>bool</em> <strong>file_exists</strong> <em>( string</em> <strong>filename</strong><em>)</em>  </pre>
   </blockquote>
   <p>Функция <strong>fileatime</strong> возвращает время последнего обращения к   файлу:</p>
   <blockquote>
     <pre>  <em>int</em> <strong>fileatime</strong> <em>( string</em> <strong>filename</strong><em>)</em>  </pre>
   </blockquote>
   <p>Функция <strong>filemtime</strong> возвращает время последней модификации   содержимого файла:</p>
   <blockquote>
     <pre>  <em>int</em> <strong>filemtime</strong> <em>( string</em> <strong>filename</strong><em>)</em>  </pre>
   </blockquote>
   <p>Функция <strong>file_size</strong> возвращает размер файла в байтах:</p>
   <blockquote>
     <pre>  <em>int</em> <strong>file_size</strong> <em>( string</em> <strong>filename</strong><em>)</em>  </pre>
   </blockquote>
   <p>Функция <strong>file_type</strong> возвращает тип файла:</p>
   <blockquote>
     <pre>  <em>string</em> <strong>file_type</strong> <em>( string</em> <strong>filename</strong><em>)</em>  </pre>
   </blockquote>
   <p>Строка, возвращаемая этой функцией, содержит один из следующих   типов файла:</p>
   <ul>
     <li>char (специальное символьное устройство); </li>
     <li>dir (каталог); </li>
     <li>fifo (именованный канал); </li>
     <li>link (символическая ссылка); </li>
     <li>block (специальное блочное устройство); </li>
     <li>file (обычный файл); </li>
     <li>unknown (тип не установлен). </li>
   </ul>
   <p>Поскольку использование функций, возвращающих характеристики   файла, весьма ресурсоемко, во избежание потери производительности при вызовах   таких функций, PHP кэширует информацию о файле. Очистить этот кэш можно с   помощью функции <strong>clearstatcache</strong>:</p>
   <blockquote>
     <pre><em>&lt;?</em>    <strong>clearstatcache</strong><em>();</em>  <em>?&gt;</em></pre>
   </blockquote>
   <a name=#move>
   <h4 class="style5">Перемещение по файлам</h4>
     <p>При чтении данных из файла указатель текущей позиции перемещается   к очередному непрочитанному символу. Существует несколько функций, с помощью   которых можно управлять положением этого указателя.</p>
     <p>Установка указателя текущей позиции в начало файла производится   функцией <strong>rewind</strong>:</p>
     <blockquote>
       <pre>  <em>int</em> <strong>rewind</strong> <em>( int</em> <strong>file</strong><em>)</em>  </pre>
     </blockquote>
     <p>Аргумент <strong>file</strong> является дескриптором файла.</p>
     <p>Узнать текущее положение указателя можно при помощи функции <strong>ftell</strong>:</p>
     <blockquote>
       <pre>  <em>int</em> <strong>ftell</strong> <em>( int</em> <strong>file</strong><em>)</em>  </pre>
     </blockquote>
     <p>Установить указатель в любое место файла можно, используя функцию <strong>fseek</strong>:</p>
     <blockquote>
       <pre>  <em>int</em> <strong>fseek</strong> <em>( int</em> <strong>file</strong>, <em>int</em> <strong>offset</strong> <em>[, int</em> <strong>whence</strong><em> ])</em>  </pre>
     </blockquote>
     <p>Функция <strong>fseek</strong> устанавливает указатель файла на байт со   смещением <strong>offset</strong> (от начала файла, от его конца или от текущей позиции, в <strong>зависимости от значения параметра whence</strong>). Аргумент <strong>file</strong> представляет собой дескриптор файла. Аргумент <strong>whence</strong> задает с какого   места отсчитывается смещение <strong>offset</strong> и может принимать одно из следующих   значений:</p>
     <ul>
       <li><strong>SEEK_SET</strong> (отсчитывает позицию начала файла); </li>
       <li><strong>SEEK_CUR</strong> (отсчитывает позицию относительно текущего положения   указателя); </li>
       <li><strong>SEEK_END</strong> (отсчитывает позицию относительно конца файла). </li>
     </ul>
     <p>По умолчанию аргумент <strong>whence</strong> имеет значение SEEK_SET.</p>
     <p>Узнать, находится ли указатель в конце файла, можно с помощью   функции <strong>feof</strong>:</p>
     <blockquote>
       <pre>  <em>int</em> <strong>feof</strong> <em>( int</em> <strong>file</strong><em>)</em>  </pre>
     </blockquote>
     <p>Если указатель находится в конце файла, функция возвращает <strong>true</strong>, в ином случае возвращается false.</p>
	 <a name=#cat>
     <h4 class="style5">Работа с каталогами</h4>
     <p>Для установки текущего каталога применяется функция <strong>chdir</strong>:</p>
	 <blockquote>
	   <pre>  <em>int</em> <strong>chdir</strong> <em>( string</em> <strong>directory</strong><em>)</em>  </pre>
  </blockquote>
	 <p>Работать с этой функцией можно следующим образом:</p>
	 <ul>
       <li><strong>chdir</strong><em>(</em>&quot;/tmp/data&quot;<em>);</em><em> // переход по абсолютному пути</em> </li>
	   <li><strong>chdir</strong><em>(</em>&quot;./js&quot;<em>);</em><em> //   переход в подкаталог текущего каталога</em> </li>
	   <li><strong>chdir</strong><em>(</em>&quot;..&quot;<em>);</em><em> //   переход в родительский каталог</em> </li>
	   <li><strong>chdir</strong><em>(</em>&quot;~/data&quot;<em>);</em><em> // переходим в /home/пользователь/data (для Unix)</em> </li>
  </ul>
	 <p>Чтобы узнать текущий каталог можно воспользоваться функцией <strong>getcwd</strong>:</p>
	 <blockquote>
	   <pre>  <em>string</em> <strong>getcwd</strong> <em>( string</em> <strong>path</strong><em>)</em>  </pre>
  </blockquote>
	 <p>Для того чтобы открыть каталог используется функция <strong>opendir</strong>, открывающая каталог, заданный параметром path:</p>
	 <blockquote>
	   <pre>  <em>int</em> <strong>opendir</strong> <em>( string</em> <strong>path</strong><em>)</em>  </pre>
  </blockquote>
	 <p>После того, как каталог открыт, прочитать его можно функцией <strong>readdir</strong>:</p>
	 <blockquote>
	   <pre>  <em>string</em> <strong>readdir</strong> <em>( int</em> <strong>dir</strong><em>)</em>  </pre>
  </blockquote>
	 <p>Эта функция возвращает имена элементов, содержащихся в каталоге.   Кроме файлов и папок в каталогах находятся также элементы &quot;.&quot; и &quot;..&quot;. Первый   элемент указывает на текущий каталог, а второй - на родительский. Текущий   каталог, кстати, можно открыть, указав его имя как &quot;.&quot;:</p>
	 <blockquote>
	   <pre>   <strong>$dir</strong><em> =</em> <strong>opendir</strong> <em>(</em>&quot;.&quot;<em>);</em>  </pre>
  </blockquote>
	 <p>После того, как работа с каталогом закончена, его нужно закрыть.   Закрытие каталога выполняется при помощи функции <strong>closedir</strong>:</p>
	 <blockquote>
	   <pre>  <em>void</em> <strong>closedir</strong> <em>(</em><strong>$dir</strong><em>)</em>  </pre>
  </blockquote>
  <a name=#put>
    <h4 class="style5">Методы PUT и POST</h4>
	  <p><br />
</p>
    
	  <p>Методы HTTP PUT и HTTP POST предназначены для загрузки файлов на   сервер.</p>
	  <p>Протокол HTTP предоставляет три метода для работы с информацией,   находящейся на Web-сервере: GET, PUT и POST. Метод GET применяется для получения   Web-страниц, при этом все переменные формы передаются в URL. Поскольку на многих   Web-серверах установлено ограничение на максимальную длину URL (как правило, не   более 1024), не стоит применять метод GET, если требуется передача данных   большего объема.</p>
	  <p>Метод PUT применяется для обновления информации на сервере, и   требует, чтобы содержимое запроса HTTP PUT сохранялось на сервере. Запрос   выглядит таким образом:</p>
	  <blockquote>
	    <pre>   PUT /path/filename.html HTTP/1.1  </pre>
  </blockquote>
	  <p>В этом случае Web-сервер должен сохранить содержимое этого запроса   в виде /path/filename.html в пространстве имен URL Web-сервера. По умолчанию сам   Web-сервер не выполняет такие запросы, а задает CGI-сценарий для их обработки. В   Apache назначить сценарий для обработки PUT-запросов, можно изменив директиву   Script, находящуюся в файле httpd.conf, к примеру, так:</p>
	  <blockquote>
	    <pre>   Script PUT /cgi-bin/put.cgi  </pre>
  </blockquote>
	  <p>Это означает, что обрабатывать PUT-запросы будет CGI-скрипт   put.cgi.</p>
	  <p>Как правило, для загрузки файлов на сервер используют метод HTTP   POST. Этот метод позволяет передавать большие объемы данных из формы и сохраняет   все переменные формы в теле запроса.</p>
	  <a name=#examples>
 <h4 class="style5">&nbsp;</h4>
</div>

</body>

</html>
