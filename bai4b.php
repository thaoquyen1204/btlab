<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>

<meta charset="utf-8">

<title> Simple Calculator using HTML, CSS and JavaScript </title>

<link rel="stylesheet" href="styles.css">

</head>

<body>

<table class = "calculator" >

<tr>

<td colspan = "5"> <input class = "display-box" type = "text" id = "result" disabled /> </td>

<!-- clearScreen() function clear all the values -->


</tr>

<tr>

<!-- display() function display the value of clicked button -->

<td> <input class = "button" type = "button" value = "MC" onclick = "display('MC')" /> </td>

<td> <input class = "button" type = "button" value = "MR" onclick = "display('MR')" /> </td>

<td> <input class = "button" type = "button" value = "MS" onclick = "display('MS')" /> </td>

<td> <input class = "button" type = "button" value = "M+" onclick = "display('M+')" /> </td>

<td> <input class = "button" type = "button" value = "M-" onclick = "display('M-S')" /> </td>

</tr>

<tr>

<td> <input class = "button" type = "button" value = "<-" onclick = "display('<-')" /> </td>

<td> <input class = "button" type = "button" value = "CE" onclick = "display('CE')" /> </td>

<td> <input class = "button" type = "button" value = "C" onclick = "display('C')" /> </td>

<td> <input class = "button" type = "button" value = "Sqrt" onclick = "display('Sqrt')" /> </td>

<td> <input class = "button" type = "button" value = "%" onclick = "display('%')" /> </td>

</tr>

<tr>

<td> <input class = "button" type = "button" value = "7" onclick = "display('7')" /> </td>

<td> <input class = "button" type = "button" value = "8" onclick = "display('8')" /> </td>

<td> <input class = "button" type = "button" value = "9" onclick = "display('9')" /> </td>

<td> <input class = "button" type = "button" value = "/" onclick = "display('/')" /> </td>

<td> <input class = "button" type = "button" value = "1/x" onclick = "display('1/x')" /> </td>

</tr>

<tr>

<td> <input class = "button" type = "button" value = "." onclick = "display('.')" /> </td>

<td> <input class = "button" type = "button" value = "0" onclick = "display('0')" /> </td>

<!-- calculate() function evaluate the mathematical expression -->

<td> <input class = "button" type = "button" value = "=" onclick = "calculate()" style = "background-color: #fb0066;" /> </td>

<td> <input class = "button" type = "button" value = "*" onclick = "display('*')" /> </td>

</tr>

</table>

<script type="text/javascript" src="script.js"></script>

</body>

</html>
