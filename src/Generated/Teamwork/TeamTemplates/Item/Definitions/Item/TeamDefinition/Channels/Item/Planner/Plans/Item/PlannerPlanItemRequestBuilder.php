<?php

namespace Microsoft\Graph\Beta\Generated\Teamwork\TeamTemplates\Item\Definitions\Item\TeamDefinition\Channels\Item\Planner\Plans\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\PlannerPlan;
use Microsoft\Graph\Beta\Generated\Teamwork\TeamTemplates\Item\Definitions\Item\TeamDefinition\Channels\Item\Planner\Plans\Item\Archive\ArchiveRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\TeamTemplates\Item\Definitions\Item\TeamDefinition\Channels\Item\Planner\Plans\Item\Buckets\BucketsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\TeamTemplates\Item\Definitions\Item\TeamDefinition\Channels\Item\Planner\Plans\Item\Details\DetailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\TeamTemplates\Item\Definitions\Item\TeamDefinition\Channels\Item\Planner\Plans\Item\MoveToContainer\MoveToContainerRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\TeamTemplates\Item\Definitions\Item\TeamDefinition\Channels\Item\Planner\Plans\Item\Tasks\TasksRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\TeamTemplates\Item\Definitions\Item\TeamDefinition\Channels\Item\Planner\Plans\Item\Unarchive\UnarchiveRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the plans property of the microsoft.graph.teamsChannelPlanner entity.
*/
class PlannerPlanItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the archive method.
    */
    public function archive(): ArchiveRequestBuilder {
        return new ArchiveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the buckets property of the microsoft.graph.plannerPlan entity.
    */
    public function buckets(): BucketsRequestBuilder {
        return new BucketsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the details property of the microsoft.graph.plannerPlan entity.
    */
    public function details(): DetailsRequestBuilder {
        return new DetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the moveToContainer method.
    */
    public function moveToContainer(): MoveToContainerRequestBuilder {
        return new MoveToContainerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tasks property of the microsoft.graph.plannerPlan entity.
    */
    public function tasks(): TasksRequestBuilder {
        return new TasksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unarchive method.
    */
    public function unarchive(): UnarchiveRequestBuilder {
        return new UnarchiveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new PlannerPlanItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/teamwork/teamTemplates/{teamTemplate%2Did}/definitions/{teamTemplateDefinition%2Did}/teamDefinition/channels/{channel%2Did}/planner/plans/{plannerPlan%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property plans for teamwork
     * @param PlannerPlanItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?PlannerPlanItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * A collection of plannerPlan objects owned by the Teams channel. Currently, only shared channels are supported. Read-only. Nullable.
     * @param PlannerPlanItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PlannerPlan|null>
     * @throws Exception
    */
    public function get(?PlannerPlanItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PlannerPlan::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property plans in teamwork
     * @param PlannerPlan $body The request body
     * @param PlannerPlanItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PlannerPlan|null>
     * @throws Exception
    */
    public function patch(PlannerPlan $body, ?PlannerPlanItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PlannerPlan::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property plans for teamwork
     * @param PlannerPlanItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?PlannerPlanItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * A collection of plannerPlan objects owned by the Teams channel. Currently, only shared channels are supported. Read-only. Nullable.
     * @param PlannerPlanItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PlannerPlanItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property plans in teamwork
     * @param PlannerPlan $body The request body
     * @param PlannerPlanItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(PlannerPlan $body, ?PlannerPlanItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PlannerPlanItemRequestBuilder
    */
    public function withUrl(string $rawUrl): PlannerPlanItemRequestBuilder {
        return new PlannerPlanItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
