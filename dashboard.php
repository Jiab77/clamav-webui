<?php
if (isset($f3, $params)) {
    echo '<pre>' . PHP_EOL;
    var_dump($f3->get('ROUTES'), $params);
    echo '</pre>' . PHP_EOL;
}
elseif (isset($f3) && !isset($params)) {
    echo '<pre>' . PHP_EOL;
    var_dump($f3->get('ROUTES'), $params);
    echo '</pre>' . PHP_EOL;
}
