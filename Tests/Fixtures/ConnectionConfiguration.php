<?php
declare(strict_types=1);
namespace Viserio\Component\OptionsResolver\Tests\Fixtures;

use Viserio\Component\Contracts\OptionsResolver\RequiresComponentConfig as RequiresComponentConfigContract;

class ConnectionConfiguration implements RequiresComponentConfigContract
{
    /**
     * {@inheritdoc}.
     */
    public function getDimensions(): iterable
    {
        return ['doctrine', 'connection'];
    }
}
