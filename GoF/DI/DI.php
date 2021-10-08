<?php

interface MessageEngine
{
    public function send();
}

class SendEmail implements MessageEngine
{
    public function send()
    {
        echo 'send email success' . PHP_EOL;
    }
}

class SendSMS implements MessageEngine
{
    public function send()
    {
        echo 'send sms success' . PHP_EOL;
    }
}

class User
{
    private $msgEngine = null;

    public function __construct(MessageEngine $engine)
    {
        $this->msgEngine = $engine;
    }

    public function sendMsg()
    {
        return $this->msgEngine->send();
    }
}

$user = new User(new SendEmail());
$user->sendMsg();
$user = new User(new SendSMS());
$user->sendMsg();