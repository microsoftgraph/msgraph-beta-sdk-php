<?php

namespace Microsoft\Graph\Beta\Generated\Security\InformationProtection\SensitivityLabels\MicrosoftGraphSecurityEvaluateApplication;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the evaluateApplication method.
*/
class MicrosoftGraphSecurityEvaluateApplicationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphSecurityEvaluateApplicationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/informationProtection/sensitivityLabels/microsoft.graph.security.evaluateApplication');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Compute the sensitivity label that should be applied and return the set of actions that must be taken to correctly label the information. This API is useful when a label should be set manually or explicitly by a user or service, rather than automatically based on file contents. Given contentInfo, which includes existing content metadata key-value pairs, and labelingOptions as an input, the API returns an informationProtectionAction object that contains one of more of the following:  This API is available in the following national cloud deployments.
     * @param EvaluateApplicationPostRequestBody $body The request body
     * @param MicrosoftGraphSecurityEvaluateApplicationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EvaluateApplicationPostResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-sensitivitylabel-evaluateapplication?view=graph-rest-1.0 Find more info here
    */
    public function post(EvaluateApplicationPostRequestBody $body, ?MicrosoftGraphSecurityEvaluateApplicationRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EvaluateApplicationPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Compute the sensitivity label that should be applied and return the set of actions that must be taken to correctly label the information. This API is useful when a label should be set manually or explicitly by a user or service, rather than automatically based on file contents. Given contentInfo, which includes existing content metadata key-value pairs, and labelingOptions as an input, the API returns an informationProtectionAction object that contains one of more of the following:  This API is available in the following national cloud deployments.
     * @param EvaluateApplicationPostRequestBody $body The request body
     * @param MicrosoftGraphSecurityEvaluateApplicationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EvaluateApplicationPostRequestBody $body, ?MicrosoftGraphSecurityEvaluateApplicationRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphSecurityEvaluateApplicationRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphSecurityEvaluateApplicationRequestBuilder {
        return new MicrosoftGraphSecurityEvaluateApplicationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
