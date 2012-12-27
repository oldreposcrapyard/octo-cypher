<?php
include("octo-cypher.lib.php");
echo 'EncryptRot13:<br>';
$Octocypher = new octocypher("Thats fun!");
$Octocypher->EncryptRot13();
echo $Octocypher->Output();
?>