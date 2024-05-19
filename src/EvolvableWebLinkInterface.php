<?php

declare(strict_types=1);

namespace Balpom\WebLink;

use Psr\Link\EvolvableLinkInterface;

interface EvolvableWebLinkInterface extends EvolvableLinkInterface, WebLinkInterface
{

    /**
     * Returns an instance with the specified tag.
     *
     * @return static
     */
    public function withTag(string $tag): static;

    /**
     * Returns an instance with the specified content.
     *
     * @return static
     */
    public function withContent(string $content): static;
}
