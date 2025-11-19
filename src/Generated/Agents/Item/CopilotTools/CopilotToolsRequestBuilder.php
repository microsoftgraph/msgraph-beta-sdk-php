<?php

namespace Microsoft\\Graph\\Beta\\Generated\Agents\Item\CopilotTools;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Agents\Item\CopilotTools\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Agents\Item\CopilotTools\Item\CopilotToolCopilotToolNameItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\CopilotTool;
use Microsoft\\Graph\\Beta\\Generated\Models\CopilotToolCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the copilotTools property of the microsoft.graph.agent entity.
*/
class CopilotToolsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the copilotTools property of the microsoft.graph.agent entity.
     * @param string $copilotToolCopilotToolName The unique identifier of copilotTool
     * @return CopilotToolCopilotToolNameItemRequestBuilder
    */
    public function byCopilotToolCopilotToolName(string $copilotToolCopilotToolName): CopilotToolCopilotToolNameItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['copilotTool%2DcopilotToolName'] = $copilotToolCopilotToolName;
        return new CopilotToolCopilotToolNameItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CopilotToolsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/agents/{agent%2Did}/copilotTools{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get copilotTools from agents
     * @param CopilotToolsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CopilotToolCollectionResponse|null>
     * @throws Exception
    */
    public function get(?CopilotToolsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CopilotToolCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to copilotTools for agents
     * @param CopilotTool $body The request body
     * @param CopilotToolsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CopilotTool|null>
     * @throws Exception
    */
    public function post(CopilotTool $body, ?CopilotToolsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CopilotTool::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get copilotTools from agents
     * @param CopilotToolsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CopilotToolsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to copilotTools for agents
     * @param CopilotTool $body The request body
     * @param CopilotToolsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CopilotTool $body, ?CopilotToolsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CopilotToolsRequestBuilder
    */
    public function withUrl(string $rawUrl): CopilotToolsRequestBuilder {
        return new CopilotToolsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
