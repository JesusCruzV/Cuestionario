<?php
$idu=$_GET['idu'];
if ($idu=="")
{
print"<meta http-equiv='refresh' content='0; url=index.php?msg=1'>";
exit;
}
else
{
setCookie('idu',$idu);
setCookie('acceso',1);
    print"<meta http-equiv='refresh' content='0;url=test'>";
    exit;
}


?>