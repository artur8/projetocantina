<html>
<head>
<script>
function cpfRecarga(str) {
    if (str.length == 0) { 
       // document.getElementById("nome").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("nome").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "montaRecarga.php?q=" + str, true);
        xmlhttp.send();
    }
}

</script>
</head>
<body>

<form>
<select name="users" onchange="showUser(this.value)">
  <option value="">Select a person:</option>
  <option value="1">Peter Griffin</option>
  <option value="2">Lois Griffin</option>
  <option value="3">Joseph Swanson</option>
  <option value="4">Glenn Quagmire</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>

</body>
</html>