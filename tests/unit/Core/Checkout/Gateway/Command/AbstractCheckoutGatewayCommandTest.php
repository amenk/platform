<?php declare(strict_types=1);

namespace Shopware\Tests\Unit\Core\Checkout\Gateway\Command;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Shopware\Core\Checkout\Gateway\Command\AbstractCheckoutGatewayCommand;
use Shopware\Core\Checkout\Gateway\Command\RemoveShippingMethodCommand;
use Shopware\Core\Framework\Log\Package;

/**
 * @internal
 */
#[CoversClass(AbstractCheckoutGatewayCommand::class)]
#[Package('checkout')]
class AbstractCheckoutGatewayCommandTest extends TestCase
{
    public function testCreateFrom(): void
    {
        $command = RemoveShippingMethodCommand::createFromPayload(['shippingMethodTechnicalName' => 'test']);

        static::assertSame('test', $command->shippingMethodTechnicalName);
    }
}
