<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesQuotes\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesQuotes\Item\Currency\CurrencyRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesQuotes\Item\Customer\CustomerRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesQuotes\Item\MakeInvoice\MakeInvoiceRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesQuotes\Item\PaymentTerm\PaymentTermRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesQuotes\Item\SalesQuoteLines\SalesQuoteLinesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesQuotes\Item\Send\SendRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesQuotes\Item\ShipmentMethod\ShipmentMethodRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\SalesQuote;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the salesQuotes property of the microsoft.graph.company entity.
*/
class SalesQuoteItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the currency property of the microsoft.graph.salesQuote entity.
    */
    public function currency(): CurrencyRequestBuilder {
        return new CurrencyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the customer property of the microsoft.graph.salesQuote entity.
    */
    public function customer(): CustomerRequestBuilder {
        return new CustomerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the makeInvoice method.
    */
    public function makeInvoice(): MakeInvoiceRequestBuilder {
        return new MakeInvoiceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the paymentTerm property of the microsoft.graph.salesQuote entity.
    */
    public function paymentTerm(): PaymentTermRequestBuilder {
        return new PaymentTermRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the salesQuoteLines property of the microsoft.graph.salesQuote entity.
    */
    public function salesQuoteLines(): SalesQuoteLinesRequestBuilder {
        return new SalesQuoteLinesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the send method.
    */
    public function send(): SendRequestBuilder {
        return new SendRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the shipmentMethod property of the microsoft.graph.salesQuote entity.
    */
    public function shipmentMethod(): ShipmentMethodRequestBuilder {
        return new ShipmentMethodRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new SalesQuoteItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/financials/companies/{company%2Did}/salesQuotes/{salesQuote%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get salesQuotes from financials
     * @param SalesQuoteItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SalesQuote|null>
     * @throws Exception
    */
    public function get(?SalesQuoteItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SalesQuote::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property salesQuotes in financials
     * @param SalesQuote $body The request body
     * @param SalesQuoteItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SalesQuote|null>
     * @throws Exception
    */
    public function patch(SalesQuote $body, ?SalesQuoteItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SalesQuote::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get salesQuotes from financials
     * @param SalesQuoteItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SalesQuoteItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property salesQuotes in financials
     * @param SalesQuote $body The request body
     * @param SalesQuoteItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(SalesQuote $body, ?SalesQuoteItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return SalesQuoteItemRequestBuilder
    */
    public function withUrl(string $rawUrl): SalesQuoteItemRequestBuilder {
        return new SalesQuoteItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
