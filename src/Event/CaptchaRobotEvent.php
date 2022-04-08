<?php


namespace Douglas\CaptchaBundle\Event;


use Symfony\Contracts\EventDispatcher\Event;

/**
 * Class CaptchaRobotEvent
 * @package Douglas\CaptchaBundle\Event
 * Вызывается, если капча определила пользователя как робота
 */
class CaptchaRobotEvent extends Event
{
    public const NAME = 'captcha.robot';

    private $response;

    public function __construct($response) {
        $this->response = $response;
    }

    public function getResponse() {
        return $this->response;
    }
}