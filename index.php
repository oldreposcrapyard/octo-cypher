<?php include("octo-cypher.lib.php"); ?>
//this is just a quick test, to see if it works
</head>
<body>
        <?php
                 $stefan = new octocypher('lolownia');
                 $stefan->EncryptRot13();
                echo "Stefan's full name: " . $stefan->Output();
                 $stefan->Input('oT9fo3qhnJR=');
                 $stefan->DecryptRot13();
                echo "Nick's full name: " . $stefan->Output();
        ?>
</body>
</html> 