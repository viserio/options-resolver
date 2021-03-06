<?php

declare(strict_types=1);

/**
 * This file is part of Narrowspark Framework.
 *
 * (c) Daniel Bannert <d.bannert@anolilab.de>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Viserio\Component\OptionsResolver\Tests\Provider\Compiled;

/**
 * This class has been auto-generated by Viserio Container Component.
 */
final class OptionsResolverServiceProviderContainer extends \Viserio\Component\Container\AbstractCompiledContainer
{
    /**
     * {@inheritdoc}
     */
    protected $methodMapping = [
        'Symfony\Component\Console\CommandLoader\CommandLoaderInterface' => 'getce817e8bdc75399a693ba45b876c457a0f7fd422258f7d4eabc553987c2fbd31',
        'Viserio\Component\Console\Application' => 'get206058a713a7172158e11c9d996f6a067c294ab0356ae6697060f162e057445a',
        'Viserio\Component\OptionsResolver\Command\OptionDumpCommand' => 'get5a73c93dbe469f9f1fae0210ee64ef2ab32ed536467d0570a89353766859bb62',
        'Viserio\Component\OptionsResolver\Command\OptionReaderCommand' => 'get51bc2cdf2d87fcaa6a89ede54bc023ccfe784ddb4cc7a7e2be4ab3a7e9204471',
        'console.command.ids' => 'getdbce155f9c0e95dbd4bfbfaadab27eb79915789fa80c6c65068ccf60c9ef9e18',
    ];

    /**
     * {@inheritdoc}
     */
    protected $tags = [
        'console.command' => [
            0 => \Viserio\Component\OptionsResolver\Command\OptionDumpCommand::class,
            1 => \Viserio\Component\OptionsResolver\Command\OptionReaderCommand::class,
        ],
    ];

    /**
     * {@inheritdoc}
     */
    protected $aliases = [
        'Symfony\Component\Console\Application' => 'Viserio\Component\Console\Application',
        'cerebro' => 'Viserio\Component\Console\Application',
        'console' => 'Viserio\Component\Console\Application',
    ];

    /**
     * {@inheritdoc}
     */
    public function getRemovedIds(): array
    {
        return [
            'Psr\Container\ContainerInterface' => true,
            'Viserio\Contract\Container\Factory' => true,
            'Viserio\Contract\Container\TaggedContainer' => true,
        ];
    }

    /**
     * @return \Viserio\Component\Console\CommandLoader\IteratorCommandLoader
     */
    protected function getce817e8bdc75399a693ba45b876c457a0f7fd422258f7d4eabc553987c2fbd31(): \Viserio\Component\Console\CommandLoader\IteratorCommandLoader
    {
        return $this->services['Symfony\Component\Console\CommandLoader\CommandLoaderInterface'] = new \Viserio\Component\Console\CommandLoader\IteratorCommandLoader(new \Viserio\Component\Container\RewindableGenerator(function () {
            yield 'option:dump' => ($this->services['Viserio\Component\OptionsResolver\Command\OptionDumpCommand'] ?? $this->get5a73c93dbe469f9f1fae0210ee64ef2ab32ed536467d0570a89353766859bb62());

            yield 'option:read' => ($this->services['Viserio\Component\OptionsResolver\Command\OptionReaderCommand'] ?? $this->get51bc2cdf2d87fcaa6a89ede54bc023ccfe784ddb4cc7a7e2be4ab3a7e9204471());
        }, 2));
    }

    /**
     * @return \Viserio\Component\Console\Application
     */
    protected function get206058a713a7172158e11c9d996f6a067c294ab0356ae6697060f162e057445a(): \Viserio\Component\Console\Application
    {
        $this->services['Viserio\Component\Console\Application'] = $instance = new \Viserio\Component\Console\Application();

        $instance->setContainer($this);

        if ($this->has('Symfony\Component\Console\CommandLoader\CommandLoaderInterface')) {
            $instance->setCommandLoader(($this->services['Symfony\Component\Console\CommandLoader\CommandLoaderInterface'] ?? $this->getce817e8bdc75399a693ba45b876c457a0f7fd422258f7d4eabc553987c2fbd31()));
        }

        return $instance;
    }

    /**
     * @return \Viserio\Component\OptionsResolver\Command\OptionDumpCommand
     */
    protected function get5a73c93dbe469f9f1fae0210ee64ef2ab32ed536467d0570a89353766859bb62(): \Viserio\Component\OptionsResolver\Command\OptionDumpCommand
    {
        $this->services['Viserio\Component\OptionsResolver\Command\OptionDumpCommand'] = $instance = new \Viserio\Component\OptionsResolver\Command\OptionDumpCommand();

        $instance->setName('option:dump');

        return $instance;
    }

    /**
     * @return \Viserio\Component\OptionsResolver\Command\OptionReaderCommand
     */
    protected function get51bc2cdf2d87fcaa6a89ede54bc023ccfe784ddb4cc7a7e2be4ab3a7e9204471(): \Viserio\Component\OptionsResolver\Command\OptionReaderCommand
    {
        $this->services['Viserio\Component\OptionsResolver\Command\OptionReaderCommand'] = $instance = new \Viserio\Component\OptionsResolver\Command\OptionReaderCommand();

        $instance->setName('option:read');

        return $instance;
    }

    /**
     * @return array
     */
    protected function getdbce155f9c0e95dbd4bfbfaadab27eb79915789fa80c6c65068ccf60c9ef9e18(): array
    {
        return [];
    }
}
