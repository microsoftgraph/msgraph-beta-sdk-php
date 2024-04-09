<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDeviceCleanupRules;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDeviceCleanupRules\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDeviceCleanupRules\Item\ManagedDeviceCleanupRuleItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ManagedDeviceCleanupRule;
use Microsoft\Graph\Beta\Generated\Models\ManagedDeviceCleanupRuleCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the managedDeviceCleanupRules property of the microsoft.graph.deviceManagement entity.
*/
class ManagedDeviceCleanupRulesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedDeviceCleanupRules property of the microsoft.graph.deviceManagement entity.
     * @param string $managedDeviceCleanupRuleId The unique identifier of managedDeviceCleanupRule
     * @return ManagedDeviceCleanupRuleItemRequestBuilder
    */
    public function byManagedDeviceCleanupRuleId(string $managedDeviceCleanupRuleId): ManagedDeviceCleanupRuleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDeviceCleanupRule%2Did'] = $managedDeviceCleanupRuleId;
        return new ManagedDeviceCleanupRuleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ManagedDeviceCleanupRulesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/managedDeviceCleanupRules{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Device cleanup rule V2
     * @param ManagedDeviceCleanupRulesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedDeviceCleanupRuleCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ManagedDeviceCleanupRulesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedDeviceCleanupRuleCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to managedDeviceCleanupRules for deviceManagement
     * @param ManagedDeviceCleanupRule $body The request body
     * @param ManagedDeviceCleanupRulesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedDeviceCleanupRule|null>
     * @throws Exception
    */
    public function post(ManagedDeviceCleanupRule $body, ?ManagedDeviceCleanupRulesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedDeviceCleanupRule::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Device cleanup rule V2
     * @param ManagedDeviceCleanupRulesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ManagedDeviceCleanupRulesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to managedDeviceCleanupRules for deviceManagement
     * @param ManagedDeviceCleanupRule $body The request body
     * @param ManagedDeviceCleanupRulesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ManagedDeviceCleanupRule $body, ?ManagedDeviceCleanupRulesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ManagedDeviceCleanupRulesRequestBuilder
    */
    public function withUrl(string $rawUrl): ManagedDeviceCleanupRulesRequestBuilder {
        return new ManagedDeviceCleanupRulesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
