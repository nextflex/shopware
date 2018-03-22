<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Symfony\Bundle\SecurityBundle\SecurityBundle::class => ['all' => true],
    Symfony\Bundle\MonologBundle\MonologBundle::class => ['all' => true],
    Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle::class => ['all' => true],
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],
    Doctrine\Bundle\DoctrineCacheBundle\DoctrineCacheBundle::class => ['all' => true],
    Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle::class => ['all' => true],
    Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle::class => ['all' => true],
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true, 'test' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Shopware\Framework\Framework::class => ['all' => true],
    Shopware\Version\Version::class => ['all' => true],
    Shopware\Rest\Rest::class => ['all' => true],
    Shopware\Api\Api::class => ['all' => true],
    Shopware\Cart\Cart::class => ['all' => true],
    Shopware\CartBridge\CartBridge::class => ['all' => true],
    Shopware\Context\Context::class => ['all' => true],
    Shopware\Administration\Administration::class => ['all' => true],
    Shopware\Translation\Translation::class => ['all' => true],
    Shopware\Filesystem\Filesystem::class => ['all' => true],
    Shopware\DbalIndexing\DbalIndexing::class => ['all' => true],
    Shopware\Payment\Payment::class => ['all' => true],
    Shopware\StorefrontApi\StorefrontApi::class => ['all' => true],
    Shopware\Category\Category::class => ['all' => true],
    Shopware\Media\Media::class => ['all' => true],
    Shopware\Product\Product::class => ['all' => true],
    Symfony\Bundle\DebugBundle\DebugBundle::class => ['dev' => true, 'test' => true],
//    Shopware\Traceable\Traceable::class => ['dev' => true, 'test' => true],
];
