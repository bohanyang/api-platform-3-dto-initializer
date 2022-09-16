<?php

namespace App\State;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProcessorInterface;
use App\ApiResource\BlogPost;
use App\ApiResource\BlogPostPatch;

class BlogStateProcessor implements ProcessorInterface
{
    public function process(mixed $data, Operation $operation, array $uriVariables = [], array $context = [])
    {
        assert($data instanceof BlogPostPatch);
        $blogPost = clone $context['previous_data'];
        assert($blogPost instanceof BlogPost);
        $blogPost->author = $data->author;

        return $blogPost;
    }
}
