<?php

namespace Microsoft\Graph\Beta\Generated\DirectoryRoles\Item\Members\Item;

use Microsoft\Graph\Beta\Generated\DirectoryRoles\Item\Members\Item\MicrosoftGraphApplication\MicrosoftGraphApplicationRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectoryRoles\Item\Members\Item\MicrosoftGraphDevice\MicrosoftGraphDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectoryRoles\Item\Members\Item\MicrosoftGraphGroup\MicrosoftGraphGroupRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectoryRoles\Item\Members\Item\MicrosoftGraphOrgContact\MicrosoftGraphOrgContactRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectoryRoles\Item\Members\Item\MicrosoftGraphServicePrincipal\MicrosoftGraphServicePrincipalRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectoryRoles\Item\Members\Item\MicrosoftGraphUser\MicrosoftGraphUserRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectoryRoles\Item\Members\Item\Ref\RefRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /directoryRoles/{directoryRole-id}/members/{directoryObject-id}
*/
class DirectoryObjectItemRequestBuilder 
{
    /**
     * Casts the previous resource to application.
    */
    public function microsoftGraphApplication(): MicrosoftGraphApplicationRequestBuilder {
        return new MicrosoftGraphApplicationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to device.
    */
    public function microsoftGraphDevice(): MicrosoftGraphDeviceRequestBuilder {
        return new MicrosoftGraphDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to group.
    */
    public function microsoftGraphGroup(): MicrosoftGraphGroupRequestBuilder {
        return new MicrosoftGraphGroupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to orgContact.
    */
    public function microsoftGraphOrgContact(): MicrosoftGraphOrgContactRequestBuilder {
        return new MicrosoftGraphOrgContactRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to servicePrincipal.
    */
    public function microsoftGraphServicePrincipal(): MicrosoftGraphServicePrincipalRequestBuilder {
        return new MicrosoftGraphServicePrincipalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to user.
    */
    public function microsoftGraphUser(): MicrosoftGraphUserRequestBuilder {
        return new MicrosoftGraphUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the collection of directoryRole entities.
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
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/directoryRoles/{directoryRole%2Did}/members/{directoryObject%2Did}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
