<?php


namespace Bluem\BluemPHP\Helpers;


class BluemCurrencies {
    public static function Euro(): BluemCurrency { return new BluemCurrency("EUR"); }
    public static function USDollar(): BluemCurrency { return new BluemCurrency("USD"); }
}
