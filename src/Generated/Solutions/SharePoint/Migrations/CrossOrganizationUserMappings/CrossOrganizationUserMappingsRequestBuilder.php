<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\SharePoint\Migrations\CrossOrganizationUserMappings;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\SharePointUserIdentityMapping;
use Microsoft\Graph\Beta\Generated\Models\SharePointUserIdentityMappingCollectionResponse;
use Microsoft\Graph\Beta\Generated\Solutions\SharePoint\Migrations\CrossOrganizationUserMappings\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\SharePoint\Migrations\CrossOrganizationUserMappings\Item\SharePointUserIdentityMappingItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the crossOrganizationUserMappings property of the microsoft.graph.sharePointMigrationsRoot entity.
*/
class CrossOrganizationUserMappingsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the crossOrganizationUserMappings property of the microsoft.graph.sharePointMigrationsRoot entity.
     * @param string $sharePointUserIdentityMappingId The unique identifier of sharePointUserIdentityMapping
     * @return SharePointUserIdentityMappingItemRequestBuilder
    */
    public function bySharePointUserIdentityMappingId(string $sharePointUserIdentityMappingId): SharePointUserIdentityMappingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sharePointUserIdentityMapping%2Did'] = $sharePointUserIdentityMappingId;
        return new SharePointUserIdentityMappingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CrossOrganizationUserMappingsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/sharePoint/migrations/crossOrganizationUserMappings{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a specific user identity mapping by the source user principal name (UPN). This method looks up existing user mappings and verifies migration configuration.
     * @param CrossOrganizationUserMappingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharePointUserIdentityMappingCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/sharepointuseridentitymapping-get?view=graph-rest-beta Find more info here
    */
    public function get(?CrossOrganizationUserMappingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharePointUserIdentityMappingCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to crossOrganizationUserMappings for solutions
     * @param SharePointUserIdentityMapping $body The request body
     * @param CrossOrganizationUserMappingsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharePointUserIdentityMapping|null>
     * @throws Exception
    */
    public function post(SharePointUserIdentityMapping $body, ?CrossOrganizationUserMappingsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharePointUserIdentityMapping::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a specific user identity mapping by the source user principal name (UPN). This method looks up existing user mappings and verifies migration configuration.
     * @param CrossOrganizationUserMappingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CrossOrganizationUserMappingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to crossOrganizationUserMappings for solutions
     * @param SharePointUserIdentityMapping $body The request body
     * @param CrossOrganizationUserMappingsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SharePointUserIdentityMapping $body, ?CrossOrganizationUserMappingsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CrossOrganizationUserMappingsRequestBuilder
    */
    public function withUrl(string $rawUrl): CrossOrganizationUserMappingsRequestBuilder {
        return new CrossOrganizationUserMappingsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
