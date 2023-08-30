<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesCreditMemos\Item\SalesCreditMemoLines;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesCreditMemos\Item\SalesCreditMemoLines\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesCreditMemos\Item\SalesCreditMemoLines\Item\SalesCreditMemoLineItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\SalesCreditMemoLineCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the salesCreditMemoLines property of the microsoft.graph.salesCreditMemo entity.
*/
class SalesCreditMemoLinesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the salesCreditMemoLines property of the microsoft.graph.salesCreditMemo entity.
     * @param string $salesCreditMemoLineId The unique identifier of salesCreditMemoLine
     * @return SalesCreditMemoLineItemRequestBuilder
    */
    public function bySalesCreditMemoLineId(string $salesCreditMemoLineId): SalesCreditMemoLineItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['salesCreditMemoLine%2Did'] = $salesCreditMemoLineId;
        return new SalesCreditMemoLineItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SalesCreditMemoLinesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/financials/companies/{company%2Did}/salesCreditMemos/{salesCreditMemo%2Did}/salesCreditMemoLines{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get salesCreditMemoLines from financials
     * @param SalesCreditMemoLinesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?SalesCreditMemoLinesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [SalesCreditMemoLineCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get salesCreditMemoLines from financials
     * @param SalesCreditMemoLinesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SalesCreditMemoLinesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return SalesCreditMemoLinesRequestBuilder
    */
    public function withUrl(string $rawUrl): SalesCreditMemoLinesRequestBuilder {
        return new SalesCreditMemoLinesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
