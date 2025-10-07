<?php

namespace Microsoft\\Graph\\Beta\\Generated\Admin\ConfigurationManagement\ConfigurationMonitoringResults;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Admin\ConfigurationManagement\ConfigurationMonitoringResults\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Admin\ConfigurationManagement\ConfigurationMonitoringResults\Item\ConfigurationMonitoringResultItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\ConfigurationMonitoringResult;
use Microsoft\\Graph\\Beta\\Generated\Models\ConfigurationMonitoringResultCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the configurationMonitoringResults property of the microsoft.graph.configurationManagement entity.
*/
class ConfigurationMonitoringResultsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the configurationMonitoringResults property of the microsoft.graph.configurationManagement entity.
     * @param string $configurationMonitoringResultId The unique identifier of configurationMonitoringResult
     * @return ConfigurationMonitoringResultItemRequestBuilder
    */
    public function byConfigurationMonitoringResultId(string $configurationMonitoringResultId): ConfigurationMonitoringResultItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['configurationMonitoringResult%2Did'] = $configurationMonitoringResultId;
        return new ConfigurationMonitoringResultItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ConfigurationMonitoringResultsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/configurationManagement/configurationMonitoringResults{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get configurationMonitoringResults from admin
     * @param ConfigurationMonitoringResultsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConfigurationMonitoringResultCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ConfigurationMonitoringResultsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConfigurationMonitoringResultCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to configurationMonitoringResults for admin
     * @param ConfigurationMonitoringResult $body The request body
     * @param ConfigurationMonitoringResultsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConfigurationMonitoringResult|null>
     * @throws Exception
    */
    public function post(ConfigurationMonitoringResult $body, ?ConfigurationMonitoringResultsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConfigurationMonitoringResult::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get configurationMonitoringResults from admin
     * @param ConfigurationMonitoringResultsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ConfigurationMonitoringResultsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to configurationMonitoringResults for admin
     * @param ConfigurationMonitoringResult $body The request body
     * @param ConfigurationMonitoringResultsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ConfigurationMonitoringResult $body, ?ConfigurationMonitoringResultsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ConfigurationMonitoringResultsRequestBuilder
    */
    public function withUrl(string $rawUrl): ConfigurationMonitoringResultsRequestBuilder {
        return new ConfigurationMonitoringResultsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
