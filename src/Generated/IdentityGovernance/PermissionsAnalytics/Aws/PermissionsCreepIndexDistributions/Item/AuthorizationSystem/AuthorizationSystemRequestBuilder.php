<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\PermissionsAnalytics\Aws\PermissionsCreepIndexDistributions\Item\AuthorizationSystem;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\AuthorizationSystem;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the authorizationSystem property of the microsoft.graph.permissionsCreepIndexDistribution entity.
*/
class AuthorizationSystemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AuthorizationSystemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/permissionsAnalytics/aws/permissionsCreepIndexDistributions/{permissionsCreepIndexDistribution%2Did}/authorizationSystem{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get authorizationSystem from identityGovernance
     * @param AuthorizationSystemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthorizationSystem|null>
     * @throws Exception
    */
    public function get(?AuthorizationSystemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthorizationSystem::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get authorizationSystem from identityGovernance
     * @param AuthorizationSystemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AuthorizationSystemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AuthorizationSystemRequestBuilder
    */
    public function withUrl(string $rawUrl): AuthorizationSystemRequestBuilder {
        return new AuthorizationSystemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
