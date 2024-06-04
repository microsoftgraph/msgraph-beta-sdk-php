<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BusinessScenarios\Item\Planner\Tasks;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\BusinessScenarioTask;
use Microsoft\Graph\Beta\Generated\Models\BusinessScenarioTaskCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Solutions\BusinessScenarios\Item\Planner\Tasks\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\BusinessScenarios\Item\Planner\Tasks\Item\BusinessScenarioTaskItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the tasks property of the microsoft.graph.businessScenarioPlanner entity.
*/
class TasksRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tasks property of the microsoft.graph.businessScenarioPlanner entity.
     * @param string $businessScenarioTaskId The unique identifier of businessScenarioTask
     * @return BusinessScenarioTaskItemRequestBuilder
    */
    public function byBusinessScenarioTaskId(string $businessScenarioTaskId): BusinessScenarioTaskItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['businessScenarioTask%2Did'] = $businessScenarioTaskId;
        return new BusinessScenarioTaskItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TasksRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/businessScenarios/{businessScenario%2Did}/planner/tasks{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the businessScenarioTask objects and their properties.
     * @param TasksRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BusinessScenarioTaskCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/businessscenarioplanner-list-tasks?view=graph-rest-beta Find more info here
    */
    public function get(?TasksRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BusinessScenarioTaskCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new businessScenarioTask object.
     * @param BusinessScenarioTask $body The request body
     * @param TasksRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BusinessScenarioTask|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/businessscenarioplanner-post-tasks?view=graph-rest-beta Find more info here
    */
    public function post(BusinessScenarioTask $body, ?TasksRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BusinessScenarioTask::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the businessScenarioTask objects and their properties.
     * @param TasksRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TasksRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new businessScenarioTask object.
     * @param BusinessScenarioTask $body The request body
     * @param TasksRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BusinessScenarioTask $body, ?TasksRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TasksRequestBuilder
    */
    public function withUrl(string $rawUrl): TasksRequestBuilder {
        return new TasksRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
