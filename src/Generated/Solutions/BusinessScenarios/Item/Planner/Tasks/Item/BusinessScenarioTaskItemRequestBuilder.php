<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BusinessScenarios\Item\Planner\Tasks\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\BusinessScenarioTask;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Solutions\BusinessScenarios\Item\Planner\Tasks\Item\AssignedToTaskBoardFormat\AssignedToTaskBoardFormatRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\BusinessScenarios\Item\Planner\Tasks\Item\BucketTaskBoardFormat\BucketTaskBoardFormatRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\BusinessScenarios\Item\Planner\Tasks\Item\Details\DetailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\BusinessScenarios\Item\Planner\Tasks\Item\ProgressTaskBoardFormat\ProgressTaskBoardFormatRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the tasks property of the microsoft.graph.businessScenarioPlanner entity.
*/
class BusinessScenarioTaskItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the assignedToTaskBoardFormat property of the microsoft.graph.plannerTask entity.
    */
    public function assignedToTaskBoardFormat(): AssignedToTaskBoardFormatRequestBuilder {
        return new AssignedToTaskBoardFormatRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the bucketTaskBoardFormat property of the microsoft.graph.plannerTask entity.
    */
    public function bucketTaskBoardFormat(): BucketTaskBoardFormatRequestBuilder {
        return new BucketTaskBoardFormatRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the details property of the microsoft.graph.plannerTask entity.
    */
    public function details(): DetailsRequestBuilder {
        return new DetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the progressTaskBoardFormat property of the microsoft.graph.plannerTask entity.
    */
    public function progressTaskBoardFormat(): ProgressTaskBoardFormatRequestBuilder {
        return new ProgressTaskBoardFormatRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new BusinessScenarioTaskItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/businessScenarios/{businessScenario%2Did}/planner/tasks/{businessScenarioTask%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a businessScenarioTask object.
     * @param BusinessScenarioTaskItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/businessscenarioplanner-delete-tasks?view=graph-rest-beta Find more info here
    */
    public function delete(?BusinessScenarioTaskItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a businessScenarioTask object.
     * @param BusinessScenarioTaskItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BusinessScenarioTask|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/businessscenariotask-get?view=graph-rest-beta Find more info here
    */
    public function get(?BusinessScenarioTaskItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BusinessScenarioTask::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a businessScenarioTask object.
     * @param BusinessScenarioTask $body The request body
     * @param BusinessScenarioTaskItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BusinessScenarioTask|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/businessscenariotask-update?view=graph-rest-beta Find more info here
    */
    public function patch(BusinessScenarioTask $body, ?BusinessScenarioTaskItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BusinessScenarioTask::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a businessScenarioTask object.
     * @param BusinessScenarioTaskItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?BusinessScenarioTaskItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Read the properties and relationships of a businessScenarioTask object.
     * @param BusinessScenarioTaskItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?BusinessScenarioTaskItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a businessScenarioTask object.
     * @param BusinessScenarioTask $body The request body
     * @param BusinessScenarioTaskItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(BusinessScenarioTask $body, ?BusinessScenarioTaskItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return BusinessScenarioTaskItemRequestBuilder
    */
    public function withUrl(string $rawUrl): BusinessScenarioTaskItemRequestBuilder {
        return new BusinessScenarioTaskItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
