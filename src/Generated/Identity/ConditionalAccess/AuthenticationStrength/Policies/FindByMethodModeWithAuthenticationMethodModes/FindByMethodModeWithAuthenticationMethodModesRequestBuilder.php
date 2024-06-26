<?php

namespace Microsoft\Graph\Beta\Generated\Identity\ConditionalAccess\AuthenticationStrength\Policies\FindByMethodModeWithAuthenticationMethodModes;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the findByMethodMode method.
*/
class FindByMethodModeWithAuthenticationMethodModesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new FindByMethodModeWithAuthenticationMethodModesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $authenticationMethodModes Usage: authenticationMethodModes={authenticationMethodModes}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $authenticationMethodModes = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/conditionalAccess/authenticationStrength/policies/findByMethodMode(authenticationMethodModes={authenticationMethodModes}){?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['authenticationMethodModes'] = $authenticationMethodModes;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the authenticationStrengthPolicy objects and their properties filtered to only include policies that include the authentication method mode specified in the request.
     * @param FindByMethodModeWithAuthenticationMethodModesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FindByMethodModeWithAuthenticationMethodModesGetResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authenticationstrengthpolicy-findbymethodmode?view=graph-rest-beta Find more info here
    */
    public function get(?FindByMethodModeWithAuthenticationMethodModesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FindByMethodModeWithAuthenticationMethodModesGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the authenticationStrengthPolicy objects and their properties filtered to only include policies that include the authentication method mode specified in the request.
     * @param FindByMethodModeWithAuthenticationMethodModesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FindByMethodModeWithAuthenticationMethodModesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return FindByMethodModeWithAuthenticationMethodModesRequestBuilder
    */
    public function withUrl(string $rawUrl): FindByMethodModeWithAuthenticationMethodModesRequestBuilder {
        return new FindByMethodModeWithAuthenticationMethodModesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
