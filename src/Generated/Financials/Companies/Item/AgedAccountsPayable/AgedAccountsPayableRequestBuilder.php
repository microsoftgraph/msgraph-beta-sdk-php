<?php

namespace Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\AgedAccountsPayable;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\AgedAccountsPayable\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\AgedAccountsPayable\Item\AgedAccountsPayableItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\AgedAccountsPayableCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the agedAccountsPayable property of the microsoft.graph.company entity.
*/
class AgedAccountsPayableRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the agedAccountsPayable property of the microsoft.graph.company entity.
     * @param string $agedAccountsPayableId The unique identifier of agedAccountsPayable
     * @return AgedAccountsPayableItemRequestBuilder
    */
    public function byAgedAccountsPayableId(string $agedAccountsPayableId): AgedAccountsPayableItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['agedAccountsPayable%2Did'] = $agedAccountsPayableId;
        return new AgedAccountsPayableItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AgedAccountsPayableRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/financials/companies/{company%2Did}/agedAccountsPayable{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get agedAccountsPayable from financials
     * @param AgedAccountsPayableRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AgedAccountsPayableCollectionResponse|null>
     * @throws Exception
    */
    public function get(?AgedAccountsPayableRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AgedAccountsPayableCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get agedAccountsPayable from financials
     * @param AgedAccountsPayableRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AgedAccountsPayableRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AgedAccountsPayableRequestBuilder
    */
    public function withUrl(string $rawUrl): AgedAccountsPayableRequestBuilder {
        return new AgedAccountsPayableRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
