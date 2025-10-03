<?php

namespace Microsoft\\Graph\\Beta\\Generated\Reports\UserCredentialUsageDetails;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\Models\UserCredentialUsageDetails;
use Microsoft\\Graph\\Beta\\Generated\Models\UserCredentialUsageDetailsCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Reports\UserCredentialUsageDetails\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\UserCredentialUsageDetails\Item\UserCredentialUsageDetailsItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userCredentialUsageDetails property of the microsoft.graph.reportRoot entity.
*/
class UserCredentialUsageDetailsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userCredentialUsageDetails property of the microsoft.graph.reportRoot entity.
     * @param string $userCredentialUsageDetailsId The unique identifier of userCredentialUsageDetails
     * @return UserCredentialUsageDetailsItemRequestBuilder
    */
    public function byUserCredentialUsageDetailsId(string $userCredentialUsageDetailsId): UserCredentialUsageDetailsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userCredentialUsageDetails%2Did'] = $userCredentialUsageDetailsId;
        return new UserCredentialUsageDetailsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserCredentialUsageDetailsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/userCredentialUsageDetails{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of userCredentialUsageDetails objects for a given tenant. Details include user information, status of the reset, and the reason for failure.
     * @param UserCredentialUsageDetailsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserCredentialUsageDetailsCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/reportroot-list-usercredentialusagedetails?view=graph-rest-beta Find more info here
    */
    public function get(?UserCredentialUsageDetailsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserCredentialUsageDetailsCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to userCredentialUsageDetails for reports
     * @param UserCredentialUsageDetails $body The request body
     * @param UserCredentialUsageDetailsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserCredentialUsageDetails|null>
     * @throws Exception
    */
    public function post(UserCredentialUsageDetails $body, ?UserCredentialUsageDetailsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserCredentialUsageDetails::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of userCredentialUsageDetails objects for a given tenant. Details include user information, status of the reset, and the reason for failure.
     * @param UserCredentialUsageDetailsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserCredentialUsageDetailsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to userCredentialUsageDetails for reports
     * @param UserCredentialUsageDetails $body The request body
     * @param UserCredentialUsageDetailsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserCredentialUsageDetails $body, ?UserCredentialUsageDetailsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UserCredentialUsageDetailsRequestBuilder
    */
    public function withUrl(string $rawUrl): UserCredentialUsageDetailsRequestBuilder {
        return new UserCredentialUsageDetailsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
