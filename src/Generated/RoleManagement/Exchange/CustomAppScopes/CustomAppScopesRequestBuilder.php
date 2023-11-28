<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\Exchange\CustomAppScopes;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\CustomAppScope;
use Microsoft\Graph\Beta\Generated\Models\CustomAppScopeCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\RoleManagement\Exchange\CustomAppScopes\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Exchange\CustomAppScopes\Item\CustomAppScopeItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the customAppScopes property of the microsoft.graph.unifiedRbacApplication entity.
*/
class CustomAppScopesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the customAppScopes property of the microsoft.graph.unifiedRbacApplication entity.
     * @param string $customAppScopeId The unique identifier of customAppScope
     * @return CustomAppScopeItemRequestBuilder
    */
    public function byCustomAppScopeId(string $customAppScopeId): CustomAppScopeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['customAppScope%2Did'] = $customAppScopeId;
        return new CustomAppScopeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CustomAppScopesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/roleManagement/exchange/customAppScopes{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of customAppScope objects for an RBAC provider. Currently only the Exchange Online RBAC provider is supported.
     * @param CustomAppScopesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomAppScopeCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/unifiedrbacapplication-list-customappscopes?view=graph-rest-1.0 Find more info here
    */
    public function get(?CustomAppScopesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomAppScopeCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new customAppScope object for an RBAC provider. Currently only the Exchange Online RBAC provider is supported.
     * @param CustomAppScope $body The request body
     * @param CustomAppScopesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomAppScope|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/unifiedrbacapplication-post-customappscope?view=graph-rest-1.0 Find more info here
    */
    public function post(CustomAppScope $body, ?CustomAppScopesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomAppScope::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of customAppScope objects for an RBAC provider. Currently only the Exchange Online RBAC provider is supported.
     * @param CustomAppScopesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CustomAppScopesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new customAppScope object for an RBAC provider. Currently only the Exchange Online RBAC provider is supported.
     * @param CustomAppScope $body The request body
     * @param CustomAppScopesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CustomAppScope $body, ?CustomAppScopesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return CustomAppScopesRequestBuilder
    */
    public function withUrl(string $rawUrl): CustomAppScopesRequestBuilder {
        return new CustomAppScopesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
