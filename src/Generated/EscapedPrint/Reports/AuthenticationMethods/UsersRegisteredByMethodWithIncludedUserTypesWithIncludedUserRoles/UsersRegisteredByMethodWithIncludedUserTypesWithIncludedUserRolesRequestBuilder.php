<?php

namespace Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\AuthenticationMethods\UsersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRoles;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UserRegistrationMethodSummary;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class UsersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRolesRequestBuilder 
{
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
     * Instantiates a new UsersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRolesRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $includedUserRoles Usage: includedUserRoles='{includedUserRoles}'
     * @param string|null $includedUserTypes Usage: includedUserTypes='{includedUserTypes}'
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter, ?string $includedUserRoles = null, ?string $includedUserTypes = null) {
        $this->urlTemplate = '{+baseurl}/print/reports/authenticationMethods/microsoft.graph.usersRegisteredByMethod(includedUserTypes=\'{includedUserTypes}\',includedUserRoles=\'{includedUserRoles}\')';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
        $urlTplParams = $pathParameters;
        $urlTplParams['includedUserRoles'] = $includedUserRoles;
        $urlTplParams['includedUserTypes'] = $includedUserTypes;
        $this->pathParameters = array_merge($this->pathParameters, $urlTplParams);
    }

    /**
     * Invoke function usersRegisteredByMethod
     * @param UsersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRolesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?UsersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRolesRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [UserRegistrationMethodSummary::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Invoke function usersRegisteredByMethod
     * @param UsersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRolesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UsersRegisteredByMethodWithIncludedUserTypesWithIncludedUserRolesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

}
