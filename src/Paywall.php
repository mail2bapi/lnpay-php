<?php

namespace LNPayClient;

/**
 * Class Paywall
 * @see https://docs.lnpay.co/lapps/paywall
 * @package LNPayClient
 */
class Paywall
{
    /**
     * @see https://docs.lnpay.co/lapps/paywall/create
     * @param array $params
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(array $params): string
    {
        return $this->setHeaders('X-LNPay-sdk', LNPayClient::showVersion())
            ->setHeaders('X-Api-Key', LNPayClient::getPublicApiKey())
            ->post(
                'paywall',
                $params
            );
    }
}
