function test(){
    var fname = document.getElementById("Name").value;
    var uemail = document.getElementById("email").value;
    var pnum = document.getElementById("phone").value;
    var uadhar = document.getElementById("adhar").value;
    var age = document.getElementById("age").value;
    var udate = document.getElementById("date").value;
    var uadress = document.getElementById("adress").value;


    var FirstName = localStorage.setItem("Name", fname);
    var userEmail = localStorage.setItem("uemail", uemail);
    var phone = localStorage.setItem("pnum", pnum);
    var userAdhar = localStorage.setItem("uadhar", uadhar);
    var userAge = localStorage.setItem("age", age);
    var userDate = localStorage.setItem("udate", udate);
    var userAdress = localStorage.setItem("uadress", uadress);

}