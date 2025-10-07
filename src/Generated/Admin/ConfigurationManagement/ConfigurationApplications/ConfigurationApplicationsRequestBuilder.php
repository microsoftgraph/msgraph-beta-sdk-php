<?php

namespace Microsoft\\Graph\\Beta\\Generated\Admin\ConfigurationManagement\ConfigurationApplications;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Admin\ConfigurationManagement\ConfigurationApplications\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Admin\ConfigurationManagement\ConfigurationApplications\Item\ConfigurationApplicationItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\ConfigurationApplication;
use Microsoft\\Graph\\Beta\\Generated\Models\ConfigurationApplicationCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the configurationApplications property of the microsoft.graph.configurationManagement entity.
*/
class ConfigurationApplicationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the configurationApplications property of the microsoft.graph.configurationManagement entity.
     * @param string $configurationApplicationId The unique identifier of configurationApplication
     * @return ConfigurationApplicationItemRequestBuilder
    */
    public function byConfigurationApplicationId(string $configurationApplicationId): ConfigurationApplicationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['configurationApplication%2Did'] = $configurationApplicationId;
        return new ConfigurationApplicationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ConfigurationApplicationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/configurationManagement/configurationApplications{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get configurationApplications from admin
     * @param ConfigurationApplicationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConfigurationApplicationCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ConfigurationApplicationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConfigurationApplicationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to configurationApplications for admin
     * @param ConfigurationApplication $body The request body
     * @param ConfigurationApplicationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConfigurationApplication|null>
     * @throws Exception
    */
    public function post(ConfigurationApplication $body, ?ConfigurationApplicationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConfigurationApplication::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get configurationApplications from admin
     * @param ConfigurationApplicationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ConfigurationApplicationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to configurationApplications for admin
     * @param ConfigurationApplication $body The request body
     * @param ConfigurationApplicationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ConfigurationApplication $body, ?ConfigurationApplicationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ConfigurationApplicationsRequestBuilder
    */
    public function withUrl(string $rawUrl): ConfigurationApplicationsRequestBuilder {
        return new ConfigurationApplicationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
