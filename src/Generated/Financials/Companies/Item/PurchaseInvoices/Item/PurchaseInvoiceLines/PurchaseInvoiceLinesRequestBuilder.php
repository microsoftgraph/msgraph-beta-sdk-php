<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\PurchaseInvoices\Item\PurchaseInvoiceLines;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\PurchaseInvoices\Item\PurchaseInvoiceLines\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\PurchaseInvoices\Item\PurchaseInvoiceLines\Item\PurchaseInvoiceLineItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\PurchaseInvoiceLineCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the purchaseInvoiceLines property of the microsoft.graph.purchaseInvoice entity.
*/
class PurchaseInvoiceLinesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the purchaseInvoiceLines property of the microsoft.graph.purchaseInvoice entity.
     * @param string $purchaseInvoiceLineId The unique identifier of purchaseInvoiceLine
     * @return PurchaseInvoiceLineItemRequestBuilder
    */
    public function byPurchaseInvoiceLineId(string $purchaseInvoiceLineId): PurchaseInvoiceLineItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['purchaseInvoiceLine%2Did'] = $purchaseInvoiceLineId;
        return new PurchaseInvoiceLineItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PurchaseInvoiceLinesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/financials/companies/{company%2Did}/purchaseInvoices/{purchaseInvoice%2Did}/purchaseInvoiceLines{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get purchaseInvoiceLines from financials
     * @param PurchaseInvoiceLinesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PurchaseInvoiceLineCollectionResponse|null>
     * @throws Exception
    */
    public function get(?PurchaseInvoiceLinesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PurchaseInvoiceLineCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get purchaseInvoiceLines from financials
     * @param PurchaseInvoiceLinesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PurchaseInvoiceLinesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return PurchaseInvoiceLinesRequestBuilder
    */
    public function withUrl(string $rawUrl): PurchaseInvoiceLinesRequestBuilder {
        return new PurchaseInvoiceLinesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
