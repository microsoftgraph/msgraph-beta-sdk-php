<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\HardwarePasswordDetails;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\HardwarePasswordDetails\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\HardwarePasswordDetails\Item\HardwarePasswordDetailItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\HardwarePasswordDetail;
use Microsoft\Graph\Beta\Generated\Models\HardwarePasswordDetailCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the hardwarePasswordDetails property of the microsoft.graph.deviceManagement entity.
*/
class HardwarePasswordDetailsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the hardwarePasswordDetails property of the microsoft.graph.deviceManagement entity.
     * @param string $hardwarePasswordDetailId The unique identifier of hardwarePasswordDetail
     * @return HardwarePasswordDetailItemRequestBuilder
    */
    public function byHardwarePasswordDetailId(string $hardwarePasswordDetailId): HardwarePasswordDetailItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['hardwarePasswordDetail%2Did'] = $hardwarePasswordDetailId;
        return new HardwarePasswordDetailItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new HardwarePasswordDetailsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/hardwarePasswordDetails{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Device BIOS password information for devices with managed BIOS and firmware configuration, which provides device serial number, list of previous passwords, and current password.
     * @param HardwarePasswordDetailsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<HardwarePasswordDetailCollectionResponse|null>
     * @throws Exception
    */
    public function get(?HardwarePasswordDetailsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [HardwarePasswordDetailCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to hardwarePasswordDetails for deviceManagement
     * @param HardwarePasswordDetail $body The request body
     * @param HardwarePasswordDetailsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<HardwarePasswordDetail|null>
     * @throws Exception
    */
    public function post(HardwarePasswordDetail $body, ?HardwarePasswordDetailsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [HardwarePasswordDetail::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Device BIOS password information for devices with managed BIOS and firmware configuration, which provides device serial number, list of previous passwords, and current password.
     * @param HardwarePasswordDetailsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?HardwarePasswordDetailsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to hardwarePasswordDetails for deviceManagement
     * @param HardwarePasswordDetail $body The request body
     * @param HardwarePasswordDetailsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(HardwarePasswordDetail $body, ?HardwarePasswordDetailsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return HardwarePasswordDetailsRequestBuilder
    */
    public function withUrl(string $rawUrl): HardwarePasswordDetailsRequestBuilder {
        return new HardwarePasswordDetailsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
