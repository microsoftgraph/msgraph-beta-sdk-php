<?php

namespace Microsoft\Graph\Beta\Generated\Security\AgenticSecurity\Sessions\Item\AgentRuns;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\AgentRunCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Security\AgenticSecurity\Sessions\Item\AgentRuns\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\AgenticSecurity\Sessions\Item\AgentRuns\Item\AgentRunItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the agentRuns property of the microsoft.graph.investigationSession entity.
*/
class AgentRunsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the agentRuns property of the microsoft.graph.investigationSession entity.
     * @param string $agentRunId The unique identifier of agentRun
     * @return AgentRunItemRequestBuilder
    */
    public function byAgentRunId(string $agentRunId): AgentRunItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['agentRun%2Did'] = $agentRunId;
        return new AgentRunItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AgentRunsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/agenticSecurity/sessions/{investigationSession%2Did}/agentRuns{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List the agent runs owned by an agentic session. This operation uses the agentRun resource. Use this method to inspect individual agents contributing to a session. To monitor the overall playbook execution, get the session and inspect its status instead of inferring the session state from one agent run.
     * @param AgentRunsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AgentRunCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/investigationsession-list-agentruns?view=graph-rest-beta Find more info here
    */
    public function get(?AgentRunsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AgentRunCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List the agent runs owned by an agentic session. This operation uses the agentRun resource. Use this method to inspect individual agents contributing to a session. To monitor the overall playbook execution, get the session and inspect its status instead of inferring the session state from one agent run.
     * @param AgentRunsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AgentRunsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AgentRunsRequestBuilder
    */
    public function withUrl(string $rawUrl): AgentRunsRequestBuilder {
        return new AgentRunsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
