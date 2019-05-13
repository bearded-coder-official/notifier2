<?php

namespace NtSchool\Notifier\Adapter;

use NtSchool\Notifier\NotifierInterface;

final class TelegramBotNotifierAdapter implements NotifierInterface
{
    /** @var \TelegramBot\Api\BotApi */
    private $bot;

    private $chatId;

    public function __construct(\TelegramBot\Api\BotApi $bot, $chatId)
    {
        $this->chatId = $chatId;
        $this->bot = $bot;
    }

    public function notify(string $message)
    {
        $this->bot->sendMessage($this->chatId, $message);
    }
}