// reset form
var uf = document.getElementById('upload_form');
var btn = document.getElementById('die_button');
var lilFrm = document.getElementById('lil_form');
var idCon = document.getElementById('id_content');
var ja = document.getElementById('ye_uploaded');

function geza() {
    geza.reset();
}

function vulaImage() {
	lilFrm.style.display = 'block';
	idCon.style.backgroundColor = '#fff';
	btn.click();
}

function makeMagic() {
	var x = btn.files;
	if (btn.files.length == 0 ) {
		ja.innerHTML = "No file selected";
	}else {
		ja.innerHTML = "&#x2714; Uploaded ";
		ja.style.backgroundColor = "#1ed71e";
		ja.style.color = "#fff";
		ja.style.margin = "0 25% 5% 25%";
		ja.style.borderRadius = "30px";
		ja.style.padding = "1.5%";
	}
}























