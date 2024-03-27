<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Products;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Products\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Products\Item\ProductItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Products\MicrosoftGraphWindowsUpdatesFindByCatalogIdWithCatalogID\MicrosoftGraphWindowsUpdatesFindByCatalogIdWithCatalogIDRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Products\MicrosoftGraphWindowsUpdatesFindByKbNumberWithKbNumber\MicrosoftGraphWindowsUpdatesFindByKbNumberWithKbNumberRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\Product;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\ProductCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the products property of the microsoft.graph.adminWindowsUpdates entity.
*/
class ProductsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the products property of the microsoft.graph.adminWindowsUpdates entity.
     * @param string $productId The unique identifier of product
     * @return ProductItemRequestBuilder
    */
    public function byProductId(string $productId): ProductItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['product%2Did'] = $productId;
        return new ProductItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ProductsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/windows/updates/products{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * A collection of Windows products.
     * @param ProductsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ProductCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ProductsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ProductCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the findByCatalogId method.
     * @param string $catalogID Usage: catalogID='{catalogID}'
     * @return MicrosoftGraphWindowsUpdatesFindByCatalogIdWithCatalogIDRequestBuilder
    */
    public function microsoftGraphWindowsUpdatesFindByCatalogIdWithCatalogID(string $catalogID): MicrosoftGraphWindowsUpdatesFindByCatalogIdWithCatalogIDRequestBuilder {
        return new MicrosoftGraphWindowsUpdatesFindByCatalogIdWithCatalogIDRequestBuilder($this->pathParameters, $this->requestAdapter, $catalogID);
    }

    /**
     * Provides operations to call the findByKbNumber method.
     * @param int $kbNumber Usage: kbNumber={kbNumber}
     * @return MicrosoftGraphWindowsUpdatesFindByKbNumberWithKbNumberRequestBuilder
    */
    public function microsoftGraphWindowsUpdatesFindByKbNumberWithKbNumber(int $kbNumber): MicrosoftGraphWindowsUpdatesFindByKbNumberWithKbNumberRequestBuilder {
        return new MicrosoftGraphWindowsUpdatesFindByKbNumberWithKbNumberRequestBuilder($this->pathParameters, $this->requestAdapter, $kbNumber);
    }

    /**
     * Create new navigation property to products for admin
     * @param Product $body The request body
     * @param ProductsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Product|null>
     * @throws Exception
    */
    public function post(Product $body, ?ProductsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Product::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * A collection of Windows products.
     * @param ProductsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ProductsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to products for admin
     * @param Product $body The request body
     * @param ProductsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(Product $body, ?ProductsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/admin/windows/updates/products';
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
     * @return ProductsRequestBuilder
    */
    public function withUrl(string $rawUrl): ProductsRequestBuilder {
        return new ProductsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
