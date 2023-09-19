<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
</head>
<body>

<a href="javascript:void(0)" onClick="updateId('1')">Id 1</a>
<a href="javascript:void(0)" onClick="updateId('2')">Id 2</a>
<a href="javascript:void(0)" onClick="updateId('3')">Id 3</a>

</body>
</html>

<script>
function updateId(id)
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            alert('successful');
        }
    };
    xmlhttp.open("GET", "like.php?id=" +id, true);
    xmlhttp.send();
}
</script>