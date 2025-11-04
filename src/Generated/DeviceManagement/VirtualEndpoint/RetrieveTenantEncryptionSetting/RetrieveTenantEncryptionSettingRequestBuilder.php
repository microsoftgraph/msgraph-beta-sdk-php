<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\VirtualEndpoint\RetrieveTenantEncryptionSetting;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\CloudPcTenantEncryptionSetting;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the retrieveTenantEncryptionSetting method.
*/
class RetrieveTenantEncryptionSettingRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RetrieveTenantEncryptionSettingRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/retrieveTenantEncryptionSetting()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function retrieveTenantEncryptionSetting
     * @param RetrieveTenantEncryptionSettingRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcTenantEncryptionSetting|null>
     * @throws Exception
    */
    public function get(?RetrieveTenantEncryptionSettingRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcTenantEncryptionSetting::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function retrieveTenantEncryptionSetting
     * @param RetrieveTenantEncryptionSettingRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RetrieveTenantEncryptionSettingRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return RetrieveTenantEncryptionSettingRequestBuilder
    */
    public function withUrl(string $rawUrl): RetrieveTenantEncryptionSettingRequestBuilder {
        return new RetrieveTenantEncryptionSettingRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
