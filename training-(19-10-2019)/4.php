<!DOCTYPE html>
<html>
<body>
<button onclick="hello()">try it </button>
<p id="demo"></P>
<script>
var points=[10,5,20,8,4];
document.getElementById("demo").innerHTML=points;
function hello()
{
    points.sort(function(a,b){return b-a});
    document.getElementById("demo").innerHTML=points;
}
</script>
</body>
</html>