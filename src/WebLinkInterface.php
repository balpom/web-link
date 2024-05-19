<?php

declare(strict_types=1);

namespace Balpom\WebLink;

use Psr\Link\LinkInterface;

interface WebLinkInterface extends LinkInterface
{

    /**
     * Returns the HTML tag which contains the link.
     *
     * @return string
     */
    public function getTag(): string;

    /**
     * For paired tags returns the HTML content between link open and close tags
     * (if exists). For single tags always returns empty string.
     *
     * @return string
     */
    public function getContent(): string;

    /**
     * Returns the attribute value or null, if attribute not exist.
     *
     * @return string|false
     */
    public function getAttribute(string $attr): string|int|float|bool|array|null;
}
