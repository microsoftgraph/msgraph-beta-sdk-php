<?php

namespace Microsoft\Graph\Beta\Generated\Reports\GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppId;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to call the getApiUsage method. Original name: GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppIdRequestBuilder
*/
class GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppId_0ddf95d0 extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppId_0ddf95d0 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/getApiUsage(serviceArea=\'@serviceArea\',period=\'@period\',appId=\'@appId\'){?appId*,period*,serviceArea*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the tenant and app API usage for Microsoft Graph services.
     * @param GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppId_c1ef340b|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function get(?GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppId_c1ef340b $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * Get the tenant and app API usage for Microsoft Graph services.
     * @param GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppId_c1ef340b|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppId_c1ef340b $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/octet-stream, application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppId_0ddf95d0
    */
    public function withUrl(string $rawUrl): GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppId_0ddf95d0 {
        return new GetApiUsageserviceAreaServiceAreaPeriodPeriodAppIdAppId_0ddf95d0($rawUrl, $this->requestAdapter);
    }

}
