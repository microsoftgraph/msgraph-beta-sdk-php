<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ReusablePolicySettings\Item\ReferencingConfigurationPolicies\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ReusablePolicySettings\Item\ReferencingConfigurationPolicies\Item\Assign\AssignRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ReusablePolicySettings\Item\ReferencingConfigurationPolicies\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ReusablePolicySettings\Item\ReferencingConfigurationPolicies\Item\ClearEnrollmentTimeDeviceMembershipTarget\ClearEnrollmentTimeDeviceMembershipTargetRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ReusablePolicySettings\Item\ReferencingConfigurationPolicies\Item\CreateCopy\CreateCopyRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ReusablePolicySettings\Item\ReferencingConfigurationPolicies\Item\Reorder\ReorderRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ReusablePolicySettings\Item\ReferencingConfigurationPolicies\Item\RetrieveEnrollmentTimeDeviceMembershipTarget\RetrieveEnrollmentTimeDeviceMembershipTargetRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ReusablePolicySettings\Item\ReferencingConfigurationPolicies\Item\RetrieveLatestUpgradeDefaultBaselinePolicy\RetrieveLatestUpgradeDefaultBaselinePolicyRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ReusablePolicySettings\Item\ReferencingConfigurationPolicies\Item\SetEnrollmentTimeDeviceMembershipTarget\SetEnrollmentTimeDeviceMembershipTargetRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ReusablePolicySettings\Item\ReferencingConfigurationPolicies\Item\Settings\SettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementConfigurationPolicy;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the referencingConfigurationPolicies property of the microsoft.graph.deviceManagementReusablePolicySetting entity.
*/
class DeviceManagementConfigurationPolicyItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the assign method.
    */
    public function assign(): AssignRequestBuilder {
        return new AssignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.deviceManagementConfigurationPolicy entity.
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the clearEnrollmentTimeDeviceMembershipTarget method.
    */
    public function clearEnrollmentTimeDeviceMembershipTarget(): ClearEnrollmentTimeDeviceMembershipTargetRequestBuilder {
        return new ClearEnrollmentTimeDeviceMembershipTargetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createCopy method.
    */
    public function createCopy(): CreateCopyRequestBuilder {
        return new CreateCopyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reorder method.
    */
    public function reorder(): ReorderRequestBuilder {
        return new ReorderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the retrieveEnrollmentTimeDeviceMembershipTarget method.
    */
    public function retrieveEnrollmentTimeDeviceMembershipTarget(): RetrieveEnrollmentTimeDeviceMembershipTargetRequestBuilder {
        return new RetrieveEnrollmentTimeDeviceMembershipTargetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the retrieveLatestUpgradeDefaultBaselinePolicy method.
    */
    public function retrieveLatestUpgradeDefaultBaselinePolicy(): RetrieveLatestUpgradeDefaultBaselinePolicyRequestBuilder {
        return new RetrieveLatestUpgradeDefaultBaselinePolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setEnrollmentTimeDeviceMembershipTarget method.
    */
    public function setEnrollmentTimeDeviceMembershipTarget(): SetEnrollmentTimeDeviceMembershipTargetRequestBuilder {
        return new SetEnrollmentTimeDeviceMembershipTargetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the settings property of the microsoft.graph.deviceManagementConfigurationPolicy entity.
    */
    public function settings(): SettingsRequestBuilder {
        return new SettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DeviceManagementConfigurationPolicyItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/reusablePolicySettings/{deviceManagementReusablePolicySetting%2Did}/referencingConfigurationPolicies/{deviceManagementConfigurationPolicy%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property referencingConfigurationPolicies for deviceManagement
     * @param DeviceManagementConfigurationPolicyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?DeviceManagementConfigurationPolicyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * configuration policies referencing the current reusable setting. This property is read-only.
     * @param DeviceManagementConfigurationPolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementConfigurationPolicy|null>
     * @throws Exception
    */
    public function get(?DeviceManagementConfigurationPolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementConfigurationPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property referencingConfigurationPolicies in deviceManagement
     * @param DeviceManagementConfigurationPolicy $body The request body
     * @param DeviceManagementConfigurationPolicyItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementConfigurationPolicy|null>
     * @throws Exception
    */
    public function patch(DeviceManagementConfigurationPolicy $body, ?DeviceManagementConfigurationPolicyItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementConfigurationPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property referencingConfigurationPolicies for deviceManagement
     * @param DeviceManagementConfigurationPolicyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DeviceManagementConfigurationPolicyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * configuration policies referencing the current reusable setting. This property is read-only.
     * @param DeviceManagementConfigurationPolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceManagementConfigurationPolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property referencingConfigurationPolicies in deviceManagement
     * @param DeviceManagementConfigurationPolicy $body The request body
     * @param DeviceManagementConfigurationPolicyItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceManagementConfigurationPolicy $body, ?DeviceManagementConfigurationPolicyItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeviceManagementConfigurationPolicyItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceManagementConfigurationPolicyItemRequestBuilder {
        return new DeviceManagementConfigurationPolicyItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
