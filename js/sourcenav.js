function displaySourceCode(show) {
	var codeWrapper = document.getElementById("code-wrapper");
	var preTags = codeWrapper.getElementsByTagName("pre");
	for (var i = 0, n = preTags.length; i < n; i++) {
		if (preTags[i].getAttribute('style') !== "display: none") {
			preTags[i].style.display="none";
		}
		document.getElementById(show).style.display="block";
	}
}
