<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\InformationProtection\Policy\Labels;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\InformationProtectionLabel;
use Microsoft\Graph\Beta\Generated\Models\InformationProtectionLabelCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Users\Item\InformationProtection\Policy\Labels\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\InformationProtection\Policy\Labels\EvaluateApplication\EvaluateApplicationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\InformationProtection\Policy\Labels\EvaluateClassificationResults\EvaluateClassificationResultsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\InformationProtection\Policy\Labels\EvaluateRemoval\EvaluateRemovalRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\InformationProtection\Policy\Labels\ExtractLabel\ExtractLabelRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\InformationProtection\Policy\Labels\Item\InformationProtectionLabelItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the labels property of the microsoft.graph.informationProtectionPolicy entity.
*/
class LabelsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the evaluateApplication method.
    */
    public function evaluateApplication(): EvaluateApplicationRequestBuilder {
        return new EvaluateApplicationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the evaluateClassificationResults method.
    */
    public function evaluateClassificationResults(): EvaluateClassificationResultsRequestBuilder {
        return new EvaluateClassificationResultsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the evaluateRemoval method.
    */
    public function evaluateRemoval(): EvaluateRemovalRequestBuilder {
        return new EvaluateRemovalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the extractLabel method.
    */
    public function extractLabel(): ExtractLabelRequestBuilder {
        return new ExtractLabelRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the labels property of the microsoft.graph.informationProtectionPolicy entity.
     * @param string $informationProtectionLabelId The unique identifier of informationProtectionLabel
     * @return InformationProtectionLabelItemRequestBuilder
    */
    public function byInformationProtectionLabelId(string $informationProtectionLabelId): InformationProtectionLabelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['informationProtectionLabel%2Did'] = $informationProtectionLabelId;
        return new InformationProtectionLabelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new LabelsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/informationProtection/policy/labels{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a collection of information protection labels available to the user or to the organization.
     * @param LabelsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<InformationProtectionLabelCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/informationprotectionpolicy-list-labels?view=graph-rest-1.0 Find more info here
    */
    public function get(?LabelsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [InformationProtectionLabelCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to labels for users
     * @param InformationProtectionLabel $body The request body
     * @param LabelsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<InformationProtectionLabel|null>
     * @throws Exception
    */
    public function post(InformationProtectionLabel $body, ?LabelsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [InformationProtectionLabel::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a collection of information protection labels available to the user or to the organization.
     * @param LabelsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?LabelsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to labels for users
     * @param InformationProtectionLabel $body The request body
     * @param LabelsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(InformationProtectionLabel $body, ?LabelsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return LabelsRequestBuilder
    */
    public function withUrl(string $rawUrl): LabelsRequestBuilder {
        return new LabelsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
