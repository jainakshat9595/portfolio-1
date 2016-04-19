function element(e) {
	return(document.getElementById(e));
}
function validateEmail(email) { 
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
function validatePhone(phone) { 
	var re = /^[2-9]{2}[0-9]{8}$/;
    return re.test(phone);
}
function setAlert(elem) {
	if(elem.nodeName == 'INPUT')
		elem.parentNode.className += " alert-focus";
	else if(elem.nodeName == 'TEXTAREA')
		elem.className += " alert-focus";
}
function setVer(elem) {
	if(elem.nodeName == 'INPUT')
		elem.parentNode.className += " veri-focus";
	else if(elem.nodeName == 'TEXTAREA')
		elem.className += " veri-focus";
}
function showMsg(msg,g) {
	if(g == 1)
		var elem = element('pErr');
	else
		var elem = element('cErr');
	elem.innerHTML = msg;
}
function fSubmit(a,b,c,d,e,f,g) {
	var a1 = element(a);
	var b1 = element(b);
	var c1 = element(c);
	var d1 = element(d);
	var e1 = element(e);
	var f1 = element(f);
	if(a1.value == null || a1.value == "") {
		setAlert(a1);
		showMsg('Please fill out necessary fields!',g);
	}
	else if(b1.value == null || b1.value == "") {
		setAlert(b1);
		showMsg('Please fill out necessary fields!',g);
	}
	else if(c1.value == null || c1.value == "") {
		setAlert(c1);
		showMsg('Please fill out necessary fields!',g);
	}
	else if(d1.value == null || d1.value == "") {
		setAlert(d1);
		showMsg('Please fill out necessary fields!',g);
	}
	else if(e1.value == null || e1.value == "") {
		setAlert(e1);
		showMsg('Please fill out necessary fields!',g);
	}
	else if(f1.value == null || f1.value == "") {
		setAlert(f1);
		showMsg('Please fill out necessary fields!',g);
	}
	else if(!validateEmail(c1.value)) {
		setAlert(c1);
		showMsg('Please enter a valid Email!',g);
	}
	else if(!validatePhone(d1.value)) {
		setAlert(c1);
		showMsg('Please enter a valid Phone Number!',g);
	}
	else {
		writeData(g, a1.value, b1.value, c1.value, d1.value, e1.value, f1.value);
	}

}
function check(e) {
	var elem = element(e);
	if(e == 'per-email' || e == 'com-email') {
		if(elem.value == null || elem.value == "" || !validateEmail(elem.value)) {
			setAlert(elem);
		}
		else {
			setVer(elem);
		}
	}
	else if (e == 'per-phone' || e == 'com-phone') {
		if(elem.value == null || elem.value == "" || !validatePhone(elem.value)) {
			setAlert(elem);
		}
		else {
			setVer(elem);
		}
	}
	else {
		if(elem.value == null || elem.value == "" ) {
			setAlert(elem);
		}
		else {
			setVer(elem);
		}
	}
}
function rem(e) {
	var elem = element(e);
	if(elem.nodeName == 'INPUT')
		elem.parentNode.className = "input-group";
	else if(elem.nodeName == 'TEXTAREA')
		elem.className = "form-control text-ar";
}