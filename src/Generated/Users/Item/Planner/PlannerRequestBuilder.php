<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Planner;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\PlannerUser;
use Microsoft\Graph\Beta\Generated\Users\Item\Planner\All\AllRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Planner\All\Item\PlannerDeltaItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Planner\FavoritePlans\FavoritePlansRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Planner\Plans\PlansRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Planner\RecentPlans\RecentPlansRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Planner\RosterPlans\RosterPlansRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Planner\Tasks\Item\PlannerTaskItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Planner\Tasks\TasksRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the planner property of the microsoft.graph.user entity.
*/
class PlannerRequestBuilder 
{
    /**
     * Provides operations to manage the all property of the microsoft.graph.plannerUser entity.
    */
    public function all(): AllRequestBuilder {
        return new AllRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the favoritePlans property of the microsoft.graph.plannerUser entity.
    */
    public function favoritePlans(): FavoritePlansRequestBuilder {
        return new FavoritePlansRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the plans property of the microsoft.graph.plannerUser entity.
    */
    public function plans(): PlansRequestBuilder {
        return new PlansRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the recentPlans property of the microsoft.graph.plannerUser entity.
    */
    public function recentPlans(): RecentPlansRequestBuilder {
        return new RecentPlansRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the rosterPlans property of the microsoft.graph.plannerUser entity.
    */
    public function rosterPlans(): RosterPlansRequestBuilder {
        return new RosterPlansRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tasks property of the microsoft.graph.plannerUser entity.
    */
    public function tasks(): TasksRequestBuilder {
        return new TasksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the all property of the microsoft.graph.plannerUser entity.
     * @param string $id Unique identifier of the item
     * @return PlannerDeltaItemRequestBuilder
    */
    public function allById(string $id): PlannerDeltaItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerDelta%2Did'] = $id;
        return new PlannerDeltaItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PlannerRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/users/{user%2Did}/planner{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property planner for users
     * @param PlannerRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?PlannerRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
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
     * Provides operations to manage the favoritePlans property of the microsoft.graph.plannerUser entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Users\Item\Planner\FavoritePlans\Item\PlannerPlanItemRequestBuilder
    */
    public function favoritePlansById(string $id): \Microsoft\Graph\Beta\Generated\Users\Item\Planner\FavoritePlans\Item\PlannerPlanItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerPlan%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Users\Item\Planner\FavoritePlans\Item\PlannerPlanItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Retrieve the properties and relationships of a plannerUser object. The returned properties include the user's favorite plans and recently viewed plans. 
     * @param PlannerRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/planneruser-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?PlannerRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [PlannerUser::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property planner in users
     * @param PlannerUser $body The request body
     * @param PlannerRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/planneruser-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(PlannerUser $body, ?PlannerRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [PlannerUser::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the plans property of the microsoft.graph.plannerUser entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Users\Item\Planner\Plans\Item\PlannerPlanItemRequestBuilder
    */
    public function plansById(string $id): \Microsoft\Graph\Beta\Generated\Users\Item\Planner\Plans\Item\PlannerPlanItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerPlan%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Users\Item\Planner\Plans\Item\PlannerPlanItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the recentPlans property of the microsoft.graph.plannerUser entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Users\Item\Planner\RecentPlans\Item\PlannerPlanItemRequestBuilder
    */
    public function recentPlansById(string $id): \Microsoft\Graph\Beta\Generated\Users\Item\Planner\RecentPlans\Item\PlannerPlanItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerPlan%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Users\Item\Planner\RecentPlans\Item\PlannerPlanItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the rosterPlans property of the microsoft.graph.plannerUser entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Users\Item\Planner\RosterPlans\Item\PlannerPlanItemRequestBuilder
    */
    public function rosterPlansById(string $id): \Microsoft\Graph\Beta\Generated\Users\Item\Planner\RosterPlans\Item\PlannerPlanItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerPlan%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Users\Item\Planner\RosterPlans\Item\PlannerPlanItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the tasks property of the microsoft.graph.plannerUser entity.
     * @param string $id Unique identifier of the item
     * @return PlannerTaskItemRequestBuilder
    */
    public function tasksById(string $id): PlannerTaskItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerTask%2Did'] = $id;
        return new PlannerTaskItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property planner for users
     * @param PlannerRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?PlannerRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Retrieve the properties and relationships of a plannerUser object. The returned properties include the user's favorite plans and recently viewed plans. 
     * @param PlannerRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PlannerRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property planner in users
     * @param PlannerUser $body The request body
     * @param PlannerRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(PlannerUser $body, ?PlannerRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
