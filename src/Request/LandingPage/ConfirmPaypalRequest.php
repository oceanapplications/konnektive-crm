<?php

namespace Konnektive\Request\LandingPage;


use Konnektive\Request\Request;

/**
 * Class ImportClickRequest
 * @link https://api2.konnektive.com/docs/click_import/
 * @package Konnektive\Request\LandingPage
 *
 * @property string $loginId Api Login Id provided by Konnektive
 * @property string $password Api password provided by Konnektive
 * @property string $token Paypal EC Token
 * @property string $payerId Paypal Payer ID
 * @property string $sessionId sessionId returned by a previous import click call
 * @property string $orderId Konnektive Order ID 
 * @property int $product1_id campaign product Id (found on campaign page)
 * @property int $product1_qty quantity of product in order, defaults to quantity of 1 if not set
 * @property double $product1_price if set this will override the default price as setup in Konnektive CRM
 * @property double $product1_shipPrice if set this will override the default shipping price as setup in Konnektive CRM
 * @property string $campaignId Konnektive hexidecimal campaignId for which the order is being placed.
 * @property string paypalBillerId The MID of your paypal configured merchant
 */
class ConfirmPaypalRequest extends Request
{
    protected $endpointUri = "/transactions/confirmPaypal";

    protected $rules = [
        'loginId' => 'required|max:32',
        'password' => 'required|max:32',
        'token' => 'required|max:32',
        'payerId' => 'required|max:32',
        'sessionId' => 'max:32',
        'orderId' => 'max:30',        
        'product1_id' => 'required|numeric',
        'product1_qty' => 'numeric',
        'product1_price' => 'numeric',
        'product1_shipPrice' => 'numeric',
        'campaignId' => 'required|int',
    ];
}