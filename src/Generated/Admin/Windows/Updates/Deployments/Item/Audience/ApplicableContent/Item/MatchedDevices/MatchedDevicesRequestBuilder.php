<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Deployments\Item\Audience\ApplicableContent\Item\MatchedDevices;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Deployments\Item\Audience\ApplicableContent\Item\MatchedDevices\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Deployments\Item\Audience\ApplicableContent\Item\MatchedDevices\Item\ApplicableContentDeviceMatchDeviceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\ApplicableContentDeviceMatch;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\ApplicableContentDeviceMatchCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the matchedDevices property of the microsoft.graph.windowsUpdates.applicableContent entity.
*/
class MatchedDevicesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the matchedDevices property of the microsoft.graph.windowsUpdates.applicableContent entity.
     * @param string $applicableContentDeviceMatchDeviceId The unique identifier of applicableContentDeviceMatch
     * @return ApplicableContentDeviceMatchDeviceItemRequestBuilder
    */
    public function byApplicableContentDeviceMatchDeviceId(string $applicableContentDeviceMatchDeviceId): ApplicableContentDeviceMatchDeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['applicableContentDeviceMatch%2DdeviceId'] = $applicableContentDeviceMatchDeviceId;
        return new ApplicableContentDeviceMatchDeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MatchedDevicesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/windows/updates/deployments/{deployment%2Did}/audience/applicableContent/{applicableContent%2DcatalogEntryId}/matchedDevices{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Collection of devices and recommendations for applicable catalog content.
     * @param MatchedDevicesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApplicableContentDeviceMatchCollectionResponse|null>
     * @throws Exception
    */
    public function get(?MatchedDevicesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApplicableContentDeviceMatchCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to matchedDevices for admin
     * @param ApplicableContentDeviceMatch $body The request body
     * @param MatchedDevicesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApplicableContentDeviceMatch|null>
     * @throws Exception
    */
    public function post(ApplicableContentDeviceMatch $body, ?MatchedDevicesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApplicableContentDeviceMatch::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Collection of devices and recommendations for applicable catalog content.
     * @param MatchedDevicesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MatchedDevicesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to matchedDevices for admin
     * @param ApplicableContentDeviceMatch $body The request body
     * @param MatchedDevicesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ApplicableContentDeviceMatch $body, ?MatchedDevicesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MatchedDevicesRequestBuilder
    */
    public function withUrl(string $rawUrl): MatchedDevicesRequestBuilder {
        return new MatchedDevicesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
