<?php

namespace Fomvasss\Dadata\Response;

class Phone extends AbstractResponse
{
    /**
     * Телефон распознан уверенно
     */
    const QC_OK = 0;

    /**
     * Телефон пустой или заведомо «мусорный»
     */
    const QC_EMPTY = 2;

    /**
     * Телефон распознан с допущениями или не распознан
     */
    const QC_INVALID = 1;

    /**
     * Обнаружено несколько телефонов, распознан первый
     */
    const QC_MULTIPLE = 3;

    /**
     * Телефон соответствует адресу
     */
    const QC_CONFLICT_OK = 0;

    /**
     * Города адреса и телефона отличаются
     */
    const QC_CITY_MISMATCH = 2;

    /**
     * Регионы адреса и телефона отличаются
     */
    const QC_REGION_MISMATCH = 3;

    const TYPE_MOBILE = 'Мобильный'; // +7 911 243-45-68
    const TYPE_FIXED = 'Стационарный'; // +7 495 456-55-77
    const TYPE_DIRECT = 'Прямой мобильный'; // +7 495 243-45-68
    const TYPE_CALL_CENTER = 'Колл-центр'; // 8 800 222-12-22
    const TYPE_UNKNOWN = 'Неизвестный'; // +7 333 1111112

    /**
     * @var string Исходный телефон одной строкой
     */
    public $source;

    /**
     * @var string Тип телефона
     */
    public $type;

    /**
     * @var string Стандартизованный телефон одной строкой
     */
    public $phone;

    /**
     * @var integer Код страны
     */
    public $country_code;

    /**
     * @var integer Код города / DEF-код
     */
    public $city_code;

    /**
     * @var integer Локальный номер телефона
     */
    public $number;

    /**
     * @var string Добавочный номер
     */
    public $extension;

    /**
     * @var string Оператор связи (только для России)
     */
    public $provider;

    /**
     * @var string Страна
     */
    public $country;

    /**
     * @var string Регион (только для России)
     */
    public $region;

    /**
     * @var string Город (только для стационарных телефонов)
     */
    public $city;

    /**
     * @var string Часовой пояс
     */
    public $timezone;

    /**
     * @var integer Признак конфликта телефона с адресом (see QC_CONFLICT_* constants)
     */
    public $qc_conflict;

    public function __toString()
    {
        return (string) $this->phone;
    }
}
