<!DOCTYPE html>
<html>
<body>
<p id="demo"></P>
<script>
var numbers=[10,18,45,40,100];
var two=numbers.filter(hello);
document.getElementById("demo").innerHTML=two;
function hello(value,array,index)
{
    return value >18;
}
</script>
</body>
</html>