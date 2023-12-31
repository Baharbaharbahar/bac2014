<?php
$mat=$_POST["mat"];
$de=$_POST["de"];
$pr=$_POST["pr"];
require('connexion.php');
$conn=mysql_connect($server,$username,$password,$bd)or die("probleme de connxion au serveur ou ala base de donnees");
$sql="select*from consultation where mat='$mat' and de='$de'and pr='$pr';";
$res=mysql_query($conn,$sql);
if (mysql_num_rows($res)==0)
   echo "Matricule inexistonte";

   else{
    $sql="select*from co where mat='$mat' and de='$de'and pr='$pr';";
    $res=mysql_query($sql)or die (mysql_error());
    if (mysql_num_rows()==1)
    echo " Matricule n'exste pas dans la base ";

    else{
        $sql="insert into patient values ('$ma', '$nom','$prenom')";
        $res=mysql_query($sql)or die (mysql_error());
        if (mysqlaffected_rows()!=-1)
        echo "matricule avec success"
    
    }
}
mysql_close();
?>
