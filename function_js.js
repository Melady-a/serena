// JavaScript Document
function Checkz90()
{

var m=document.all.mz90.value;
var n=document.all.nz90.value;


if( (isNaN(m)==true) || (isNaN(n)==true)  ||(m=="") ||(n==""))
{
alert("Vvedite chislo!");
return false;
}

else
{
if( m-parseInt(m)>0 || n-parseInt(n)>0 )
{
alert("Chisla m i n doljni bit selimi!");
return false;
}
else
{
return true;
}
}


}
function Checkz89()
{

var m=document.all.mz89.value;
var n=document.all.nz89.value;


if( (isNaN(m)==true) || (isNaN(n)==true)  ||(m=="") ||(n==""))
{
alert("Vvedite chislo!");
return false;
}

else
{
if( m-parseInt(m)>0 || n-parseInt(n)>0 )
{
alert("Chisla m i n doljni bit selimi!");
return false;
}
else
{
return true;
}
}


}
function Checkz36()
{
var n=document.all.az36.value;
var m=document.all.bz36.value;
var l=document.all.cz36.value;


if((isNaN(n)==true) || (isNaN(m)==true) || (isNaN(l)==true) || (n=="") ||(m=="") || (l=="") )
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}


}
function Checkz35()
{
var n=document.all.xz35.value;
var m=document.all.yz35.value;
var l=document.all.zz35.value;


if((isNaN(n)==true) || (isNaN(m)==true) || (isNaN(l)==true) || (n=="") ||(m=="") || (l=="") )
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}


}
function Checkz34()
{
var n=document.all.xz34.value;
var m=document.all.yz34.value;
var l=document.all.zz34.value;


if((isNaN(n)==true) || (isNaN(m)==true) || (isNaN(l)==true) || (n=="") ||(m=="") || (l=="") )
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}


}
function Checkz33()
{
var n=document.all.az33.value
var m=document.all.bz33.value
if(isNaN(n)==true || isNaN(n)==true || (n=="") ||(m=="")  )
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}
}