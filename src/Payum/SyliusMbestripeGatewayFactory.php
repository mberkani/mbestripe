<?php

declare(strict_types=1);

namespace Mberkani\SyliusMbestripePlugin\Payum;

use Payum\Core\Bridge\Spl\ArrayObject;
use Payum\Core\GatewayFactory;

final class SyliusMbestripeGatewayFactory extends GatewayFactory
{
    protected function populateConfig(ArrayObject $config): void
    {
        $config->defaults([
            'payum.factory_name' => 'sylius_payment',
            'payum.factory_title' => 'Sylius Payment',
        ]);

        $config['payum.api'] = function (ArrayObject $config) { return new SyliusApi($config['api_key']); };
    }
}
