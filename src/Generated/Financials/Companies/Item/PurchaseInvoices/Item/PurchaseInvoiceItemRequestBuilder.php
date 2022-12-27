<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\PurchaseInvoices\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\PurchaseInvoices\Item\Currency\CurrencyRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\PurchaseInvoices\Item\Post\PostRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\PurchaseInvoices\Item\PurchaseInvoiceLines\Item\PurchaseInvoiceLineItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\PurchaseInvoices\Item\PurchaseInvoiceLines\PurchaseInvoiceLinesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\PurchaseInvoices\Item\Vendor\VendorRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\PurchaseInvoice;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class PurchaseInvoiceItemRequestBuilder 
{
    /**
     * Provides operations to manage the currency property of the microsoft.graph.purchaseInvoice entity.
    */
    public function currency(): CurrencyRequestBuilder {
        return new CurrencyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to call the post method.
    */
    public function post(): PostRequestBuilder {
        return new PostRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the purchaseInvoiceLines property of the microsoft.graph.purchaseInvoice entity.
    */
    public function purchaseInvoiceLines(): PurchaseInvoiceLinesRequestBuilder {
        return new PurchaseInvoiceLinesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the vendor property of the microsoft.graph.purchaseInvoice entity.
    */
    public function vendor(): VendorRequestBuilder {
        return new VendorRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new PurchaseInvoiceItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/financials/companies/{company%2Did}/purchaseInvoices/{purchaseInvoice%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get purchaseInvoices from financials
     * @param PurchaseInvoiceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?PurchaseInvoiceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property purchaseInvoices in financials
     * @param PurchaseInvoice $body The request body
     * @param PurchaseInvoiceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(PurchaseInvoice $body, ?PurchaseInvoiceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Get purchaseInvoices from financials
     * @param PurchaseInvoiceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?PurchaseInvoiceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [PurchaseInvoice::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property purchaseInvoices in financials
     * @param PurchaseInvoice $body The request body
     * @param PurchaseInvoiceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(PurchaseInvoice $body, ?PurchaseInvoiceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [PurchaseInvoice::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the purchaseInvoiceLines property of the microsoft.graph.purchaseInvoice entity.
     * @param string $id Unique identifier of the item
     * @return PurchaseInvoiceLineItemRequestBuilder
    */
    public function purchaseInvoiceLinesById(string $id): PurchaseInvoiceLineItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['purchaseInvoiceLine%2Did'] = $id;
        return new PurchaseInvoiceLineItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
