<!DOCTYPE html>
<html>
<body>
<p id="num"></P>
<script>
var array=["one","two","three"];
document.getElementById("num").innerHTML=array;
function hello()
{
    array.push("three");
    
array.push("this is nice");
}
</script>
<button onclick="hello()">try it</button>
</body>
</html>
