<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\AssignmentFilterEvaluationStatusDetails\AssignmentFilterEvaluationStatusDetailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\AssignmentFilterEvaluationStatusDetails\Item\AssignmentFilterEvaluationStatusDetailsItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\DetectedApps\DetectedAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\DetectedApps\Item\DetectedAppItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\DeviceCategory\DeviceCategoryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\DeviceCompliancePolicyStates\DeviceCompliancePolicyStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\DeviceCompliancePolicyStates\Item\DeviceCompliancePolicyStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\DeviceConfigurationStates\DeviceConfigurationStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\DeviceConfigurationStates\Item\DeviceConfigurationStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\DeviceHealthScriptStates\DeviceHealthScriptStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\LogCollectionRequests\Item\DeviceLogCollectionResponseItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\LogCollectionRequests\LogCollectionRequestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\ManagedDeviceMobileAppConfigurationStates\Item\ManagedDeviceMobileAppConfigurationStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\ManagedDeviceMobileAppConfigurationStates\ManagedDeviceMobileAppConfigurationStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphActivateDeviceEsim\MicrosoftGraphActivateDeviceEsimRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphBypassActivationLock\MicrosoftGraphBypassActivationLockRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphCleanWindowsDevice\MicrosoftGraphCleanWindowsDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphCreateDeviceLogCollectionRequest\MicrosoftGraphCreateDeviceLogCollectionRequestRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphCreateRemoteHelpSession\MicrosoftGraphCreateRemoteHelpSessionRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphDeleteUserFromSharedAppleDevice\MicrosoftGraphDeleteUserFromSharedAppleDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphDeprovision\MicrosoftGraphDeprovisionRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphDisable\MicrosoftGraphDisableRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphDisableLostMode\MicrosoftGraphDisableLostModeRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphEnableLostMode\MicrosoftGraphEnableLostModeRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphEndRemoteHelpSession\MicrosoftGraphEndRemoteHelpSessionRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphEnrollNowAction\MicrosoftGraphEnrollNowActionRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphGetCloudPcRemoteActionResults\MicrosoftGraphGetCloudPcRemoteActionResultsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphGetCloudPcReviewStatus\MicrosoftGraphGetCloudPcReviewStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphGetFileVaultKey\MicrosoftGraphGetFileVaultKeyRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphGetNonCompliantSettings\MicrosoftGraphGetNonCompliantSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphGetOemWarranty\MicrosoftGraphGetOemWarrantyRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphInitiateMobileDeviceManagementKeyRecovery\MicrosoftGraphInitiateMobileDeviceManagementKeyRecoveryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphInitiateOnDemandProactiveRemediation\MicrosoftGraphInitiateOnDemandProactiveRemediationRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphLocateDevice\MicrosoftGraphLocateDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphLogoutSharedAppleDeviceActiveUser\MicrosoftGraphLogoutSharedAppleDeviceActiveUserRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphOverrideComplianceState\MicrosoftGraphOverrideComplianceStateRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphPlayLostModeSound\MicrosoftGraphPlayLostModeSoundRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphRebootNow\MicrosoftGraphRebootNowRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphRecoverPasscode\MicrosoftGraphRecoverPasscodeRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphReenable\MicrosoftGraphReenableRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphRemoteLock\MicrosoftGraphRemoteLockRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphRemoveDeviceFirmwareConfigurationInterfaceManagement\MicrosoftGraphRemoveDeviceFirmwareConfigurationInterfaceManagementRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphReprovisionCloudPc\MicrosoftGraphReprovisionCloudPcRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphRequestRemoteAssistance\MicrosoftGraphRequestRemoteAssistanceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphRequestRemoteHelpSessionAccess\MicrosoftGraphRequestRemoteHelpSessionAccessRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphResetPasscode\MicrosoftGraphResetPasscodeRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphResizeCloudPc\MicrosoftGraphResizeCloudPcRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphRestoreCloudPc\MicrosoftGraphRestoreCloudPcRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphRetire\MicrosoftGraphRetireRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphRetrieveRemoteHelpSessionWithSessionKey\MicrosoftGraphRetrieveRemoteHelpSessionWithSessionKeyRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphRevokeAppleVppLicenses\MicrosoftGraphRevokeAppleVppLicensesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphRotateBitLockerKeys\MicrosoftGraphRotateBitLockerKeysRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphRotateFileVaultKey\MicrosoftGraphRotateFileVaultKeyRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphSendCustomNotificationToCompanyPortal\MicrosoftGraphSendCustomNotificationToCompanyPortalRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphSetCloudPcReviewStatus\MicrosoftGraphSetCloudPcReviewStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphSetDeviceName\MicrosoftGraphSetDeviceNameRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphShutDown\MicrosoftGraphShutDownRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphSyncDevice\MicrosoftGraphSyncDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphTriggerConfigurationManagerAction\MicrosoftGraphTriggerConfigurationManagerActionRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphUpdateWindowsDeviceAccount\MicrosoftGraphUpdateWindowsDeviceAccountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphWindowsDefenderScan\MicrosoftGraphWindowsDefenderScanRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphWindowsDefenderUpdateSignatures\MicrosoftGraphWindowsDefenderUpdateSignaturesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\MicrosoftGraphWipe\MicrosoftGraphWipeRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\SecurityBaselineStates\Item\SecurityBaselineStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\SecurityBaselineStates\SecurityBaselineStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\Users\UsersRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\WindowsProtectionState\WindowsProtectionStateRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ManagedDevice;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the managedDevices property of the microsoft.graph.deviceManagement entity.
*/
class ManagedDeviceItemRequestBuilder 
{
    /**
     * Provides operations to manage the assignmentFilterEvaluationStatusDetails property of the microsoft.graph.managedDevice entity.
    */
    public function assignmentFilterEvaluationStatusDetails(): AssignmentFilterEvaluationStatusDetailsRequestBuilder {
        return new AssignmentFilterEvaluationStatusDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the detectedApps property of the microsoft.graph.managedDevice entity.
    */
    public function detectedApps(): DetectedAppsRequestBuilder {
        return new DetectedAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceCategory property of the microsoft.graph.managedDevice entity.
    */
    public function deviceCategory(): DeviceCategoryRequestBuilder {
        return new DeviceCategoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceCompliancePolicyStates property of the microsoft.graph.managedDevice entity.
    */
    public function deviceCompliancePolicyStates(): DeviceCompliancePolicyStatesRequestBuilder {
        return new DeviceCompliancePolicyStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceConfigurationStates property of the microsoft.graph.managedDevice entity.
    */
    public function deviceConfigurationStates(): DeviceConfigurationStatesRequestBuilder {
        return new DeviceConfigurationStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceHealthScriptStates property of the microsoft.graph.managedDevice entity.
    */
    public function deviceHealthScriptStates(): DeviceHealthScriptStatesRequestBuilder {
        return new DeviceHealthScriptStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the logCollectionRequests property of the microsoft.graph.managedDevice entity.
    */
    public function logCollectionRequests(): LogCollectionRequestsRequestBuilder {
        return new LogCollectionRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedDeviceMobileAppConfigurationStates property of the microsoft.graph.managedDevice entity.
    */
    public function managedDeviceMobileAppConfigurationStates(): ManagedDeviceMobileAppConfigurationStatesRequestBuilder {
        return new ManagedDeviceMobileAppConfigurationStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the activateDeviceEsim method.
    */
    public function microsoftGraphActivateDeviceEsim(): MicrosoftGraphActivateDeviceEsimRequestBuilder {
        return new MicrosoftGraphActivateDeviceEsimRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bypassActivationLock method.
    */
    public function microsoftGraphBypassActivationLock(): MicrosoftGraphBypassActivationLockRequestBuilder {
        return new MicrosoftGraphBypassActivationLockRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cleanWindowsDevice method.
    */
    public function microsoftGraphCleanWindowsDevice(): MicrosoftGraphCleanWindowsDeviceRequestBuilder {
        return new MicrosoftGraphCleanWindowsDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createDeviceLogCollectionRequest method.
    */
    public function microsoftGraphCreateDeviceLogCollectionRequest(): MicrosoftGraphCreateDeviceLogCollectionRequestRequestBuilder {
        return new MicrosoftGraphCreateDeviceLogCollectionRequestRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createRemoteHelpSession method.
    */
    public function microsoftGraphCreateRemoteHelpSession(): MicrosoftGraphCreateRemoteHelpSessionRequestBuilder {
        return new MicrosoftGraphCreateRemoteHelpSessionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the deleteUserFromSharedAppleDevice method.
    */
    public function microsoftGraphDeleteUserFromSharedAppleDevice(): MicrosoftGraphDeleteUserFromSharedAppleDeviceRequestBuilder {
        return new MicrosoftGraphDeleteUserFromSharedAppleDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the deprovision method.
    */
    public function microsoftGraphDeprovision(): MicrosoftGraphDeprovisionRequestBuilder {
        return new MicrosoftGraphDeprovisionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the disable method.
    */
    public function microsoftGraphDisable(): MicrosoftGraphDisableRequestBuilder {
        return new MicrosoftGraphDisableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the disableLostMode method.
    */
    public function microsoftGraphDisableLostMode(): MicrosoftGraphDisableLostModeRequestBuilder {
        return new MicrosoftGraphDisableLostModeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the enableLostMode method.
    */
    public function microsoftGraphEnableLostMode(): MicrosoftGraphEnableLostModeRequestBuilder {
        return new MicrosoftGraphEnableLostModeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the endRemoteHelpSession method.
    */
    public function microsoftGraphEndRemoteHelpSession(): MicrosoftGraphEndRemoteHelpSessionRequestBuilder {
        return new MicrosoftGraphEndRemoteHelpSessionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the enrollNowAction method.
    */
    public function microsoftGraphEnrollNowAction(): MicrosoftGraphEnrollNowActionRequestBuilder {
        return new MicrosoftGraphEnrollNowActionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCloudPcRemoteActionResults method.
    */
    public function microsoftGraphGetCloudPcRemoteActionResults(): MicrosoftGraphGetCloudPcRemoteActionResultsRequestBuilder {
        return new MicrosoftGraphGetCloudPcRemoteActionResultsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCloudPcReviewStatus method.
    */
    public function microsoftGraphGetCloudPcReviewStatus(): MicrosoftGraphGetCloudPcReviewStatusRequestBuilder {
        return new MicrosoftGraphGetCloudPcReviewStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getFileVaultKey method.
    */
    public function microsoftGraphGetFileVaultKey(): MicrosoftGraphGetFileVaultKeyRequestBuilder {
        return new MicrosoftGraphGetFileVaultKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getNonCompliantSettings method.
    */
    public function microsoftGraphGetNonCompliantSettings(): MicrosoftGraphGetNonCompliantSettingsRequestBuilder {
        return new MicrosoftGraphGetNonCompliantSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getOemWarranty method.
    */
    public function microsoftGraphGetOemWarranty(): MicrosoftGraphGetOemWarrantyRequestBuilder {
        return new MicrosoftGraphGetOemWarrantyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the initiateMobileDeviceManagementKeyRecovery method.
    */
    public function microsoftGraphInitiateMobileDeviceManagementKeyRecovery(): MicrosoftGraphInitiateMobileDeviceManagementKeyRecoveryRequestBuilder {
        return new MicrosoftGraphInitiateMobileDeviceManagementKeyRecoveryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the initiateOnDemandProactiveRemediation method.
    */
    public function microsoftGraphInitiateOnDemandProactiveRemediation(): MicrosoftGraphInitiateOnDemandProactiveRemediationRequestBuilder {
        return new MicrosoftGraphInitiateOnDemandProactiveRemediationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the locateDevice method.
    */
    public function microsoftGraphLocateDevice(): MicrosoftGraphLocateDeviceRequestBuilder {
        return new MicrosoftGraphLocateDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the logoutSharedAppleDeviceActiveUser method.
    */
    public function microsoftGraphLogoutSharedAppleDeviceActiveUser(): MicrosoftGraphLogoutSharedAppleDeviceActiveUserRequestBuilder {
        return new MicrosoftGraphLogoutSharedAppleDeviceActiveUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the overrideComplianceState method.
    */
    public function microsoftGraphOverrideComplianceState(): MicrosoftGraphOverrideComplianceStateRequestBuilder {
        return new MicrosoftGraphOverrideComplianceStateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the playLostModeSound method.
    */
    public function microsoftGraphPlayLostModeSound(): MicrosoftGraphPlayLostModeSoundRequestBuilder {
        return new MicrosoftGraphPlayLostModeSoundRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rebootNow method.
    */
    public function microsoftGraphRebootNow(): MicrosoftGraphRebootNowRequestBuilder {
        return new MicrosoftGraphRebootNowRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the recoverPasscode method.
    */
    public function microsoftGraphRecoverPasscode(): MicrosoftGraphRecoverPasscodeRequestBuilder {
        return new MicrosoftGraphRecoverPasscodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reenable method.
    */
    public function microsoftGraphReenable(): MicrosoftGraphReenableRequestBuilder {
        return new MicrosoftGraphReenableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the remoteLock method.
    */
    public function microsoftGraphRemoteLock(): MicrosoftGraphRemoteLockRequestBuilder {
        return new MicrosoftGraphRemoteLockRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the removeDeviceFirmwareConfigurationInterfaceManagement method.
    */
    public function microsoftGraphRemoveDeviceFirmwareConfigurationInterfaceManagement(): MicrosoftGraphRemoveDeviceFirmwareConfigurationInterfaceManagementRequestBuilder {
        return new MicrosoftGraphRemoveDeviceFirmwareConfigurationInterfaceManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reprovisionCloudPc method.
    */
    public function microsoftGraphReprovisionCloudPc(): MicrosoftGraphReprovisionCloudPcRequestBuilder {
        return new MicrosoftGraphReprovisionCloudPcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the requestRemoteAssistance method.
    */
    public function microsoftGraphRequestRemoteAssistance(): MicrosoftGraphRequestRemoteAssistanceRequestBuilder {
        return new MicrosoftGraphRequestRemoteAssistanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the requestRemoteHelpSessionAccess method.
    */
    public function microsoftGraphRequestRemoteHelpSessionAccess(): MicrosoftGraphRequestRemoteHelpSessionAccessRequestBuilder {
        return new MicrosoftGraphRequestRemoteHelpSessionAccessRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the resetPasscode method.
    */
    public function microsoftGraphResetPasscode(): MicrosoftGraphResetPasscodeRequestBuilder {
        return new MicrosoftGraphResetPasscodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the resizeCloudPc method.
    */
    public function microsoftGraphResizeCloudPc(): MicrosoftGraphResizeCloudPcRequestBuilder {
        return new MicrosoftGraphResizeCloudPcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the restoreCloudPc method.
    */
    public function microsoftGraphRestoreCloudPc(): MicrosoftGraphRestoreCloudPcRequestBuilder {
        return new MicrosoftGraphRestoreCloudPcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the retire method.
    */
    public function microsoftGraphRetire(): MicrosoftGraphRetireRequestBuilder {
        return new MicrosoftGraphRetireRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the revokeAppleVppLicenses method.
    */
    public function microsoftGraphRevokeAppleVppLicenses(): MicrosoftGraphRevokeAppleVppLicensesRequestBuilder {
        return new MicrosoftGraphRevokeAppleVppLicensesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rotateBitLockerKeys method.
    */
    public function microsoftGraphRotateBitLockerKeys(): MicrosoftGraphRotateBitLockerKeysRequestBuilder {
        return new MicrosoftGraphRotateBitLockerKeysRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rotateFileVaultKey method.
    */
    public function microsoftGraphRotateFileVaultKey(): MicrosoftGraphRotateFileVaultKeyRequestBuilder {
        return new MicrosoftGraphRotateFileVaultKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sendCustomNotificationToCompanyPortal method.
    */
    public function microsoftGraphSendCustomNotificationToCompanyPortal(): MicrosoftGraphSendCustomNotificationToCompanyPortalRequestBuilder {
        return new MicrosoftGraphSendCustomNotificationToCompanyPortalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setCloudPcReviewStatus method.
    */
    public function microsoftGraphSetCloudPcReviewStatus(): MicrosoftGraphSetCloudPcReviewStatusRequestBuilder {
        return new MicrosoftGraphSetCloudPcReviewStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setDeviceName method.
    */
    public function microsoftGraphSetDeviceName(): MicrosoftGraphSetDeviceNameRequestBuilder {
        return new MicrosoftGraphSetDeviceNameRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the shutDown method.
    */
    public function microsoftGraphShutDown(): MicrosoftGraphShutDownRequestBuilder {
        return new MicrosoftGraphShutDownRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the syncDevice method.
    */
    public function microsoftGraphSyncDevice(): MicrosoftGraphSyncDeviceRequestBuilder {
        return new MicrosoftGraphSyncDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the triggerConfigurationManagerAction method.
    */
    public function microsoftGraphTriggerConfigurationManagerAction(): MicrosoftGraphTriggerConfigurationManagerActionRequestBuilder {
        return new MicrosoftGraphTriggerConfigurationManagerActionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateWindowsDeviceAccount method.
    */
    public function microsoftGraphUpdateWindowsDeviceAccount(): MicrosoftGraphUpdateWindowsDeviceAccountRequestBuilder {
        return new MicrosoftGraphUpdateWindowsDeviceAccountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the windowsDefenderScan method.
    */
    public function microsoftGraphWindowsDefenderScan(): MicrosoftGraphWindowsDefenderScanRequestBuilder {
        return new MicrosoftGraphWindowsDefenderScanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the windowsDefenderUpdateSignatures method.
    */
    public function microsoftGraphWindowsDefenderUpdateSignatures(): MicrosoftGraphWindowsDefenderUpdateSignaturesRequestBuilder {
        return new MicrosoftGraphWindowsDefenderUpdateSignaturesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the wipe method.
    */
    public function microsoftGraphWipe(): MicrosoftGraphWipeRequestBuilder {
        return new MicrosoftGraphWipeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the securityBaselineStates property of the microsoft.graph.managedDevice entity.
    */
    public function securityBaselineStates(): SecurityBaselineStatesRequestBuilder {
        return new SecurityBaselineStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the users property of the microsoft.graph.managedDevice entity.
    */
    public function users(): UsersRequestBuilder {
        return new UsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsProtectionState property of the microsoft.graph.managedDevice entity.
    */
    public function windowsProtectionState(): WindowsProtectionStateRequestBuilder {
        return new WindowsProtectionStateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignmentFilterEvaluationStatusDetails property of the microsoft.graph.managedDevice entity.
     * @param string $id Unique identifier of the item
     * @return AssignmentFilterEvaluationStatusDetailsItemRequestBuilder
    */
    public function assignmentFilterEvaluationStatusDetailsById(string $id): AssignmentFilterEvaluationStatusDetailsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['assignmentFilterEvaluationStatusDetails%2Did'] = $id;
        return new AssignmentFilterEvaluationStatusDetailsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ManagedDeviceItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/managedDevices/{managedDevice%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property managedDevices for deviceManagement
     * @param ManagedDeviceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?ManagedDeviceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the detectedApps property of the microsoft.graph.managedDevice entity.
     * @param string $id Unique identifier of the item
     * @return DetectedAppItemRequestBuilder
    */
    public function detectedAppsById(string $id): DetectedAppItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['detectedApp%2Did'] = $id;
        return new DetectedAppItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the deviceCompliancePolicyStates property of the microsoft.graph.managedDevice entity.
     * @param string $id Unique identifier of the item
     * @return DeviceCompliancePolicyStateItemRequestBuilder
    */
    public function deviceCompliancePolicyStatesById(string $id): DeviceCompliancePolicyStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceCompliancePolicyState%2Did'] = $id;
        return new DeviceCompliancePolicyStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the deviceConfigurationStates property of the microsoft.graph.managedDevice entity.
     * @param string $id Unique identifier of the item
     * @return DeviceConfigurationStateItemRequestBuilder
    */
    public function deviceConfigurationStatesById(string $id): DeviceConfigurationStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceConfigurationState%2Did'] = $id;
        return new DeviceConfigurationStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The list of managed devices.
     * @param ManagedDeviceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?ManagedDeviceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ManagedDevice::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the logCollectionRequests property of the microsoft.graph.managedDevice entity.
     * @param string $id Unique identifier of the item
     * @return DeviceLogCollectionResponseItemRequestBuilder
    */
    public function logCollectionRequestsById(string $id): DeviceLogCollectionResponseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceLogCollectionResponse%2Did'] = $id;
        return new DeviceLogCollectionResponseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managedDeviceMobileAppConfigurationStates property of the microsoft.graph.managedDevice entity.
     * @param string $id Unique identifier of the item
     * @return ManagedDeviceMobileAppConfigurationStateItemRequestBuilder
    */
    public function managedDeviceMobileAppConfigurationStatesById(string $id): ManagedDeviceMobileAppConfigurationStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDeviceMobileAppConfigurationState%2Did'] = $id;
        return new ManagedDeviceMobileAppConfigurationStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to call the retrieveRemoteHelpSession method.
     * @param string $sessionKey Usage: sessionKey='{sessionKey}'
     * @return MicrosoftGraphRetrieveRemoteHelpSessionWithSessionKeyRequestBuilder
    */
    public function microsoftGraphRetrieveRemoteHelpSessionWithSessionKey(string $sessionKey): MicrosoftGraphRetrieveRemoteHelpSessionWithSessionKeyRequestBuilder {
        return new MicrosoftGraphRetrieveRemoteHelpSessionWithSessionKeyRequestBuilder($this->pathParameters, $this->requestAdapter, $sessionKey);
    }

    /**
     * Update the navigation property managedDevices in deviceManagement
     * @param ManagedDevice $body The request body
     * @param ManagedDeviceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(ManagedDevice $body, ?ManagedDeviceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ManagedDevice::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the securityBaselineStates property of the microsoft.graph.managedDevice entity.
     * @param string $id Unique identifier of the item
     * @return SecurityBaselineStateItemRequestBuilder
    */
    public function securityBaselineStatesById(string $id): SecurityBaselineStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['securityBaselineState%2Did'] = $id;
        return new SecurityBaselineStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property managedDevices for deviceManagement
     * @param ManagedDeviceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ManagedDeviceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * The list of managed devices.
     * @param ManagedDeviceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ManagedDeviceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
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
     * Update the navigation property managedDevices in deviceManagement
     * @param ManagedDevice $body The request body
     * @param ManagedDeviceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ManagedDevice $body, ?ManagedDeviceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
