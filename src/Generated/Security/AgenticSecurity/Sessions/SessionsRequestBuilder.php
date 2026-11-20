<?php

namespace Microsoft\Graph\Beta\Generated\Security\AgenticSecurity\Sessions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\InvestigationSession;
use Microsoft\Graph\Beta\Generated\Models\InvestigationSessionCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Security\AgenticSecurity\Sessions\Item\InvestigationSessionItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the sessions property of the microsoft.graph.agenticSecurityRoot entity.
*/
class SessionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the sessions property of the microsoft.graph.agenticSecurityRoot entity.
     * @param string $investigationSessionId The unique identifier of investigationSession
     * @return InvestigationSessionItemRequestBuilder
    */
    public function byInvestigationSessionId(string $investigationSessionId): InvestigationSessionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['investigationSession%2Did'] = $investigationSessionId;
        return new InvestigationSessionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SessionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/agenticSecurity/sessions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List the agentic sessions visible to the signed-in user. This operation uses the agentic session resource.
     * @param SessionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<InvestigationSessionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/agenticsecurityroot-list-sessions?view=graph-rest-beta Find more info here
    */
    public function get(?SessionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [InvestigationSessionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create an agentic session to run an existing playbook against typed inputs. This operation uses the agentic session resource.
     * @param InvestigationSession $body The request body
     * @param SessionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<InvestigationSession|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/agenticsecurityroot-post-sessions?view=graph-rest-beta Find more info here
    */
    public function post(InvestigationSession $body, ?SessionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [InvestigationSession::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List the agentic sessions visible to the signed-in user. This operation uses the agentic session resource.
     * @param SessionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SessionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create an agentic session to run an existing playbook against typed inputs. This operation uses the agentic session resource.
     * @param InvestigationSession $body The request body
     * @param SessionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(InvestigationSession $body, ?SessionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SessionsRequestBuilder
    */
    public function withUrl(string $rawUrl): SessionsRequestBuilder {
        return new SessionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
