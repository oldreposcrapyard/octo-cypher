octo-cypher
===========

A class with many text cyphers

Cyphers naming convention
===========

Every method starts with either "Encrypt" or "Decrypt" and then comes the cypher name.

For example:
```
<?php
include("octo-cypher.lib.php");
$Octocypher = new octocypher("Thats fun!");
$Octocypher->EncryptRot13();
echo $Octocypher->Output();
?>
```

Currently available cyphers:
===========
* Rot13

Feel free to use my work, as long as you give credit.