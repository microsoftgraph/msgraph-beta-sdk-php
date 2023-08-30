<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ProvisioningPolicies\Item\Assignments\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ProvisioningPolicies\Item\Assignments\Item\AssignedUsers\AssignedUsersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CloudPcProvisioningPolicyAssignment;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the assignments property of the microsoft.graph.cloudPcProvisioningPolicy entity.
*/
class CloudPcProvisioningPolicyAssignmentItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the assignedUsers property of the microsoft.graph.cloudPcProvisioningPolicyAssignment entity.
    */
    public function assignedUsers(): AssignedUsersRequestBuilder {
        return new AssignedUsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CloudPcProvisioningPolicyAssignmentItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/provisioningPolicies/{cloudPcProvisioningPolicy%2Did}/assignments/{cloudPcProvisioningPolicyAssignment%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property assignments for deviceManagement
     * @param CloudPcProvisioningPolicyAssignmentItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?CloudPcProvisioningPolicyAssignmentItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * A defined collection of provisioning policy assignments. Represents the set of Microsoft 365 groups and security groups in Azure AD that have provisioning policy assigned. Returned only on $expand. For an example about how to get the assignments relationship, see Get cloudPcProvisioningPolicy.
     * @param CloudPcProvisioningPolicyAssignmentItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?CloudPcProvisioningPolicyAssignmentItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [CloudPcProvisioningPolicyAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property assignments in deviceManagement
     * @param CloudPcProvisioningPolicyAssignment $body The request body
     * @param CloudPcProvisioningPolicyAssignmentItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(CloudPcProvisioningPolicyAssignment $body, ?CloudPcProvisioningPolicyAssignmentItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [CloudPcProvisioningPolicyAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property assignments for deviceManagement
     * @param CloudPcProvisioningPolicyAssignmentItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CloudPcProvisioningPolicyAssignmentItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * A defined collection of provisioning policy assignments. Represents the set of Microsoft 365 groups and security groups in Azure AD that have provisioning policy assigned. Returned only on $expand. For an example about how to get the assignments relationship, see Get cloudPcProvisioningPolicy.
     * @param CloudPcProvisioningPolicyAssignmentItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CloudPcProvisioningPolicyAssignmentItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property assignments in deviceManagement
     * @param CloudPcProvisioningPolicyAssignment $body The request body
     * @param CloudPcProvisioningPolicyAssignmentItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CloudPcProvisioningPolicyAssignment $body, ?CloudPcProvisioningPolicyAssignmentItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return CloudPcProvisioningPolicyAssignmentItemRequestBuilder
    */
    public function withUrl(string $rawUrl): CloudPcProvisioningPolicyAssignmentItemRequestBuilder {
        return new CloudPcProvisioningPolicyAssignmentItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
