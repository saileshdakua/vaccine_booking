window.onload = function() {
    document.getElementById('first').innerText = localStorage.getItem('Name');
    document.getElementById('second').innerText = localStorage.getItem('uemail');
    document.getElementById('third').innerText = localStorage.getItem('pnum');
    document.getElementById('fourth').innerText = localStorage.getItem('uadhar');
    document.getElementById('fifth').innerText = localStorage.getItem('age');
    document.getElementById('sixth').innerText = localStorage.getItem('udate');
    document.getElementById('seventh').innerText = localStorage.getItem('uadress');

};