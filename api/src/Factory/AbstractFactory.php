<?php

namespace Siarko\Api\Factory;
abstract class AbstractFactory implements FactoryInterface
{
    /**
     * @param ObjectCreatorInterface $objectCreator
     */
    public function __construct(
        private readonly ObjectCreatorInterface $objectCreator
    )
    {
    }

    /**
     * Generic creation of new object
     * this method is used by every dynamically created factory
     * @param string $className
     * @param array $data
     * @return object
     */
    protected function _create(string $className, array $data = []): object{
        return $this->objectCreator->createObject($className, $data);
    }

}