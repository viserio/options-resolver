<?php
declare(strict_types=1);
namespace Viserio\Component\OptionsResolver\Tests\Fixture;

class OnlyIterator implements \Iterator
{
    /**
     * @var array
     */
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function current()
    {
        return \current($this->data);
    }

    public function next(): void
    {
        \next($this->data);
    }

    public function key()
    {
        return \key($this->data);
    }

    public function valid()
    {
        return \current($this->data);
    }

    public function rewind(): void
    {
        \reset($this->data);
    }
}