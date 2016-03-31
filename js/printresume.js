function printpdf() 
{
	var getIFrame = document.getElementById('iFramePrint');
	getIFrame.focus();
	getIFrame.contentWindow.print();
}
