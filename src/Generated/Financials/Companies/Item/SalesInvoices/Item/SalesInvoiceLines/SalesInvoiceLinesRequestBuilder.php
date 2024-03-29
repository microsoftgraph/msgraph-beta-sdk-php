<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesInvoices\Item\SalesInvoiceLines;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesInvoices\Item\SalesInvoiceLines\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesInvoices\Item\SalesInvoiceLines\Item\SalesInvoiceLineItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\SalesInvoiceLineCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the salesInvoiceLines property of the microsoft.graph.salesInvoice entity.
*/
class SalesInvoiceLinesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the salesInvoiceLines property of the microsoft.graph.salesInvoice entity.
     * @param string $salesInvoiceLineId The unique identifier of salesInvoiceLine
     * @return SalesInvoiceLineItemRequestBuilder
    */
    public function bySalesInvoiceLineId(string $salesInvoiceLineId): SalesInvoiceLineItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['salesInvoiceLine%2Did'] = $salesInvoiceLineId;
        return new SalesInvoiceLineItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SalesInvoiceLinesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/financials/companies/{company%2Did}/salesInvoices/{salesInvoice%2Did}/salesInvoiceLines{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get salesInvoiceLines from financials
     * @param SalesInvoiceLinesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SalesInvoiceLineCollectionResponse|null>
     * @throws Exception
    */
    public function get(?SalesInvoiceLinesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SalesInvoiceLineCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get salesInvoiceLines from financials
     * @param SalesInvoiceLinesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SalesInvoiceLinesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SalesInvoiceLinesRequestBuilder
    */
    public function withUrl(string $rawUrl): SalesInvoiceLinesRequestBuilder {
        return new SalesInvoiceLinesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
