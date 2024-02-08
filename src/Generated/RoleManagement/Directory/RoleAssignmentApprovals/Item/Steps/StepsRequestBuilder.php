<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleAssignmentApprovals\Item\Steps;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ApprovalStep;
use Microsoft\Graph\Beta\Generated\Models\ApprovalStepCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleAssignmentApprovals\Item\Steps\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleAssignmentApprovals\Item\Steps\Item\ApprovalStepItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the steps property of the microsoft.graph.approval entity.
*/
class StepsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the steps property of the microsoft.graph.approval entity.
     * @param string $approvalStepId The unique identifier of approvalStep
     * @return ApprovalStepItemRequestBuilder
    */
    public function byApprovalStepId(string $approvalStepId): ApprovalStepItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['approvalStep%2Did'] = $approvalStepId;
        return new ApprovalStepItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new StepsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/roleManagement/directory/roleAssignmentApprovals/{approval%2Did}/steps{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List the approvalStep objects associated with an approval. This API request is made by an approver in the following scenarios:
     * @param StepsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApprovalStepCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/approval-list-steps?view=graph-rest-1.0 Find more info here
    */
    public function get(?StepsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApprovalStepCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to steps for roleManagement
     * @param ApprovalStep $body The request body
     * @param StepsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApprovalStep|null>
     * @throws Exception
    */
    public function post(ApprovalStep $body, ?StepsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApprovalStep::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List the approvalStep objects associated with an approval. This API request is made by an approver in the following scenarios:
     * @param StepsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?StepsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to steps for roleManagement
     * @param ApprovalStep $body The request body
     * @param StepsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ApprovalStep $body, ?StepsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return StepsRequestBuilder
    */
    public function withUrl(string $rawUrl): StepsRequestBuilder {
        return new StepsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
