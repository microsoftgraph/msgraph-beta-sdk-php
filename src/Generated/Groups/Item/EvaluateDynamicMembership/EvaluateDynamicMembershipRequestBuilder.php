<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item\EvaluateDynamicMembership;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\EvaluateDynamicMembershipResult;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the evaluateDynamicMembership method.
*/
class EvaluateDynamicMembershipRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new EvaluateDynamicMembershipRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/groups/{group%2Did}/evaluateDynamicMembership');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Evaluate whether a user or device is or would be a member of a dynamic group. The membership rule is returned along with other details that were used in the evaluation. You can complete this operation in the following ways: This API is supported in the following national cloud deployments.
     * @param EvaluateDynamicMembershipPostRequestBody $body The request body
     * @param EvaluateDynamicMembershipRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/group-evaluatedynamicmembership?view=graph-rest-1.0 Find more info here
    */
    public function post(EvaluateDynamicMembershipPostRequestBody $body, ?EvaluateDynamicMembershipRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [EvaluateDynamicMembershipResult::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Evaluate whether a user or device is or would be a member of a dynamic group. The membership rule is returned along with other details that were used in the evaluation. You can complete this operation in the following ways: This API is supported in the following national cloud deployments.
     * @param EvaluateDynamicMembershipPostRequestBody $body The request body
     * @param EvaluateDynamicMembershipRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EvaluateDynamicMembershipPostRequestBody $body, ?EvaluateDynamicMembershipRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return EvaluateDynamicMembershipRequestBuilder
    */
    public function withUrl(string $rawUrl): EvaluateDynamicMembershipRequestBuilder {
        return new EvaluateDynamicMembershipRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
