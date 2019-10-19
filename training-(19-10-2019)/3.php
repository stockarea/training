<!DOCTYPE html>
<html>
<body>
<button onclick="hi()">try it</button>
<p id="demo"></P>
<script>
var points=[10,20,30,100,45,1,5];
document.getElementById("demo").innerHTML=points;

function hi()
{
    points.sort(function(a, b){return a - b});
    document.getElementById("demo").innerHTML=points;
}

</script>
</body>
</html>