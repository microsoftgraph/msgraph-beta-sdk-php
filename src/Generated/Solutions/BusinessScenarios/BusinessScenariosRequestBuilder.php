<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BusinessScenarios;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\BusinessScenario;
use Microsoft\Graph\Beta\Generated\Models\BusinessScenarioCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Solutions\BusinessScenarios\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\BusinessScenarios\Item\BusinessScenarioItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the businessScenarios property of the microsoft.graph.solutionsRoot entity.
*/
class BusinessScenariosRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the businessScenarios property of the microsoft.graph.solutionsRoot entity.
     * @param string $businessScenarioId The unique identifier of businessScenario
     * @return BusinessScenarioItemRequestBuilder
    */
    public function byBusinessScenarioId(string $businessScenarioId): BusinessScenarioItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['businessScenario%2Did'] = $businessScenarioId;
        return new BusinessScenarioItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new BusinessScenariosRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/businessScenarios{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of all businessScenario objects in an organization.
     * @param BusinessScenariosRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BusinessScenarioCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/solutionsroot-list-businessscenarios?view=graph-rest-beta Find more info here
    */
    public function get(?BusinessScenariosRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BusinessScenarioCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new businessScenario object.
     * @param BusinessScenario $body The request body
     * @param BusinessScenariosRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BusinessScenario|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/solutionsroot-post-businessscenarios?view=graph-rest-beta Find more info here
    */
    public function post(BusinessScenario $body, ?BusinessScenariosRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BusinessScenario::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of all businessScenario objects in an organization.
     * @param BusinessScenariosRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?BusinessScenariosRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new businessScenario object.
     * @param BusinessScenario $body The request body
     * @param BusinessScenariosRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BusinessScenario $body, ?BusinessScenariosRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return BusinessScenariosRequestBuilder
    */
    public function withUrl(string $rawUrl): BusinessScenariosRequestBuilder {
        return new BusinessScenariosRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
