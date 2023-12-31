<?php
$ma=$_POST["ma"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
require('connexion.php');
$conn=mysql_connect($server,$username,$password,$bd)or die("probleme de connxion au serveur ou ala base de donnees");
$sql="select*from patient where ma='$ma' and nom='$nom'and prenom='$prenom';";
$res=mysql_query($conn,$sql);
if (mysql_num_rows($res)==0)
   echo "Patient non inscrit";

   else{
    $sql="select*from patient where ma='$ma' and nom='$nom'and prenom='$prenom';";
    $res=mysql_query($sql)or die (mysql_error());
    if (mysql_num_rows()==1)
    echo " Patient deja inscrit ";

    else{
        $sql="insert into patient values ('$ma', '$nom','$prenom')";
        $res=mysql_query($sql)or die (mysql_error());
        if (mysqlaffected_rows()!=-1)
        echo "Patient avec success"
    
    }
}
mysql_close();
?>
