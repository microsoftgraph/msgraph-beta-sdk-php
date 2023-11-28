<?php

namespace Microsoft\Graph\Beta\Generated\InformationProtection\Policy\Labels\EvaluateClassificationResults;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the evaluateClassificationResults method.
*/
class EvaluateClassificationResultsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new EvaluateClassificationResultsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/informationProtection/policy/labels/evaluateClassificationResults');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Using classification results, compute the information protection label that should be applied and return the set of actions that must be taken to correctly label the information. This API is useful when a label should be set automatically based on classification of the file contents, rather than labeled directly by a user or service. To evaluate based on classification results, provide contentInfo, which includes existing content metadata key/value pairs, and classification results. The API returns an informationProtectionAction that contains one of more of the following:
     * @param EvaluateClassificationResultsPostRequestBody $body The request body
     * @param EvaluateClassificationResultsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EvaluateClassificationResultsPostResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/informationprotectionlabel-evaluateclassificationresults?view=graph-rest-1.0 Find more info here
    */
    public function post(EvaluateClassificationResultsPostRequestBody $body, ?EvaluateClassificationResultsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EvaluateClassificationResultsPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Using classification results, compute the information protection label that should be applied and return the set of actions that must be taken to correctly label the information. This API is useful when a label should be set automatically based on classification of the file contents, rather than labeled directly by a user or service. To evaluate based on classification results, provide contentInfo, which includes existing content metadata key/value pairs, and classification results. The API returns an informationProtectionAction that contains one of more of the following:
     * @param EvaluateClassificationResultsPostRequestBody $body The request body
     * @param EvaluateClassificationResultsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EvaluateClassificationResultsPostRequestBody $body, ?EvaluateClassificationResultsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return EvaluateClassificationResultsRequestBuilder
    */
    public function withUrl(string $rawUrl): EvaluateClassificationResultsRequestBuilder {
        return new EvaluateClassificationResultsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
