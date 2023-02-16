<?php

namespace Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Tables\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Columns\ColumnsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Columns\Item\WorkbookTableColumnItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\MicrosoftGraphClearFilters\MicrosoftGraphClearFiltersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\MicrosoftGraphConvertToRange\MicrosoftGraphConvertToRangeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\MicrosoftGraphDataBodyRange\MicrosoftGraphDataBodyRangeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\MicrosoftGraphHeaderRowRange\MicrosoftGraphHeaderRowRangeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\MicrosoftGraphRange\MicrosoftGraphRangeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\MicrosoftGraphReapplyFilters\MicrosoftGraphReapplyFiltersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\MicrosoftGraphTotalRowRange\MicrosoftGraphTotalRowRangeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Rows\Item\WorkbookTableRowItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Rows\RowsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Sort\SortRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Worksheet\WorksheetRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WorkbookTable;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the tables property of the microsoft.graph.workbook entity.
*/
class WorkbookTableItemRequestBuilder 
{
    /**
     * Provides operations to manage the columns property of the microsoft.graph.workbookTable entity.
    */
    public function columns(): ColumnsRequestBuilder {
        return new ColumnsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the clearFilters method.
    */
    public function microsoftGraphClearFilters(): MicrosoftGraphClearFiltersRequestBuilder {
        return new MicrosoftGraphClearFiltersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the convertToRange method.
    */
    public function microsoftGraphConvertToRange(): MicrosoftGraphConvertToRangeRequestBuilder {
        return new MicrosoftGraphConvertToRangeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dataBodyRange method.
    */
    public function microsoftGraphDataBodyRange(): MicrosoftGraphDataBodyRangeRequestBuilder {
        return new MicrosoftGraphDataBodyRangeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the headerRowRange method.
    */
    public function microsoftGraphHeaderRowRange(): MicrosoftGraphHeaderRowRangeRequestBuilder {
        return new MicrosoftGraphHeaderRowRangeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the range method.
    */
    public function microsoftGraphRange(): MicrosoftGraphRangeRequestBuilder {
        return new MicrosoftGraphRangeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reapplyFilters method.
    */
    public function microsoftGraphReapplyFilters(): MicrosoftGraphReapplyFiltersRequestBuilder {
        return new MicrosoftGraphReapplyFiltersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the totalRowRange method.
    */
    public function microsoftGraphTotalRowRange(): MicrosoftGraphTotalRowRangeRequestBuilder {
        return new MicrosoftGraphTotalRowRangeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the rows property of the microsoft.graph.workbookTable entity.
    */
    public function rows(): RowsRequestBuilder {
        return new RowsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sort property of the microsoft.graph.workbookTable entity.
    */
    public function sort(): SortRequestBuilder {
        return new SortRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the worksheet property of the microsoft.graph.workbookTable entity.
    */
    public function worksheet(): WorksheetRequestBuilder {
        return new WorksheetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the columns property of the microsoft.graph.workbookTable entity.
     * @param string $id Unique identifier of the item
     * @return WorkbookTableColumnItemRequestBuilder
    */
    public function columnsById(string $id): WorkbookTableColumnItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workbookTableColumn%2Did'] = $id;
        return new WorkbookTableColumnItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WorkbookTableItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/workbook/tables/{workbookTable%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property tables for drives
     * @param WorkbookTableItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?WorkbookTableItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Represents a collection of tables associated with the workbook. Read-only.
     * @param WorkbookTableItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?WorkbookTableItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [WorkbookTable::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property tables in drives
     * @param WorkbookTable $body The request body
     * @param WorkbookTableItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(WorkbookTable $body, ?WorkbookTableItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [WorkbookTable::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the rows property of the microsoft.graph.workbookTable entity.
     * @param string $id Unique identifier of the item
     * @return WorkbookTableRowItemRequestBuilder
    */
    public function rowsById(string $id): WorkbookTableRowItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workbookTableRow%2Did'] = $id;
        return new WorkbookTableRowItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property tables for drives
     * @param WorkbookTableItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WorkbookTableItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Represents a collection of tables associated with the workbook. Read-only.
     * @param WorkbookTableItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WorkbookTableItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property tables in drives
     * @param WorkbookTable $body The request body
     * @param WorkbookTableItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(WorkbookTable $body, ?WorkbookTableItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
