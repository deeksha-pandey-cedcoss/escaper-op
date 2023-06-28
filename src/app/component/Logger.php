<?php
// escaper class
use Phalcon\Logger;
use Phalcon\Di\Injectable;



class logg
{

    public function sanitize($data)
    {
 return $this->logger;
        // return $this->escaper->escapeHtml($data);
    }
}
$errLogger = new ErrorLogger();
$type = "info";
$message = 'Unauthorized access attempt by : email => \''
    . $arr['uname'] . '\' password => \'' . $arr['password'] . '\'';

$errLogger->logError($type, $message);

echo "Invalid credentials";
die;
}
}
}

class ErrorLogger extends Controller
{
public function logError($type, $message)
{
$this->logger
->$type($message);
}
}