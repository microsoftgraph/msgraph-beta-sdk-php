<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\ActivateDeviceEsim\ActivateDeviceEsimRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\AssignmentFilterEvaluationStatusDetails\AssignmentFilterEvaluationStatusDetailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\AssignmentFilterEvaluationStatusDetails\Item\AssignmentFilterEvaluationStatusDetailsItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\BypassActivationLock\BypassActivationLockRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\CleanWindowsDevice\CleanWindowsDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\CreateDeviceLogCollectionRequest\CreateDeviceLogCollectionRequestRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\DeleteUserFromSharedAppleDevice\DeleteUserFromSharedAppleDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\Deprovision\DeprovisionRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\DetectedApps\DetectedAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\DetectedApps\Item\DetectedAppItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\DeviceCategory\DeviceCategoryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\DeviceCompliancePolicyStates\DeviceCompliancePolicyStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\DeviceCompliancePolicyStates\Item\DeviceCompliancePolicyStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\DeviceConfigurationStates\DeviceConfigurationStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\DeviceConfigurationStates\Item\DeviceConfigurationStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\Disable\DisableRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\DisableLostMode\DisableLostModeRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\EnableLostMode\EnableLostModeRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\GetCloudPcRemoteActionResults\GetCloudPcRemoteActionResultsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\GetFileVaultKey\GetFileVaultKeyRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\GetNonCompliantSettings\GetNonCompliantSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\GetOemWarranty\GetOemWarrantyRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\LocateDevice\LocateDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\LogCollectionRequests\Item\DeviceLogCollectionResponseItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\LogCollectionRequests\LogCollectionRequestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\LogoutSharedAppleDeviceActiveUser\LogoutSharedAppleDeviceActiveUserRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\ManagedDeviceMobileAppConfigurationStates\Item\ManagedDeviceMobileAppConfigurationStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\ManagedDeviceMobileAppConfigurationStates\ManagedDeviceMobileAppConfigurationStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\OverrideComplianceState\OverrideComplianceStateRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\PlayLostModeSound\PlayLostModeSoundRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\RebootNow\RebootNowRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\RecoverPasscode\RecoverPasscodeRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\Reenable\ReenableRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\RemoteLock\RemoteLockRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\ReprovisionCloudPc\ReprovisionCloudPcRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\RequestRemoteAssistance\RequestRemoteAssistanceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\ResetPasscode\ResetPasscodeRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\ResizeCloudPc\ResizeCloudPcRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\RestoreCloudPc\RestoreCloudPcRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\Retire\RetireRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\RevokeAppleVppLicenses\RevokeAppleVppLicensesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\RotateBitLockerKeys\RotateBitLockerKeysRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\RotateFileVaultKey\RotateFileVaultKeyRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\SecurityBaselineStates\Item\SecurityBaselineStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\SecurityBaselineStates\SecurityBaselineStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\SendCustomNotificationToCompanyPortal\SendCustomNotificationToCompanyPortalRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\SetDeviceName\SetDeviceNameRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\ShutDown\ShutDownRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\SyncDevice\SyncDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\TriggerConfigurationManagerAction\TriggerConfigurationManagerActionRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\UpdateWindowsDeviceAccount\UpdateWindowsDeviceAccountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\Users\UsersRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\WindowsDefenderScan\WindowsDefenderScanRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\WindowsDefenderUpdateSignatures\WindowsDefenderUpdateSignaturesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\WindowsProtectionState\WindowsProtectionStateRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\Wipe\WipeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ManagedDevice;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class ManagedDeviceItemRequestBuilder 
{
    public function activateDeviceEsim(): ActivateDeviceEsimRequestBuilder {
        return new ActivateDeviceEsimRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function assignmentFilterEvaluationStatusDetails(): AssignmentFilterEvaluationStatusDetailsRequestBuilder {
        return new AssignmentFilterEvaluationStatusDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function bypassActivationLock(): BypassActivationLockRequestBuilder {
        return new BypassActivationLockRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function cleanWindowsDevice(): CleanWindowsDeviceRequestBuilder {
        return new CleanWindowsDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function createDeviceLogCollectionRequest(): CreateDeviceLogCollectionRequestRequestBuilder {
        return new CreateDeviceLogCollectionRequestRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function deleteUserFromSharedAppleDevice(): DeleteUserFromSharedAppleDeviceRequestBuilder {
        return new DeleteUserFromSharedAppleDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function deprovision(): DeprovisionRequestBuilder {
        return new DeprovisionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function detectedApps(): DetectedAppsRequestBuilder {
        return new DetectedAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function deviceCategory(): DeviceCategoryRequestBuilder {
        return new DeviceCategoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function deviceCompliancePolicyStates(): DeviceCompliancePolicyStatesRequestBuilder {
        return new DeviceCompliancePolicyStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function deviceConfigurationStates(): DeviceConfigurationStatesRequestBuilder {
        return new DeviceConfigurationStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function disable(): DisableRequestBuilder {
        return new DisableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function disableLostMode(): DisableLostModeRequestBuilder {
        return new DisableLostModeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function enableLostMode(): EnableLostModeRequestBuilder {
        return new EnableLostModeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function locateDevice(): LocateDeviceRequestBuilder {
        return new LocateDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function logCollectionRequests(): LogCollectionRequestsRequestBuilder {
        return new LogCollectionRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function logoutSharedAppleDeviceActiveUser(): LogoutSharedAppleDeviceActiveUserRequestBuilder {
        return new LogoutSharedAppleDeviceActiveUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function managedDeviceMobileAppConfigurationStates(): ManagedDeviceMobileAppConfigurationStatesRequestBuilder {
        return new ManagedDeviceMobileAppConfigurationStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function overrideComplianceState(): OverrideComplianceStateRequestBuilder {
        return new OverrideComplianceStateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    public function playLostModeSound(): PlayLostModeSoundRequestBuilder {
        return new PlayLostModeSoundRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function rebootNow(): RebootNowRequestBuilder {
        return new RebootNowRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function recoverPasscode(): RecoverPasscodeRequestBuilder {
        return new RecoverPasscodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function reenable(): ReenableRequestBuilder {
        return new ReenableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function remoteLock(): RemoteLockRequestBuilder {
        return new RemoteLockRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function reprovisionCloudPc(): ReprovisionCloudPcRequestBuilder {
        return new ReprovisionCloudPcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    public function requestRemoteAssistance(): RequestRemoteAssistanceRequestBuilder {
        return new RequestRemoteAssistanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function resetPasscode(): ResetPasscodeRequestBuilder {
        return new ResetPasscodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function resizeCloudPc(): ResizeCloudPcRequestBuilder {
        return new ResizeCloudPcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function restoreCloudPc(): RestoreCloudPcRequestBuilder {
        return new RestoreCloudPcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function retire(): RetireRequestBuilder {
        return new RetireRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function revokeAppleVppLicenses(): RevokeAppleVppLicensesRequestBuilder {
        return new RevokeAppleVppLicensesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function rotateBitLockerKeys(): RotateBitLockerKeysRequestBuilder {
        return new RotateBitLockerKeysRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function rotateFileVaultKey(): RotateFileVaultKeyRequestBuilder {
        return new RotateFileVaultKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function securityBaselineStates(): SecurityBaselineStatesRequestBuilder {
        return new SecurityBaselineStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function sendCustomNotificationToCompanyPortal(): SendCustomNotificationToCompanyPortalRequestBuilder {
        return new SendCustomNotificationToCompanyPortalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function setDeviceName(): SetDeviceNameRequestBuilder {
        return new SetDeviceNameRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function shutDown(): ShutDownRequestBuilder {
        return new ShutDownRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function syncDevice(): SyncDeviceRequestBuilder {
        return new SyncDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function triggerConfigurationManagerAction(): TriggerConfigurationManagerActionRequestBuilder {
        return new TriggerConfigurationManagerActionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function updateWindowsDeviceAccount(): UpdateWindowsDeviceAccountRequestBuilder {
        return new UpdateWindowsDeviceAccountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    public function users(): UsersRequestBuilder {
        return new UsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function windowsDefenderScan(): WindowsDefenderScanRequestBuilder {
        return new WindowsDefenderScanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function windowsDefenderUpdateSignatures(): WindowsDefenderUpdateSignaturesRequestBuilder {
        return new WindowsDefenderUpdateSignaturesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function windowsProtectionState(): WindowsProtectionStateRequestBuilder {
        return new WindowsProtectionStateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function wipe(): WipeRequestBuilder {
        return new WipeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.managedDevices.item.assignmentFilterEvaluationStatusDetails.item collection
     * @param string $id Unique identifier of the item
     * @return AssignmentFilterEvaluationStatusDetailsItemRequestBuilder
    */
    public function assignmentFilterEvaluationStatusDetailsById(string $id): AssignmentFilterEvaluationStatusDetailsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['assignmentFilterEvaluationStatusDetails_id'] = $id;
        return new AssignmentFilterEvaluationStatusDetailsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ManagedDeviceItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/managedDevices/{managedDevice_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property managedDevices for deviceManagement
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * The list of managed devices.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property managedDevices in deviceManagement
     * @param ManagedDevice $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(ManagedDevice $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Delete navigation property managedDevices for deviceManagement
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.managedDevices.item.detectedApps.item collection
     * @param string $id Unique identifier of the item
     * @return DetectedAppItemRequestBuilder
    */
    public function detectedAppsById(string $id): DetectedAppItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['detectedApp_id'] = $id;
        return new DetectedAppItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.managedDevices.item.deviceCompliancePolicyStates.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceCompliancePolicyStateItemRequestBuilder
    */
    public function deviceCompliancePolicyStatesById(string $id): DeviceCompliancePolicyStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceCompliancePolicyState_id'] = $id;
        return new DeviceCompliancePolicyStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.managedDevices.item.deviceConfigurationStates.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceConfigurationStateItemRequestBuilder
    */
    public function deviceConfigurationStatesById(string $id): DeviceConfigurationStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceConfigurationState_id'] = $id;
        return new DeviceConfigurationStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The list of managed devices.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, ManagedDevice::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the getCloudPcRemoteActionResults method.
     * @return GetCloudPcRemoteActionResultsRequestBuilder
    */
    public function getCloudPcRemoteActionResults(): GetCloudPcRemoteActionResultsRequestBuilder {
        return new GetCloudPcRemoteActionResultsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getFileVaultKey method.
     * @return GetFileVaultKeyRequestBuilder
    */
    public function getFileVaultKey(): GetFileVaultKeyRequestBuilder {
        return new GetFileVaultKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getNonCompliantSettings method.
     * @return GetNonCompliantSettingsRequestBuilder
    */
    public function getNonCompliantSettings(): GetNonCompliantSettingsRequestBuilder {
        return new GetNonCompliantSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the getOemWarranty method.
     * @return GetOemWarrantyRequestBuilder
    */
    public function getOemWarranty(): GetOemWarrantyRequestBuilder {
        return new GetOemWarrantyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.managedDevices.item.logCollectionRequests.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceLogCollectionResponseItemRequestBuilder
    */
    public function logCollectionRequestsById(string $id): DeviceLogCollectionResponseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceLogCollectionResponse_id'] = $id;
        return new DeviceLogCollectionResponseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.managedDevices.item.managedDeviceMobileAppConfigurationStates.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedDeviceMobileAppConfigurationStateItemRequestBuilder
    */
    public function managedDeviceMobileAppConfigurationStatesById(string $id): ManagedDeviceMobileAppConfigurationStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDeviceMobileAppConfigurationState_id'] = $id;
        return new ManagedDeviceMobileAppConfigurationStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property managedDevices in deviceManagement
     * @param ManagedDevice $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(ManagedDevice $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.managedDevices.item.securityBaselineStates.item collection
     * @param string $id Unique identifier of the item
     * @return SecurityBaselineStateItemRequestBuilder
    */
    public function securityBaselineStatesById(string $id): SecurityBaselineStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['securityBaselineState_id'] = $id;
        return new SecurityBaselineStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
