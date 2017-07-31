Return a RESTFull JSON response. The response body contains 3 properties.
 * data: request results.
 * error: error information.  ex.[{code: 555, msg: 'No results Found'}]
 * meta: meta information about the response.


### License
MIT - MIT License
File: [LICENSE](LICENSE)

### Examples
```php
<?php
$resp = new JSONResponse();
$resp->data[] = 'one';
$resp->data[] = 'two';
$resp->send();
```

### Installation
##### Composer
composer require somephp/jsonresponse

### Contents
| Resource | Description |
| -------- | ----------- |
|  | |

### Contributions
Suggestions and code modifications are welcome.  Create a merge request, and tell me what are thinking.


