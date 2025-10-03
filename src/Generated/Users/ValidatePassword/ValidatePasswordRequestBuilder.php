<?php

namespace Microsoft\\Graph\\Beta\\Generated\Users\ValidatePassword;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\Models\PasswordValidationInformation;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the validatePassword method.
*/
class ValidatePasswordRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ValidatePasswordRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/validatePassword');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Check a user's password against the organization's password validation policy and report whether the password is valid. Use this action to provide real-time feedback on password strength while the user types their password.
     * @param ValidatePasswordPostRequestBody $body The request body
     * @param ValidatePasswordRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PasswordValidationInformation|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/user-validatepassword?view=graph-rest-beta Find more info here
    */
    public function post(ValidatePasswordPostRequestBody $body, ?ValidatePasswordRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PasswordValidationInformation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Check a user's password against the organization's password validation policy and report whether the password is valid. Use this action to provide real-time feedback on password strength while the user types their password.
     * @param ValidatePasswordPostRequestBody $body The request body
     * @param ValidatePasswordRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ValidatePasswordPostRequestBody $body, ?ValidatePasswordRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ValidatePasswordRequestBuilder
    */
    public function withUrl(string $rawUrl): ValidatePasswordRequestBuilder {
        return new ValidatePasswordRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
