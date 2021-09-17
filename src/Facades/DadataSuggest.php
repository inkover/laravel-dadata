<?php

namespace Fomvasss\Dadata\Facades;

/**
 * @method mixed suggest(string $type, array $fields) «Подсказки» https://dadata.ru/suggestions/
 */
class DadataSuggest extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'dadata_suggest';
    }
}
