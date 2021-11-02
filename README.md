# Get started with the Microsoft Graph Beta SDK for PHP

[![Latest Stable Version](https://poser.pugx.org/microsoft/microsoft-graph-beta/version)](https://packagist.org/packages/microsoft/microsoft-graph)

## Install the SDK
You can install the Beta PHP SDK with Composer by editing your `composer.json` file:
```
{
    "minimum-stability": "RC"
    "require": {
        "microsoft/microsoft-graph-beta": "^2.1.0-RC0"
    }
}
```
OR
```
    "require": {
        "microsoft/microsoft-graph-beta": "^2.1.0-RC0",
        "microsoft/microsoft-graph-core": "@RC"
    }
```
## Get started with Microsoft Graph

### 1. Register your application

Register your application to use the Microsoft Graph API by following the steps at [Register an an application with the Microsoft Identity platform](https://docs.microsoft.com/en-us/graph/auth-register-app-v2).

### 2. Authenticate with the Microsoft Graph service

The Microsoft Graph Beta SDK for PHP does not include any default authentication implementations. The [`thephpleague/oauth2-client`](https://github.com/thephpleague/oauth2-client) library will handle the OAuth2 flow for you and provide a usable token for querying the Graph.

For an integrated example on how to use Oauth2 in a Laravel application and use the Graph, see the [PHP Tutorial](https://docs.microsoft.com/en-us/graph/tutorials/php).

To authenticate as an application you can use the [Guzzle HTTP client](http://docs.guzzlephp.org/en/stable/), which comes preinstalled with this library.

This code sample gets an access token without a signed-in user. See [Get access without a user](https://docs.microsoft.com/en-us/graph/auth-v2-service?context=graph%2Fapi%2F1.0&view=graph-rest-1.0) for more.
```php
$guzzle = new \GuzzleHttp\Client();
$url = 'https://login.microsoftonline.com/' . $tenantId . '/oauth2/token?api-version=beta';
$token = json_decode($guzzle->post($url, [
    'form_params' => [
        'client_id' => $clientId,
        'client_secret' => $clientSecret,
        'resource' => 'https://graph.microsoft.com/',
        'grant_type' => 'client_credentials',
    ],
])->getBody()->getContents());
$accessToken = $token->access_token;
```


### 3. Call Microsoft Graph using the beta endpoint and models

The following is an example that shows how to call Microsoft Graph.

```php
use Microsoft\Graph\Graph;
use Beta\Microsoft\Graph\Model as BetaModel;

class UsageExample
{
    public function run()
    {
        $accessToken = 'xxx';

        $graph = new Graph();
        $graph->setAccessToken($accessToken);

        $user = $graph->createRequest("GET", "/me")
                      ->setReturnType(BetaModel\User::class)
                      ->execute();

        echo "Hello, I am {$user->getGivenName()}";
    }
}
```
Please note that calling the `/me` endpoint requires a signed-in user and therefore a delegated permission. Application
permissions are not supported when using the `/me` endpoint. For more on permissions, see [Microsoft Graph Permissions](https://docs.microsoft.com/en-us/graph/auth/auth-concepts#microsoft-graph-permissions).

If you have not set up delegated permissions, call the `/users/{userPrincipalName}`. See [the docs](https://docs.microsoft.com/en-us/graph/api/user-get?view=graph-rest-1.0&tabs=http) for more detail on getting a user.

## Sample Applications
If you want to play around with the PHP library, you can get up and running quickly with the [PHP Tutorial](https://docs.microsoft.com/en-us/graph/tutorials/php).

This sample will start you with a little Laravel project that helps you with registration, authentication, and making a simple call to the service.

## Documentation and resources

* [Documentation](https://github.com/microsoftgraph/msgraph-sdk-php/blob/feat/2.0.0/docs/README.md)

* [Microsoft Graph website](https://developer.microsoft.com/en-us/graph/)


## Develop

### Debug
You can use the library with a proxy such as [Fiddler](http://www.telerik.com/fiddler) or [Charles Proxy](https://www.charlesproxy.com/) to debug requests and responses as they come across the wire. Set the proxy port on the Graph object like this:
```php
use Microsoft\Graph\Http\HttpClientFactory;
use Microsoft\Graph\Core\NationalCloud;
use Microsoft\Graph\Graph;

$guzzleConfig = [
    "proxy" => "localhost:8888"
];
$httpClient = HttpClientFactory::setClientConfig($guzzleConfig)::createAdapter();
$graphClient = new Graph(NationalCloud::GLOBAL, $httpClient);
```
Then, open your proxy client to view the requests & responses sent using the library.

This is especially helpful when the library does not return the results you expected to determine whether there are bugs in the API or this SDK. Therefore, you may be asked to provide this information when attempting to triage an issue you file.

### Run Tests

Run
 ```shell
vendor/bin/phpunit --exclude-group functional
```
from the base directory.

*The set of functional tests are meant to be run against a test account. Currently, the
tests to do not restore state of the account.*

#### Debug tests on Windows

This SDK has an XDebug run configuration that attaches the debugger to VS Code so that you can debug tests.

1. Install the [PHP Debug](https://marketplace.visualstudio.com/items?itemName=felixfbecker.php-debug) extension into Visual Studio Code.
2. From the root of this repo, using PowerShell, run `php .\tests\GetPhpInfo.php | clip` from the repo root. This will copy PHP configuration information into the clipboard which we will use in the next step.
3. Paste your clipboard into the [XDebug Installation Wizard](https://xdebug.org/wizard) and select **Analyse my phpinfo() output**.
4. Follow the generated instructions for installing XDebug. Note that the `/ext` directory is located in your PHP directory.
5. Add the following info to your php.ini file:

```
[XDebug]
xdebug.remote_enable = 1
xdebug.remote_autostart = 1
```

Now you can hit a Visual Studio Code breakpoint in a test. Try this:

1. Add a breakpoint to `testGetCalendarView` in *.\tests\Functional\EventTest.php*.
2. Run the **Listen for XDebug** configuration in VS Code.
3. Run `.\vendor\bin\phpunit --filter testGetCalendarView` from the PowerShell terminal to run the test and hit the breakpoint.

## Issues

View or log issues on the [Issues](https://github.com/microsoftgraph/msgraph-beta-sdk-php/issues) tab in the repo.

## Contribute

Please read our [Contributing](https://github.com/microsoftgraph/msgraph-beta-sdk-php/blob/master/CONTRIBUTING.md) guidelines carefully for advice on how to contribute to this repo.

## Copyright and license

Copyright (c) Microsoft Corporation. All Rights Reserved. Licensed under the MIT [license](LICENSE).

This project has adopted the [Microsoft Open Source Code of Conduct](https://opensource.microsoft.com/codeofconduct/). For more information see the [Code of Conduct FAQ](https://opensource.microsoft.com/codeofconduct/faq/) or contact [opencode@microsoft.com](mailto:opencode@microsoft.com) with any additional questions or comments.
