<?php
$greeting = new class {
    public function message()
    {
        echo "Hello from Anonymous Class!";
    }
};
$greeting->message();
