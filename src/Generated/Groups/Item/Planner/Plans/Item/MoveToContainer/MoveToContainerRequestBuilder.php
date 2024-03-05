<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item\Planner\Plans\Item\MoveToContainer;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\PlannerPlan;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the moveToContainer method.
*/
class MoveToContainerRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MoveToContainerRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/groups/{group%2Did}/planner/plans/{plannerPlan%2Did}/moveToContainer');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Move a planner plan object from one planner plan container to another. Planner plans can only be moved from a user container to a group container.
     * @param MoveToContainerPostRequestBody $body The request body
     * @param MoveToContainerRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PlannerPlan|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/plannerplan-movetocontainer?view=graph-rest-1.0 Find more info here
    */
    public function post(MoveToContainerPostRequestBody $body, ?MoveToContainerRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PlannerPlan::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Move a planner plan object from one planner plan container to another. Planner plans can only be moved from a user container to a group container.
     * @param MoveToContainerPostRequestBody $body The request body
     * @param MoveToContainerRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MoveToContainerPostRequestBody $body, ?MoveToContainerRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MoveToContainerRequestBuilder
    */
    public function withUrl(string $rawUrl): MoveToContainerRequestBuilder {
        return new MoveToContainerRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
