<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_9a0306bb;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the entitiesSummaries method. Original name: microsoftGraphNetworkaccessEntitiesSummariesWithStartDateTimeWithEndDateTimeRequestBuilder
*/
class MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_c41097f1 extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_c41097f1 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param DateTime|null $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime|null $startDateTime Usage: startDateTime={startDateTime}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?DateTime $endDateTime = null, ?DateTime $startDateTime = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/networkAccess/reports/microsoft.graph.networkaccess.entitiesSummaries(startDateTime={startDateTime},endDateTime={endDateTime}){?%24count,%24filter,%24search,%24skip,%24top}');
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
     * Get the number of users, devices, and workloads per traffic type in a specified time period as logged in Global Secure Access.
     * @param MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_630c299c|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EntitiesSummariesWithStartDateTimeWithEndDateTimeGetResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/networkaccess-reports-entitiessummaries?view=graph-rest-beta Find more info here
    */
    public function get(?MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_630c299c $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EntitiesSummariesWithStartDateTimeWithEndDateTimeGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the number of users, devices, and workloads per traffic type in a specified time period as logged in Global Secure Access.
     * @param MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_630c299c|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_630c299c $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_c41097f1
    */
    public function withUrl(string $rawUrl): MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_c41097f1 {
        return new MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_c41097f1($rawUrl, $this->requestAdapter);
    }

}
