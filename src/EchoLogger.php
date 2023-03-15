<?php
namespace Gbleijenberg\Logger;

class EchoLogger implements ILogger
{

    public function logEntry(string $line): void
    {
        echo $line . "\n";
    }
}