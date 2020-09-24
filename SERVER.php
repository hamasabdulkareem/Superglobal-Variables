
<?php
$Server = array('PHP_SELF',
'GATEWAY_INTERFACE',
'SERVER_ADDR',
'SERVER_NAME',
'SERVER_SOFTWARE',
'SERVER_PROTOCOL',
'REQUEST_METHOD',
'REQUEST_TIME',
'REQUEST_TIME_FLOAT',
'SCRIPT_NAME',
'REQUEST_URI',) ;

echo '<table cellpadding="10">' ;
foreach ($Server as $file) {
    if (isset($_SERVER[$file])) {
        echo '<tr><td>'.$file.'</td><td>' . $_SERVER[$file] . '</td></tr>' ;
    }
    else {
        echo '<tr><td>'.$file.'</td><td>-</td></tr>' ;
    }
}
echo '</table>' ;?>

