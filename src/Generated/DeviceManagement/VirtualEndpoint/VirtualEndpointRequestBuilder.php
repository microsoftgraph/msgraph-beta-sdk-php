<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\AuditEvents\AuditEventsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\AuditEvents\Item\CloudPcAuditEventItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\CloudPCsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\CloudPCItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\DeviceImages\DeviceImagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\DeviceImages\Item\CloudPcDeviceImageItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ExternalPartnerSettings\ExternalPartnerSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ExternalPartnerSettings\Item\CloudPcExternalPartnerSettingItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\GalleryImages\GalleryImagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\GalleryImages\Item\CloudPcGalleryImageItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\GetEffectivePermissions\GetEffectivePermissionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\OnPremisesConnections\Item\CloudPcOnPremisesConnectionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\OnPremisesConnections\OnPremisesConnectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\OrganizationSettings\OrganizationSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ProvisioningPolicies\Item\CloudPcProvisioningPolicyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ProvisioningPolicies\ProvisioningPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ServicePlans\Item\CloudPcServicePlanItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ServicePlans\ServicePlansRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Snapshots\Item\CloudPcSnapshotItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Snapshots\SnapshotsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\SupportedRegions\Item\CloudPcSupportedRegionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\SupportedRegions\SupportedRegionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\UserSettings\Item\CloudPcUserSettingItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\UserSettings\UserSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\VirtualEndpoint;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class VirtualEndpointRequestBuilder 
{
    /**
     * The auditEvents property
    */
    public function auditEvents(): AuditEventsRequestBuilder {
        return new AuditEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The cloudPCs property
    */
    public function cloudPCs(): CloudPCsRequestBuilder {
        return new CloudPCsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceImages property
    */
    public function deviceImages(): DeviceImagesRequestBuilder {
        return new DeviceImagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The externalPartnerSettings property
    */
    public function externalPartnerSettings(): ExternalPartnerSettingsRequestBuilder {
        return new ExternalPartnerSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The galleryImages property
    */
    public function galleryImages(): GalleryImagesRequestBuilder {
        return new GalleryImagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The onPremisesConnections property
    */
    public function onPremisesConnections(): OnPremisesConnectionsRequestBuilder {
        return new OnPremisesConnectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The organizationSettings property
    */
    public function organizationSettings(): OrganizationSettingsRequestBuilder {
        return new OrganizationSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The provisioningPolicies property
    */
    public function provisioningPolicies(): ProvisioningPoliciesRequestBuilder {
        return new ProvisioningPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The servicePlans property
    */
    public function servicePlans(): ServicePlansRequestBuilder {
        return new ServicePlansRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The snapshots property
    */
    public function snapshots(): SnapshotsRequestBuilder {
        return new SnapshotsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The supportedRegions property
    */
    public function supportedRegions(): SupportedRegionsRequestBuilder {
        return new SupportedRegionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * The userSettings property
    */
    public function userSettings(): UserSettingsRequestBuilder {
        return new UserSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.virtualEndpoint.auditEvents.item collection
     * @param string $id Unique identifier of the item
     * @return CloudPcAuditEventItemRequestBuilder
    */
    public function auditEventsById(string $id): CloudPcAuditEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPcAuditEvent%2Did'] = $id;
        return new CloudPcAuditEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.virtualEndpoint.cloudPCs.item collection
     * @param string $id Unique identifier of the item
     * @return CloudPCItemRequestBuilder
    */
    public function cloudPCsById(string $id): CloudPCItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPC%2Did'] = $id;
        return new CloudPCItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new VirtualEndpointRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/virtualEndpoint{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property virtualEndpoint for deviceManagement
     * @param VirtualEndpointRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?VirtualEndpointRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Get virtualEndpoint from deviceManagement
     * @param VirtualEndpointRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?VirtualEndpointRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property virtualEndpoint in deviceManagement
     * @param VirtualEndpoint $body 
     * @param VirtualEndpointRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(VirtualEndpoint $body, ?VirtualEndpointRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Delete navigation property virtualEndpoint for deviceManagement
     * @param VirtualEndpointRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?VirtualEndpointRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.virtualEndpoint.deviceImages.item collection
     * @param string $id Unique identifier of the item
     * @return CloudPcDeviceImageItemRequestBuilder
    */
    public function deviceImagesById(string $id): CloudPcDeviceImageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPcDeviceImage%2Did'] = $id;
        return new CloudPcDeviceImageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.virtualEndpoint.externalPartnerSettings.item collection
     * @param string $id Unique identifier of the item
     * @return CloudPcExternalPartnerSettingItemRequestBuilder
    */
    public function externalPartnerSettingsById(string $id): CloudPcExternalPartnerSettingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPcExternalPartnerSetting%2Did'] = $id;
        return new CloudPcExternalPartnerSettingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.virtualEndpoint.galleryImages.item collection
     * @param string $id Unique identifier of the item
     * @return CloudPcGalleryImageItemRequestBuilder
    */
    public function galleryImagesById(string $id): CloudPcGalleryImageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPcGalleryImage%2Did'] = $id;
        return new CloudPcGalleryImageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get virtualEndpoint from deviceManagement
     * @param VirtualEndpointRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?VirtualEndpointRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(VirtualEndpoint::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the getEffectivePermissions method.
     * @return GetEffectivePermissionsRequestBuilder
    */
    public function getEffectivePermissions(): GetEffectivePermissionsRequestBuilder {
        return new GetEffectivePermissionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.virtualEndpoint.onPremisesConnections.item collection
     * @param string $id Unique identifier of the item
     * @return CloudPcOnPremisesConnectionItemRequestBuilder
    */
    public function onPremisesConnectionsById(string $id): CloudPcOnPremisesConnectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPcOnPremisesConnection%2Did'] = $id;
        return new CloudPcOnPremisesConnectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property virtualEndpoint in deviceManagement
     * @param VirtualEndpoint $body 
     * @param VirtualEndpointRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(VirtualEndpoint $body, ?VirtualEndpointRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(VirtualEndpoint::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.virtualEndpoint.provisioningPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return CloudPcProvisioningPolicyItemRequestBuilder
    */
    public function provisioningPoliciesById(string $id): CloudPcProvisioningPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPcProvisioningPolicy%2Did'] = $id;
        return new CloudPcProvisioningPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.virtualEndpoint.servicePlans.item collection
     * @param string $id Unique identifier of the item
     * @return CloudPcServicePlanItemRequestBuilder
    */
    public function servicePlansById(string $id): CloudPcServicePlanItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPcServicePlan%2Did'] = $id;
        return new CloudPcServicePlanItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.virtualEndpoint.snapshots.item collection
     * @param string $id Unique identifier of the item
     * @return CloudPcSnapshotItemRequestBuilder
    */
    public function snapshotsById(string $id): CloudPcSnapshotItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPcSnapshot%2Did'] = $id;
        return new CloudPcSnapshotItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.virtualEndpoint.supportedRegions.item collection
     * @param string $id Unique identifier of the item
     * @return CloudPcSupportedRegionItemRequestBuilder
    */
    public function supportedRegionsById(string $id): CloudPcSupportedRegionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPcSupportedRegion%2Did'] = $id;
        return new CloudPcSupportedRegionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.virtualEndpoint.userSettings.item collection
     * @param string $id Unique identifier of the item
     * @return CloudPcUserSettingItemRequestBuilder
    */
    public function userSettingsById(string $id): CloudPcUserSettingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPcUserSetting%2Did'] = $id;
        return new CloudPcUserSettingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
