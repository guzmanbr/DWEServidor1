<?




function compNombre(){
    $patron = '/^[A-Z]{1}[a-z]{2,}\s[A-Z]{1}[a-z]{2,}\s[A-Z]{1}[a-z]{2,}$/';
    if (preg_match($patron,$_REQUEST["nombre"])) {
        
    }
}