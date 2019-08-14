<?php 

$hash1=  '$2y$10$Gy.upGAKS8r7TWXnTJpPTeNVtp2E7D/BTD4HZy.RZS6ILps9yT/xi';
if (password_verify('ricardo', $hash1)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
$hash2=  '$2y$10$Gy.upGAKS8r7TWXnTJpPTeNVtp2E7D/BTD4HZy.RZS6ILps9yT/xi';
if (password_verify('teste2', $hash2)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}



?>