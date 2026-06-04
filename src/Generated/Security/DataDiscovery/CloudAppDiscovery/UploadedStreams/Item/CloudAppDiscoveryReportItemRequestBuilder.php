<?php

namespace Microsoft\Graph\Beta\Generated\Security\DataDiscovery\CloudAppDiscovery\UploadedStreams\Item;

use DateInterval;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\CloudAppDiscoveryReport;
use Microsoft\Graph\Beta\Generated\Security\DataDiscovery\CloudAppDiscovery\UploadedStreams\Item\MicrosoftGraphSecurityAggregatedAppsDetailsWithPeriod\MicrosoftGraphSecurityAggregatedAppsDetailsWithPeriodRe_c8549a32;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the uploadedStreams property of the microsoft.graph.security.dataDiscoveryReport entity.
*/
class CloudAppDiscoveryReportItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CloudAppDiscoveryReportItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/dataDiscovery/cloudAppDiscovery/uploadedStreams/{cloudAppDiscoveryReport%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property uploadedStreams for security
     * @param CloudAppDiscoveryReportItemRequestBuilderDeleteRequestC_9c29be44|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?CloudAppDiscoveryReportItemRequestBuilderDeleteRequestC_9c29be44 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * A collection of streams available for generating cloud discovery report.
     * @param CloudAppDiscoveryReportItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudAppDiscoveryReport|null>
     * @throws Exception
    */
    public function get(?CloudAppDiscoveryReportItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudAppDiscoveryReport::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the aggregatedAppsDetails method.
     * @param DateInterval $period Usage: period={period}
     * @return MicrosoftGraphSecurityAggregatedAppsDetailsWithPeriodRe_c8549a32
    */
    public function microsoftGraphSecurityAggregatedAppsDetailsWithPeriod(DateInterval $period): MicrosoftGraphSecurityAggregatedAppsDetailsWithPeriodRe_c8549a32 {
        return new MicrosoftGraphSecurityAggregatedAppsDetailsWithPeriodRe_c8549a32($this->pathParameters, $this->requestAdapter, $period);
    }

    /**
     * Update the navigation property uploadedStreams in security
     * @param CloudAppDiscoveryReport $body The request body
     * @param CloudAppDiscoveryReportItemRequestBuilderPatchRequestCo_59aa1bbf|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudAppDiscoveryReport|null>
     * @throws Exception
    */
    public function patch(CloudAppDiscoveryReport $body, ?CloudAppDiscoveryReportItemRequestBuilderPatchRequestCo_59aa1bbf $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudAppDiscoveryReport::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property uploadedStreams for security
     * @param CloudAppDiscoveryReportItemRequestBuilderDeleteRequestC_9c29be44|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CloudAppDiscoveryReportItemRequestBuilderDeleteRequestC_9c29be44 $requestConfiguration = null): RequestInformation {
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
     * A collection of streams available for generating cloud discovery report.
     * @param CloudAppDiscoveryReportItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CloudAppDiscoveryReportItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/security/dataDiscovery/cloudAppDiscovery/uploadedStreams/{cloudAppDiscoveryReport%2Did}{?%24expand,%24select}';
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
     * Update the navigation property uploadedStreams in security
     * @param CloudAppDiscoveryReport $body The request body
     * @param CloudAppDiscoveryReportItemRequestBuilderPatchRequestCo_59aa1bbf|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CloudAppDiscoveryReport $body, ?CloudAppDiscoveryReportItemRequestBuilderPatchRequestCo_59aa1bbf $requestConfiguration = null): RequestInformation {
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
     * @return CloudAppDiscoveryReportItemRequestBuilder
    */
    public function withUrl(string $rawUrl): CloudAppDiscoveryReportItemRequestBuilder {
        return new CloudAppDiscoveryReportItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
