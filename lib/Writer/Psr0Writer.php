<?php
namespace Goetas\Xsd\XsdToPhp\Writer;

abstract class Psr0Writer
{

    protected $namespaces = array();

    public function __construct(array $namespaces)
    {
        $this->namespaces = $namespaces;

        foreach ($this->namespaces as $namespace => $dir) {
            if (! is_dir($dir)) {
                throw new WriterException("The folder '$dir' does not exist.");
            }
            if (! is_writable($dir)) {
                throw new WriterException("The folder '$dir' is not writable.");
            }
        }
    }
}