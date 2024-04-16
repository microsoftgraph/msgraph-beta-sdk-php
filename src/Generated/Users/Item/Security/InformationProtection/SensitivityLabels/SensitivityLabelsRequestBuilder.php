<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Security\InformationProtection\SensitivityLabels;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\SensitivityLabel;
use Microsoft\Graph\Beta\Generated\Models\Security\SensitivityLabelCollectionResponse;
use Microsoft\Graph\Beta\Generated\Users\Item\Security\InformationProtection\SensitivityLabels\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Security\InformationProtection\SensitivityLabels\Item\SensitivityLabelItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Security\InformationProtection\SensitivityLabels\MicrosoftGraphSecurityEvaluateApplication\MicrosoftGraphSecurityEvaluateApplicationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Security\InformationProtection\SensitivityLabels\MicrosoftGraphSecurityEvaluateClassificationResults\MicrosoftGraphSecurityEvaluateClassificationResultsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Security\InformationProtection\SensitivityLabels\MicrosoftGraphSecurityEvaluateRemoval\MicrosoftGraphSecurityEvaluateRemovalRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Security\InformationProtection\SensitivityLabels\MicrosoftGraphSecurityExtractContentLabel\MicrosoftGraphSecurityExtractContentLabelRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the sensitivityLabels property of the microsoft.graph.security.informationProtection entity.
*/
class SensitivityLabelsRequestBuilder extends BaseRequestBuilder 
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
    public function microsoftGraphSecurityEvaluateApplication(): MicrosoftGraphSecurityEvaluateApplicationRequestBuilder {
        return new MicrosoftGraphSecurityEvaluateApplicationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the evaluateClassificationResults method.
    */
    public function microsoftGraphSecurityEvaluateClassificationResults(): MicrosoftGraphSecurityEvaluateClassificationResultsRequestBuilder {
        return new MicrosoftGraphSecurityEvaluateClassificationResultsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the evaluateRemoval method.
    */
    public function microsoftGraphSecurityEvaluateRemoval(): MicrosoftGraphSecurityEvaluateRemovalRequestBuilder {
        return new MicrosoftGraphSecurityEvaluateRemovalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the extractContentLabel method.
    */
    public function microsoftGraphSecurityExtractContentLabel(): MicrosoftGraphSecurityExtractContentLabelRequestBuilder {
        return new MicrosoftGraphSecurityExtractContentLabelRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sensitivityLabels property of the microsoft.graph.security.informationProtection entity.
     * @param string $sensitivityLabelId The unique identifier of sensitivityLabel
     * @return SensitivityLabelItemRequestBuilder
    */
    public function bySensitivityLabelId(string $sensitivityLabelId): SensitivityLabelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sensitivityLabel%2Did'] = $sensitivityLabelId;
        return new SensitivityLabelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SensitivityLabelsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/security/informationProtection/sensitivityLabels{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of sensitivityLabel objects associated with a user or organization.
     * @param SensitivityLabelsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SensitivityLabelCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-informationprotection-list-sensitivitylabels?view=graph-rest-1.0 Find more info here
    */
    public function get(?SensitivityLabelsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SensitivityLabelCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to sensitivityLabels for users
     * @param SensitivityLabel $body The request body
     * @param SensitivityLabelsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SensitivityLabel|null>
     * @throws Exception
    */
    public function post(SensitivityLabel $body, ?SensitivityLabelsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SensitivityLabel::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of sensitivityLabel objects associated with a user or organization.
     * @param SensitivityLabelsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SensitivityLabelsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to sensitivityLabels for users
     * @param SensitivityLabel $body The request body
     * @param SensitivityLabelsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SensitivityLabel $body, ?SensitivityLabelsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SensitivityLabelsRequestBuilder
    */
    public function withUrl(string $rawUrl): SensitivityLabelsRequestBuilder {
        return new SensitivityLabelsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
