<?php

namespace Microsoft\Graph\Beta\Generated\Me\Devices\Item\RegisteredOwners\Item;

use Microsoft\Graph\Beta\Generated\Me\Devices\Item\RegisteredOwners\Item\MicrosoftGraphEndpoint\EndpointRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Devices\Item\RegisteredOwners\Item\MicrosoftGraphServicePrincipal\ServicePrincipalRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Devices\Item\RegisteredOwners\Item\MicrosoftGraphUser\UserRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Devices\Item\RegisteredOwners\Item\Ref\RefRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /me/devices/{device-id}/registeredOwners/{directoryObject-id}
*/
class DirectoryObjectItemRequestBuilder 
{
    /**
     * Casts the previous resource to endpoint.
    */
    public function microsoftGraphEndpoint(): EndpointRequestBuilder {
        return new EndpointRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to servicePrincipal.
    */
    public function microsoftGraphServicePrincipal(): ServicePrincipalRequestBuilder {
        return new ServicePrincipalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to user.
    */
    public function microsoftGraphUser(): UserRequestBuilder {
        return new UserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the collection of user entities.
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
     * Instantiates a new DirectoryObjectItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $directoryObjectId key: id of directoryObject
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $directoryObjectId = null) {
        $this->urlTemplate = '{+baseurl}/me/devices/{device%2Did}/registeredOwners/{directoryObject%2Did}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['directoryObject%2Did'] = $directoryObjectId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
