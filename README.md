# Get started with the Microsoft Graph Beta SDK for PHP

[![Build Status](https://travis-ci.org/microsoftgraph/msgraph-beta-sdk-php.svg?branch=master)](https://travis-ci.org/microsoftgraph/msgraph-beta-sdk-php)
[![Latest Stable Version](https://poser.pugx.org/microsoft/microsoft-graph-beta/version)](https://packagist.org/packages/microsoft/microsoft-graph-beta)

## Install the SDK
You can install the Beta PHP SDK with Composer by editing your `composer.json` file:
```
{
    "minimum-stability": "RC",
    "require": {
        "microsoft/microsoft-graph-beta": "^2.1.0-RC0",
    }
}
```
OR
```
{
    "require": {
        "microsoft/microsoft-graph-beta": "^2.1.0-RC0",
        "microsoft/microsoft-graph-core": "@RC"
    }
}
```
## Get started with Microsoft Graph

### Register your application

Register your application to use the Microsoft Graph API using [Microsoft Azure Active Directory](https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps/ApplicationsListBlade) in your tenant's Active Directory to support work or school users for your tenant, or multiple tenants.

### Create an Authentication Provider object

An AuthenticationProvider handles authentication of requests made to the Graph. It fetches, caches and refreshes access tokens ensuring all requests are authenticated against the Microsoft Identity platform. It supports various OAuth 2.0 flows e.g. `client_credentials`, `authorization_code` among others with support for secret-based and certificate-based flows.

The provided authentication provider wraps around the [The PHP League OAuth client](https://oauth2-client.thephpleague.com/).

The following sample creates an authentication provider that [gets access without a user](https://docs.microsoft.com/en-us/graph/auth-v2-service?context=graph%2Fapi%2F1.0&view=graph-rest-1.0):
```php

use Microsoft\Kiota\Authentication\Oauth\ClientCredentialContext;
use Microsoft\Kiota\Authentication\PhpLeagueAuthenticationProvider;

$tokenRequestContext = new ClientCredentialContext(
    'tenantId',
    'clientId',
    'clientSecret'
);
$scopes = ['https://graph.microsoft.com/.default'];
$authProvider = new PhpLeagueAuthenticationProvider($tokenRequestContext, $scopes);

```

To create an authentication provider that [gets access on behalf of a user](https://docs.microsoft.com/en-us/graph/auth-v2-user?context=graph%2Fapi%2F1.0&view=graph-rest-1.0):
```php

use Microsoft\Kiota\Authentication\Oauth\AuthorizationCodeContext;
use Microsoft\Kiota\Authentication\PhpLeagueAuthenticationProvider;

$tokenRequestContext = new AuthorizationCodeContext(
    'tenantId',
    'clientId',
    'clientSecret',
    'authCode',
    'redirectUri'
);
$scopes = ['User.Read', 'Mail.Read'];
$authProvider = new PhpLeagueAuthenticationProvider($tokenRequestContext, $scopes);

```
Note that your application will need to handle redirecting the user to the Microsoft Identity login page to get the `authorization_code` that's passed into the `AuthorizationCodeContext`.
[See](https://docs.microsoft.com/en-us/azure/active-directory/develop/v2-oauth2-auth-code-flow) for more on the `authorization_code` grant flow.

The SDK also provides equivalent `TokenRequestContext` objects that rely on certificates as opposed to client secrets: `ClientCredentialCertificateContext`, `AuthorizationCodeCertificateContext`.

### Initialise a GraphServiceClient HTTP Adapter object

The SDK uses an adapter object that handles the HTTP concerns. This HTTP adapter object is used to build the Graph client for making requests.

To initialise one using the authentication provider created in the previous step:
```php

use Microsoft\Graph\Beta\GraphRequestAdapter;

$requestAdapter = GraphRequestAdapter::withAuthenticationProvider($authProvider);

```

The SDK also supports passing a `TokenRequestContext` object to the `GraphRequestAdapter` and initialises the authentication provider for you under the hood:
```php

use Microsoft\Graph\Beta\GraphRequestAdapter;

$scopes = ['User.Read', 'Mail.Read'];
$requestAdapter = GraphRequestAdapter::withTokenRequestContext($tokenRequestContext, $scopes);

```

We currently use [Guzzle](http://guzzlephp.org/) as our HTTP client. You can pass your custom configured Guzzle client using `withHttpClient()`:

```php

use Microsoft\Graph\Core\GraphClientFactory;
use Microsoft\Graph\Beta\GraphRequestAdapter;

$guzzleConfig = [
    // your custom config
];
$httpClient = GraphClientFactory::createWithConfig($guzzleConfig);
$scopes = ['User.Read', 'Mail.Read'];
$requestAdapter = GraphRequestAdapter::withHttpClient($httpClient)::withTokenRequestContext($tokenRequestContext);

```


### Call Microsoft Graph using the Beta endpoint and models

The following is an example that shows how to fetch a user from Microsoft Graph

```php

use Microsoft\Graph\Beta\GraphRequestAdapter;
use Microsoft\Graph\Beta\GraphServiceClient;
use Microsoft\Kiota\Abstractions\ApiException;
use Microsoft\Kiota\Authentication\Oauth\ClientCredentialContext;

$tokenRequestContext = new ClientCredentialContext(
    'tenantId',
    'clientId',
    'clientSecret'
);
$scopes = ['https://graph.microsoft.com/.default'];
$requestAdapter = GraphRequestAdapter::withTokenRequestContext($tokenRequestContext, $scopes);
$betaGraphServiceClient = new GraphServiceClient($requestAdapter);

try {
    $response = $betaGraphServiceClient->usersById('[userPrincipalName]')->get();
    $user = $response->wait();
    echo "Hello, I am {$user->getGivenName()}";

} catch (ApiException $ex) {
    echo $ex->getMessage();
}

```

Note that to calling `me()` requires a signed-in user and therefore delegated permissions (obtained using the `authorization_code` flow):
```php

use Microsoft\Graph\Beta\GraphRequestAdapter;
use Microsoft\Graph\Beta\GraphServiceClient;
use Microsoft\Kiota\Abstractions\ApiException;
use Microsoft\Kiota\Authentication\Oauth\AuthorizationCodeContext;

$tokenRequestContext = new AuthorizationCodeContext(
    'tenantId',
    'clientId',
    'clientSecret',
    'authCode',
    'redirectUri'
);
$scopes = ['User.Read'];
$requestAdapter = GraphRequestAdapter::withTokenRequestContext($tokenRequestContext);
$betaGraphServiceClient = new GraphServiceClient($requestAdapter);

try {
    $response = $betaGraphServiceClient->me()->get();
    $user = $response->wait();
    echo "Hello, I am {$user->getGivenName()}";
} catch (ApiException $ex) {
    echo $ex->getMessage();
}

```
## Documentation and resources


* [Examples](https://aka.ms/graph/sdk/php/preview/examples)

* [Microsoft Graph website](https://aka.ms/graph)

## Upgrading

For detailed information on breaking changes, bug fixes and new functionality introduced during major upgrades, check out our [Upgrade Guide](UPGRADING.md)

## Develop

### Run Tests

Run
 ```shell
vendor/bin/phpunit
```
from the base directory.

## Issues

View or log issues on the [Issues](https://github.com/microsoftgraph/msgraph-sdk-php/issues) tab in the repo.

## Contribute

Please read our [Contributing](CONTRIBUTING.md) guidelines carefully for advice on how to contribute to this repo.

## Copyright and license

Copyright (c) Microsoft Corporation. All Rights Reserved. Licensed under the MIT [license](LICENSE).

This project has adopted the [Microsoft Open Source Code of Conduct](https://opensource.microsoft.com/codeofconduct/). For more information see the [Code of Conduct FAQ](https://opensource.microsoft.com/codeofconduct/faq/) or contact [opencode@microsoft.com](mailto:opencode@microsoft.com) with any additional questions or comments.
