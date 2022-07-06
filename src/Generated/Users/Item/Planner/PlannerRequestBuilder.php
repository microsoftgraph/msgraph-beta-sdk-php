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
use Microsoft\Graph\Beta\Generated\Users\Item\Planner\FavoritePlans\Item\PlannerPlanItemRequestBuilder as MicrosoftGraphBetaGeneratedUsersItemPlannerFavoritePlansItemPlannerPlanItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Planner\Plans\Item\PlannerPlanItemRequestBuilder as MicrosoftGraphBetaGeneratedUsersItemPlannerPlansItemPlannerPlanItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Planner\Plans\PlansRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Planner\RecentPlans\Item\PlannerPlanItemRequestBuilder as MicrosoftGraphBetaGeneratedUsersItemPlannerRecentPlansItemPlannerPlanItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Planner\RecentPlans\RecentPlansRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Planner\RosterPlans\Item\PlannerPlanItemRequestBuilder as MicrosoftGraphBetaGeneratedUsersItemPlannerRosterPlansItemPlannerPlanItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Planner\RosterPlans\RosterPlansRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Planner\Tasks\Item\PlannerTaskItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Planner\Tasks\TasksRequestBuilder;
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
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
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
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
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
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.planner.all.item collection
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
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/users/{user%2Did}/planner{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property planner for users
     * @param PlannerRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?PlannerRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Selective Planner services available to the user. Read-only. Nullable.
     * @param PlannerRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?PlannerRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
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
     * @param PlannerUser $body 
     * @param PlannerRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(PlannerUser $body, ?PlannerRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Delete navigation property planner for users
     * @param PlannerRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?PlannerRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.planner.favoritePlans.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedUsersItemPlannerFavoritePlansItemPlannerPlanItemRequestBuilder
    */
    public function favoritePlansById(string $id): MicrosoftGraphBetaGeneratedUsersItemPlannerFavoritePlansItemPlannerPlanItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerPlan%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedUsersItemPlannerFavoritePlansItemPlannerPlanItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Selective Planner services available to the user. Read-only. Nullable.
     * @param PlannerRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?PlannerRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(PlannerUser::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property planner in users
     * @param PlannerUser $body 
     * @param PlannerRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(PlannerUser $body, ?PlannerRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.planner.plans.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedUsersItemPlannerPlansItemPlannerPlanItemRequestBuilder
    */
    public function plansById(string $id): MicrosoftGraphBetaGeneratedUsersItemPlannerPlansItemPlannerPlanItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerPlan%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedUsersItemPlannerPlansItemPlannerPlanItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.planner.recentPlans.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedUsersItemPlannerRecentPlansItemPlannerPlanItemRequestBuilder
    */
    public function recentPlansById(string $id): MicrosoftGraphBetaGeneratedUsersItemPlannerRecentPlansItemPlannerPlanItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerPlan%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedUsersItemPlannerRecentPlansItemPlannerPlanItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.planner.rosterPlans.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedUsersItemPlannerRosterPlansItemPlannerPlanItemRequestBuilder
    */
    public function rosterPlansById(string $id): MicrosoftGraphBetaGeneratedUsersItemPlannerRosterPlansItemPlannerPlanItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerPlan%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedUsersItemPlannerRosterPlansItemPlannerPlanItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.planner.tasks.item collection
     * @param string $id Unique identifier of the item
     * @return PlannerTaskItemRequestBuilder
    */
    public function tasksById(string $id): PlannerTaskItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerTask%2Did'] = $id;
        return new PlannerTaskItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
