<?php

namespace Microsoft\Graph\Beta\Generated\DataClassification\ExactMatchUploadAgents;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DataClassification\ExactMatchUploadAgents\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\ExactMatchUploadAgents\Item\ExactMatchUploadAgentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ExactMatchUploadAgent;
use Microsoft\Graph\Beta\Generated\Models\ExactMatchUploadAgentCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the exactMatchUploadAgents property of the microsoft.graph.dataClassificationService entity.
*/
class ExactMatchUploadAgentsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the exactMatchUploadAgents property of the microsoft.graph.dataClassificationService entity.
     * @param string $exactMatchUploadAgentId The unique identifier of exactMatchUploadAgent
     * @return ExactMatchUploadAgentItemRequestBuilder
    */
    public function byExactMatchUploadAgentId(string $exactMatchUploadAgentId): ExactMatchUploadAgentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['exactMatchUploadAgent%2Did'] = $exactMatchUploadAgentId;
        return new ExactMatchUploadAgentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ExactMatchUploadAgentsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/dataClassification/exactMatchUploadAgents{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get exactMatchUploadAgents from dataClassification
     * @param ExactMatchUploadAgentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExactMatchUploadAgentCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ExactMatchUploadAgentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExactMatchUploadAgentCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to exactMatchUploadAgents for dataClassification
     * @param ExactMatchUploadAgent $body The request body
     * @param ExactMatchUploadAgentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExactMatchUploadAgent|null>
     * @throws Exception
    */
    public function post(ExactMatchUploadAgent $body, ?ExactMatchUploadAgentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExactMatchUploadAgent::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get exactMatchUploadAgents from dataClassification
     * @param ExactMatchUploadAgentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ExactMatchUploadAgentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Create new navigation property to exactMatchUploadAgents for dataClassification
     * @param ExactMatchUploadAgent $body The request body
     * @param ExactMatchUploadAgentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ExactMatchUploadAgent $body, ?ExactMatchUploadAgentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ExactMatchUploadAgentsRequestBuilder
    */
    public function withUrl(string $rawUrl): ExactMatchUploadAgentsRequestBuilder {
        return new ExactMatchUploadAgentsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
