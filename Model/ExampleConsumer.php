<?php

namespace Rcason\MqExample\Model;

class ExampleConsumer implements \Rcason\Mq\Api\ConsumerInterface
{
    protected $logger;
    
    /**
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->logger = $logger;
    }
    
    /**
     * {@inheritdoc}
     */
    public function process($productId)
    {
        $this->logger->info('Product update processed: ' . $productId);
    }
}
