<?php

namespace Microsoft\Graph\Beta\Generated\Identity\B2cUserFlows\Item\IdentityProviders\Item;

use Microsoft\Graph\Beta\Generated\Identity\B2cUserFlows\Item\IdentityProviders\Item\Ref\RefRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /identity/b2cUserFlows/{b2cIdentityUserFlow-id}/identityProviders/{identityProvider-id}
*/
class IdentityProviderItemRequestBuilder 
{
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the collection of identityContainer entities.
    */
    public function ref(): RefRequestBuilder {
        return new RefRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new IdentityProviderItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $identityProviderId key: id of identityProvider
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter, ?string $identityProviderId = null) {
        $this->urlTemplate = '{+baseurl}/identity/b2cUserFlows/{b2cIdentityUserFlow%2Did}/identityProviders/{identityProvider%2Did}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
        $urlTplParams = $pathParameters;
        $urlTplParams['identityProviderId'] = $identityProviderId;
        $this->pathParameters = array_merge($this->pathParameters, $urlTplParams);
    }

}
