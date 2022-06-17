// JavaScript Document
function Checkz76()
{
var k=document.all.kz76.value;
var l=document.all.lz76.value;
var m=document.all.mz76.value;
var n=document.all.nz76.value;


if((isNaN(n)==true) || (isNaN(m)==true) || (isNaN(l)==true) || (isNaN(k)==true) || (n=="") ||(m=="") || (l=="") ||(k==""))
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}
}
function Checkz71()
{
var a=document.all.az71.value

if(isNaN(a)==true )
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}
}
function Checkz72()
{
var a=document.all.az72.value

if(isNaN(a)==true )
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}
}
function Checkz54()
{
var n=document.all.x1z54.value;
var m=document.all.x2z54.value;
var l=document.all.x3z54.value;
var n2=document.all.y1z54.value;
var m2=document.all.y2z54.value;
var l2=document.all.y3z54.value;

if((isNaN(n)==true) || (isNaN(m)==true) || (isNaN(l)==true) ||(isNaN(n2)==true) || (isNaN(m2)==true) || (isNaN(l2)==true)||  (n=="") ||(m=="") || (l=="")|| (n2=="") ||(m2=="") || (l2=="") )
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}
}
function Checkz84()
{
var n=document.all.nz84.value;
var x=document.all.xz84.value;

if(isNaN(n)==true || isNaN(x)==true || n=="" || x=="" )
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}
}
function Checkz83()
{
var a=document.all.az83.value

if(isNaN(a)==true )
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}
}
function Checkz82()
{
var x=document.all.xz82.value

if(isNaN(x)==true )
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}
}
function Checkz81()
{
var n=document.all.nz81.value;
var a=document.all.az81.value;
var x=document.all.xz81.value

if(isNaN(n)==true || isNaN(a)==true || isNaN(x)==true  )
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}
}
function Checkz80()
{
var x=document.all.xz80.value

if(isNaN(x)==true )
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}
}
function Checkz78()
{
var n=document.all.nz78.value;
var a=document.all.az78.value;

if(isNaN(n)==true || isNaN(a)==true )
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}
}
function Checkz77()
{
var n=document.all.nz77.value

if(isNaN(n)==true )
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}
}
function Checkz75()
{
var n=document.all.nz75.value

if(isNaN(n)==true )
{
alert("Vvedite chislo!");
return false;
}
else
{
if (n<=7)
{
alert("chislo doljno bit >=7 !");
return false;
}
else
{
return true;
}
}
}
function Checkz73()
{

var k=document.all.kz73.value;
var l=document.all.lz73.value;


if( (isNaN(k)==true) || (isNaN(l)==true)  ||(k=="") ||(l==""))
{
alert("Vvedite chislo!");
return false;
}

else
{
if( k-parseInt(k)>0 || l-parseInt(l)>0 )
{
alert("Chisla k i l doljni bit selimi!");
return false;
}
else
{
return true;
}
}


}
function Checkz70()
{

var m=document.all.mz70.value;
var n=document.all.nz70.value;


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
else if( m < 0 || m > 12 || n < 0 || n >= 60)
{
alert("Vvedite 0<m<=12 i 0<=n<60 !");
return false;
}
else
{
return true;
}
}


}
function Checkz69()
{
var f=document.all.fz69.value

if(isNaN(f)==true )
{
alert("Vvedite chislo!");
return false;
}
else
{

//alert(parseInt(n));
if(f<0 || f>360)
{
alert("Vvedite f>0 i f<360!");
return false;
}
else
{

return true;
}
}
}
function Checkz66()
{
var x=document.all.xz66.value;
var y=document.all.yz66.value;
var z=document.all.zz66.value;
var k=document.all.kz66.value;
var m=document.all.mz66.value;


if((isNaN(x)==true) || (isNaN(y)==true) || (isNaN(z)==true) || (isNaN(k)==true) || (isNaN(m)==true) || (x=="") ||(y=="") || (z=="") ||(k=="") ||(m==""))
{
alert("Vvedite chislo!");
return false;
}

else
{
if( m-parseInt(m)>0 || k-parseInt(k)>0 )
{
alert("Chisla k i m doljni bit selimi!");
return false;
}
else
{
return true;
}
}


}
function Checkz65()
{
var n=document.all.nz65.value

if(isNaN(n)==true )
{
alert("Vvedite chislo!");
return false;
}
else
{
if (n>=99)
{
alert("chislo doljno bit >= 99!");
return false;
}
else
{
return true;
}
}
}
function Checkz64()
{
var n=document.all.nz64.value

if(isNaN(n)==true )
{
alert("Vvedite chislo!");
return false;
}
else
{
if (n<=99)
{
alert("chislo doljno bit bolshe 99!");
return false;
}
else
{
return true;
}
}
}
function Checkz63()
{
var n=document.all.az63.value;
var m=document.all.bz63.value;
var l=document.all.rz63.value;
var k=document.all.sz63.value;


if((isNaN(n)==true) || (isNaN(m)==true) || (isNaN(l)==true) || (isNaN(k)==true) || (n=="") ||(m=="") || (l=="") ||(k==""))
{
alert("Vvedite chislo!");
return false;
}

else
{
if( l-parseInt(l)>0 || k-parseInt(k)>0 || l<=0 || k<=0 )
{
alert("Chisla r i s doljni bit selimi i  polojitelnimi!");
return false;
}
else
{
return true;
}
}


}
function Checkz62()
{
var n=document.all.az62.value

if(isNaN(n)==true )
{
alert("Vvedite chislo!");
return false;
}
else
{

//alert(parseInt(n));
if(n-parseInt(n)>0)
{
alert("Vvedite seloe chislo!");
return false;
}
else
{

return true;
}
}
}
function Checkz61()
{
var n=document.all.xz61.value

if(isNaN(n)==true )
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}
}
function Checkz58()
{
var n=document.all.az58.value;



if((isNaN(n)==true) || (n=="") )
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}


}
function Checkz57()
{
var n=document.all.az57.value;



if((isNaN(n)==true) || (n=="") )
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}


}
function Checkz56()
{
var n=document.all.az56.value;
var m=document.all.bz56.value;
var l=document.all.cz56.value;
var n2=document.all.xz56.value;
var m2=document.all.yz56.value;



if((isNaN(n)==true) || (isNaN(m)==true) || (isNaN(l)==true) ||(isNaN(n2)==true) || (isNaN(m2)==true) ||  (n=="") ||(m=="") || (l=="")|| (n2=="") ||(m2=="")  )
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}


}
function Checkz55()
{
var n=document.all.az55.value;
var m=document.all.bz55.value;
var l=document.all.cz55.value;
var k=document.all.dz55.value;


if((isNaN(n)==true) || (isNaN(m)==true) || (isNaN(l)==true) || (isNaN(k)==true) || (n=="") ||(m=="") || (l=="") ||(k==""))
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}


}

function Checkz53()
{
var n=document.all.az53.value;
var m=document.all.bz53.value;
var l=document.all.cz53.value;
var n2=document.all.dz53.value;
var m2=document.all.ez53.value;
var l2=document.all.fz53.value;
var k=document.all.gz53.value;
var w=document.all.hz53.value;
if((isNaN(n)==true) || (isNaN(m)==true) || (isNaN(l)==true) ||(isNaN(n2)==true) || (isNaN(m2)==true) || (isNaN(l2)==true)|| (isNaN(m)==true)|| (isNaN(w)==true)|| (n=="") ||(m=="") || (l=="")|| (n2=="") ||(m2=="") || (l2=="") || (k=="") || (w==""))
{
alert("Vvedite chislo!");
return false;
}
else
{
if(m2==k && l2==w)
{
alert("Koordinati tochek doljni bit raznimi");
return false;
}
if (((n-m2)*(w-l2)-(m-l2)*(k-m2))==0 || ((l-m2)*(w-l2)-(n2-l2)*(k-m2))==0 )
{
alert("tochki (a,b) i (c,d) ne doljni lejat na pryamoy l");
return false;
}
return true;
}


}
function Checkz52()
{
var n=document.all.az52.value;
var m=document.all.bz52.value;
var l=document.all.cz52.value;
var n2=document.all.dz52.value;
var m2=document.all.sz52.value;
var l2=document.all.tz52.value;
var k=document.all.uz52.value;

if((isNaN(n)==true) || (isNaN(m)==true) || (isNaN(l)==true) ||(isNaN(n2)==true) || (isNaN(m2)==true) || (isNaN(l2)==true)|| (isNaN(m)==true)|| (n=="") ||(m=="") || (l=="")|| (n2=="") ||(m2=="") || (l2=="") || (k=="") )
{
alert("Vvedite chislo!");
return false;
}
else
{
if(m2==0 && l2==0)
{
alert("s i t odnovremenno ne doljni bit == 0");
return false;
}
if (m2*n+l2*m+4==0 || m2*l+l2*n2+4==0)
{
alert("tochki (a,b) i (c,d) ne doljni lejat na pryamoy l");
return false;
}
return true;
}


}
function Checkz51()
{
var n=document.all.az51.value;
var m=document.all.bz51.value;
var l=document.all.cz51.value;


if((isNaN(n)==true) || (isNaN(m)==true) || (isNaN(l)==true) || (n=="") ||(m=="") || (l=="") )
{
alert("Vvedite chislo!");
return false;
}
else
{
if(n==0)
{
alert("Vvedite a != 0");
return false;
}
return true;
}


}
function Checkz50()
{
var n=document.all.a1z50.value;
var m=document.all.b1z50.value;
var l=document.all.c1z50.value;
var n2=document.all.a2z50.value;
var m2=document.all.b2z50.value;
var l2=document.all.c2z50.value;


if((isNaN(n)==true) || (isNaN(m)==true) || (isNaN(l)==true) ||(isNaN(n2)==true) || (isNaN(m2)==true) || (isNaN(l2)==true)||  (n=="") ||(m=="") || (l=="")|| (n2=="") ||(m2=="") || (l2=="") )
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}


}
function Checkz49()
{
var n=document.all.hz49.value;



if((isNaN(n)==true) || (n=="") )
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}


}
function Checkz48()
{
var n=document.all.az48.value;
var m=document.all.bz48.value;
var l=document.all.cz48.value;


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
function Checkz47()
{
var n=document.all.xz47.value;
var m=document.all.yz47.value;
var l=document.all.zz47.value;


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
function Checkz46()
{
var n=document.all.xz46.value
var m=document.all.yz46.value
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
function Checkz45()
{
var n=document.all.az45.value;
var m=document.all.bz45.value;
var l=document.all.cz45.value;
var k=document.all.dz45.value;


if((isNaN(n)==true) || (isNaN(m)==true) || (isNaN(l)==true) || (isNaN(k)==true) || (n=="") ||(m=="") || (l=="") ||(k==""))
{
alert("Vvedite chislo!");
return false;
}
else
{
return true;
}


}
function Checkz44()
{
var n=document.all.xz44.value;
var m=document.all.yz44.value;
var l=document.all.zz44.value;


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
function Checkz43()
{
var n=document.all.xz43.value;
var m=document.all.yz43.value;
var l=document.all.zz43.value;


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
function Checkz42()
{
var n=document.all.xz42.value
var m=document.all.yz42.value
if(isNaN(n)==true || isNaN(n)==true || (n=="") ||(m=="")  )
{
alert("Vvedite chislo!");
return false;
}
else
{
if (n==m)
{
alert("Vvedite x != y");
 return false;
}
return true;
}
}
function Checkz41()
{
var n=document.all.az41.value;
var m=document.all.bz41.value;
var l=document.all.cz41.value;


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
function Checkz40()
{
var n=document.all.xz40.value
var m=document.all.yz40.value
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
function Checkz39()
{
var n=document.all.xz39.value
var m=document.all.yz39.value
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
function Checkz38()
{
var n=document.all.xz38.value
var m=document.all.yz38.value
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
function Checkz37()
{
var n=document.all.az37.value;
var m=document.all.bz37.value;
var l=document.all.cz37.value;


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