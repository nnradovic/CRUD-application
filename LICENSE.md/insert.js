/// INSERT USER ////

var ime = document.getElementById('ime');
var prezime = document.getElementById('prezime');
var iznos = document.getElementById('iznos');
var kartica = document.getElementById('kartica');
var dodaj = document.getElementById('insert');
console.log(ime.value,prezime.value,dodaj);
var xml = new XMLHttpRequest();

dodaj.addEventListener('click', function(){
    var data = new FormData();
    data.append('ime', ime.value);
    data.append( 'prezime', prezime.value);
    data.append('iznos', iznos.value);
    data.append('kartica', kartica.value);
	xml.open('POST','insertsql.php')
    xml.onreadystatechange = function(){
    	if(xml.readyState == 4 && xml.status == 200){
    		 
    	}
    }

    xml.send(data);
    window.location.replace("index.php");
	
});




