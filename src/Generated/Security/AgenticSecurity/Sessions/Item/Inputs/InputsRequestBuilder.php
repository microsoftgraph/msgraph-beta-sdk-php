<?php

namespace Microsoft\Graph\Beta\Generated\Security\AgenticSecurity\Sessions\Item\Inputs;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\InvestigationInputCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Security\AgenticSecurity\Sessions\Item\Inputs\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\AgenticSecurity\Sessions\Item\Inputs\Item\InvestigationInputItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the inputs property of the microsoft.graph.investigationSession entity.
*/
class InputsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the inputs property of the microsoft.graph.investigationSession entity.
     * @param string $investigationInputId The unique identifier of investigationInput
     * @return InvestigationInputItemRequestBuilder
    */
    public function byInvestigationInputId(string $investigationInputId): InvestigationInputItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['investigationInput%2Did'] = $investigationInputId;
        return new InvestigationInputItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new InputsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/agenticSecurity/sessions/{investigationSession%2Did}/inputs{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List the shared input references contained by an agentic session. This operation uses the agentic input resource.
     * @param InputsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<InvestigationInputCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/investigationsession-list-inputs?view=graph-rest-beta Find more info here
    */
    public function get(?InputsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [InvestigationInputCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List the shared input references contained by an agentic session. This operation uses the agentic input resource.
     * @param InputsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?InputsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return InputsRequestBuilder
    */
    public function withUrl(string $rawUrl): InputsRequestBuilder {
        return new InputsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
