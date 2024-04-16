<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Catalog\Entries;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Catalog\Entries\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Catalog\Entries\Item\CatalogEntryItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\CatalogEntry;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\CatalogEntryCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the entries property of the microsoft.graph.windowsUpdates.catalog entity.
*/
class EntriesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the entries property of the microsoft.graph.windowsUpdates.catalog entity.
     * @param string $catalogEntryId The unique identifier of catalogEntry
     * @return CatalogEntryItemRequestBuilder
    */
    public function byCatalogEntryId(string $catalogEntryId): CatalogEntryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['catalogEntry%2Did'] = $catalogEntryId;
        return new CatalogEntryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new EntriesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/windows/updates/catalog/entries{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of catalogEntry resources from the catalog. Currently, this operation returns entries of the featureUpdateCatalogEntry or qualityUpdateCatalog types, inherited from catalogEntry. 
     * @param EntriesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CatalogEntryCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/windowsupdates-catalog-list-entries?view=graph-rest-1.0 Find more info here
    */
    public function get(?EntriesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CatalogEntryCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to entries for admin
     * @param CatalogEntry $body The request body
     * @param EntriesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CatalogEntry|null>
     * @throws Exception
    */
    public function post(CatalogEntry $body, ?EntriesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CatalogEntry::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of catalogEntry resources from the catalog. Currently, this operation returns entries of the featureUpdateCatalogEntry or qualityUpdateCatalog types, inherited from catalogEntry. 
     * @param EntriesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EntriesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to entries for admin
     * @param CatalogEntry $body The request body
     * @param EntriesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CatalogEntry $body, ?EntriesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return EntriesRequestBuilder
    */
    public function withUrl(string $rawUrl): EntriesRequestBuilder {
        return new EntriesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
