# ace-editor-mode-php


## Example

Example How to use:

```php
$fileInfo = pathinfo($filePath); // Path to the file//
$aceEditorMode = new \Linkorb\Ace\AceEditorMode();
$aceMode = $aceEditorMode->getAceMode($fileInfo['extension']);
echo $aceMode;
```

## Accessors

Please refer to `examples/` for examples.

## License

MIT (see [LICENSE.md](LICENSE.md))

## Brought to you by the LinkORB Engineering team

<img src="http://www.linkorb.com/d/meta/tier1/images/linkorbengineering-logo.png" width="200px" /><br />
Check out our other projects at [linkorb.com/engineering](http://www.linkorb.com/engineering).

Btw, we're hiring!
