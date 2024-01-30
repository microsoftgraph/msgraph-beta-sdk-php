<?php

namespace Microsoft\Graph\Beta\Generated\AppCatalogs\TeamsApps\Item\AppDefinitions\Item\DashboardCards;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\AppCatalogs\TeamsApps\Item\AppDefinitions\Item\DashboardCards\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\AppCatalogs\TeamsApps\Item\AppDefinitions\Item\DashboardCards\Item\TeamsAppDashboardCardDefinitionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\TeamsAppDashboardCardDefinition;
use Microsoft\Graph\Beta\Generated\Models\TeamsAppDashboardCardDefinitionCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the dashboardCards property of the microsoft.graph.teamsAppDefinition entity.
*/
class DashboardCardsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the dashboardCards property of the microsoft.graph.teamsAppDefinition entity.
     * @param string $teamsAppDashboardCardDefinitionId The unique identifier of teamsAppDashboardCardDefinition
     * @return TeamsAppDashboardCardDefinitionItemRequestBuilder
    */
    public function byTeamsAppDashboardCardDefinitionId(string $teamsAppDashboardCardDefinitionId): TeamsAppDashboardCardDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsAppDashboardCardDefinition%2Did'] = $teamsAppDashboardCardDefinitionId;
        return new TeamsAppDashboardCardDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DashboardCardsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/appCatalogs/teamsApps/{teamsApp%2Did}/appDefinitions/{teamsAppDefinition%2Did}/dashboardCards{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get dashboardCards from appCatalogs
     * @param DashboardCardsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TeamsAppDashboardCardDefinitionCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DashboardCardsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TeamsAppDashboardCardDefinitionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to dashboardCards for appCatalogs
     * @param TeamsAppDashboardCardDefinition $body The request body
     * @param DashboardCardsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TeamsAppDashboardCardDefinition|null>
     * @throws Exception
    */
    public function post(TeamsAppDashboardCardDefinition $body, ?DashboardCardsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TeamsAppDashboardCardDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get dashboardCards from appCatalogs
     * @param DashboardCardsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DashboardCardsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to dashboardCards for appCatalogs
     * @param TeamsAppDashboardCardDefinition $body The request body
     * @param DashboardCardsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(TeamsAppDashboardCardDefinition $body, ?DashboardCardsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DashboardCardsRequestBuilder
    */
    public function withUrl(string $rawUrl): DashboardCardsRequestBuilder {
        return new DashboardCardsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
