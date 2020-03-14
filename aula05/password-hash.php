<?php
    // aplicando criptografia na string rasmuslerdorf com a constante PASSWORD_DEFAULT
    echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
    
    echo "<br>";

    // aplicando criptografia na string rasmuslerdorf com a constante PASSWORD_BCRYPT
    echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT);

?>