<?php

namespace Microsoft\Graph\Beta\Generated\Reports\AuthenticationMethods;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\AuthenticationMethodsRoot;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Reports\AuthenticationMethods\UserRegistrationDetails\Item\UserRegistrationDetailsItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\AuthenticationMethods\UserRegistrationDetails\UserRegistrationDetailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\AuthenticationMethods\UsersRegisteredByFeature\UsersRegisteredByFeatureRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\AuthenticationMethods\UsersRegisteredByFeatureWithIncludedUserTypesWithIncludedUserRoles\UsersRegisteredByFeatureWithIncludedUserTypesWithIncludedUserRolesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\AuthenticationMethods\UsersRegisteredByMethod\UsersRegisteredByMethodRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\AuthenticationMethods\UsersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRoles\UsersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRolesRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class AuthenticationMethodsRequestBuilder 
{
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    public function userRegistrationDetails(): UserRegistrationDetailsRequestBuilder {
        return new UserRegistrationDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AuthenticationMethodsRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/reports/authenticationMethods{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property authenticationMethods for reports
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
     * Container for navigation properties for Azure AD authentication methods resources.
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
     * Update the navigation property authenticationMethods in reports
     * @param AuthenticationMethodsRoot $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(AuthenticationMethodsRoot $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete navigation property authenticationMethods for reports
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
     * Container for navigation properties for Azure AD authentication methods resources.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, AuthenticationMethodsRoot::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property authenticationMethods in reports
     * @param AuthenticationMethodsRoot $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(AuthenticationMethodsRoot $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.reports.authenticationMethods.userRegistrationDetails.item collection
     * @param string $id Unique identifier of the item
     * @return UserRegistrationDetailsItemRequestBuilder
    */
    public function userRegistrationDetailsById(string $id): UserRegistrationDetailsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userRegistrationDetails_id'] = $id;
        return new UserRegistrationDetailsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to call the usersRegisteredByFeature method.
     * @return UsersRegisteredByFeatureRequestBuilder
    */
    public function usersRegisteredByFeature(): UsersRegisteredByFeatureRequestBuilder {
        return new UsersRegisteredByFeatureRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the usersRegisteredByFeature method.
     * @param string $includedUserRoles Usage: includedUserRoles='{includedUserRoles}'
     * @param string $includedUserTypes Usage: includedUserTypes='{includedUserTypes}'
     * @return UsersRegisteredByFeatureWithIncludedUserTypesWithIncludedUserRolesRequestBuilder
    */
    public function usersRegisteredByFeatureWithIncludedUserTypesWithIncludedUserRoles(string $includedUserRoles, string $includedUserTypes): UsersRegisteredByFeatureWithIncludedUserTypesWithIncludedUserRolesRequestBuilder {
        return new UsersRegisteredByFeatureWithIncludedUserTypesWithIncludedUserRolesRequestBuilder($this->pathParameters, $this->requestAdapter, $includedUserRoles, $includedUserTypes);
    }

    /**
     * Provides operations to call the usersRegisteredByMethod method.
     * @return UsersRegisteredByMethodRequestBuilder
    */
    public function usersRegisteredByMethod(): UsersRegisteredByMethodRequestBuilder {
        return new UsersRegisteredByMethodRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the usersRegisteredByMethod method.
     * @param string $includedUserRoles Usage: includedUserRoles='{includedUserRoles}'
     * @param string $includedUserTypes Usage: includedUserTypes='{includedUserTypes}'
     * @return UsersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRolesRequestBuilder
    */
    public function usersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRoles(string $includedUserRoles, string $includedUserTypes): UsersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRolesRequestBuilder {
        return new UsersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRolesRequestBuilder($this->pathParameters, $this->requestAdapter, $includedUserRoles, $includedUserTypes);
    }

}
