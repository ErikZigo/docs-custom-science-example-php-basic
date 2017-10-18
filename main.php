<?php

require "vendor/autoload.php";

echo "ahoj"
exit(0);


try {

} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
    exit(1);
} catch (\Throwable) {
    echo $e->getMessage();
    exit(2);
}
