<?php

namespace Fomvasss\Dadata\Response;

class Email extends AbstractResponse
{
    /**
     * Корректное значение
     * Соответствует общепринятым правилам,
     * реальное существование адреса не проверяется
     */
    const QC_OK = 0;

    /**
     * Некорректное значение
     * Не соответствует общепринятым правилам
     */
    const QC_INVALID = 1;

    /**
     * Пустое или заведомо «мусорное» значение
     */
    const QC_EMPTY = 2;

    /**
     * «Одноразовый» адрес
     * Домены 10minutemail.com, getairmail.com, temp-mail.ru и аналогичные
     */
    const QC_DISPOSABLE = 3;

    /**
     * Исправлены опечатки
     */
    const QC_CORRECTED = 4;

    const TYPE_PERSONAL = 'PERSONAL'; // личный (@mail.ru, @yandex.ru)
    const TYPE_CORPORATE = 'CORPORATE'; // корпоративный (@myshop.ru)
    const TYPE_ROLE = 'ROLE'; // «ролевой» (info@, support@)
    const TYPE_DISPOSABLE = 'DISPOSABLE'; // одноразовый (@temp-mail.ru)

    /**
     * @var string Исходный email
     */
    public $source;
    
    /**
     * @var string Стандартизованный email
     */
    public $email;

    /** @var string Локальная часть адреса (то, что до «собачки») */
    public $local;

    /** @var string Домен (то, что после «собачки»)  */
    public $domain;

    /** @var string Тип адреса */
    public $type;

    public function __toString()
    {
        return (string) $this->email;
    }
}
