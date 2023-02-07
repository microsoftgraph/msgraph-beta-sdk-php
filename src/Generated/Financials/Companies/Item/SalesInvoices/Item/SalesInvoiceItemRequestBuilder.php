<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesInvoices\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesInvoices\Item\Currency\CurrencyRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesInvoices\Item\Customer\CustomerRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesInvoices\Item\MicrosoftGraphCancel\MicrosoftGraphCancelRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesInvoices\Item\MicrosoftGraphCancelAndSend\MicrosoftGraphCancelAndSendRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesInvoices\Item\MicrosoftGraphPost\MicrosoftGraphPostRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesInvoices\Item\MicrosoftGraphPostAndSend\MicrosoftGraphPostAndSendRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesInvoices\Item\MicrosoftGraphSend\MicrosoftGraphSendRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesInvoices\Item\PaymentTerm\PaymentTermRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesInvoices\Item\SalesInvoiceLines\Item\SalesInvoiceLineItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesInvoices\Item\SalesInvoiceLines\SalesInvoiceLinesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesInvoices\Item\ShipmentMethod\ShipmentMethodRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\SalesInvoice;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the salesInvoices property of the microsoft.graph.company entity.
*/
class SalesInvoiceItemRequestBuilder 
{
    /**
     * Provides operations to manage the currency property of the microsoft.graph.salesInvoice entity.
    */
    public function currency(): CurrencyRequestBuilder {
        return new CurrencyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the customer property of the microsoft.graph.salesInvoice entity.
    */
    public function customer(): CustomerRequestBuilder {
        return new CustomerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cancel method.
    */
    public function microsoftGraphCancel(): MicrosoftGraphCancelRequestBuilder {
        return new MicrosoftGraphCancelRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cancelAndSend method.
    */
    public function microsoftGraphCancelAndSend(): MicrosoftGraphCancelAndSendRequestBuilder {
        return new MicrosoftGraphCancelAndSendRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the post method.
    */
    public function microsoftGraphPost(): MicrosoftGraphPostRequestBuilder {
        return new MicrosoftGraphPostRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the postAndSend method.
    */
    public function microsoftGraphPostAndSend(): MicrosoftGraphPostAndSendRequestBuilder {
        return new MicrosoftGraphPostAndSendRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the send method.
    */
    public function microsoftGraphSend(): MicrosoftGraphSendRequestBuilder {
        return new MicrosoftGraphSendRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the paymentTerm property of the microsoft.graph.salesInvoice entity.
    */
    public function paymentTerm(): PaymentTermRequestBuilder {
        return new PaymentTermRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the salesInvoiceLines property of the microsoft.graph.salesInvoice entity.
    */
    public function salesInvoiceLines(): SalesInvoiceLinesRequestBuilder {
        return new SalesInvoiceLinesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the shipmentMethod property of the microsoft.graph.salesInvoice entity.
    */
    public function shipmentMethod(): ShipmentMethodRequestBuilder {
        return new ShipmentMethodRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new SalesInvoiceItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/financials/companies/{company%2Did}/salesInvoices/{salesInvoice%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get salesInvoices from financials
     * @param SalesInvoiceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?SalesInvoiceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [SalesInvoice::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property salesInvoices in financials
     * @param SalesInvoice $body The request body
     * @param SalesInvoiceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(SalesInvoice $body, ?SalesInvoiceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [SalesInvoice::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the salesInvoiceLines property of the microsoft.graph.salesInvoice entity.
     * @param string $id Unique identifier of the item
     * @return SalesInvoiceLineItemRequestBuilder
    */
    public function salesInvoiceLinesById(string $id): SalesInvoiceLineItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['salesInvoiceLine%2Did'] = $id;
        return new SalesInvoiceLineItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get salesInvoices from financials
     * @param SalesInvoiceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SalesInvoiceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
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
     * Update the navigation property salesInvoices in financials
     * @param SalesInvoice $body The request body
     * @param SalesInvoiceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(SalesInvoice $body, ?SalesInvoiceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
