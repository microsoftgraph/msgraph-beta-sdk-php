<?php

namespace Microsoft\Graph\Beta\Generated\Reports\GetMicrosoft365CopilotUserCountSummaryWithPeriodWithVersion;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to call the getMicrosoft365CopilotUserCountSummary method.
*/
class GetMicrosoft365CopilotUserCountSummaryWithPeriodWithVersionRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetMicrosoft365CopilotUserCountSummaryWithPeriodWithVersionRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $period Usage: period='{period}'
     * @param string|null $version Usage: version='{version}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $period = null, ?string $version = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/getMicrosoft365CopilotUserCountSummary(period=\'{period}\',version=\'{version}\')');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['period'] = $period;
            $urlTplParams['version'] = $version;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the aggregated number of active and enabled users of Microsoft 365 Copilot for a specified time period.
     * @param GetMicrosoft365CopilotUserCountSummaryWithPeriodWithVersionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/reportroot-getmicrosoft365copilotusercountsummary?view=graph-rest-beta Find more info here
    */
    public function get(?GetMicrosoft365CopilotUserCountSummaryWithPeriodWithVersionRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * Get the aggregated number of active and enabled users of Microsoft 365 Copilot for a specified time period.
     * @param GetMicrosoft365CopilotUserCountSummaryWithPeriodWithVersionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetMicrosoft365CopilotUserCountSummaryWithPeriodWithVersionRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/octet-stream, application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetMicrosoft365CopilotUserCountSummaryWithPeriodWithVersionRequestBuilder
    */
    public function withUrl(string $rawUrl): GetMicrosoft365CopilotUserCountSummaryWithPeriodWithVersionRequestBuilder {
        return new GetMicrosoft365CopilotUserCountSummaryWithPeriodWithVersionRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
