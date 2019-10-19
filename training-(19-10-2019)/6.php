<!DOCTYPE html>
<html>
<body>
<p id="demo"></P>
<script>
var txt="";
var numbers=[10,45,20,1];
numbers.forEach(hello);
document.getElementById("demo").innerHTML=txt;
function hello(value,index,array)
{
    txt=txt+value +"<br>";
}
</script>
</body>
</html>