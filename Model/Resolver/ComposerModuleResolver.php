<?php

namespace BeterSport\ComposerModuleResolver\Model\Resolver;

use Magento\Catalog\Api\AttributeSetRepositoryInterface;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;


class VideoURLResolver implements ResolverInterface
{
    /**
     * @var AttributeSetRepositoryInterface
     */
    private $setRepository;

    public function __construct(AttributeSetRepositoryInterface $setRepository)
    {
        $this->setRepository = $setRepository;
    }

    public function resolve(Field $field, $context, ResolveInfo $info, array $value = null, array $args = null)
    {
        return true;
        
    }
}