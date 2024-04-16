<?php

namespace Microsoft\Graph\Beta\Generated\Identity\B2cUserFlows\Item\Languages\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Identity\B2cUserFlows\Item\Languages\Item\DefaultPages\DefaultPagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Identity\B2cUserFlows\Item\Languages\Item\OverridesPages\OverridesPagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UserFlowLanguageConfiguration;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the languages property of the microsoft.graph.b2cIdentityUserFlow entity.
*/
class UserFlowLanguageConfigurationItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the defaultPages property of the microsoft.graph.userFlowLanguageConfiguration entity.
    */
    public function defaultPages(): DefaultPagesRequestBuilder {
        return new DefaultPagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the overridesPages property of the microsoft.graph.userFlowLanguageConfiguration entity.
    */
    public function overridesPages(): OverridesPagesRequestBuilder {
        return new OverridesPagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new UserFlowLanguageConfigurationItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/b2cUserFlows/{b2cIdentityUserFlow%2Did}/languages/{userFlowLanguageConfiguration%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes a userFlowLanguageConfiguration object from a Azure AD B2C user flow. Note: You cannot delete languages from an Microsoft Entra user flow.
     * @param UserFlowLanguageConfigurationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/userflowlanguageconfiguration-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?UserFlowLanguageConfigurationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a userFlowLanguageConfiguration object. These objects represent a language available in a user flow. Note: To retrieve a language supported for customization, you must first enable language customization on your Azure AD B2C user flow. For more information, see Update b2cIdentityUserFlow. Language customization is enabled by default in Microsoft Entra user flows.
     * @param UserFlowLanguageConfigurationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserFlowLanguageConfiguration|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/userflowlanguageconfiguration-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?UserFlowLanguageConfigurationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserFlowLanguageConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method is used to create or update a custom language in an Azure AD B2C user flow. Note: You must enable language customization in the Azure AD B2C user flow before you can create a custom language. For more information, see Update b2cIdentityUserFlow.
     * @param UserFlowLanguageConfiguration $body The request body
     * @param UserFlowLanguageConfigurationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserFlowLanguageConfiguration|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/b2cidentityuserflow-put-languages?view=graph-rest-1.0 Find more info here
    */
    public function patch(UserFlowLanguageConfiguration $body, ?UserFlowLanguageConfigurationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserFlowLanguageConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Deletes a userFlowLanguageConfiguration object from a Azure AD B2C user flow. Note: You cannot delete languages from an Microsoft Entra user flow.
     * @param UserFlowLanguageConfigurationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?UserFlowLanguageConfigurationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a userFlowLanguageConfiguration object. These objects represent a language available in a user flow. Note: To retrieve a language supported for customization, you must first enable language customization on your Azure AD B2C user flow. For more information, see Update b2cIdentityUserFlow. Language customization is enabled by default in Microsoft Entra user flows.
     * @param UserFlowLanguageConfigurationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserFlowLanguageConfigurationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * This method is used to create or update a custom language in an Azure AD B2C user flow. Note: You must enable language customization in the Azure AD B2C user flow before you can create a custom language. For more information, see Update b2cIdentityUserFlow.
     * @param UserFlowLanguageConfiguration $body The request body
     * @param UserFlowLanguageConfigurationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(UserFlowLanguageConfiguration $body, ?UserFlowLanguageConfigurationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UserFlowLanguageConfigurationItemRequestBuilder
    */
    public function withUrl(string $rawUrl): UserFlowLanguageConfigurationItemRequestBuilder {
        return new UserFlowLanguageConfigurationItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
