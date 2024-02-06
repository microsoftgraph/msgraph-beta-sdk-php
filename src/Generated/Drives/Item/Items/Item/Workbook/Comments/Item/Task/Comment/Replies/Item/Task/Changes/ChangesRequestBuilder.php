<?php

namespace Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Comments\Item\Task\Comment\Replies\Item\Task\Changes;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Comments\Item\Task\Comment\Replies\Item\Task\Changes\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Comments\Item\Task\Comment\Replies\Item\Task\Changes\Item\WorkbookDocumentTaskChangeItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Comments\Item\Task\Comment\Replies\Item\Task\Changes\ItemAtWithIndex\ItemAtWithIndexRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WorkbookDocumentTaskChange;
use Microsoft\Graph\Beta\Generated\Models\WorkbookDocumentTaskChangeCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the changes property of the microsoft.graph.workbookDocumentTask entity.
*/
class ChangesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the count method.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the changes property of the microsoft.graph.workbookDocumentTask entity.
     * @param string $workbookDocumentTaskChangeId The unique identifier of workbookDocumentTaskChange
     * @return WorkbookDocumentTaskChangeItemRequestBuilder
    */
    public function byWorkbookDocumentTaskChangeId(string $workbookDocumentTaskChangeId): WorkbookDocumentTaskChangeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workbookDocumentTaskChange%2Did'] = $workbookDocumentTaskChangeId;
        return new WorkbookDocumentTaskChangeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ChangesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/workbook/comments/{workbookComment%2Did}/task/comment/replies/{workbookCommentReply%2Did}/task/changes{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * A collection of task change histories.
     * @param ChangesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkbookDocumentTaskChangeCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ChangesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkbookDocumentTaskChangeCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the itemAt method.
     * @param int $index Usage: index={index}
     * @return ItemAtWithIndexRequestBuilder
    */
    public function itemAtWithIndex(int $index): ItemAtWithIndexRequestBuilder {
        return new ItemAtWithIndexRequestBuilder($this->pathParameters, $this->requestAdapter, $index);
    }

    /**
     * Create new navigation property to changes for drives
     * @param WorkbookDocumentTaskChange $body The request body
     * @param ChangesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkbookDocumentTaskChange|null>
     * @throws Exception
    */
    public function post(WorkbookDocumentTaskChange $body, ?ChangesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkbookDocumentTaskChange::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * A collection of task change histories.
     * @param ChangesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ChangesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to changes for drives
     * @param WorkbookDocumentTaskChange $body The request body
     * @param ChangesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(WorkbookDocumentTaskChange $body, ?ChangesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ChangesRequestBuilder
    */
    public function withUrl(string $rawUrl): ChangesRequestBuilder {
        return new ChangesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
