<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessGetCrossTenantSummaryWithStartDateTimeWithEndDateTimeWithDiscoveryPivotDateTime;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\Networkaccess\CrossTenantSummary;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getCrossTenantSummary method.
*/
class MicrosoftGraphNetworkaccessGetCrossTenantSummaryWithStartDateTimeWithEndDateTimeWithDiscoveryPivotDateTimeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetCrossTenantSummaryWithStartDateTimeWithEndDateTimeWithDiscoveryPivotDateTimeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param DateTime|null $discoveryPivotDateTime Usage: discoveryPivotDateTime={discoveryPivotDateTime}
     * @param DateTime|null $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime|null $startDateTime Usage: startDateTime={startDateTime}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?DateTime $discoveryPivotDateTime = null, ?DateTime $endDateTime = null, ?DateTime $startDateTime = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/networkAccess/reports/microsoft.graph.networkaccess.getCrossTenantSummary(startDateTime={startDateTime},endDateTime={endDateTime},discoveryPivotDateTime={discoveryPivotDateTime})');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['discoveryPivotDateTime'] = $discoveryPivotDateTime;
            $urlTplParams['endDateTime'] = $endDateTime;
            $urlTplParams['startDateTime'] = $startDateTime;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function getCrossTenantSummary
     * @param MicrosoftGraphNetworkaccessGetCrossTenantSummaryWithStartDateTimeWithEndDateTimeWithDiscoveryPivotDateTimeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?MicrosoftGraphNetworkaccessGetCrossTenantSummaryWithStartDateTimeWithEndDateTimeWithDiscoveryPivotDateTimeRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [CrossTenantSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Invoke function getCrossTenantSummary
     * @param MicrosoftGraphNetworkaccessGetCrossTenantSummaryWithStartDateTimeWithEndDateTimeWithDiscoveryPivotDateTimeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftGraphNetworkaccessGetCrossTenantSummaryWithStartDateTimeWithEndDateTimeWithDiscoveryPivotDateTimeRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return MicrosoftGraphNetworkaccessGetCrossTenantSummaryWithStartDateTimeWithEndDateTimeWithDiscoveryPivotDateTimeRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphNetworkaccessGetCrossTenantSummaryWithStartDateTimeWithEndDateTimeWithDiscoveryPivotDateTimeRequestBuilder {
        return new MicrosoftGraphNetworkaccessGetCrossTenantSummaryWithStartDateTimeWithEndDateTimeWithDiscoveryPivotDateTimeRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
