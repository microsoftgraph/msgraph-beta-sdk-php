<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\OperationApprovalPolicies;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\OperationApprovalPolicies\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\OperationApprovalPolicies\Item\OperationApprovalPolicyItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\OperationApprovalPolicies\RetrieveApprovableOperations\RetrieveApprovableOperationsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\OperationApprovalPolicies\RetrieveOperationsRequiringApproval\RetrieveOperationsRequiringApprovalRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\Models\OperationApprovalPolicy;
use Microsoft\\Graph\\Beta\\Generated\Models\OperationApprovalPolicyCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the operationApprovalPolicies property of the microsoft.graph.deviceManagement entity.
*/
class OperationApprovalPoliciesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the retrieveApprovableOperations method.
    */
    public function retrieveApprovableOperations(): RetrieveApprovableOperationsRequestBuilder {
        return new RetrieveApprovableOperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the retrieveOperationsRequiringApproval method.
    */
    public function retrieveOperationsRequiringApproval(): RetrieveOperationsRequiringApprovalRequestBuilder {
        return new RetrieveOperationsRequiringApprovalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the operationApprovalPolicies property of the microsoft.graph.deviceManagement entity.
     * @param string $operationApprovalPolicyId The unique identifier of operationApprovalPolicy
     * @return OperationApprovalPolicyItemRequestBuilder
    */
    public function byOperationApprovalPolicyId(string $operationApprovalPolicyId): OperationApprovalPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['operationApprovalPolicy%2Did'] = $operationApprovalPolicyId;
        return new OperationApprovalPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new OperationApprovalPoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/operationApprovalPolicies{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The Operation Approval Policies
     * @param OperationApprovalPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OperationApprovalPolicyCollectionResponse|null>
     * @throws Exception
    */
    public function get(?OperationApprovalPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OperationApprovalPolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to operationApprovalPolicies for deviceManagement
     * @param OperationApprovalPolicy $body The request body
     * @param OperationApprovalPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OperationApprovalPolicy|null>
     * @throws Exception
    */
    public function post(OperationApprovalPolicy $body, ?OperationApprovalPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OperationApprovalPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The Operation Approval Policies
     * @param OperationApprovalPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OperationApprovalPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to operationApprovalPolicies for deviceManagement
     * @param OperationApprovalPolicy $body The request body
     * @param OperationApprovalPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(OperationApprovalPolicy $body, ?OperationApprovalPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return OperationApprovalPoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): OperationApprovalPoliciesRequestBuilder {
        return new OperationApprovalPoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
