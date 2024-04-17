<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsUpdateCatalogItems;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsUpdateCatalogItems\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsUpdateCatalogItems\Item\WindowsUpdateCatalogItemItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdateCatalogItem;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdateCatalogItemCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the windowsUpdateCatalogItems property of the microsoft.graph.deviceManagement entity.
*/
class WindowsUpdateCatalogItemsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsUpdateCatalogItems property of the microsoft.graph.deviceManagement entity.
     * @param string $windowsUpdateCatalogItemId The unique identifier of windowsUpdateCatalogItem
     * @return WindowsUpdateCatalogItemItemRequestBuilder
    */
    public function byWindowsUpdateCatalogItemId(string $windowsUpdateCatalogItemId): WindowsUpdateCatalogItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsUpdateCatalogItem%2Did'] = $windowsUpdateCatalogItemId;
        return new WindowsUpdateCatalogItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WindowsUpdateCatalogItemsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/windowsUpdateCatalogItems{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * A collection of windows update catalog items (fetaure updates item , quality updates item)
     * @param WindowsUpdateCatalogItemsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsUpdateCatalogItemCollectionResponse|null>
     * @throws Exception
    */
    public function get(?WindowsUpdateCatalogItemsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsUpdateCatalogItemCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to windowsUpdateCatalogItems for deviceManagement
     * @param WindowsUpdateCatalogItem $body The request body
     * @param WindowsUpdateCatalogItemsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsUpdateCatalogItem|null>
     * @throws Exception
    */
    public function post(WindowsUpdateCatalogItem $body, ?WindowsUpdateCatalogItemsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsUpdateCatalogItem::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * A collection of windows update catalog items (fetaure updates item , quality updates item)
     * @param WindowsUpdateCatalogItemsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WindowsUpdateCatalogItemsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to windowsUpdateCatalogItems for deviceManagement
     * @param WindowsUpdateCatalogItem $body The request body
     * @param WindowsUpdateCatalogItemsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(WindowsUpdateCatalogItem $body, ?WindowsUpdateCatalogItemsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WindowsUpdateCatalogItemsRequestBuilder
    */
    public function withUrl(string $rawUrl): WindowsUpdateCatalogItemsRequestBuilder {
        return new WindowsUpdateCatalogItemsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
