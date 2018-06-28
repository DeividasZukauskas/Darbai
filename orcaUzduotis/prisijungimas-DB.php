<?php
define('DB_PAVADINIMAS', 'php_comment');
define('DB_VARTOTOJAS', '');
define('DB_SLAPTAZODIS', '');
define('DB_HOST', 'localhost');

 $prisijungimas =  mysqli_connect( DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);

// nustatom mysql'ui   utf8 koduotę
// kad kai jis paims is DB duomenis - neuzkoduotu kazkaip kitaip
mysqli_set_charset($prisijungimas, "utf8"); // !!! utf8 - be bruksnelio


function getPrisijungimas() {
    global $prisijungimas; // paiimama global reiksme

    if ($prisijungimas == true) {
        return $prisijungimas;
    } else {
        echo "ERRROR: nepavyko prisijungti prie DB:"
                    . mysqli_connect_error() . " <BR />";
        return NULL;
    }
}
