<?php

namespace Microsoft\Graph\Beta\Generated\Search;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\SearchEntity;
use Microsoft\Graph\Beta\Generated\Search\Acronyms\AcronymsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Search\Acronyms\Item\AcronymItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Search\Bookmarks\BookmarksRequestBuilder;
use Microsoft\Graph\Beta\Generated\Search\Bookmarks\Item\BookmarkItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Search\MicrosoftGraphQuery\MicrosoftGraphQueryRequestBuilder;
use Microsoft\Graph\Beta\Generated\Search\Qnas\Item\QnaItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Search\Qnas\QnasRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the searchEntity singleton.
*/
class SearchRequestBuilder 
{
    /**
     * Provides operations to manage the acronyms property of the microsoft.graph.searchEntity entity.
    */
    public function acronyms(): AcronymsRequestBuilder {
        return new AcronymsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the bookmarks property of the microsoft.graph.searchEntity entity.
    */
    public function bookmarks(): BookmarksRequestBuilder {
        return new BookmarksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the query method.
    */
    public function microsoftGraphQuery(): MicrosoftGraphQueryRequestBuilder {
        return new MicrosoftGraphQueryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the qnas property of the microsoft.graph.searchEntity entity.
    */
    public function qnas(): QnasRequestBuilder {
        return new QnasRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the acronyms property of the microsoft.graph.searchEntity entity.
     * @param string $id Unique identifier of the item
     * @return AcronymItemRequestBuilder
    */
    public function acronymsById(string $id): AcronymItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['acronym%2Did'] = $id;
        return new AcronymItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the bookmarks property of the microsoft.graph.searchEntity entity.
     * @param string $id Unique identifier of the item
     * @return BookmarkItemRequestBuilder
    */
    public function bookmarksById(string $id): BookmarkItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookmark%2Did'] = $id;
        return new BookmarkItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SearchRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/search{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get search
     * @param SearchRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?SearchRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [SearchEntity::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update search
     * @param SearchEntity $body The request body
     * @param SearchRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(SearchEntity $body, ?SearchRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [SearchEntity::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the qnas property of the microsoft.graph.searchEntity entity.
     * @param string $id Unique identifier of the item
     * @return QnaItemRequestBuilder
    */
    public function qnasById(string $id): QnaItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['qna%2Did'] = $id;
        return new QnaItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get search
     * @param SearchRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SearchRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update search
     * @param SearchEntity $body The request body
     * @param SearchRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(SearchEntity $body, ?SearchRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
