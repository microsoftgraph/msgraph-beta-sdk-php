<?php

namespace Microsoft\Graph\Beta\Generated\External\IndustryData\ReferenceDefinitions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\External\IndustryData\ReferenceDefinitions\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\ReferenceDefinitions\Item\ReferenceDefinitionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\IndustryData\ReferenceDefinition;
use Microsoft\Graph\Beta\Generated\Models\IndustryData\ReferenceDefinitionCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the referenceDefinitions property of the microsoft.graph.industryData.industryDataRoot entity.
*/
class ReferenceDefinitionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the referenceDefinitions property of the microsoft.graph.industryData.industryDataRoot entity.
     * @param string $referenceDefinitionId The unique identifier of referenceDefinition
     * @return ReferenceDefinitionItemRequestBuilder
    */
    public function byReferenceDefinitionId(string $referenceDefinitionId): ReferenceDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['referenceDefinition%2Did'] = $referenceDefinitionId;
        return new ReferenceDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ReferenceDefinitionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/external/industryData/referenceDefinitions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the referenceDefinition objects and their properties.
     * @param ReferenceDefinitionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ReferenceDefinitionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/industrydata-referencedefinition-list?view=graph-rest-beta Find more info here
    */
    public function get(?ReferenceDefinitionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ReferenceDefinitionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new referenceDefinition object. referenceDefinition objects associate incoming data with standardized reference types values for validation. You can extend the following reference types with other codes that better align with your source data.
     * @param ReferenceDefinition $body The request body
     * @param ReferenceDefinitionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ReferenceDefinition|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/industrydata-referencedefinition-post?view=graph-rest-beta Find more info here
    */
    public function post(ReferenceDefinition $body, ?ReferenceDefinitionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ReferenceDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the referenceDefinition objects and their properties.
     * @param ReferenceDefinitionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ReferenceDefinitionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new referenceDefinition object. referenceDefinition objects associate incoming data with standardized reference types values for validation. You can extend the following reference types with other codes that better align with your source data.
     * @param ReferenceDefinition $body The request body
     * @param ReferenceDefinitionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ReferenceDefinition $body, ?ReferenceDefinitionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ReferenceDefinitionsRequestBuilder
    */
    public function withUrl(string $rawUrl): ReferenceDefinitionsRequestBuilder {
        return new ReferenceDefinitionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
