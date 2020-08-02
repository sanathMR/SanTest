function validate()
{
 usn=document.getElementById("i2").value;
 res3=usn.search('ADMIN');
 res1=usn.search(/([1-4])([a-z]{2})(\d{2})([a-z]{2})(\d{3})/i);


 if(res2==-1 && res3==-1)
 {
    alert("Enter valid details");
   return false;
 }
else
 {
   return true;
 }




}

function val1()
{
 usn=document.getElementById("i1").value;
 res1=usn.search(/([1-4])([a-z]{2})(\d{2})([a-z]{2})(\d{3})/i);


 if(res1==-1)
 {
    alert("Enter valid details");
   return false;
 }
else
 {
   return true;
 }




}