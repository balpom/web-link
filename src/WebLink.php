<?php

namespace Balpom\WebLink;

use Symfony\Component\WebLink\Link;

class WebLink extends Link implements EvolvableWebLinkInterface
{

    private string $tag = '';
    private string $content = '';

    public function getTag(): string
    {
        return $this->tag;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getAttribute(string $attr): string|int|float|bool|array|null
    {
        $attributes = $this->getAttributes();

        return isset($attributes[$attribute]) ? $attributes[$attribute] : null;
    }

    public function withTag(string $tag): static
    {
        $that = clone $this;
        $that->tag = strtolower($tag);

        return $that;
    }

    public function withContent(string $content): static
    {
        $that = clone $this;
        $that->content = $content;

        return $that;
    }
}
