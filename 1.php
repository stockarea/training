<!DOCTYPE html>
<html>
<body>
<button onclick="hi()">try it</button>
<p id="demo"></P>
<script>
var names=["balaji","ajay","karthick"];
document.getElementById("demo").innerHTML=name;

function hi() {
  names.push("Kiwi");
  document.getElementById("demo").innerHTML = names;
}
</script>
</body>
</html>