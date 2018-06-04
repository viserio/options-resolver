<?php
declare(strict_types=1);
namespace Viserio\Component\OptionsResolver\Tests\Fixture;

use Viserio\Component\OptionsResolver\Traits\OptionsResolverTrait;

class OptionsResolver
{
    use OptionsResolverTrait;

    protected static $configClass;

    protected static $data;

    public function configure($configClass, $data): self
    {
        self::$configClass = \get_class($configClass);
        self::$data        = $data;

        return $this;
    }

    public function resolve(string $configId = null): array
    {
        return self::resolveOptions(self::$data, $configId);
    }

    /**
     * {@inheritdoc}
     */
    protected static function getConfigClass(): string
    {
        return self::$configClass;
    }
}