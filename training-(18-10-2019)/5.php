<!DOCTYPE html>
<html>
<body>
<p id="num"></P>
<script>
var words,text,name,i;
 name=["ajay","sam","karthik","peter"];
words=name.length;
text="<ul>";
for(i=0;i<words;i++){
    text +="<li>"+name[i]+"</li>";
}
text +="</ul>";
document.getElementById("num").innerHTML=text;
</script>
</body>
</html>
