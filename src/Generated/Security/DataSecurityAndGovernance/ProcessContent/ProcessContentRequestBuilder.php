<?php

namespace Microsoft\Graph\Beta\Generated\Security\DataSecurityAndGovernance\ProcessContent;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\ProcessContentResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the processContent method.
*/
class ProcessContentRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ProcessContentRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/dataSecurityAndGovernance/processContent');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Evaluate content against Microsoft Purview Data Loss Prevention (DLP) policies and return the policy actions that apply to the supplied content. Use this API when an application needs to evaluate content before or during data movement. In Agent-to-Tool (A2T) scenarios, the agent runtime calls this API before invoking an external tool to determine whether the content should be allowed, blocked, or audited according to Microsoft Purview policies. For A2T scenarios: The response contains any applicable policy actions together with the protection scope state, allowing callers to determine whether cached protection scopes should be refreshed.
     * @param ProcessContentPostRequestBody $body The request body
     * @param ProcessContentRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ProcessContentResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/tenantdatasecurityandgovernance-processcontent?view=graph-rest-beta Find more info here
    */
    public function post(ProcessContentPostRequestBody $body, ?ProcessContentRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ProcessContentResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Evaluate content against Microsoft Purview Data Loss Prevention (DLP) policies and return the policy actions that apply to the supplied content. Use this API when an application needs to evaluate content before or during data movement. In Agent-to-Tool (A2T) scenarios, the agent runtime calls this API before invoking an external tool to determine whether the content should be allowed, blocked, or audited according to Microsoft Purview policies. For A2T scenarios: The response contains any applicable policy actions together with the protection scope state, allowing callers to determine whether cached protection scopes should be refreshed.
     * @param ProcessContentPostRequestBody $body The request body
     * @param ProcessContentRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ProcessContentPostRequestBody $body, ?ProcessContentRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ProcessContentRequestBuilder
    */
    public function withUrl(string $rawUrl): ProcessContentRequestBuilder {
        return new ProcessContentRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
