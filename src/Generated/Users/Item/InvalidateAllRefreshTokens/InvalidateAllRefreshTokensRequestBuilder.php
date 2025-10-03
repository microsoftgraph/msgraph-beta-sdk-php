<?php

namespace Microsoft\\Graph\\Beta\\Generated\Users\Item\InvalidateAllRefreshTokens;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the invalidateAllRefreshTokens method.
*/
class InvalidateAllRefreshTokensRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new InvalidateAllRefreshTokensRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/invalidateAllRefreshTokens');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invalidates all of the user's refresh tokens issued to applications and session cookies in a user's browser, by resetting the refreshTokensValidFromDateTime user property to the current date-time. Typically, this operation is performed (by the user or an administrator) if the user has a lost or stolen device. This operation would prevent access to any of the organization's data accessed through applications on the device without the user first being required to sign in again. In fact, this operation would force the user to sign in again for all applications that they have previously consented to, independent of device. For developers, if the application attempts to redeem a delegated access token for this user by using an invalidated refresh token, the application receives an error. If this happens, the application needs to acquire a new refresh token by making a request to the OAuth 2.0 /authorize endpoint, which forces the user to sign in.
     * @param InvalidateAllRefreshTokensRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<InvalidateAllRefreshTokensPostResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/user-invalidateallrefreshtokens?view=graph-rest-beta Find more info here
    */
    public function post(?InvalidateAllRefreshTokensRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [InvalidateAllRefreshTokensPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invalidates all of the user's refresh tokens issued to applications and session cookies in a user's browser, by resetting the refreshTokensValidFromDateTime user property to the current date-time. Typically, this operation is performed (by the user or an administrator) if the user has a lost or stolen device. This operation would prevent access to any of the organization's data accessed through applications on the device without the user first being required to sign in again. In fact, this operation would force the user to sign in again for all applications that they have previously consented to, independent of device. For developers, if the application attempts to redeem a delegated access token for this user by using an invalidated refresh token, the application receives an error. If this happens, the application needs to acquire a new refresh token by making a request to the OAuth 2.0 /authorize endpoint, which forces the user to sign in.
     * @param InvalidateAllRefreshTokensRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?InvalidateAllRefreshTokensRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return InvalidateAllRefreshTokensRequestBuilder
    */
    public function withUrl(string $rawUrl): InvalidateAllRefreshTokensRequestBuilder {
        return new InvalidateAllRefreshTokensRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
