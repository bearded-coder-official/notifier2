<?php

namespace NtSchool\Notifier\Adapter;

use NtSchool\Notifier\NotifierInterface;

final class PhpMailerNotifierAdapter implements NotifierInterface
{
    /** @var \Monolog\Logger  */
    private $mailer;

    public function __construct(\PHPMailer\PHPMailer\PHPMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function notify(string $message)
    {
        $this->mailer->Body = $message;
        $this->mailer->send();
    }
}