<?php

namespace Microsoft\Graph\Beta\Generated\Reports\AuthenticationMethods\UsersRegisteredByFeature;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UserRegistrationFeatureSummary;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the usersRegisteredByFeature method.
*/
class UsersRegisteredByFeatureRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UsersRegisteredByFeatureRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/authenticationMethods/usersRegisteredByFeature()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the number of users capable of multi-factor authentication, self-service password reset, and passwordless authentication.
     * @param UsersRegisteredByFeatureRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserRegistrationFeatureSummary|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authenticationmethodsroot-usersregisteredbyfeature?view=graph-rest-beta Find more info here
    */
    public function get(?UsersRegisteredByFeatureRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserRegistrationFeatureSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the number of users capable of multi-factor authentication, self-service password reset, and passwordless authentication.
     * @param UsersRegisteredByFeatureRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UsersRegisteredByFeatureRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
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
     * @return UsersRegisteredByFeatureRequestBuilder
    */
    public function withUrl(string $rawUrl): UsersRegisteredByFeatureRequestBuilder {
        return new UsersRegisteredByFeatureRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
