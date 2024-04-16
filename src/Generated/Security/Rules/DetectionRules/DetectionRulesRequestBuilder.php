<?php

namespace Microsoft\Graph\Beta\Generated\Security\Rules\DetectionRules;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\DetectionRule;
use Microsoft\Graph\Beta\Generated\Models\Security\DetectionRuleCollectionResponse;
use Microsoft\Graph\Beta\Generated\Security\Rules\DetectionRules\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\Rules\DetectionRules\Item\DetectionRuleItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the detectionRules property of the microsoft.graph.security.rulesRoot entity.
*/
class DetectionRulesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the detectionRules property of the microsoft.graph.security.rulesRoot entity.
     * @param string $detectionRuleId The unique identifier of detectionRule
     * @return DetectionRuleItemRequestBuilder
    */
    public function byDetectionRuleId(string $detectionRuleId): DetectionRuleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['detectionRule%2Did'] = $detectionRuleId;
        return new DetectionRuleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DetectionRulesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/rules/detectionRules{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of custom detection rules.With custom detections, you can proactively monitor for and respond to various events and system states, including suspected breach activity and misconfigured assets in their organization network.Custom detection rules, which are written in Kusto query language (KQL), automatically trigger alerts and response actions once there are events matching their KQL queries.
     * @param DetectionRulesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DetectionRuleCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-detectionrule-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?DetectionRulesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DetectionRuleCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to detectionRules for security
     * @param DetectionRule $body The request body
     * @param DetectionRulesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DetectionRule|null>
     * @throws Exception
    */
    public function post(DetectionRule $body, ?DetectionRulesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DetectionRule::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of custom detection rules.With custom detections, you can proactively monitor for and respond to various events and system states, including suspected breach activity and misconfigured assets in their organization network.Custom detection rules, which are written in Kusto query language (KQL), automatically trigger alerts and response actions once there are events matching their KQL queries.
     * @param DetectionRulesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DetectionRulesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to detectionRules for security
     * @param DetectionRule $body The request body
     * @param DetectionRulesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DetectionRule $body, ?DetectionRulesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DetectionRulesRequestBuilder
    */
    public function withUrl(string $rawUrl): DetectionRulesRequestBuilder {
        return new DetectionRulesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
