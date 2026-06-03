<?php

namespace Microsoft\Graph\Beta\Generated\Admin\ReportSettings\SharePoint\EnableApiUsageReport;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ApiUsageReportEnablementStatus;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the enableApiUsageReport method.
*/
class EnableApiUsageReportRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new EnableApiUsageReportRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/reportSettings/sharePoint/enableApiUsageReport');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Enable a SharePoint API usage report metric for the tenant. After you enable a metric, SharePoint starts collecting and reporting data for that specific usage metric.
     * @param EnableApiUsageReportPostRequestBody $body The request body
     * @param EnableApiUsageReportRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApiUsageReportEnablementStatus|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/sharepointreportsettings-enableapiusagereport?view=graph-rest-beta Find more info here
    */
    public function post(EnableApiUsageReportPostRequestBody $body, ?EnableApiUsageReportRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApiUsageReportEnablementStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Enable a SharePoint API usage report metric for the tenant. After you enable a metric, SharePoint starts collecting and reporting data for that specific usage metric.
     * @param EnableApiUsageReportPostRequestBody $body The request body
     * @param EnableApiUsageReportRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EnableApiUsageReportPostRequestBody $body, ?EnableApiUsageReportRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return EnableApiUsageReportRequestBuilder
    */
    public function withUrl(string $rawUrl): EnableApiUsageReportRequestBuilder {
        return new EnableApiUsageReportRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
