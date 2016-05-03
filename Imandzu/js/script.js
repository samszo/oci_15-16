
function choix(form1)
{
	with(window.document.form1)
	{
		
		
	alert(" Confirmation adresse Mail : " + email.value);
	
	
	}//fin de with
	
}


function showStuff(id) {

    document.getElementById(id).style.display = 'none';	
}


function showStuff2(id) {

    document.getElementById(id).style.display = 'block';
		
}

function addRow(elmt, value1, value2)
{

    var tr = document.createElement('tr');   

    var td1 = document.createElement('td');
    var td2 = document.createElement('td');

    var text1 = document.createTextNode(value1);
    var text2 = document.createTextNode(value2);

    td1.appendChild(text1);
    td2.appendChild(text2);
    tr.appendChild(td1);
    tr.appendChild(td2);

    elmt.appendChild(tr);

}

