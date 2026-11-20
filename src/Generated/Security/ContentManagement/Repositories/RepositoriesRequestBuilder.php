<?php

namespace Microsoft\Graph\Beta\Generated\Security\ContentManagement\Repositories;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\ContentManagement\ContentManagementRepositoryCollectionResponse;
use Microsoft\Graph\Beta\Generated\Security\ContentManagement\Repositories\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ContentManagement\Repositories\Item\ContentManagementRepositoryItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ContentManagement\Repositories\MicrosoftGraphSecurityContentManagementConnect\MicrosoftGraphSecurityContentManagementConnectRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ContentManagement\Repositories\MicrosoftGraphSecurityContentManagementDiscoverAvailableRepositories\MicrosoftGraphSecurityContentManagementDiscoverAvailableRepositoriesRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the repositories property of the microsoft.graph.contentManagementRoot entity.
*/
class RepositoriesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the connect method.
    */
    public function microsoftGraphSecurityContentManagementConnect(): MicrosoftGraphSecurityContentManagementConnectRequestBuilder {
        return new MicrosoftGraphSecurityContentManagementConnectRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the discoverAvailableRepositories method.
    */
    public function microsoftGraphSecurityContentManagementDiscoverAvailableRepositories(): MicrosoftGraphSecurityContentManagementDiscoverAvailableRepositoriesRequestBuilder {
        return new MicrosoftGraphSecurityContentManagementDiscoverAvailableRepositoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the repositories property of the microsoft.graph.contentManagementRoot entity.
     * @param string $contentManagementRepositoryId The unique identifier of contentManagementRepository
     * @return ContentManagementRepositoryItemRequestBuilder
    */
    public function byContentManagementRepositoryId(string $contentManagementRepositoryId): ContentManagementRepositoryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contentManagementRepository%2Did'] = $contentManagementRepositoryId;
        return new ContentManagementRepositoryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RepositoriesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/contentManagement/repositories{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List the contentManagementRepository connections in the tenant. An empty tenant returns an empty collection.
     * @param RepositoriesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ContentManagementRepositoryCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/contentmanagementroot-list-repositories?view=graph-rest-beta Find more info here
    */
    public function get(?RepositoriesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ContentManagementRepositoryCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List the contentManagementRepository connections in the tenant. An empty tenant returns an empty collection.
     * @param RepositoriesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RepositoriesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RepositoriesRequestBuilder
    */
    public function withUrl(string $rawUrl): RepositoriesRequestBuilder {
        return new RepositoriesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
