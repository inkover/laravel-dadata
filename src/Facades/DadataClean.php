<?php

namespace Fomvasss\Dadata\Facades;

use Fomvasss\Dadata\Response\Address;
use Fomvasss\Dadata\Response\Date;
use Fomvasss\Dadata\Response\Email;
use Fomvasss\Dadata\Response\Name;
use Fomvasss\Dadata\Response\Passport;
use Fomvasss\Dadata\Response\Phone;
use Fomvasss\Dadata\Response\Statistics;
use Fomvasss\Dadata\Response\Vehicle;

/**
 * @method Address cleanAddress(string $address) Стандартизация адресов (https://dadata.ru/api/clean/address/)
 * @method Phone cleanPhone(string $phone) Стандартизация телефонов (https://dadata.ru/api/clean/phone/)
 * @method Passport cleanPassport(string $passport) Стандартизация паспортов (https://dadata.ru/api/clean/passport/)
 * @method Name cleanName(string $name) Стандартизация ФИО (https://dadata.ru/api/clean/name/)
 * @method Email cleanEmail(string $email) Стандартизация ФИО (https://dadata.ru/api/clean/email/)
 * @method Date cleanDate(string $date) Стандартизация дат рождения (https://dadata.ru/api/clean/birthdate/)
 * @method Vehicle cleanVehicle(string $vehicle) Стандартизация марок автомобилей
 * @method Address detectAddressByIp(string $ip) Город по IP-адресу (https://dadata.ru/api/iplocate/)
 * @method float getBalance() Баланс счета
 * @method Statistics getStatistics(string $date = '') Статистика использования (https://dadata.ru/api/stat/)
 */
class DadataClean extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'dadata_clean';
    }
}
