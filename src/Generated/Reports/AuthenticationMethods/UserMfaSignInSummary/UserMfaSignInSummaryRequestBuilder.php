<?php

namespace Microsoft\\Graph\\Beta\\Generated\Reports\AuthenticationMethods\UserMfaSignInSummary;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\Models\UserMfaSignInSummary;
use Microsoft\\Graph\\Beta\\Generated\Models\UserMfaSignInSummaryCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Reports\AuthenticationMethods\UserMfaSignInSummary\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\AuthenticationMethods\UserMfaSignInSummary\Item\UserMfaSignInSummaryItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userMfaSignInSummary property of the microsoft.graph.authenticationMethodsRoot entity.
*/
class UserMfaSignInSummaryRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userMfaSignInSummary property of the microsoft.graph.authenticationMethodsRoot entity.
     * @param string $userMfaSignInSummaryId The unique identifier of userMfaSignInSummary
     * @return UserMfaSignInSummaryItemRequestBuilder
    */
    public function byUserMfaSignInSummaryId(string $userMfaSignInSummaryId): UserMfaSignInSummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userMfaSignInSummary%2Did'] = $userMfaSignInSummaryId;
        return new UserMfaSignInSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserMfaSignInSummaryRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/authenticationMethods/userMfaSignInSummary{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the summary of MFA vs non-MFA sign-in events for a specified time window, as defined in the userMfaSignInSummary object.
     * @param UserMfaSignInSummaryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserMfaSignInSummaryCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authenticationmethodsroot-list-usermfasigninsummary?view=graph-rest-beta Find more info here
    */
    public function get(?UserMfaSignInSummaryRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserMfaSignInSummaryCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to userMfaSignInSummary for reports
     * @param UserMfaSignInSummary $body The request body
     * @param UserMfaSignInSummaryRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserMfaSignInSummary|null>
     * @throws Exception
    */
    public function post(UserMfaSignInSummary $body, ?UserMfaSignInSummaryRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserMfaSignInSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the summary of MFA vs non-MFA sign-in events for a specified time window, as defined in the userMfaSignInSummary object.
     * @param UserMfaSignInSummaryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserMfaSignInSummaryRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to userMfaSignInSummary for reports
     * @param UserMfaSignInSummary $body The request body
     * @param UserMfaSignInSummaryRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserMfaSignInSummary $body, ?UserMfaSignInSummaryRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UserMfaSignInSummaryRequestBuilder
    */
    public function withUrl(string $rawUrl): UserMfaSignInSummaryRequestBuilder {
        return new UserMfaSignInSummaryRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
