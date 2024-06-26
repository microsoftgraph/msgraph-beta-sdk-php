<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item\GetPasswordSingleSignOnCredentials;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getPasswordSingleSignOnCredentials method.
*/
class GetPasswordSingleSignOnCredentialsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetPasswordSingleSignOnCredentialsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/groups/{group%2Did}/getPasswordSingleSignOnCredentials');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the list of password-based single sign-on credentials for a group. This API returns the encrypted passwords as null.
     * @param GetPasswordSingleSignOnCredentialsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetPasswordSingleSignOnCredentialsPostResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/group-getpasswordsinglesignoncredentials?view=graph-rest-beta Find more info here
    */
    public function post(?GetPasswordSingleSignOnCredentialsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetPasswordSingleSignOnCredentialsPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the list of password-based single sign-on credentials for a group. This API returns the encrypted passwords as null.
     * @param GetPasswordSingleSignOnCredentialsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?GetPasswordSingleSignOnCredentialsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GetPasswordSingleSignOnCredentialsRequestBuilder
    */
    public function withUrl(string $rawUrl): GetPasswordSingleSignOnCredentialsRequestBuilder {
        return new GetPasswordSingleSignOnCredentialsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
