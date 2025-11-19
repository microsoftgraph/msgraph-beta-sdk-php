<?php

namespace Microsoft\\Graph\\Beta\\Generated\IdentityProtection\RiskyAgents;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\IdentityProtection\RiskyAgents\ConfirmCompromised\ConfirmCompromisedRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\IdentityProtection\RiskyAgents\ConfirmSafe\ConfirmSafeRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\IdentityProtection\RiskyAgents\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\IdentityProtection\RiskyAgents\Dismiss\DismissRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\IdentityProtection\RiskyAgents\Item\RiskyAgentItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\Models\RiskyAgent;
use Microsoft\\Graph\\Beta\\Generated\Models\RiskyAgentCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the riskyAgents property of the microsoft.graph.identityProtectionRoot entity.
*/
class RiskyAgentsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the confirmCompromised method.
    */
    public function confirmCompromised(): ConfirmCompromisedRequestBuilder {
        return new ConfirmCompromisedRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the confirmSafe method.
    */
    public function confirmSafe(): ConfirmSafeRequestBuilder {
        return new ConfirmSafeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dismiss method.
    */
    public function dismiss(): DismissRequestBuilder {
        return new DismissRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the riskyAgents property of the microsoft.graph.identityProtectionRoot entity.
     * @param string $riskyAgentId The unique identifier of riskyAgent
     * @return RiskyAgentItemRequestBuilder
    */
    public function byRiskyAgentId(string $riskyAgentId): RiskyAgentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['riskyAgent%2Did'] = $riskyAgentId;
        return new RiskyAgentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RiskyAgentsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityProtection/riskyAgents{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the properties and relationships of a collection of riskyAgent objects.
     * @param RiskyAgentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RiskyAgentCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/riskyagent-list?view=graph-rest-beta Find more info here
    */
    public function get(?RiskyAgentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RiskyAgentCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to riskyAgents for identityProtection
     * @param RiskyAgent $body The request body
     * @param RiskyAgentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RiskyAgent|null>
     * @throws Exception
    */
    public function post(RiskyAgent $body, ?RiskyAgentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RiskyAgent::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the properties and relationships of a collection of riskyAgent objects.
     * @param RiskyAgentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RiskyAgentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to riskyAgents for identityProtection
     * @param RiskyAgent $body The request body
     * @param RiskyAgentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RiskyAgent $body, ?RiskyAgentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RiskyAgentsRequestBuilder
    */
    public function withUrl(string $rawUrl): RiskyAgentsRequestBuilder {
        return new RiskyAgentsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
