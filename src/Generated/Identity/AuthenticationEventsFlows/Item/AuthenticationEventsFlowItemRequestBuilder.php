<?php

namespace Microsoft\Graph\Beta\Generated\Identity\AuthenticationEventsFlows\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Identity\AuthenticationEventsFlows\Item\Conditions\ConditionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Identity\AuthenticationEventsFlows\Item\GraphExternalUsersSelfServiceSignUpEventsFlow\GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\AuthenticationEventsFlow;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the authenticationEventsFlows property of the microsoft.graph.identityContainer entity.
*/
class AuthenticationEventsFlowItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The conditions property
    */
    public function conditions(): ConditionsRequestBuilder {
        return new ConditionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to externalUsersSelfServiceSignUpEventsFlow.
    */
    public function graphExternalUsersSelfServiceSignUpEventsFlow(): GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilder {
        return new GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AuthenticationEventsFlowItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/authenticationEventsFlows/{authenticationEventsFlow%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property authenticationEventsFlows for identity
     * @param AuthenticationEventsFlowItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?AuthenticationEventsFlowItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Represents the entry point for self-service sign up and sign in user flows in both Microsoft Entra workforce and customer tenants.
     * @param AuthenticationEventsFlowItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationEventsFlow|null>
     * @throws Exception
    */
    public function get(?AuthenticationEventsFlowItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationEventsFlow::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property authenticationEventsFlows in identity
     * @param AuthenticationEventsFlow $body The request body
     * @param AuthenticationEventsFlowItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationEventsFlow|null>
     * @throws Exception
    */
    public function patch(AuthenticationEventsFlow $body, ?AuthenticationEventsFlowItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationEventsFlow::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property authenticationEventsFlows for identity
     * @param AuthenticationEventsFlowItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AuthenticationEventsFlowItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Represents the entry point for self-service sign up and sign in user flows in both Microsoft Entra workforce and customer tenants.
     * @param AuthenticationEventsFlowItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AuthenticationEventsFlowItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property authenticationEventsFlows in identity
     * @param AuthenticationEventsFlow $body The request body
     * @param AuthenticationEventsFlowItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AuthenticationEventsFlow $body, ?AuthenticationEventsFlowItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return AuthenticationEventsFlowItemRequestBuilder
    */
    public function withUrl(string $rawUrl): AuthenticationEventsFlowItemRequestBuilder {
        return new AuthenticationEventsFlowItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
