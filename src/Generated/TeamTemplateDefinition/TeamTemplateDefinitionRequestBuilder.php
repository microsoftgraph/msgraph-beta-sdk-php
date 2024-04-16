<?php

namespace Microsoft\Graph\Beta\Generated\TeamTemplateDefinition;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\TeamTemplateDefinition;
use Microsoft\Graph\Beta\Generated\Models\TeamTemplateDefinitionCollectionResponse;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamTemplateDefinitionItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collection of teamTemplateDefinition entities.
*/
class TeamTemplateDefinitionRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of teamTemplateDefinition entities.
     * @param string $teamTemplateDefinitionId The unique identifier of teamTemplateDefinition
     * @return TeamTemplateDefinitionItemRequestBuilder
    */
    public function byTeamTemplateDefinitionId(string $teamTemplateDefinitionId): TeamTemplateDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamTemplateDefinition%2Did'] = $teamTemplateDefinitionId;
        return new TeamTemplateDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TeamTemplateDefinitionRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/teamTemplateDefinition{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get entities from teamTemplateDefinition
     * @param TeamTemplateDefinitionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TeamTemplateDefinitionCollectionResponse|null>
     * @throws Exception
    */
    public function get(?TeamTemplateDefinitionRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TeamTemplateDefinitionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Add new entity to teamTemplateDefinition
     * @param TeamTemplateDefinition $body The request body
     * @param TeamTemplateDefinitionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TeamTemplateDefinition|null>
     * @throws Exception
    */
    public function post(TeamTemplateDefinition $body, ?TeamTemplateDefinitionRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TeamTemplateDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get entities from teamTemplateDefinition
     * @param TeamTemplateDefinitionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TeamTemplateDefinitionRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Add new entity to teamTemplateDefinition
     * @param TeamTemplateDefinition $body The request body
     * @param TeamTemplateDefinitionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(TeamTemplateDefinition $body, ?TeamTemplateDefinitionRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TeamTemplateDefinitionRequestBuilder
    */
    public function withUrl(string $rawUrl): TeamTemplateDefinitionRequestBuilder {
        return new TeamTemplateDefinitionRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
