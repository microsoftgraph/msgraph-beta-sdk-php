<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Authentication\PasswordlessMicrosoftAuthenticatorMethods\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\PasswordlessMicrosoftAuthenticatorAuthenticationMethod;
use Microsoft\Graph\Beta\Generated\Users\Item\Authentication\PasswordlessMicrosoftAuthenticatorMethods\Item\Device\DeviceRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the passwordlessMicrosoftAuthenticatorMethods property of the microsoft.graph.authentication entity. Original name: PasswordlessMicrosoftAuthenticatorAuthenticationMethodItemRequestBuilder
*/
class PasswordlessMicrosoftAuthenticatorAuthenticationMethodI_a9962b72 extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the device property of the microsoft.graph.passwordlessMicrosoftAuthenticatorAuthenticationMethod entity.
    */
    public function device(): DeviceRequestBuilder {
        return new DeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new PasswordlessMicrosoftAuthenticatorAuthenticationMethodI_a9962b72 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes a user's Microsoft Authenticator Passwordless Phone Sign-in method object.
     * @param PasswordlessMicrosoftAuthenticatorAuthenticationMethodI_90d1a3eb|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/passwordlessmicrosoftauthenticatorauthenticationmethod-delete?view=graph-rest-beta Find more info here
    */
    public function delete(?PasswordlessMicrosoftAuthenticatorAuthenticationMethodI_90d1a3eb $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Represents the Microsoft Authenticator Passwordless Phone Sign-in methods registered to a user for authentication.
     * @param PasswordlessMicrosoftAuthenticatorAuthenticationMethodI_8bdb7673|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PasswordlessMicrosoftAuthenticatorAuthenticationMethod|null>
     * @throws Exception
    */
    public function get(?PasswordlessMicrosoftAuthenticatorAuthenticationMethodI_8bdb7673 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PasswordlessMicrosoftAuthenticatorAuthenticationMethod::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Deletes a user's Microsoft Authenticator Passwordless Phone Sign-in method object.
     * @param PasswordlessMicrosoftAuthenticatorAuthenticationMethodI_90d1a3eb|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?PasswordlessMicrosoftAuthenticatorAuthenticationMethodI_90d1a3eb $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Represents the Microsoft Authenticator Passwordless Phone Sign-in methods registered to a user for authentication.
     * @param PasswordlessMicrosoftAuthenticatorAuthenticationMethodI_8bdb7673|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PasswordlessMicrosoftAuthenticatorAuthenticationMethodI_8bdb7673 $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return PasswordlessMicrosoftAuthenticatorAuthenticationMethodI_a9962b72
    */
    public function withUrl(string $rawUrl): PasswordlessMicrosoftAuthenticatorAuthenticationMethodI_a9962b72 {
        return new PasswordlessMicrosoftAuthenticatorAuthenticationMethodI_a9962b72($rawUrl, $this->requestAdapter);
    }

}
