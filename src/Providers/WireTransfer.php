<?php

/*
 * This file is part of Laravel Payment Details.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\PaymentDetails\Providers;

class WireTransfer extends Provider
{
    public function getFields()
    {
        return ['holder', 'bank', 'iban', 'bic'];
    }
}
