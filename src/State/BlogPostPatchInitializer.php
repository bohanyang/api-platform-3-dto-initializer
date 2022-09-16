<?php

namespace App\State;

use App\ApiPlatform\DtoInitializerInterface;
use App\ApiResource\BlogPost;
use App\ApiResource\BlogPostPatch;

class BlogPostPatchInitializer implements DtoInitializerInterface
{
    public function initialize(string $inputClass, array $attributes): ?object
    {
        if (
            BlogPostPatch::class !== $inputClass
            || ! ($blogPost = $attributes['previous_data'] ?? false)
        ) {
            return null;
        }

        assert($blogPost instanceof BlogPost);

        $dto = new BlogPostPatch();
        $dto->author = $blogPost->author;

        return $dto;
    }
}
