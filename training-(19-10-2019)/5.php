<!DOCTYPE html>
<html>
<body>
<p id="demo"></P>
<script>
var points=[20,10,100,40,50];
points.sort(function(a,b){return b-a});
document.getElementById("demo").innerHTML=points[0];
</script>
</body>
</html>