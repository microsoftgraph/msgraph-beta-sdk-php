<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CompliancePolicies\Item\ScheduledActionsForRule\Item\ScheduledActionConfigurations;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CompliancePolicies\Item\ScheduledActionsForRule\Item\ScheduledActionConfigurations\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CompliancePolicies\Item\ScheduledActionsForRule\Item\ScheduledActionConfigurations\Item\DeviceManagementComplianceActionItemItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementComplianceActionItem;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementComplianceActionItemCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the scheduledActionConfigurations property of the microsoft.graph.deviceManagementComplianceScheduledActionForRule entity.
*/
class ScheduledActionConfigurationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the scheduledActionConfigurations property of the microsoft.graph.deviceManagementComplianceScheduledActionForRule entity.
     * @param string $deviceManagementComplianceActionItemId The unique identifier of deviceManagementComplianceActionItem
     * @return DeviceManagementComplianceActionItemItemRequestBuilder
    */
    public function byDeviceManagementComplianceActionItemId(string $deviceManagementComplianceActionItemId): DeviceManagementComplianceActionItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementComplianceActionItem%2Did'] = $deviceManagementComplianceActionItemId;
        return new DeviceManagementComplianceActionItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ScheduledActionConfigurationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The list of scheduled action configurations for this compliance policy. This collection can contain a maximum of 100 elements.
     * @param ScheduledActionConfigurationsRequestBuilderGetRequestCo_b2c4cc6f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementComplianceActionItemCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ScheduledActionConfigurationsRequestBuilderGetRequestCo_b2c4cc6f $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementComplianceActionItemCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to scheduledActionConfigurations for deviceManagement
     * @param DeviceManagementComplianceActionItem $body The request body
     * @param ScheduledActionConfigurationsRequestBuilderPostRequestC_5bf6c35e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementComplianceActionItem|null>
     * @throws Exception
    */
    public function post(DeviceManagementComplianceActionItem $body, ?ScheduledActionConfigurationsRequestBuilderPostRequestC_5bf6c35e $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementComplianceActionItem::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The list of scheduled action configurations for this compliance policy. This collection can contain a maximum of 100 elements.
     * @param ScheduledActionConfigurationsRequestBuilderGetRequestCo_b2c4cc6f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ScheduledActionConfigurationsRequestBuilderGetRequestCo_b2c4cc6f $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/compliancePolicies/{deviceManagementCompliancePolicy%2Did}/scheduledActionsForRule/{deviceManagementComplianceScheduledActionForRule%2Did}/scheduledActionConfigurations{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}';
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
     * Create new navigation property to scheduledActionConfigurations for deviceManagement
     * @param DeviceManagementComplianceActionItem $body The request body
     * @param ScheduledActionConfigurationsRequestBuilderPostRequestC_5bf6c35e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeviceManagementComplianceActionItem $body, ?ScheduledActionConfigurationsRequestBuilderPostRequestC_5bf6c35e $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/compliancePolicies/{deviceManagementCompliancePolicy%2Did}/scheduledActionsForRule/{deviceManagementComplianceScheduledActionForRule%2Did}/scheduledActionConfigurations';
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
     * @return ScheduledActionConfigurationsRequestBuilder
    */
    public function withUrl(string $rawUrl): ScheduledActionConfigurationsRequestBuilder {
        return new ScheduledActionConfigurationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
