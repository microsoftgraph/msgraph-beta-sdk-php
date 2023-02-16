<?php

namespace Microsoft\Graph\Beta\Generated\Reports\AuthenticationMethods;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\AuthenticationMethodsRoot;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Reports\AuthenticationMethods\MicrosoftGraphUsersRegisteredByFeature\MicrosoftGraphUsersRegisteredByFeatureRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\AuthenticationMethods\MicrosoftGraphUsersRegisteredByFeatureWithIncludedUserTypesWithIncludedUserRoles\MicrosoftGraphUsersRegisteredByFeatureWithIncludedUserTypesWithIncludedUserRolesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\AuthenticationMethods\MicrosoftGraphUsersRegisteredByMethod\MicrosoftGraphUsersRegisteredByMethodRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\AuthenticationMethods\MicrosoftGraphUsersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRoles\MicrosoftGraphUsersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRolesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\AuthenticationMethods\UserRegistrationDetails\Item\UserRegistrationDetailsItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\AuthenticationMethods\UserRegistrationDetails\UserRegistrationDetailsRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the authenticationMethods property of the microsoft.graph.reportRoot entity.
*/
class AuthenticationMethodsRequestBuilder 
{
    /**
     * Provides operations to call the usersRegisteredByFeature method.
    */
    public function microsoftGraphUsersRegisteredByFeature(): MicrosoftGraphUsersRegisteredByFeatureRequestBuilder {
        return new MicrosoftGraphUsersRegisteredByFeatureRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the usersRegisteredByMethod method.
    */
    public function microsoftGraphUsersRegisteredByMethod(): MicrosoftGraphUsersRegisteredByMethodRequestBuilder {
        return new MicrosoftGraphUsersRegisteredByMethodRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the userRegistrationDetails property of the microsoft.graph.authenticationMethodsRoot entity.
    */
    public function userRegistrationDetails(): UserRegistrationDetailsRequestBuilder {
        return new UserRegistrationDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AuthenticationMethodsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/reports/authenticationMethods{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property authenticationMethods for reports
     * @param AuthenticationMethodsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?AuthenticationMethodsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Container for navigation properties for Azure AD authentication methods resources.
     * @param AuthenticationMethodsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?AuthenticationMethodsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationMethodsRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the usersRegisteredByFeature method.
     * @param string $includedUserRoles Usage: includedUserRoles='{includedUserRoles}'
     * @param string $includedUserTypes Usage: includedUserTypes='{includedUserTypes}'
     * @return MicrosoftGraphUsersRegisteredByFeatureWithIncludedUserTypesWithIncludedUserRolesRequestBuilder
    */
    public function microsoftGraphUsersRegisteredByFeatureWithIncludedUserTypesWithIncludedUserRoles(string $includedUserRoles, string $includedUserTypes): MicrosoftGraphUsersRegisteredByFeatureWithIncludedUserTypesWithIncludedUserRolesRequestBuilder {
        return new MicrosoftGraphUsersRegisteredByFeatureWithIncludedUserTypesWithIncludedUserRolesRequestBuilder($this->pathParameters, $this->requestAdapter, $includedUserRoles, $includedUserTypes);
    }

    /**
     * Provides operations to call the usersRegisteredByMethod method.
     * @param string $includedUserRoles Usage: includedUserRoles='{includedUserRoles}'
     * @param string $includedUserTypes Usage: includedUserTypes='{includedUserTypes}'
     * @return MicrosoftGraphUsersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRolesRequestBuilder
    */
    public function microsoftGraphUsersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRoles(string $includedUserRoles, string $includedUserTypes): MicrosoftGraphUsersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRolesRequestBuilder {
        return new MicrosoftGraphUsersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRolesRequestBuilder($this->pathParameters, $this->requestAdapter, $includedUserRoles, $includedUserTypes);
    }

    /**
     * Update the navigation property authenticationMethods in reports
     * @param AuthenticationMethodsRoot $body The request body
     * @param AuthenticationMethodsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(AuthenticationMethodsRoot $body, ?AuthenticationMethodsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationMethodsRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property authenticationMethods for reports
     * @param AuthenticationMethodsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AuthenticationMethodsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Container for navigation properties for Azure AD authentication methods resources.
     * @param AuthenticationMethodsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AuthenticationMethodsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property authenticationMethods in reports
     * @param AuthenticationMethodsRoot $body The request body
     * @param AuthenticationMethodsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AuthenticationMethodsRoot $body, ?AuthenticationMethodsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Provides operations to manage the userRegistrationDetails property of the microsoft.graph.authenticationMethodsRoot entity.
     * @param string $id Unique identifier of the item
     * @return UserRegistrationDetailsItemRequestBuilder
    */
    public function userRegistrationDetailsById(string $id): UserRegistrationDetailsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userRegistrationDetails%2Did'] = $id;
        return new UserRegistrationDetailsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
