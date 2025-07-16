<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessTransactionSummariesWithStartDateTimeWithEndDateTime;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the transactionSummaries method.
*/
class MicrosoftGraphNetworkaccessTransactionSummariesWithStartDateTimeWithEndDateTimeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessTransactionSummariesWithStartDateTimeWithEndDateTimeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param DateTime|null $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime|null $startDateTime Usage: startDateTime={startDateTime}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?DateTime $endDateTime = null, ?DateTime $startDateTime = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/networkAccess/reports/microsoft.graph.networkaccess.transactionSummaries(startDateTime={startDateTime},endDateTime={endDateTime}){?%24count,%24filter,%24search,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['endDateTime'] = $endDateTime;
            $urlTplParams['startDateTime'] = $startDateTime;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the total number of transactions and the number of blocked transactions, grouped by traffic type.
     * @param MicrosoftGraphNetworkaccessTransactionSummariesWithStartDateTimeWithEndDateTimeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TransactionSummariesWithStartDateTimeWithEndDateTimeGetResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/networkaccess-reports-transactionsummaries?view=graph-rest-beta Find more info here
    */
    public function get(?MicrosoftGraphNetworkaccessTransactionSummariesWithStartDateTimeWithEndDateTimeRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TransactionSummariesWithStartDateTimeWithEndDateTimeGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the total number of transactions and the number of blocked transactions, grouped by traffic type.
     * @param MicrosoftGraphNetworkaccessTransactionSummariesWithStartDateTimeWithEndDateTimeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftGraphNetworkaccessTransactionSummariesWithStartDateTimeWithEndDateTimeRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphNetworkaccessTransactionSummariesWithStartDateTimeWithEndDateTimeRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphNetworkaccessTransactionSummariesWithStartDateTimeWithEndDateTimeRequestBuilder {
        return new MicrosoftGraphNetworkaccessTransactionSummariesWithStartDateTimeWithEndDateTimeRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
