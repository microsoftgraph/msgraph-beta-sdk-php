<?php

namespace Microsoft\Graph\Beta\Generated\Policies\PermissionGrantPreApprovalPolicies\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\PermissionGrantPreApprovalPolicy;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the permissionGrantPreApprovalPolicies property of the microsoft.graph.policyRoot entity.
*/
class PermissionGrantPreApprovalPolicyItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new PermissionGrantPreApprovalPolicyItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/permissionGrantPreApprovalPolicies/{permissionGrantPreApprovalPolicy%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a permissionGrantPreApprovalPolicy object.
     * @param PermissionGrantPreApprovalPolicyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/permissiongrantpreapprovalpolicy-delete?view=graph-rest-beta Find more info here
    */
    public function delete(?PermissionGrantPreApprovalPolicyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a permissionGrantPreApprovalPolicy object.
     * @param PermissionGrantPreApprovalPolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PermissionGrantPreApprovalPolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/permissiongrantpreapprovalpolicy-get?view=graph-rest-beta Find more info here
    */
    public function get(?PermissionGrantPreApprovalPolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PermissionGrantPreApprovalPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a permissionGrantPreApprovalPolicy object.
     * @param PermissionGrantPreApprovalPolicy $body The request body
     * @param PermissionGrantPreApprovalPolicyItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PermissionGrantPreApprovalPolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/permissiongrantpreapprovalpolicy-update?view=graph-rest-beta Find more info here
    */
    public function patch(PermissionGrantPreApprovalPolicy $body, ?PermissionGrantPreApprovalPolicyItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PermissionGrantPreApprovalPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a permissionGrantPreApprovalPolicy object.
     * @param PermissionGrantPreApprovalPolicyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?PermissionGrantPreApprovalPolicyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Read the properties and relationships of a permissionGrantPreApprovalPolicy object.
     * @param PermissionGrantPreApprovalPolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PermissionGrantPreApprovalPolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Update the properties of a permissionGrantPreApprovalPolicy object.
     * @param PermissionGrantPreApprovalPolicy $body The request body
     * @param PermissionGrantPreApprovalPolicyItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(PermissionGrantPreApprovalPolicy $body, ?PermissionGrantPreApprovalPolicyItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return PermissionGrantPreApprovalPolicyItemRequestBuilder
    */
    public function withUrl(string $rawUrl): PermissionGrantPreApprovalPolicyItemRequestBuilder {
        return new PermissionGrantPreApprovalPolicyItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
