function fun(val){
	if(val==1){	
		var fn = parseInt(document.getElementById("first").value)
		var sn = parseInt(document.getElementById("second").value)
		document.getElementById("result").value=fn+sn
	}

	if(val==2){
		var fn = parseInt(document.getElementById("first").value)
		var sn = parseInt(document.getElementById("second").value)
		document.getElementById("result").value=fn-sn
	}
	
	if(val==3){
		var fn = parseInt(document.getElementById("first").value)
		var sn = parseInt(document.getElementById("second").value)
		document.getElementById("result").value=fn*sn
	}

	if(val==4){
		var fn = parseInt(document.getElementById("first").value)
		var sn = parseInt(document.getElementById("second").value)
		document.getElementById("result").value=fn/sn
	}
}
