<?php

namespace Microsoft\\Graph\\Beta\\Generated\Identity;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Identity\ApiConnectors\ApiConnectorsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Identity\AuthenticationEventListeners\AuthenticationEventListenersRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Identity\AuthenticationEventsFlows\AuthenticationEventsFlowsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Identity\B2cUserFlows\B2cUserFlowsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Identity\B2xUserFlows\B2xUserFlowsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Identity\ConditionalAccess\ConditionalAccessRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Identity\ContinuousAccessEvaluationPolicy\ContinuousAccessEvaluationPolicyRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Identity\CustomAuthenticationExtensions\CustomAuthenticationExtensionsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Identity\IdentityProviders\IdentityProvidersRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Identity\RiskPrevention\RiskPreventionRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Identity\UserFlowAttributes\UserFlowAttributesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Identity\UserFlows\UserFlowsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\IdentityContainer;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the identityContainer singleton.
*/
class IdentityRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the apiConnectors property of the microsoft.graph.identityContainer entity.
    */
    public function apiConnectors(): ApiConnectorsRequestBuilder {
        return new ApiConnectorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the authenticationEventListeners property of the microsoft.graph.identityContainer entity.
    */
    public function authenticationEventListeners(): AuthenticationEventListenersRequestBuilder {
        return new AuthenticationEventListenersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the authenticationEventsFlows property of the microsoft.graph.identityContainer entity.
    */
    public function authenticationEventsFlows(): AuthenticationEventsFlowsRequestBuilder {
        return new AuthenticationEventsFlowsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the b2cUserFlows property of the microsoft.graph.identityContainer entity.
    */
    public function b2cUserFlows(): B2cUserFlowsRequestBuilder {
        return new B2cUserFlowsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the b2xUserFlows property of the microsoft.graph.identityContainer entity.
    */
    public function b2xUserFlows(): B2xUserFlowsRequestBuilder {
        return new B2xUserFlowsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The conditionalAccess property
    */
    public function conditionalAccess(): ConditionalAccessRequestBuilder {
        return new ConditionalAccessRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the continuousAccessEvaluationPolicy property of the microsoft.graph.identityContainer entity.
    */
    public function continuousAccessEvaluationPolicy(): ContinuousAccessEvaluationPolicyRequestBuilder {
        return new ContinuousAccessEvaluationPolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the customAuthenticationExtensions property of the microsoft.graph.identityContainer entity.
    */
    public function customAuthenticationExtensions(): CustomAuthenticationExtensionsRequestBuilder {
        return new CustomAuthenticationExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the identityProviders property of the microsoft.graph.identityContainer entity.
    */
    public function identityProviders(): IdentityProvidersRequestBuilder {
        return new IdentityProvidersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the riskPrevention property of the microsoft.graph.identityContainer entity.
    */
    public function riskPrevention(): RiskPreventionRequestBuilder {
        return new RiskPreventionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userFlowAttributes property of the microsoft.graph.identityContainer entity.
    */
    public function userFlowAttributes(): UserFlowAttributesRequestBuilder {
        return new UserFlowAttributesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userFlows property of the microsoft.graph.identityContainer entity.
    */
    public function userFlows(): UserFlowsRequestBuilder {
        return new UserFlowsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new IdentityRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get identity
     * @param IdentityRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityContainer|null>
     * @throws Exception
    */
    public function get(?IdentityRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityContainer::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update identity
     * @param IdentityContainer $body The request body
     * @param IdentityRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityContainer|null>
     * @throws Exception
    */
    public function patch(IdentityContainer $body, ?IdentityRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityContainer::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get identity
     * @param IdentityRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?IdentityRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update identity
     * @param IdentityContainer $body The request body
     * @param IdentityRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(IdentityContainer $body, ?IdentityRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return IdentityRequestBuilder
    */
    public function withUrl(string $rawUrl): IdentityRequestBuilder {
        return new IdentityRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
