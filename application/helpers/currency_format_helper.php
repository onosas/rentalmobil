<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('currency_format'))

{

    function currency_format($number)

    {

        return 'Rp '.number_format($number,2,',','.');

    }


    function idr_format($number)

    {

        return 'IDR '.number_format($number,2,',','.');

    }





}

// @onosas 2021