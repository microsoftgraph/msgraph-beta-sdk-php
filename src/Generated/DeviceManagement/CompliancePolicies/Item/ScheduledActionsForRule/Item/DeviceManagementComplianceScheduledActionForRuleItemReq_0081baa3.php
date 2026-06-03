<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CompliancePolicies\Item\ScheduledActionsForRule\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CompliancePolicies\Item\ScheduledActionsForRule\Item\ScheduledActionConfigurations\ScheduledActionConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementComplianceScheduledActionForRule;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the scheduledActionsForRule property of the microsoft.graph.deviceManagementCompliancePolicy entity. Original name: DeviceManagementComplianceScheduledActionForRuleItemRequestBuilder
*/
class DeviceManagementComplianceScheduledActionForRuleItemReq_0081baa3 extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the scheduledActionConfigurations property of the microsoft.graph.deviceManagementComplianceScheduledActionForRule entity.
    */
    public function scheduledActionConfigurations(): ScheduledActionConfigurationsRequestBuilder {
        return new ScheduledActionConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DeviceManagementComplianceScheduledActionForRuleItemReq_0081baa3 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/compliancePolicies/{deviceManagementCompliancePolicy%2Did}/scheduledActionsForRule/{deviceManagementComplianceScheduledActionForRule%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property scheduledActionsForRule for deviceManagement
     * @param DeviceManagementComplianceScheduledActionForRuleItemReq_978e074c|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?DeviceManagementComplianceScheduledActionForRuleItemReq_978e074c $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The list of scheduled action for this rule
     * @param DeviceManagementComplianceScheduledActionForRuleItemReq_c5f1114b|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementComplianceScheduledActionForRule|null>
     * @throws Exception
    */
    public function get(?DeviceManagementComplianceScheduledActionForRuleItemReq_c5f1114b $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementComplianceScheduledActionForRule::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property scheduledActionsForRule in deviceManagement
     * @param DeviceManagementComplianceScheduledActionForRule $body The request body
     * @param DeviceManagementComplianceScheduledActionForRuleItemReq_51b14504|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementComplianceScheduledActionForRule|null>
     * @throws Exception
    */
    public function patch(DeviceManagementComplianceScheduledActionForRule $body, ?DeviceManagementComplianceScheduledActionForRuleItemReq_51b14504 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementComplianceScheduledActionForRule::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property scheduledActionsForRule for deviceManagement
     * @param DeviceManagementComplianceScheduledActionForRuleItemReq_978e074c|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DeviceManagementComplianceScheduledActionForRuleItemReq_978e074c $requestConfiguration = null): RequestInformation {
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
     * The list of scheduled action for this rule
     * @param DeviceManagementComplianceScheduledActionForRuleItemReq_c5f1114b|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceManagementComplianceScheduledActionForRuleItemReq_c5f1114b $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property scheduledActionsForRule in deviceManagement
     * @param DeviceManagementComplianceScheduledActionForRule $body The request body
     * @param DeviceManagementComplianceScheduledActionForRuleItemReq_51b14504|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceManagementComplianceScheduledActionForRule $body, ?DeviceManagementComplianceScheduledActionForRuleItemReq_51b14504 $requestConfiguration = null): RequestInformation {
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
     * @return DeviceManagementComplianceScheduledActionForRuleItemReq_0081baa3
    */
    public function withUrl(string $rawUrl): DeviceManagementComplianceScheduledActionForRuleItemReq_0081baa3 {
        return new DeviceManagementComplianceScheduledActionForRuleItemReq_0081baa3($rawUrl, $this->requestAdapter);
    }

}
