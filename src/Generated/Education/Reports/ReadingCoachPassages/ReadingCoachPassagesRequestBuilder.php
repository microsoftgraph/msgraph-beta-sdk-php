<?php

namespace Microsoft\Graph\Beta\Generated\Education\Reports\ReadingCoachPassages;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Education\Reports\ReadingCoachPassages\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\Reports\ReadingCoachPassages\Item\ReadingCoachPassageItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\ReadingCoachPassage;
use Microsoft\Graph\Beta\Generated\Models\ReadingCoachPassageCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the readingCoachPassages property of the microsoft.graph.reportsRoot entity.
*/
class ReadingCoachPassagesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the readingCoachPassages property of the microsoft.graph.reportsRoot entity.
     * @param string $readingCoachPassageId The unique identifier of readingCoachPassage
     * @return ReadingCoachPassageItemRequestBuilder
    */
    public function byReadingCoachPassageId(string $readingCoachPassageId): ReadingCoachPassageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['readingCoachPassage%2Did'] = $readingCoachPassageId;
        return new ReadingCoachPassageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ReadingCoachPassagesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/reports/readingCoachPassages{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of Reading Coach passages that were practiced by a student.
     * @param ReadingCoachPassagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ReadingCoachPassageCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/reportsroot-list-readingcoachpassages?view=graph-rest-beta Find more info here
    */
    public function get(?ReadingCoachPassagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ReadingCoachPassageCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to readingCoachPassages for education
     * @param ReadingCoachPassage $body The request body
     * @param ReadingCoachPassagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ReadingCoachPassage|null>
     * @throws Exception
    */
    public function post(ReadingCoachPassage $body, ?ReadingCoachPassagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ReadingCoachPassage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of Reading Coach passages that were practiced by a student.
     * @param ReadingCoachPassagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ReadingCoachPassagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to readingCoachPassages for education
     * @param ReadingCoachPassage $body The request body
     * @param ReadingCoachPassagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ReadingCoachPassage $body, ?ReadingCoachPassagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ReadingCoachPassagesRequestBuilder
    */
    public function withUrl(string $rawUrl): ReadingCoachPassagesRequestBuilder {
        return new ReadingCoachPassagesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
