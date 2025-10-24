<?php

namespace Microsoft\\Graph\\Beta\\Generated\ApprovalWorkflowProviders\Item\PolicyTemplates;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\ApprovalWorkflowProviders\Item\PolicyTemplates\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\ApprovalWorkflowProviders\Item\PolicyTemplates\Item\GovernancePolicyTemplateItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\GovernancePolicyTemplate;
use Microsoft\\Graph\\Beta\\Generated\Models\GovernancePolicyTemplateCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the policyTemplates property of the microsoft.graph.approvalWorkflowProvider entity.
*/
class PolicyTemplatesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the policyTemplates property of the microsoft.graph.approvalWorkflowProvider entity.
     * @param string $governancePolicyTemplateId The unique identifier of governancePolicyTemplate
     * @return GovernancePolicyTemplateItemRequestBuilder
    */
    public function byGovernancePolicyTemplateId(string $governancePolicyTemplateId): GovernancePolicyTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governancePolicyTemplate%2Did'] = $governancePolicyTemplateId;
        return new GovernancePolicyTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PolicyTemplatesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/approvalWorkflowProviders/{approvalWorkflowProvider%2Did}/policyTemplates{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get policyTemplates from approvalWorkflowProviders
     * @param PolicyTemplatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GovernancePolicyTemplateCollectionResponse|null>
     * @throws Exception
    */
    public function get(?PolicyTemplatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GovernancePolicyTemplateCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to policyTemplates for approvalWorkflowProviders
     * @param GovernancePolicyTemplate $body The request body
     * @param PolicyTemplatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GovernancePolicyTemplate|null>
     * @throws Exception
    */
    public function post(GovernancePolicyTemplate $body, ?PolicyTemplatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GovernancePolicyTemplate::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get policyTemplates from approvalWorkflowProviders
     * @param PolicyTemplatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PolicyTemplatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to policyTemplates for approvalWorkflowProviders
     * @param GovernancePolicyTemplate $body The request body
     * @param PolicyTemplatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GovernancePolicyTemplate $body, ?PolicyTemplatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PolicyTemplatesRequestBuilder
    */
    public function withUrl(string $rawUrl): PolicyTemplatesRequestBuilder {
        return new PolicyTemplatesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
