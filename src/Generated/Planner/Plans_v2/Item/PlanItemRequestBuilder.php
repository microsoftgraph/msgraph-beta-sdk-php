<?php

namespace Microsoft\Graph\Beta\Generated\Planner\Plans_v2\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Plan;
use Microsoft\Graph\Beta\Generated\Planner\Plans_v2\Item\Buckets\BucketsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Planner\Plans_v2\Item\Contexts\ContextsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Planner\Plans_v2\Item\CustomFieldDefinitions\CustomFieldDefinitionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Planner\Plans_v2\Item\Dependencies\DependenciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Planner\Plans_v2\Item\Goals\GoalsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Planner\Plans_v2\Item\HistoryItems\HistoryItemsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Planner\Plans_v2\Item\Links\LinksRequestBuilder;
use Microsoft\Graph\Beta\Generated\Planner\Plans_v2\Item\Tasks\TasksRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the plans_v2 property of the microsoft.graph.planner entity.
*/
class PlanItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the buckets property of the microsoft.graph.plan entity.
    */
    public function buckets(): BucketsRequestBuilder {
        return new BucketsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the contexts property of the microsoft.graph.plan entity.
    */
    public function contexts(): ContextsRequestBuilder {
        return new ContextsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the customFieldDefinitions property of the microsoft.graph.plan entity.
    */
    public function customFieldDefinitions(): CustomFieldDefinitionsRequestBuilder {
        return new CustomFieldDefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the dependencies property of the microsoft.graph.plan entity.
    */
    public function dependencies(): DependenciesRequestBuilder {
        return new DependenciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the goals property of the microsoft.graph.plan entity.
    */
    public function goals(): GoalsRequestBuilder {
        return new GoalsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the historyItems property of the microsoft.graph.plan entity.
    */
    public function historyItems(): HistoryItemsRequestBuilder {
        return new HistoryItemsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the links property of the microsoft.graph.plan entity.
    */
    public function links(): LinksRequestBuilder {
        return new LinksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tasks property of the microsoft.graph.plan entity.
    */
    public function tasks(): TasksRequestBuilder {
        return new TasksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new PlanItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/planner/plans_v2/{plan%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a plan object.
     * @param PlanItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/planneruser-delete-v2?view=graph-rest-beta Find more info here
    */
    public function delete(?PlanItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of plan object.
     * @param PlanItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Plan|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/plan-get?view=graph-rest-beta Find more info here
    */
    public function get(?PlanItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Plan::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a plan object.
     * @param Plan $body The request body
     * @param PlanItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Plan|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/plan-update?view=graph-rest-beta Find more info here
    */
    public function patch(Plan $body, ?PlanItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Plan::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a plan object.
     * @param PlanItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?PlanItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Read the properties and relationships of plan object.
     * @param PlanItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PlanItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a plan object.
     * @param Plan $body The request body
     * @param PlanItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Plan $body, ?PlanItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PlanItemRequestBuilder
    */
    public function withUrl(string $rawUrl): PlanItemRequestBuilder {
        return new PlanItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
