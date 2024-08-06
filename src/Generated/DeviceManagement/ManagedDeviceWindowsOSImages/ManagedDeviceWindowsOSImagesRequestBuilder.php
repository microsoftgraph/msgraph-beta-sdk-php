<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDeviceWindowsOSImages;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDeviceWindowsOSImages\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDeviceWindowsOSImages\Item\ManagedDeviceWindowsOperatingSystemImageItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ManagedDeviceWindowsOperatingSystemImage;
use Microsoft\Graph\Beta\Generated\Models\ManagedDeviceWindowsOperatingSystemImageCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the managedDeviceWindowsOSImages property of the microsoft.graph.deviceManagement entity.
*/
class ManagedDeviceWindowsOSImagesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedDeviceWindowsOSImages property of the microsoft.graph.deviceManagement entity.
     * @param string $managedDeviceWindowsOperatingSystemImageId The unique identifier of managedDeviceWindowsOperatingSystemImage
     * @return ManagedDeviceWindowsOperatingSystemImageItemRequestBuilder
    */
    public function byManagedDeviceWindowsOperatingSystemImageId(string $managedDeviceWindowsOperatingSystemImageId): ManagedDeviceWindowsOperatingSystemImageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDeviceWindowsOperatingSystemImage%2Did'] = $managedDeviceWindowsOperatingSystemImageId;
        return new ManagedDeviceWindowsOperatingSystemImageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ManagedDeviceWindowsOSImagesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/managedDeviceWindowsOSImages{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * A list of ManagedDeviceWindowsOperatingSystemImages
     * @param ManagedDeviceWindowsOSImagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedDeviceWindowsOperatingSystemImageCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ManagedDeviceWindowsOSImagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedDeviceWindowsOperatingSystemImageCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to managedDeviceWindowsOSImages for deviceManagement
     * @param ManagedDeviceWindowsOperatingSystemImage $body The request body
     * @param ManagedDeviceWindowsOSImagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedDeviceWindowsOperatingSystemImage|null>
     * @throws Exception
    */
    public function post(ManagedDeviceWindowsOperatingSystemImage $body, ?ManagedDeviceWindowsOSImagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedDeviceWindowsOperatingSystemImage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * A list of ManagedDeviceWindowsOperatingSystemImages
     * @param ManagedDeviceWindowsOSImagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ManagedDeviceWindowsOSImagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to managedDeviceWindowsOSImages for deviceManagement
     * @param ManagedDeviceWindowsOperatingSystemImage $body The request body
     * @param ManagedDeviceWindowsOSImagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ManagedDeviceWindowsOperatingSystemImage $body, ?ManagedDeviceWindowsOSImagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ManagedDeviceWindowsOSImagesRequestBuilder
    */
    public function withUrl(string $rawUrl): ManagedDeviceWindowsOSImagesRequestBuilder {
        return new ManagedDeviceWindowsOSImagesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
