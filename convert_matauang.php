
    <?php
    $number = '100000';
    // format mata uang inggris (default)
    $english_format_number = number_format($number);
    echo "<br>".$english_format_number; // 1,235
    // format mata uang perancis
    $nombre_format_francais = number_format($number, 2, ',', ' ');
    echo "<br>".$nombre_format_francais; // 1 234,56
    //format mata uang indonesia
    $format_indonesia = number_format ($number, 2, ',', '.');
    echo "<br>".$format_indonesia; //1.234,56
    ?>
