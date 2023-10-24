<?php

namespace Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\GetPasswordSingleSignOnCredentials;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\PasswordSingleSignOnCredentialSet;
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
        parent::__construct($requestAdapter, [], '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}/getPasswordSingleSignOnCredentials');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of single sign-on credentials using a password for a user or group. This API is available in the following national cloud deployments.
     * @param GetPasswordSingleSignOnCredentialsPostRequestBody $body The request body
     * @param GetPasswordSingleSignOnCredentialsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/serviceprincipal-getpasswordsinglesignoncredentials?view=graph-rest-1.0 Find more info here
    */
    public function post(GetPasswordSingleSignOnCredentialsPostRequestBody $body, ?GetPasswordSingleSignOnCredentialsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [PasswordSingleSignOnCredentialSet::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get a list of single sign-on credentials using a password for a user or group. This API is available in the following national cloud deployments.
     * @param GetPasswordSingleSignOnCredentialsPostRequestBody $body The request body
     * @param GetPasswordSingleSignOnCredentialsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GetPasswordSingleSignOnCredentialsPostRequestBody $body, ?GetPasswordSingleSignOnCredentialsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
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
