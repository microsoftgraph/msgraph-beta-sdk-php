<?php

namespace Microsoft\Graph\Beta\Generated\Security\InformationProtection\SensitivityLabels;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\SensitivityLabel;
use Microsoft\Graph\Beta\Generated\Models\Security\SensitivityLabelCollectionResponse;
use Microsoft\Graph\Beta\Generated\Security\InformationProtection\SensitivityLabels\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\InformationProtection\SensitivityLabels\Item\SensitivityLabelItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\InformationProtection\SensitivityLabels\SecurityEvaluateApplication\SecurityEvaluateApplicationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\InformationProtection\SensitivityLabels\SecurityEvaluateClassificationResults\SecurityEvaluateClassificationResultsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\InformationProtection\SensitivityLabels\SecurityEvaluateRemoval\SecurityEvaluateRemovalRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\InformationProtection\SensitivityLabels\SecurityExtractContentLabel\SecurityExtractContentLabelRequestBuilder;
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
    public function securityEvaluateApplication(): SecurityEvaluateApplicationRequestBuilder {
        return new SecurityEvaluateApplicationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the evaluateClassificationResults method.
    */
    public function securityEvaluateClassificationResults(): SecurityEvaluateClassificationResultsRequestBuilder {
        return new SecurityEvaluateClassificationResultsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the evaluateRemoval method.
    */
    public function securityEvaluateRemoval(): SecurityEvaluateRemovalRequestBuilder {
        return new SecurityEvaluateRemovalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the extractContentLabel method.
    */
    public function securityExtractContentLabel(): SecurityExtractContentLabelRequestBuilder {
        return new SecurityExtractContentLabelRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sensitivityLabels property of the microsoft.graph.security.informationProtection entity.
     * @param string $sensitivityLabelId Unique identifier of the item
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
        parent::__construct($requestAdapter, [], '{+baseurl}/security/informationProtection/sensitivityLabels{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Read the Microsoft Purview Information Protection labels for the user or organization.
     * @param SensitivityLabelsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?SensitivityLabelsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [SensitivityLabelCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create new navigation property to sensitivityLabels for security
     * @param SensitivityLabel $body The request body
     * @param SensitivityLabelsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function post(SensitivityLabel $body, ?SensitivityLabelsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [SensitivityLabel::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Read the Microsoft Purview Information Protection labels for the user or organization.
     * @param SensitivityLabelsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SensitivityLabelsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Create new navigation property to sensitivityLabels for security
     * @param SensitivityLabel $body The request body
     * @param SensitivityLabelsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SensitivityLabel $body, ?SensitivityLabelsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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

}
