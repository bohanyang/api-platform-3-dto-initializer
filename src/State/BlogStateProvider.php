<?php

namespace App\State;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProviderInterface;
use App\ApiResource\BlogPost;

class BlogStateProvider implements ProviderInterface
{
    public function provide(Operation $operation, array $uriVariables = [], array $context = []): BlogPost
    {
        return new BlogPost(
            $uriVariables['id'],
            'Hello World: ' . $uriVariables['id'],
            'This is my first blog post: ' . $uriVariables['id'],
            new \DateTimeImmutable(),
            'Kévin Dunglas: ' . $uriVariables['id'],
        );
    }
}
