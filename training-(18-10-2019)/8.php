<!DOCTYPE html>
<html>
<body>
<button onclick="hello()">try it</button>
<p id="num"></P>
<script>
var name=["Ajay","Banana","Anil"];
document.getElementById("num").innerHTML=name;
function hello()
{
    name.sort();
    name.reverse();
    document.getElementById("num").innerHTML=name;
}
</script>
</body>
</html>
