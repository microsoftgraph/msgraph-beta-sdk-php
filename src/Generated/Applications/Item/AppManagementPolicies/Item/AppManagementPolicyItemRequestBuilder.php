<?php

namespace Microsoft\Graph\Beta\Generated\Applications\Item\AppManagementPolicies\Item;

use Microsoft\Graph\Beta\Generated\Applications\Item\AppManagementPolicies\Item\Ref\RefRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /applications/{application-id}/appManagementPolicies/{appManagementPolicy-id}
*/
class AppManagementPolicyItemRequestBuilder 
{
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the collection of application entities.
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
     * Instantiates a new AppManagementPolicyItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $appManagementPolicyId key: id of appManagementPolicy
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $appManagementPolicyId = null) {
        $this->urlTemplate = '{+baseurl}/applications/{application%2Did}/appManagementPolicies/{appManagementPolicy%2Did}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['appManagementPolicy%2Did'] = $appManagementPolicyId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
