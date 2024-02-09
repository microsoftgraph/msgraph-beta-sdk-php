<?php

namespace Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\UpdatePasswordSingleSignOnCredentials;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the updatePasswordSingleSignOnCredentials method.
*/
class UpdatePasswordSingleSignOnCredentialsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UpdatePasswordSingleSignOnCredentialsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}/updatePasswordSingleSignOnCredentials');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Update single sign-on credentials using a password for a user or group.
     * @param UpdatePasswordSingleSignOnCredentialsPostRequestBody $body The request body
     * @param UpdatePasswordSingleSignOnCredentialsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/serviceprincipal-updatepasswordsinglesignoncredentials?view=graph-rest-1.0 Find more info here
    */
    public function post(UpdatePasswordSingleSignOnCredentialsPostRequestBody $body, ?UpdatePasswordSingleSignOnCredentialsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Update single sign-on credentials using a password for a user or group.
     * @param UpdatePasswordSingleSignOnCredentialsPostRequestBody $body The request body
     * @param UpdatePasswordSingleSignOnCredentialsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UpdatePasswordSingleSignOnCredentialsPostRequestBody $body, ?UpdatePasswordSingleSignOnCredentialsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UpdatePasswordSingleSignOnCredentialsRequestBuilder
    */
    public function withUrl(string $rawUrl): UpdatePasswordSingleSignOnCredentialsRequestBuilder {
        return new UpdatePasswordSingleSignOnCredentialsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
