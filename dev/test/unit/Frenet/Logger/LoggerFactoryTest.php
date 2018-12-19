<?php

declare(strict_types = 1);

namespace FrenetTest\Logger;

use FrenetTest\TestCase;

/**
 * Class LoggerFactoryTest
 *
 * @package FrenetTest\Logger
 */
class LoggerFactoryTest extends TestCase
{
    /**
     * @var \Frenet\Logger\LoggerFactory
     */
    private $object;
    
    protected function setUp()
    {
        $this->object = $this->createObject(\Frenet\Logger\LoggerFactory::class);
    }
    
    /**
     * @test
     */
    public function getLogger()
    {
        $this->assertInstanceOf(\Psr\Log\LoggerInterface::class, $this->object->getLogger('test_logger'));
        
        $this->expectException(\ArgumentCountError::class);
        $this->object->getLogger();
    }
}