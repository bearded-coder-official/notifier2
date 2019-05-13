<?php

namespace NtSchool\Notifier;

interface NotifierInterface
{
    public function notify(string $message);
}