<?php

namespace Microsoft\Graph\Beta\Generated\Policies\MobileAppManagementPolicies\Item\IncludedGroups\Item;

use Microsoft\Graph\Beta\Generated\Policies\MobileAppManagementPolicies\Item\IncludedGroups\Item\Ref\RefRequestBuilder;
use Microsoft\Graph\Beta\Generated\Policies\MobileAppManagementPolicies\Item\IncludedGroups\Item\ServiceProvisioningErrors\ServiceProvisioningErrorsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /policies/mobileAppManagementPolicies/{mobilityManagementPolicy-id}/includedGroups/{group-id}
*/
class GroupItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the collection of policyRoot entities.
    */
    public function ref(): RefRequestBuilder {
        return new RefRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The serviceProvisioningErrors property
    */
    public function serviceProvisioningErrors(): ServiceProvisioningErrorsRequestBuilder {
        return new ServiceProvisioningErrorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new GroupItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/mobileAppManagementPolicies/{mobilityManagementPolicy%2Did}/includedGroups/{group%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
