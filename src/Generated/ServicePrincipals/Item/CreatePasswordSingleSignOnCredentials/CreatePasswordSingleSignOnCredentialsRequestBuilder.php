<?php

namespace Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\CreatePasswordSingleSignOnCredentials;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\PasswordSingleSignOnCredentialSet;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the createPasswordSingleSignOnCredentials method.
*/
class CreatePasswordSingleSignOnCredentialsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CreatePasswordSingleSignOnCredentialsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}/createPasswordSingleSignOnCredentials');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Create single sign-on credentials using a password for a user or group.
     * @param CreatePasswordSingleSignOnCredentialsPostRequestBody $body The request body
     * @param CreatePasswordSingleSignOnCredentialsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PasswordSingleSignOnCredentialSet|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/serviceprincipal-createpasswordsinglesignoncredentials?view=graph-rest-beta Find more info here
    */
    public function post(CreatePasswordSingleSignOnCredentialsPostRequestBody $body, ?CreatePasswordSingleSignOnCredentialsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PasswordSingleSignOnCredentialSet::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create single sign-on credentials using a password for a user or group.
     * @param CreatePasswordSingleSignOnCredentialsPostRequestBody $body The request body
     * @param CreatePasswordSingleSignOnCredentialsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreatePasswordSingleSignOnCredentialsPostRequestBody $body, ?CreatePasswordSingleSignOnCredentialsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CreatePasswordSingleSignOnCredentialsRequestBuilder
    */
    public function withUrl(string $rawUrl): CreatePasswordSingleSignOnCredentialsRequestBuilder {
        return new CreatePasswordSingleSignOnCredentialsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
