<?php

namespace Microsoft\Graph\Beta\Generated\Identity\IdentityProviders\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\IdentityProviderBase;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the identityProviders property of the microsoft.graph.identityContainer entity.
*/
class IdentityProviderBaseItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new IdentityProviderBaseItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/identityProviders/{identityProviderBase%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete an identity provider resource that is of the type specified by the id in the request. Among the types of providers derived from identityProviderBase, you can currently delete a socialIdentityProvider resource in Microsoft Entra ID. In Azure AD B2C, this operation can currently delete a socialIdentityProvider, openIdConnectIdentityProvider, or an appleManagedIdentityProvider resource.
     * @param IdentityProviderBaseItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identityproviderbase-delete?view=graph-rest-beta Find more info here
    */
    public function delete(?IdentityProviderBaseItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get the properties and relationships of the specified identity provider configured in the tenant. Among the types of providers derived from identityProviderBase, in Microsoft Entra, this operation can get a socialIdentityProvider, appleManagedIdentityProvider (external tenant only), builtinIdentityProvider, or an oidcIdentityProvider (external tenant only) resource. In Azure AD B2C, this operation can get a socialIdentityProvider, appleManagedIdentityProvider, builtinIdentityProvider, or an openIdConnectIdentityProvider resource.
     * @param IdentityProviderBaseItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityProviderBase|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identityproviderbase-get?view=graph-rest-beta Find more info here
    */
    public function get(?IdentityProviderBaseItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityProviderBase::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of the specified external identity provider configured in the tenant. Among the types of providers derived from identityProviderBase, in Microsoft Entra, this operation can update a socialIdentityProvider, appleManagedIdentityProvider (external tenant only), or an oidcIdentityProvider (external tenant only) resource. In Azure AD B2C, this operation can update a socialIdentityProvider, appleManagedIdentityProvider, builtinIdentityProvider, or an openIdConnectIdentityProvider resource.
     * @param IdentityProviderBase $body The request body
     * @param IdentityProviderBaseItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityProviderBase|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identityproviderbase-update?view=graph-rest-beta Find more info here
    */
    public function patch(IdentityProviderBase $body, ?IdentityProviderBaseItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityProviderBase::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete an identity provider resource that is of the type specified by the id in the request. Among the types of providers derived from identityProviderBase, you can currently delete a socialIdentityProvider resource in Microsoft Entra ID. In Azure AD B2C, this operation can currently delete a socialIdentityProvider, openIdConnectIdentityProvider, or an appleManagedIdentityProvider resource.
     * @param IdentityProviderBaseItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?IdentityProviderBaseItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Get the properties and relationships of the specified identity provider configured in the tenant. Among the types of providers derived from identityProviderBase, in Microsoft Entra, this operation can get a socialIdentityProvider, appleManagedIdentityProvider (external tenant only), builtinIdentityProvider, or an oidcIdentityProvider (external tenant only) resource. In Azure AD B2C, this operation can get a socialIdentityProvider, appleManagedIdentityProvider, builtinIdentityProvider, or an openIdConnectIdentityProvider resource.
     * @param IdentityProviderBaseItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?IdentityProviderBaseItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of the specified external identity provider configured in the tenant. Among the types of providers derived from identityProviderBase, in Microsoft Entra, this operation can update a socialIdentityProvider, appleManagedIdentityProvider (external tenant only), or an oidcIdentityProvider (external tenant only) resource. In Azure AD B2C, this operation can update a socialIdentityProvider, appleManagedIdentityProvider, builtinIdentityProvider, or an openIdConnectIdentityProvider resource.
     * @param IdentityProviderBase $body The request body
     * @param IdentityProviderBaseItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(IdentityProviderBase $body, ?IdentityProviderBaseItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return IdentityProviderBaseItemRequestBuilder
    */
    public function withUrl(string $rawUrl): IdentityProviderBaseItemRequestBuilder {
        return new IdentityProviderBaseItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
