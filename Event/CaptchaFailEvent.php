<?php


namespace Douglas\CaptchaBundle\Event;


use Symfony\Contracts\EventDispatcher\Event;

/**
 * Class CaptchaFailEvent
 * @package Douglas\CaptchaBundle\Event
 * Вызывается, если запрос к серверу капчи прошел с ошибкой
 */
class CaptchaFailEvent extends Event
{
    public const NAME = 'captcha.fail';

    private $response;

    public function __construct($response) {
        $this->response = $response;
    }

    public function getResponse() {
        return $this->response;
    }
}