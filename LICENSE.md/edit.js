var editime=document.getElementById('editime');
var editprezime = document.getElementById('editprezime');
var editiznos = document.getElementById('editiznos');
var editkartica = document.getElementById('editkartica');
var id = document.getElementById('id');
var izmeni = document.getElementById('edit');
 console.log(izmeni);


var xml = new XMLHttpRequest();

izmeni.addEventListener('click', function(){
    var data = new FormData();
    data.append('id',id.value);
    data.append('editime', editime.value);
    data.append( 'editprezime', editprezime.value);
    data.append('editiznos', editiznos.value);
    data.append('editkartica', editkartica.value);
	xml.open('POST','editsql.php')
    xml.onreadystatechange = function(){
    	if(xml.readyState == 4 && xml.status == 200){
    		 
    	}
    }

    xml.send(data);
	window.location.replace("index.php");
});
