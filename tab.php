<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="tab.css">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/tab.js"></script>
</head>
<body>
<?php

$ymd = "2000-October-2";
 
//Convert it into a timestamp.
$timestamp = strtotime($ymd);
 
//Convert it to DD-MM-YYYY
$dmy = date("YYYY-MM-DD", $timestamp);
 
//Echo it echo $timestamp;
//
echo strtotime($ymd);
?>
</body>
</html>
<script>

var tabButtons=document.querySelectorAll(".tabContainer .buttonContainer button");
var tabPanels=document.querySelectorAll(".tabContainer .tabPanel");

function showPanel(panelIndex, colorCode){
	tabButtons.forEach(function(node) {
		node.style.backgroundColor="";
		node.style.color="";
		
	});

	tabButtons[panelIndex].style.backgroundColor=colorCode;
	tabButtons[panelIndex].style.color="white";
	tabPanels.forEach(function(node){
			node.style.display="none";
	});
	tabPanels[panelIndex].style.display="block";
	tabPanels[panelIndex].style.backgroundColor=colorCode;
}

	showPanel(0, '#f44336');

</script>