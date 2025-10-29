<?php

namespace Microsoft\\Graph\\Beta\\Generated\Reports\UserInsights\Monthly\MfaRegisteredUsers;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\MfaUserCountMetric;
use Microsoft\\Graph\\Beta\\Generated\Models\MfaUserCountMetricCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\Reports\UserInsights\Monthly\MfaRegisteredUsers\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\UserInsights\Monthly\MfaRegisteredUsers\Item\MfaUserCountMetricItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mfaRegisteredUsers property of the microsoft.graph.monthlyUserInsightMetricsRoot entity.
*/
class MfaRegisteredUsersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mfaRegisteredUsers property of the microsoft.graph.monthlyUserInsightMetricsRoot entity.
     * @param string $mfaUserCountMetricId The unique identifier of mfaUserCountMetric
     * @return MfaUserCountMetricItemRequestBuilder
    */
    public function byMfaUserCountMetricId(string $mfaUserCountMetricId): MfaUserCountMetricItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mfaUserCountMetric%2Did'] = $mfaUserCountMetricId;
        return new MfaUserCountMetricItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MfaRegisteredUsersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/userInsights/monthly/mfaRegisteredUsers{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get mfaRegisteredUsers from reports
     * @param MfaRegisteredUsersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MfaUserCountMetricCollectionResponse|null>
     * @throws Exception
    */
    public function get(?MfaRegisteredUsersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MfaUserCountMetricCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to mfaRegisteredUsers for reports
     * @param MfaUserCountMetric $body The request body
     * @param MfaRegisteredUsersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MfaUserCountMetric|null>
     * @throws Exception
    */
    public function post(MfaUserCountMetric $body, ?MfaRegisteredUsersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MfaUserCountMetric::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get mfaRegisteredUsers from reports
     * @param MfaRegisteredUsersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MfaRegisteredUsersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to mfaRegisteredUsers for reports
     * @param MfaUserCountMetric $body The request body
     * @param MfaRegisteredUsersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MfaUserCountMetric $body, ?MfaRegisteredUsersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MfaRegisteredUsersRequestBuilder
    */
    public function withUrl(string $rawUrl): MfaRegisteredUsersRequestBuilder {
        return new MfaRegisteredUsersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
