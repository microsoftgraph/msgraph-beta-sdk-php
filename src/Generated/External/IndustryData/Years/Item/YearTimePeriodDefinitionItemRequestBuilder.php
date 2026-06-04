<?php

namespace Microsoft\Graph\Beta\Generated\External\IndustryData\Years\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\IndustryData\YearTimePeriodDefinition;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the years property of the microsoft.graph.industryData.industryDataRoot entity.
*/
class YearTimePeriodDefinitionItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new YearTimePeriodDefinitionItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/external/industryData/years/{yearTimePeriodDefinition%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a yearTimePeriodDefinition object.
     * @param YearTimePeriodDefinitionItemRequestBuilderDeleteRequest_173d9be6|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/industrydata-yeartimeperioddefinition-delete?view=graph-rest-beta Find more info here
    */
    public function delete(?YearTimePeriodDefinitionItemRequestBuilderDeleteRequest_173d9be6 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a yearTimePeriodDefinition object.
     * @param YearTimePeriodDefinitionItemRequestBuilderGetRequestCon_8c1d78d9|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<YearTimePeriodDefinition|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/industrydata-yeartimeperioddefinition-get?view=graph-rest-beta Find more info here
    */
    public function get(?YearTimePeriodDefinitionItemRequestBuilderGetRequestCon_8c1d78d9 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [YearTimePeriodDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a yearTimePeriodDefinition object.
     * @param YearTimePeriodDefinition $body The request body
     * @param YearTimePeriodDefinitionItemRequestBuilderPatchRequestC_c490d789|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<YearTimePeriodDefinition|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/industrydata-yeartimeperioddefinition-update?view=graph-rest-beta Find more info here
    */
    public function patch(YearTimePeriodDefinition $body, ?YearTimePeriodDefinitionItemRequestBuilderPatchRequestC_c490d789 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [YearTimePeriodDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a yearTimePeriodDefinition object.
     * @param YearTimePeriodDefinitionItemRequestBuilderDeleteRequest_173d9be6|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?YearTimePeriodDefinitionItemRequestBuilderDeleteRequest_173d9be6 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Read the properties and relationships of a yearTimePeriodDefinition object.
     * @param YearTimePeriodDefinitionItemRequestBuilderGetRequestCon_8c1d78d9|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?YearTimePeriodDefinitionItemRequestBuilderGetRequestCon_8c1d78d9 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/external/industryData/years/{yearTimePeriodDefinition%2Did}{?%24expand,%24select}';
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
     * Update the properties of a yearTimePeriodDefinition object.
     * @param YearTimePeriodDefinition $body The request body
     * @param YearTimePeriodDefinitionItemRequestBuilderPatchRequestC_c490d789|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(YearTimePeriodDefinition $body, ?YearTimePeriodDefinitionItemRequestBuilderPatchRequestC_c490d789 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return YearTimePeriodDefinitionItemRequestBuilder
    */
    public function withUrl(string $rawUrl): YearTimePeriodDefinitionItemRequestBuilder {
        return new YearTimePeriodDefinitionItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
