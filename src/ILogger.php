<?php
namespace Gbleijenberg\Logger;

interface ILogger
{
    public function logEntry(string $line): void;
}