<!DOCTYPE html>
<html>
<body>
<p id="num"></P>
<script>
var array=["one","two","three"];
document.getElementById("num").innerHTML=array;
function hello()
{
    array.push("four");
    document.getElementById("num").innerHTML=array;
}
</script>
<button onclick="hello()">try it</button>
</body>
</html>
