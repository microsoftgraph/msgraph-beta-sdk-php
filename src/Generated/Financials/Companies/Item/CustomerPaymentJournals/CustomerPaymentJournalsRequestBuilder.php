<?php

namespace Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\CustomerPaymentJournals;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\CustomerPaymentJournals\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\CustomerPaymentJournals\Item\CustomerPaymentJournalItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\CustomerPaymentJournal;
use Microsoft\\Graph\\Beta\\Generated\Models\CustomerPaymentJournalCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the customerPaymentJournals property of the microsoft.graph.company entity.
*/
class CustomerPaymentJournalsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the customerPaymentJournals property of the microsoft.graph.company entity.
     * @param string $customerPaymentJournalId The unique identifier of customerPaymentJournal
     * @return CustomerPaymentJournalItemRequestBuilder
    */
    public function byCustomerPaymentJournalId(string $customerPaymentJournalId): CustomerPaymentJournalItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['customerPaymentJournal%2Did'] = $customerPaymentJournalId;
        return new CustomerPaymentJournalItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CustomerPaymentJournalsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/financials/companies/{company%2Did}/customerPaymentJournals{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get customerPaymentJournals from financials
     * @param CustomerPaymentJournalsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomerPaymentJournalCollectionResponse|null>
     * @throws Exception
    */
    public function get(?CustomerPaymentJournalsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomerPaymentJournalCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to customerPaymentJournals for financials
     * @param CustomerPaymentJournal $body The request body
     * @param CustomerPaymentJournalsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomerPaymentJournal|null>
     * @throws Exception
    */
    public function post(CustomerPaymentJournal $body, ?CustomerPaymentJournalsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomerPaymentJournal::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get customerPaymentJournals from financials
     * @param CustomerPaymentJournalsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CustomerPaymentJournalsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to customerPaymentJournals for financials
     * @param CustomerPaymentJournal $body The request body
     * @param CustomerPaymentJournalsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CustomerPaymentJournal $body, ?CustomerPaymentJournalsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CustomerPaymentJournalsRequestBuilder
    */
    public function withUrl(string $rawUrl): CustomerPaymentJournalsRequestBuilder {
        return new CustomerPaymentJournalsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
