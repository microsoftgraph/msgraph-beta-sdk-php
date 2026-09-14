<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\LifecyclePolicyPriorityConfigurations;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\LifecyclePolicyPriorityConfigurations\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\LifecyclePolicyPriorityConfigurations\Item\LifecyclePolicyPriorityConfigurationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\IdentityGovernance\LifecyclePolicyPriorityConfigurationCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the lifecyclePolicyPriorityConfigurations property of the microsoft.graph.identityGovernance.lifecycleWorkflowsContainer entity.
*/
class LifecyclePolicyPriorityConfigurationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the lifecyclePolicyPriorityConfigurations property of the microsoft.graph.identityGovernance.lifecycleWorkflowsContainer entity.
     * @param string $lifecyclePolicyPriorityConfigurationId The unique identifier of lifecyclePolicyPriorityConfiguration
     * @return LifecyclePolicyPriorityConfigurationItemRequestBuilder
    */
    public function byLifecyclePolicyPriorityConfigurationId(string $lifecyclePolicyPriorityConfigurationId): LifecyclePolicyPriorityConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['lifecyclePolicyPriorityConfiguration%2Did'] = $lifecyclePolicyPriorityConfigurationId;
        return new LifecyclePolicyPriorityConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new LifecyclePolicyPriorityConfigurationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/lifecycleWorkflows/lifecyclePolicyPriorityConfigurations{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get lifecyclePolicyPriorityConfigurations from identityGovernance
     * @param LifecyclePolicyPriorityConfigurationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LifecyclePolicyPriorityConfigurationCollectionResponse|null>
     * @throws Exception
    */
    public function get(?LifecyclePolicyPriorityConfigurationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LifecyclePolicyPriorityConfigurationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get lifecyclePolicyPriorityConfigurations from identityGovernance
     * @param LifecyclePolicyPriorityConfigurationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?LifecyclePolicyPriorityConfigurationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return LifecyclePolicyPriorityConfigurationsRequestBuilder
    */
    public function withUrl(string $rawUrl): LifecyclePolicyPriorityConfigurationsRequestBuilder {
        return new LifecyclePolicyPriorityConfigurationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
