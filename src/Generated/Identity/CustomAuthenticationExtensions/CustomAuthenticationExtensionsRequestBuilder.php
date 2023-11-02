<?php

namespace Microsoft\Graph\Beta\Generated\Identity\CustomAuthenticationExtensions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Identity\CustomAuthenticationExtensions\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Identity\CustomAuthenticationExtensions\Item\CustomAuthenticationExtensionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Identity\CustomAuthenticationExtensions\ValidateAuthenticationConfiguration\ValidateAuthenticationConfigurationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CustomAuthenticationExtension;
use Microsoft\Graph\Beta\Generated\Models\CustomAuthenticationExtensionCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the customAuthenticationExtensions property of the microsoft.graph.identityContainer entity.
*/
class CustomAuthenticationExtensionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the validateAuthenticationConfiguration method.
    */
    public function validateAuthenticationConfiguration(): ValidateAuthenticationConfigurationRequestBuilder {
        return new ValidateAuthenticationConfigurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the customAuthenticationExtensions property of the microsoft.graph.identityContainer entity.
     * @param string $customAuthenticationExtensionId The unique identifier of customAuthenticationExtension
     * @return CustomAuthenticationExtensionItemRequestBuilder
    */
    public function byCustomAuthenticationExtensionId(string $customAuthenticationExtensionId): CustomAuthenticationExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['customAuthenticationExtension%2Did'] = $customAuthenticationExtensionId;
        return new CustomAuthenticationExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CustomAuthenticationExtensionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/customAuthenticationExtensions{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the customAuthenticationExtension objects and their properties. Currently, only onTokenIssuanceStartCustomExtension objects are returned. This API is available in the following national cloud deployments.
     * @param CustomAuthenticationExtensionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomAuthenticationExtensionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identitycontainer-list-customauthenticationextensions?view=graph-rest-1.0 Find more info here
    */
    public function get(?CustomAuthenticationExtensionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomAuthenticationExtensionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new customAuthenticationExtension object. Only the onTokenIssuanceStartCustomExtension object type is supported. This API is available in the following national cloud deployments.
     * @param CustomAuthenticationExtension $body The request body
     * @param CustomAuthenticationExtensionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomAuthenticationExtension|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identitycontainer-post-customauthenticationextensions?view=graph-rest-1.0 Find more info here
    */
    public function post(CustomAuthenticationExtension $body, ?CustomAuthenticationExtensionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomAuthenticationExtension::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the customAuthenticationExtension objects and their properties. Currently, only onTokenIssuanceStartCustomExtension objects are returned. This API is available in the following national cloud deployments.
     * @param CustomAuthenticationExtensionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CustomAuthenticationExtensionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Create a new customAuthenticationExtension object. Only the onTokenIssuanceStartCustomExtension object type is supported. This API is available in the following national cloud deployments.
     * @param CustomAuthenticationExtension $body The request body
     * @param CustomAuthenticationExtensionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CustomAuthenticationExtension $body, ?CustomAuthenticationExtensionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return CustomAuthenticationExtensionsRequestBuilder
    */
    public function withUrl(string $rawUrl): CustomAuthenticationExtensionsRequestBuilder {
        return new CustomAuthenticationExtensionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
