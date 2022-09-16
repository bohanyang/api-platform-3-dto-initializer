<?php

namespace App\ApiResource;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Patch;
use App\State\BlogStateProcessor;
use App\State\BlogStateProvider;

#[ApiResource(
    provider: BlogStateProvider::class,
    processor: BlogStateProcessor::class,
    operations: [
        new Get('/posts/{id}'),
        new Patch('/posts/{id}', input: BlogPostPatch::class),
    ]
)]
class BlogPost
{
    public function __construct(
        public string $id,
        public string $title,
        public string $content,
        public \DateTimeInterface $publishedAt,
        public ?string $author = null,
    ) {
    }
}
