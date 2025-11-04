<?php

namespace Microsoft\\Graph\\Beta\\Generated\Reports\HealthMonitoring;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\HealthMonitoring\HealthMonitoringRoot;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\Reports\HealthMonitoring\AlertConfigurations\AlertConfigurationsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\HealthMonitoring\Alerts\AlertsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the healthMonitoring property of the microsoft.graph.reportRoot entity.
*/
class HealthMonitoringRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the alertConfigurations property of the microsoft.graph.healthMonitoring.healthMonitoringRoot entity.
    */
    public function alertConfigurations(): AlertConfigurationsRequestBuilder {
        return new AlertConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the alerts property of the microsoft.graph.healthMonitoring.healthMonitoringRoot entity.
    */
    public function alerts(): AlertsRequestBuilder {
        return new AlertsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new HealthMonitoringRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/healthMonitoring{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property healthMonitoring for reports
     * @param HealthMonitoringRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?HealthMonitoringRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Reports for Microsoft Entra Health Monitoring.
     * @param HealthMonitoringRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<HealthMonitoringRoot|null>
     * @throws Exception
    */
    public function get(?HealthMonitoringRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [HealthMonitoringRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property healthMonitoring in reports
     * @param HealthMonitoringRoot $body The request body
     * @param HealthMonitoringRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<HealthMonitoringRoot|null>
     * @throws Exception
    */
    public function patch(HealthMonitoringRoot $body, ?HealthMonitoringRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [HealthMonitoringRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property healthMonitoring for reports
     * @param HealthMonitoringRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?HealthMonitoringRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Reports for Microsoft Entra Health Monitoring.
     * @param HealthMonitoringRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?HealthMonitoringRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property healthMonitoring in reports
     * @param HealthMonitoringRoot $body The request body
     * @param HealthMonitoringRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(HealthMonitoringRoot $body, ?HealthMonitoringRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return HealthMonitoringRequestBuilder
    */
    public function withUrl(string $rawUrl): HealthMonitoringRequestBuilder {
        return new HealthMonitoringRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
