<?php

namespace Microsoft\Graph\Beta\Generated\Identity\ContinuousAccessEvaluationPolicy;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ContinuousAccessEvaluationPolicy;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the continuousAccessEvaluationPolicy property of the microsoft.graph.identityContainer entity.
*/
class ContinuousAccessEvaluationPolicyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ContinuousAccessEvaluationPolicyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/continuousAccessEvaluationPolicy');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property continuousAccessEvaluationPolicy for identity
     * @param ContinuousAccessEvaluationPolicyRequestBuilderDeleteReq_e4fcb155|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ContinuousAccessEvaluationPolicyRequestBuilderDeleteReq_e4fcb155 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a continuousAccessEvaluationPolicy object.
     * @param ContinuousAccessEvaluationPolicyRequestBuilderGetReques_cd5bf41e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ContinuousAccessEvaluationPolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/continuousaccessevaluationpolicy-get?view=graph-rest-beta Find more info here
    */
    public function get(?ContinuousAccessEvaluationPolicyRequestBuilderGetReques_cd5bf41e $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ContinuousAccessEvaluationPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a continuousAccessEvaluationPolicy object.
     * @param ContinuousAccessEvaluationPolicy $body The request body
     * @param ContinuousAccessEvaluationPolicyRequestBuilderPatchRequ_8259d8d4|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ContinuousAccessEvaluationPolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/continuousaccessevaluationpolicy-update?view=graph-rest-beta Find more info here
    */
    public function patch(ContinuousAccessEvaluationPolicy $body, ?ContinuousAccessEvaluationPolicyRequestBuilderPatchRequ_8259d8d4 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ContinuousAccessEvaluationPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property continuousAccessEvaluationPolicy for identity
     * @param ContinuousAccessEvaluationPolicyRequestBuilderDeleteReq_e4fcb155|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ContinuousAccessEvaluationPolicyRequestBuilderDeleteReq_e4fcb155 $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a continuousAccessEvaluationPolicy object.
     * @param ContinuousAccessEvaluationPolicyRequestBuilderGetReques_cd5bf41e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ContinuousAccessEvaluationPolicyRequestBuilderGetReques_cd5bf41e $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/identity/continuousAccessEvaluationPolicy{?%24expand,%24select}';
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
     * Update the properties of a continuousAccessEvaluationPolicy object.
     * @param ContinuousAccessEvaluationPolicy $body The request body
     * @param ContinuousAccessEvaluationPolicyRequestBuilderPatchRequ_8259d8d4|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ContinuousAccessEvaluationPolicy $body, ?ContinuousAccessEvaluationPolicyRequestBuilderPatchRequ_8259d8d4 $requestConfiguration = null): RequestInformation {
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
     * @return ContinuousAccessEvaluationPolicyRequestBuilder
    */
    public function withUrl(string $rawUrl): ContinuousAccessEvaluationPolicyRequestBuilder {
        return new ContinuousAccessEvaluationPolicyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
