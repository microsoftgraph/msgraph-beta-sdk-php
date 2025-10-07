<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceAppManagement\MobileAppCatalogPackages;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\DeviceAppManagement\MobileAppCatalogPackages\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceAppManagement\MobileAppCatalogPackages\Item\MobileAppCatalogPackageItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\MobileAppCatalogPackage;
use Microsoft\\Graph\\Beta\\Generated\Models\MobileAppCatalogPackageCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mobileAppCatalogPackages property of the microsoft.graph.deviceAppManagement entity.
*/
class MobileAppCatalogPackagesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mobileAppCatalogPackages property of the microsoft.graph.deviceAppManagement entity.
     * @param string $mobileAppCatalogPackageId The unique identifier of mobileAppCatalogPackage
     * @return MobileAppCatalogPackageItemRequestBuilder
    */
    public function byMobileAppCatalogPackageId(string $mobileAppCatalogPackageId): MobileAppCatalogPackageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileAppCatalogPackage%2Did'] = $mobileAppCatalogPackageId;
        return new MobileAppCatalogPackageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MobileAppCatalogPackagesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceAppManagement/mobileAppCatalogPackages{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * MobileAppCatalogPackage entities.
     * @param MobileAppCatalogPackagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MobileAppCatalogPackageCollectionResponse|null>
     * @throws Exception
    */
    public function get(?MobileAppCatalogPackagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MobileAppCatalogPackageCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to mobileAppCatalogPackages for deviceAppManagement
     * @param MobileAppCatalogPackage $body The request body
     * @param MobileAppCatalogPackagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MobileAppCatalogPackage|null>
     * @throws Exception
    */
    public function post(MobileAppCatalogPackage $body, ?MobileAppCatalogPackagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MobileAppCatalogPackage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * MobileAppCatalogPackage entities.
     * @param MobileAppCatalogPackagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MobileAppCatalogPackagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to mobileAppCatalogPackages for deviceAppManagement
     * @param MobileAppCatalogPackage $body The request body
     * @param MobileAppCatalogPackagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MobileAppCatalogPackage $body, ?MobileAppCatalogPackagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MobileAppCatalogPackagesRequestBuilder
    */
    public function withUrl(string $rawUrl): MobileAppCatalogPackagesRequestBuilder {
        return new MobileAppCatalogPackagesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
