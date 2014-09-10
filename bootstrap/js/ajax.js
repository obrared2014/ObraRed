var xmlhttp;
function loadDoc(string,url,cfunc)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=cfunc;
xmlhttp.open("POST",url,true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send(string);
}
//function myFunction(str)
//{
//loadDoc("q="+str,"Vista/proc.php",function()
//  {
//  if (xmlhttp.readyState===4 && xmlhttp.status===200)
//    {
//    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
//    }
//  });
//}
//
//function myFunction2(str)
//{
//loadDoc("r="+str,"Vista/proc2.php",function()
//  {
//  if (xmlhttp.readyState==4 && xmlhttp.status==200)
//    {
//    document.getElementById("myDiv2").innerHTML=xmlhttp.responseText;
//    }
//  });
//}
//
//function myFunction3(str)
//{
//loadDoc("k="+str,"Vista/proc3.php",function()
//  {
//  if (xmlhttp.readyState==4 && xmlhttp.status==200)
//    {
//    document.getElementById("myDiv3").innerHTML=xmlhttp.responseText;
//    }
//  });
//}
