<!DOCTYPE html>
<html>
<head>
<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "ajaxkeywords.php?q="+str, true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form> 
<!--First name: <input type="text" onkeyup="showHint(this.value)">-->
<select onchange="showHint(this.value)">
    <option value="">Select</option>
    <option value="a">a</option>
    <option value="n">n</option>
</select>
</form>
<p>Suggestions: <span id="txtHint"></span></p>
</body>
</html>