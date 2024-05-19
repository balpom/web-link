# web-link
## WebLink component extends LinkInterface and EvolvableLinkInterface from PSR-13 Link definition interfaces

This WebLink component extends [PSR-13 Link definition interfaces](https://www.php-fig.org/psr/psr-13/) and added to it additional methods:
```php
interface WebLinkInterface extends LinkInterface
{
    // Returns the HTML tag which contains the link.
    public function getTag(): string;
    
    // For paired tags returns the HTML content between link open and close tags.
    public function getContent(): string;
    
    // Returns the attribute value or null, if attribute not exist.
    public function getAttribute(string $attr): string|int|float|bool|array|null;
}
```
```php
interface EvolvableWebLinkInterface extends EvolvableLinkInterface, WebLinkInterface
{
    // Returns an instance with the specified tag.
    public function withTag(string $tag): static;

    // Returns an instance with the specified content.
    public function withContent(string $content): static;
}
```

Trivial realisation of WebLink component based on Symfony WebLink component [https://github.com/symfony/web-link/](https://github.com/symfony/web-link/)
```php
use Symfony\Component\WebLink\Link;
class WebLink extends Link implements EvolvableWebLinkInterface
{
// ...
}
```

### License
MIT License See [LICENSE.MD](LICENSE.MD)
