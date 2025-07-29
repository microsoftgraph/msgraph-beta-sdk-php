<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\Defender\CustomAppScopes;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\CustomAppScopeCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\RoleManagement\Defender\CustomAppScopes\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Defender\CustomAppScopes\Item\CustomAppScopeItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the customAppScopes property of the microsoft.graph.unifiedRbacApplicationMultiple entity.
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
     * Provides operations to manage the customAppScopes property of the microsoft.graph.unifiedRbacApplicationMultiple entity.
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
        parent::__construct($requestAdapter, [], '{+baseurl}/roleManagement/defender/customAppScopes{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of customAppScope objects for an RBAC provider. Only the Microsoft Defender XDR Unified RBAC provider is supported.
     * @param CustomAppScopesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomAppScopeCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/unifiedrbacapplicationmultiple-list-customappscopes?view=graph-rest-beta Find more info here
    */
    public function get(?CustomAppScopesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomAppScopeCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of customAppScope objects for an RBAC provider. Only the Microsoft Defender XDR Unified RBAC provider is supported.
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return CustomAppScopesRequestBuilder
    */
    public function withUrl(string $rawUrl): CustomAppScopesRequestBuilder {
        return new CustomAppScopesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
