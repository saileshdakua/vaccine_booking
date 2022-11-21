function test(){
    var fname = document.getElementById("Name").value;
    var uemail = document.getElementById("email").value;
    var pcode = document.getElementById("code").value;
    var pnum = document.getElementById("phone").value;
    var uadhar = document.getElementById("adhar").value;
    var age = document.getElementById("age").value;
    var udate = document.getElementById("date").value;
    var upass = document.getElementById("pass").value;
    var ugender = document.getElementById("gender").value;
    var uadress = document.getElementById("adress").value;
    


    var FirstName = localStorage.setItem("Name", fname);
    var userEmail = localStorage.setItem("uemail", uemail);
    var phcode = localStorage.setItem("pcode", pcode);
    var phone = localStorage.setItem("pnum", pnum);
    var userAdhar = localStorage.setItem("uadhar", uadhar);
    var userAge = localStorage.setItem("age", age);
    var userDate = localStorage.setItem("udate", udate);
    var userpass = localStorage.setItem("upass", upass);
    var usersex = localStorage.setItem("ugender",ugender);
    var userAdress = localStorage.setItem("uadress", uadress);


}


function myFunction() {
   
    let x = document.getElementById("phone").value;
    
    let text;
    let phoneno=/^\d{10}$/; 
    if (isNaN(x) || !phoneno.test(x)) {
      text = "Phone No. is invalid";
    } else {
      text = "Phone is Valid";
    }
    document.getElementById("demo").innerHTML = text;
  }

  function myFunctionn() {
    
    let y = document.getElementById("adhar").value;
    
    let textt;
    let adhar=/^[2-9]{1}[0-9]{3}[0-9]{4}[0-9]{4}$/ ; 
    if (isNaN(y) || !adhar.test(y)) {
      textt = "INVALID AADHAR NO";
    } else {
      textt = "VALID ADHAR No";
    }
    document.getElementById("demoo").innerHTML = textt;
  }



   




