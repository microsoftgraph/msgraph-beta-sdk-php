<?php

namespace Microsoft\Graph\Beta\Generated\Search;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\SearchEntity;
use Microsoft\Graph\Beta\Generated\Search\Acronyms\AcronymsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Search\Acronyms\Item\AcronymItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Search\Bookmarks\BookmarksRequestBuilder;
use Microsoft\Graph\Beta\Generated\Search\Bookmarks\Item\BookmarkItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Search\Qnas\Item\QnaItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Search\Qnas\QnasRequestBuilder;
use Microsoft\Graph\Beta\Generated\Search\Query\QueryRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class SearchRequestBuilder 
{
    public function acronyms(): AcronymsRequestBuilder {
        return new AcronymsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function bookmarks(): BookmarksRequestBuilder {
        return new BookmarksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    public function qnas(): QnasRequestBuilder {
        return new QnasRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function query(): QueryRequestBuilder {
        return new QueryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.search.acronyms.item collection
     * @param string $id Unique identifier of the item
     * @return AcronymItemRequestBuilder
    */
    public function acronymsById(string $id): AcronymItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['acronym_id'] = $id;
        return new AcronymItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.search.bookmarks.item collection
     * @param string $id Unique identifier of the item
     * @return BookmarkItemRequestBuilder
    */
    public function bookmarksById(string $id): BookmarkItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookmark_id'] = $id;
        return new BookmarkItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SearchRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/search{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get search
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update search
     * @param SearchEntity $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(SearchEntity $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Get search
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, SearchEntity::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update search
     * @param SearchEntity $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(SearchEntity $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.search.qnas.item collection
     * @param string $id Unique identifier of the item
     * @return QnaItemRequestBuilder
    */
    public function qnasById(string $id): QnaItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['qna_id'] = $id;
        return new QnaItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
