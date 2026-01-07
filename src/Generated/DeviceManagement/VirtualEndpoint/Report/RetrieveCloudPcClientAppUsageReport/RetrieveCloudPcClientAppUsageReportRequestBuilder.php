<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Report\RetrieveCloudPcClientAppUsageReport;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to call the retrieveCloudPcClientAppUsageReport method.
*/
class RetrieveCloudPcClientAppUsageReportRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RetrieveCloudPcClientAppUsageReportRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/report/retrieveCloudPcClientAppUsageReport');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve related reports on Cloud PC usage, including the client application used by users to sign in to the Cloud PC device. The Remote Desktop client standalone installer (MSI) for Windows will reach end of support on March 27, 2026. Before that date, IT administrators should migrate users to Windows App to ensure continued access to remote resources through Azure Virtual Desktop, Windows 365, and Microsoft Dev Box. Learn more about preparing for the Remote Desktop Client for Windows end of support. This API enables IT administrators to check the migration status by confirming whether users are still using the legacy Remote Desktop client and identifying their last sign-in dates, thereby helping monitor progress and ensure compliance with migration requirements.
     * @param RetrieveCloudPcClientAppUsageReportPostRequestBody $body The request body
     * @param RetrieveCloudPcClientAppUsageReportRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpcreport-retrievecloudpcclientappusagereport?view=graph-rest-beta Find more info here
    */
    public function post(RetrieveCloudPcClientAppUsageReportPostRequestBody $body, ?RetrieveCloudPcClientAppUsageReportRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * Retrieve related reports on Cloud PC usage, including the client application used by users to sign in to the Cloud PC device. The Remote Desktop client standalone installer (MSI) for Windows will reach end of support on March 27, 2026. Before that date, IT administrators should migrate users to Windows App to ensure continued access to remote resources through Azure Virtual Desktop, Windows 365, and Microsoft Dev Box. Learn more about preparing for the Remote Desktop Client for Windows end of support. This API enables IT administrators to check the migration status by confirming whether users are still using the legacy Remote Desktop client and identifying their last sign-in dates, thereby helping monitor progress and ensure compliance with migration requirements.
     * @param RetrieveCloudPcClientAppUsageReportPostRequestBody $body The request body
     * @param RetrieveCloudPcClientAppUsageReportRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RetrieveCloudPcClientAppUsageReportPostRequestBody $body, ?RetrieveCloudPcClientAppUsageReportRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/octet-stream, application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return RetrieveCloudPcClientAppUsageReportRequestBuilder
    */
    public function withUrl(string $rawUrl): RetrieveCloudPcClientAppUsageReportRequestBuilder {
        return new RetrieveCloudPcClientAppUsageReportRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
