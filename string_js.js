// JavaScript Document
function Checkz88()
{
var n=document.all.nz88.value

if(isNaN(n)==true || n=="" )
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}
}
function Checkz87()
{
var n=document.all.nz87.value;
var m=document.all.mz87.value;

if(isNaN(n)==true || isNaN(m)==true || n=="" || m=="")
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}
}

function Checkz68()
{
var n=document.all.nz68.value

if(isNaN(n)==true || n=="")
{
alert("Vvedite chislo!");
return false;
}
else
{
if (n>9999)
{
alert("chislo doljno bit <=9999!");
return false;
}
else
{
return true;
}
}
}
function Checkz67()
{
var n=document.all.nz67.value

if(isNaN(n)==true  || n=="" )
{
alert("Vvedite chislo!");
return false;
}
else
{

//alert(parseInt(n));
if(n>100)
{
alert("Vvedite n<=100 ");
return false;
}
else
{

return true;
}
}
}
function Checkz86()
{
var n=document.all.nz86.value

if(isNaN(n)==true || n=="")
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}
}
function Checkz74()
{
var n=document.all.nz74.value

if(isNaN(n)==true || n=="" )
{
alert("Vvedite chislo!");
return false;
}
else
{
if (n>=100)
{
alert("chislo doljno bit <=100!");
return false;
}
else
{
return true;
}
}
}