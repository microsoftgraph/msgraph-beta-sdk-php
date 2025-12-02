<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\SharePoint\Migrations\CrossOrganizationGroupMappings;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\SharePointGroupIdentityMapping;
use Microsoft\Graph\Beta\Generated\Models\SharePointGroupIdentityMappingCollectionResponse;
use Microsoft\Graph\Beta\Generated\Solutions\SharePoint\Migrations\CrossOrganizationGroupMappings\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\SharePoint\Migrations\CrossOrganizationGroupMappings\Item\SharePointGroupIdentityMappingItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the crossOrganizationGroupMappings property of the microsoft.graph.sharePointMigrationsRoot entity.
*/
class CrossOrganizationGroupMappingsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the crossOrganizationGroupMappings property of the microsoft.graph.sharePointMigrationsRoot entity.
     * @param string $sharePointGroupIdentityMappingId The unique identifier of sharePointGroupIdentityMapping
     * @return SharePointGroupIdentityMappingItemRequestBuilder
    */
    public function bySharePointGroupIdentityMappingId(string $sharePointGroupIdentityMappingId): SharePointGroupIdentityMappingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sharePointGroupIdentityMapping%2Did'] = $sharePointGroupIdentityMappingId;
        return new SharePointGroupIdentityMappingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CrossOrganizationGroupMappingsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/sharePoint/migrations/crossOrganizationGroupMappings{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a specific cross-organization group identity mapping based on the Microsoft Entra ID object ID of the source group. This method allows clients to verify existing group migration configurations and confirm that mappings are correctly established prior to or during cross-tenant migration operations.
     * @param CrossOrganizationGroupMappingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharePointGroupIdentityMappingCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/sharepointgroupidentitymapping-get?view=graph-rest-beta Find more info here
    */
    public function get(?CrossOrganizationGroupMappingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharePointGroupIdentityMappingCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to crossOrganizationGroupMappings for solutions
     * @param SharePointGroupIdentityMapping $body The request body
     * @param CrossOrganizationGroupMappingsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharePointGroupIdentityMapping|null>
     * @throws Exception
    */
    public function post(SharePointGroupIdentityMapping $body, ?CrossOrganizationGroupMappingsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharePointGroupIdentityMapping::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a specific cross-organization group identity mapping based on the Microsoft Entra ID object ID of the source group. This method allows clients to verify existing group migration configurations and confirm that mappings are correctly established prior to or during cross-tenant migration operations.
     * @param CrossOrganizationGroupMappingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CrossOrganizationGroupMappingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to crossOrganizationGroupMappings for solutions
     * @param SharePointGroupIdentityMapping $body The request body
     * @param CrossOrganizationGroupMappingsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SharePointGroupIdentityMapping $body, ?CrossOrganizationGroupMappingsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CrossOrganizationGroupMappingsRequestBuilder
    */
    public function withUrl(string $rawUrl): CrossOrganizationGroupMappingsRequestBuilder {
        return new CrossOrganizationGroupMappingsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
