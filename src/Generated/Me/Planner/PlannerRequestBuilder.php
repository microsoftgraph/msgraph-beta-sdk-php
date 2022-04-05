<?php

namespace Microsoft\Graph\Beta\Generated\Me\Planner;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Me\Planner\All\AllRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Planner\All\Item\PlannerDeltaItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Planner\FavoritePlans\FavoritePlansRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Planner\FavoritePlans\Item\PlannerPlanItemRequestBuilder as MicrosoftGraphBetaGeneratedMePlannerFavoritePlansItemPlannerPlanItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Planner\Plans\Item\PlannerPlanItemRequestBuilder as MicrosoftGraphBetaGeneratedMePlannerPlansItemPlannerPlanItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Planner\Plans\PlansRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Planner\RecentPlans\Item\PlannerPlanItemRequestBuilder as MicrosoftGraphBetaGeneratedMePlannerRecentPlansItemPlannerPlanItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Planner\RecentPlans\RecentPlansRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Planner\RosterPlans\Item\PlannerPlanItemRequestBuilder as MicrosoftGraphBetaGeneratedMePlannerRosterPlansItemPlannerPlanItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Planner\RosterPlans\RosterPlansRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Planner\Tasks\Item\PlannerTaskItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Planner\Tasks\TasksRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\PlannerUser;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class PlannerRequestBuilder 
{
    /**
     * The all property
    */
    public function all(): AllRequestBuilder {
        return new AllRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The favoritePlans property
    */
    public function favoritePlans(): FavoritePlansRequestBuilder {
        return new FavoritePlansRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /**
     * The plans property
    */
    public function plans(): PlansRequestBuilder {
        return new PlansRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The recentPlans property
    */
    public function recentPlans(): RecentPlansRequestBuilder {
        return new RecentPlansRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The rosterPlans property
    */
    public function rosterPlans(): RosterPlansRequestBuilder {
        return new RosterPlansRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tasks property
    */
    public function tasks(): TasksRequestBuilder {
        return new TasksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.planner.all.item collection
     * @param string $id Unique identifier of the item
     * @return PlannerDeltaItemRequestBuilder
    */
    public function allById(string $id): PlannerDeltaItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerDelta_id'] = $id;
        return new PlannerDeltaItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PlannerRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me/planner{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property planner for me
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Entry-point to the Planner resource that might exist for a user. Read-only.
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
     * Update the navigation property planner in me
     * @param PlannerUser $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(PlannerUser $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete navigation property planner for me
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.planner.favoritePlans.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedMePlannerFavoritePlansItemPlannerPlanItemRequestBuilder
    */
    public function favoritePlansById(string $id): MicrosoftGraphBetaGeneratedMePlannerFavoritePlansItemPlannerPlanItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerPlan_id'] = $id;
        return new MicrosoftGraphBetaGeneratedMePlannerFavoritePlansItemPlannerPlanItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Entry-point to the Planner resource that might exist for a user. Read-only.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, PlannerUser::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property planner in me
     * @param PlannerUser $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(PlannerUser $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.planner.plans.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedMePlannerPlansItemPlannerPlanItemRequestBuilder
    */
    public function plansById(string $id): MicrosoftGraphBetaGeneratedMePlannerPlansItemPlannerPlanItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerPlan_id'] = $id;
        return new MicrosoftGraphBetaGeneratedMePlannerPlansItemPlannerPlanItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.planner.recentPlans.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedMePlannerRecentPlansItemPlannerPlanItemRequestBuilder
    */
    public function recentPlansById(string $id): MicrosoftGraphBetaGeneratedMePlannerRecentPlansItemPlannerPlanItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerPlan_id'] = $id;
        return new MicrosoftGraphBetaGeneratedMePlannerRecentPlansItemPlannerPlanItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.planner.rosterPlans.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedMePlannerRosterPlansItemPlannerPlanItemRequestBuilder
    */
    public function rosterPlansById(string $id): MicrosoftGraphBetaGeneratedMePlannerRosterPlansItemPlannerPlanItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerPlan_id'] = $id;
        return new MicrosoftGraphBetaGeneratedMePlannerRosterPlansItemPlannerPlanItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.planner.tasks.item collection
     * @param string $id Unique identifier of the item
     * @return PlannerTaskItemRequestBuilder
    */
    public function tasksById(string $id): PlannerTaskItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerTask_id'] = $id;
        return new PlannerTaskItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
