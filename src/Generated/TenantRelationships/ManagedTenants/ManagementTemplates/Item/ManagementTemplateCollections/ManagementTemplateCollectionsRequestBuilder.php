<?php

namespace Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagementTemplates\Item\ManagementTemplateCollections;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ManagedTenants\ManagementTemplateCollectionCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagementTemplates\Item\ManagementTemplateCollections\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagementTemplates\Item\ManagementTemplateCollections\Item\ManagementTemplateCollectionItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the managementTemplateCollections property of the microsoft.graph.managedTenants.managementTemplate entity.
*/
class ManagementTemplateCollectionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managementTemplateCollections property of the microsoft.graph.managedTenants.managementTemplate entity.
     * @param string $managementTemplateCollectionId The unique identifier of managementTemplateCollection
     * @return ManagementTemplateCollectionItemRequestBuilder
    */
    public function byManagementTemplateCollectionId(string $managementTemplateCollectionId): ManagementTemplateCollectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managementTemplateCollection%2Did'] = $managementTemplateCollectionId;
        return new ManagementTemplateCollectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ManagementTemplateCollectionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/tenantRelationships/managedTenants/managementTemplates/{managementTemplate%2Did}/managementTemplateCollections{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get managementTemplateCollections from tenantRelationships
     * @param ManagementTemplateCollectionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagementTemplateCollectionCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ManagementTemplateCollectionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagementTemplateCollectionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get managementTemplateCollections from tenantRelationships
     * @param ManagementTemplateCollectionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ManagementTemplateCollectionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ManagementTemplateCollectionsRequestBuilder
    */
    public function withUrl(string $rawUrl): ManagementTemplateCollectionsRequestBuilder {
        return new ManagementTemplateCollectionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
