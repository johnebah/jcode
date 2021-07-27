function toggle() {
	document.getElementById('parent').classList.toggle('display');
}

var a = 0;
function plus() {
a++;
document.getElementById('qty').value = a;
}
function minus() {

	a--;
	if (document.getElementById('qty').value==1) {
		document.getElementById('value')==1;
	}
	else{
	document.getElementById('qty').value = a;
}
	// if (c==) {}
}