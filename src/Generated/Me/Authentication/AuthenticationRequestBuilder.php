<?php

namespace Microsoft\Graph\Beta\Generated\Me\Authentication;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Me\Authentication\EmailMethods\EmailMethodsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\EmailMethods\Item\EmailAuthenticationMethodItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\Fido2Methods\Fido2MethodsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\Fido2Methods\Item\Fido2AuthenticationMethodItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\Methods\Item\AuthenticationMethodItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\Methods\MethodsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\MicrosoftAuthenticatorMethods\Item\MicrosoftAuthenticatorAuthenticationMethodItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\MicrosoftAuthenticatorMethods\MicrosoftAuthenticatorMethodsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\Operations\Item\LongRunningOperationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\PasswordlessMicrosoftAuthenticatorMethods\Item\PasswordlessMicrosoftAuthenticatorAuthenticationMethodItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\PasswordlessMicrosoftAuthenticatorMethods\PasswordlessMicrosoftAuthenticatorMethodsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\PasswordMethods\Item\PasswordAuthenticationMethodItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\PasswordMethods\PasswordMethodsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\PhoneMethods\Item\PhoneAuthenticationMethodItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\PhoneMethods\PhoneMethodsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\SoftwareOathMethods\Item\SoftwareOathAuthenticationMethodItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\SoftwareOathMethods\SoftwareOathMethodsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\TemporaryAccessPassMethods\Item\TemporaryAccessPassAuthenticationMethodItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\TemporaryAccessPassMethods\TemporaryAccessPassMethodsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\WindowsHelloForBusinessMethods\Item\WindowsHelloForBusinessAuthenticationMethodItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Authentication\WindowsHelloForBusinessMethods\WindowsHelloForBusinessMethodsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Authentication;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class AuthenticationRequestBuilder 
{
    /**
     * The emailMethods property
    */
    public function emailMethods(): EmailMethodsRequestBuilder {
        return new EmailMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The fido2Methods property
    */
    public function fido2Methods(): Fido2MethodsRequestBuilder {
        return new Fido2MethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The methods property
    */
    public function methods(): MethodsRequestBuilder {
        return new MethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The microsoftAuthenticatorMethods property
    */
    public function microsoftAuthenticatorMethods(): MicrosoftAuthenticatorMethodsRequestBuilder {
        return new MicrosoftAuthenticatorMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The operations property
    */
    public function operations(): OperationsRequestBuilder {
        return new OperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The passwordlessMicrosoftAuthenticatorMethods property
    */
    public function passwordlessMicrosoftAuthenticatorMethods(): PasswordlessMicrosoftAuthenticatorMethodsRequestBuilder {
        return new PasswordlessMicrosoftAuthenticatorMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The passwordMethods property
    */
    public function passwordMethods(): PasswordMethodsRequestBuilder {
        return new PasswordMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /**
     * The phoneMethods property
    */
    public function phoneMethods(): PhoneMethodsRequestBuilder {
        return new PhoneMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The softwareOathMethods property
    */
    public function softwareOathMethods(): SoftwareOathMethodsRequestBuilder {
        return new SoftwareOathMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The temporaryAccessPassMethods property
    */
    public function temporaryAccessPassMethods(): TemporaryAccessPassMethodsRequestBuilder {
        return new TemporaryAccessPassMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * The windowsHelloForBusinessMethods property
    */
    public function windowsHelloForBusinessMethods(): WindowsHelloForBusinessMethodsRequestBuilder {
        return new WindowsHelloForBusinessMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AuthenticationRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me/authentication{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property authentication for me
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * The authentication methods that are supported for the user.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property authentication in me
     * @param Authentication $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Authentication $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Delete navigation property authentication for me
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.authentication.emailMethods.item collection
     * @param string $id Unique identifier of the item
     * @return EmailAuthenticationMethodItemRequestBuilder
    */
    public function emailMethodsById(string $id): EmailAuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['emailAuthenticationMethod_id'] = $id;
        return new EmailAuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.authentication.fido2Methods.item collection
     * @param string $id Unique identifier of the item
     * @return Fido2AuthenticationMethodItemRequestBuilder
    */
    public function fido2MethodsById(string $id): Fido2AuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['fido2AuthenticationMethod_id'] = $id;
        return new Fido2AuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The authentication methods that are supported for the user.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, Authentication::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.authentication.methods.item collection
     * @param string $id Unique identifier of the item
     * @return AuthenticationMethodItemRequestBuilder
    */
    public function methodsById(string $id): AuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['authenticationMethod_id'] = $id;
        return new AuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.authentication.microsoftAuthenticatorMethods.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftAuthenticatorAuthenticationMethodItemRequestBuilder
    */
    public function microsoftAuthenticatorMethodsById(string $id): MicrosoftAuthenticatorAuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['microsoftAuthenticatorAuthenticationMethod_id'] = $id;
        return new MicrosoftAuthenticatorAuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.authentication.operations.item collection
     * @param string $id Unique identifier of the item
     * @return LongRunningOperationItemRequestBuilder
    */
    public function operationsById(string $id): LongRunningOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['longRunningOperation_id'] = $id;
        return new LongRunningOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.authentication.passwordlessMicrosoftAuthenticatorMethods.item collection
     * @param string $id Unique identifier of the item
     * @return PasswordlessMicrosoftAuthenticatorAuthenticationMethodItemRequestBuilder
    */
    public function passwordlessMicrosoftAuthenticatorMethodsById(string $id): PasswordlessMicrosoftAuthenticatorAuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['passwordlessMicrosoftAuthenticatorAuthenticationMethod_id'] = $id;
        return new PasswordlessMicrosoftAuthenticatorAuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.authentication.passwordMethods.item collection
     * @param string $id Unique identifier of the item
     * @return PasswordAuthenticationMethodItemRequestBuilder
    */
    public function passwordMethodsById(string $id): PasswordAuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['passwordAuthenticationMethod_id'] = $id;
        return new PasswordAuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property authentication in me
     * @param Authentication $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Authentication $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.authentication.phoneMethods.item collection
     * @param string $id Unique identifier of the item
     * @return PhoneAuthenticationMethodItemRequestBuilder
    */
    public function phoneMethodsById(string $id): PhoneAuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['phoneAuthenticationMethod_id'] = $id;
        return new PhoneAuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.authentication.softwareOathMethods.item collection
     * @param string $id Unique identifier of the item
     * @return SoftwareOathAuthenticationMethodItemRequestBuilder
    */
    public function softwareOathMethodsById(string $id): SoftwareOathAuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['softwareOathAuthenticationMethod_id'] = $id;
        return new SoftwareOathAuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.authentication.temporaryAccessPassMethods.item collection
     * @param string $id Unique identifier of the item
     * @return TemporaryAccessPassAuthenticationMethodItemRequestBuilder
    */
    public function temporaryAccessPassMethodsById(string $id): TemporaryAccessPassAuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['temporaryAccessPassAuthenticationMethod_id'] = $id;
        return new TemporaryAccessPassAuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.authentication.windowsHelloForBusinessMethods.item collection
     * @param string $id Unique identifier of the item
     * @return WindowsHelloForBusinessAuthenticationMethodItemRequestBuilder
    */
    public function windowsHelloForBusinessMethodsById(string $id): WindowsHelloForBusinessAuthenticationMethodItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsHelloForBusinessAuthenticationMethod_id'] = $id;
        return new WindowsHelloForBusinessAuthenticationMethodItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
