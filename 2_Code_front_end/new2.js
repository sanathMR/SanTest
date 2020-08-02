function validate()
{
 usn=document.getElementById("i1").value;
 name=document.getElementById("i2").value;
 email=document.getElementById("i3").value;
 phno=document.getElementById("i4").value;
 res1=usn.search(/([1-4])([a-z]{2})(\d{2})([a-z]{2})(\d{3})/i);
 res2=name.search(/[A-Z]+/i);
 res3=email.search(/[a-zA-Z0-9@._]+/i);
 res4=phno.search(/[0-9]{10}/i);

 
 if(res1!=-1 && res2!=-1 &&res3!=-1 &&res4!=-1)
 {
   return true;
 }
else
 {
  alert("Enter valid details");
   return false;
 }




}