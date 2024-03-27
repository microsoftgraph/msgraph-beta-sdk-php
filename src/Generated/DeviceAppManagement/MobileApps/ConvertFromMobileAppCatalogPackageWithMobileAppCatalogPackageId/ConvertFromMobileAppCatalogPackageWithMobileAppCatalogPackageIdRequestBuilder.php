<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\ConvertFromMobileAppCatalogPackageWithMobileAppCatalogPackageId;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\MobileApp;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the convertFromMobileAppCatalogPackage method.
*/
class ConvertFromMobileAppCatalogPackageWithMobileAppCatalogPackageIdRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ConvertFromMobileAppCatalogPackageWithMobileAppCatalogPackageIdRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $mobileAppCatalogPackageId Usage: mobileAppCatalogPackageId='{mobileAppCatalogPackageId}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $mobileAppCatalogPackageId = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceAppManagement/mobileApps/convertFromMobileAppCatalogPackage(mobileAppCatalogPackageId=\'{mobileAppCatalogPackageId}\')');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['mobileAppCatalogPackageId'] = $mobileAppCatalogPackageId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function convertFromMobileAppCatalogPackage
     * @param ConvertFromMobileAppCatalogPackageWithMobileAppCatalogPackageIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MobileApp|null>
     * @throws Exception
    */
    public function get(?ConvertFromMobileAppCatalogPackageWithMobileAppCatalogPackageIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MobileApp::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function convertFromMobileAppCatalogPackage
     * @param ConvertFromMobileAppCatalogPackageWithMobileAppCatalogPackageIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ConvertFromMobileAppCatalogPackageWithMobileAppCatalogPackageIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ConvertFromMobileAppCatalogPackageWithMobileAppCatalogPackageIdRequestBuilder
    */
    public function withUrl(string $rawUrl): ConvertFromMobileAppCatalogPackageWithMobileAppCatalogPackageIdRequestBuilder {
        return new ConvertFromMobileAppCatalogPackageWithMobileAppCatalogPackageIdRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
