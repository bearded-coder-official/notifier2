<?php

namespace NtSchool\Notifier\Adapter;

use NtSchool\Notifier\NotifierInterface;

final class MonologNotifierAdapter implements NotifierInterface
{
    /** @var \Monolog\Logger  */
    private $logger;

    public function __construct(\Monolog\Logger $logger)
    {
        $this->logger = $logger;
    }

    public function notify(string $message)
    {
        $this->logger->notice($message);
    }
}