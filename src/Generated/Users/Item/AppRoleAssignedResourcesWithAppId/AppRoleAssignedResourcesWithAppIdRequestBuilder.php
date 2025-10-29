<?php

namespace Microsoft\\Graph\\Beta\\Generated\Users\Item\AppRoleAssignedResourcesWithAppId;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\Models\ServicePrincipal;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the appRoleAssignedResources property of the microsoft.graph.user entity.
*/
class AppRoleAssignedResourcesWithAppIdRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AppRoleAssignedResourcesWithAppIdRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $appId Alternate key of servicePrincipal
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $appId = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/appRoleAssignedResources(appId=\'{appId}\'){?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['appId'] = $appId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get appRoleAssignedResources from users
     * @param AppRoleAssignedResourcesWithAppIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ServicePrincipal|null>
     * @throws Exception
    */
    public function get(?AppRoleAssignedResourcesWithAppIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ServicePrincipal::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get appRoleAssignedResources from users
     * @param AppRoleAssignedResourcesWithAppIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AppRoleAssignedResourcesWithAppIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AppRoleAssignedResourcesWithAppIdRequestBuilder
    */
    public function withUrl(string $rawUrl): AppRoleAssignedResourcesWithAppIdRequestBuilder {
        return new AppRoleAssignedResourcesWithAppIdRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
