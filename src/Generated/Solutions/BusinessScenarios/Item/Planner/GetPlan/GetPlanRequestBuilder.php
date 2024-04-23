<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BusinessScenarios\Item\Planner\GetPlan;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\BusinessScenarioPlanReference;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getPlan method.
*/
class GetPlanRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetPlanRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/businessScenarios/{businessScenario%2Did}/planner/getPlan');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get information about the plannerPlan mapped to a given target. If a plannerPlan doesn't exist for the specified target at the time of the request, a new plan will be created for the businessScenario.
     * @param GetPlanPostRequestBody $body The request body
     * @param GetPlanRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BusinessScenarioPlanReference|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/businessscenarioplanner-getplan?view=graph-rest-beta Find more info here
    */
    public function post(GetPlanPostRequestBody $body, ?GetPlanRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BusinessScenarioPlanReference::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get information about the plannerPlan mapped to a given target. If a plannerPlan doesn't exist for the specified target at the time of the request, a new plan will be created for the businessScenario.
     * @param GetPlanPostRequestBody $body The request body
     * @param GetPlanRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GetPlanPostRequestBody $body, ?GetPlanRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GetPlanRequestBuilder
    */
    public function withUrl(string $rawUrl): GetPlanRequestBuilder {
        return new GetPlanRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
