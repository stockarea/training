<!DOCTYPE html>
<html>
<body>
<p id="demo"></P>
<script>
var numbers=[10,20,10,20];
var one=numbers.reduce(hello);
document.getElementById("demo").innerHTML=one;
function hello(total,value)
{
    return total+value;
}
</script>
</body>
</html>