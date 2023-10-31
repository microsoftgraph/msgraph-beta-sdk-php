<?php

namespace Microsoft\Graph\Beta\Generated\Policies\AuthorizationPolicy\Item\DefaultUserRoleOverrides;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\DefaultUserRoleOverride;
use Microsoft\Graph\Beta\Generated\Models\DefaultUserRoleOverrideCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Policies\AuthorizationPolicy\Item\DefaultUserRoleOverrides\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Policies\AuthorizationPolicy\Item\DefaultUserRoleOverrides\Item\DefaultUserRoleOverrideItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the defaultUserRoleOverrides property of the microsoft.graph.authorizationPolicy entity.
*/
class DefaultUserRoleOverridesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the defaultUserRoleOverrides property of the microsoft.graph.authorizationPolicy entity.
     * @param string $defaultUserRoleOverrideId The unique identifier of defaultUserRoleOverride
     * @return DefaultUserRoleOverrideItemRequestBuilder
    */
    public function byDefaultUserRoleOverrideId(string $defaultUserRoleOverrideId): DefaultUserRoleOverrideItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['defaultUserRoleOverride%2Did'] = $defaultUserRoleOverrideId;
        return new DefaultUserRoleOverrideItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DefaultUserRoleOverridesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/authorizationPolicy/{authorizationPolicy%2Did}/defaultUserRoleOverrides{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get defaultUserRoleOverrides from policies
     * @param DefaultUserRoleOverridesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DefaultUserRoleOverrideCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DefaultUserRoleOverridesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DefaultUserRoleOverrideCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to defaultUserRoleOverrides for policies
     * @param DefaultUserRoleOverride $body The request body
     * @param DefaultUserRoleOverridesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DefaultUserRoleOverride|null>
     * @throws Exception
    */
    public function post(DefaultUserRoleOverride $body, ?DefaultUserRoleOverridesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DefaultUserRoleOverride::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get defaultUserRoleOverrides from policies
     * @param DefaultUserRoleOverridesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DefaultUserRoleOverridesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to defaultUserRoleOverrides for policies
     * @param DefaultUserRoleOverride $body The request body
     * @param DefaultUserRoleOverridesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DefaultUserRoleOverride $body, ?DefaultUserRoleOverridesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DefaultUserRoleOverridesRequestBuilder
    */
    public function withUrl(string $rawUrl): DefaultUserRoleOverridesRequestBuilder {
        return new DefaultUserRoleOverridesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
