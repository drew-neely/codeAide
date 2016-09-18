

function runTests(test) {
	var passing = true;
	var expectEquals = function(a , b) {
		if(a != b) {
			passing = false;
		}
	}
	console.log("evaling " + document.getElementById("codeBox").value);
	eval(document.getElementById("codeBox").value);
	eval(test);
	if(passing) {
		document.getElementById("submitBtn").disabled = false;
	} else {
		document.getElementById("submitBtn").disabled = true;
	}
}