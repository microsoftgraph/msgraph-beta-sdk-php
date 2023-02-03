<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\AssignmentFilterEvaluationStatusDetails\AssignmentFilterEvaluationStatusDetailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\AssignmentFilterEvaluationStatusDetails\Item\AssignmentFilterEvaluationStatusDetailsItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\DetectedApps\DetectedAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\DetectedApps\Item\DetectedAppItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\DeviceCategory\DeviceCategoryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\DeviceCompliancePolicyStates\DeviceCompliancePolicyStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\DeviceCompliancePolicyStates\Item\DeviceCompliancePolicyStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\DeviceConfigurationStates\DeviceConfigurationStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\DeviceConfigurationStates\Item\DeviceConfigurationStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\DeviceHealthScriptStates\DeviceHealthScriptStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\LogCollectionRequests\Item\DeviceLogCollectionResponseItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\LogCollectionRequests\LogCollectionRequestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\ManagedDeviceMobileAppConfigurationStates\Item\ManagedDeviceMobileAppConfigurationStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\ManagedDeviceMobileAppConfigurationStates\ManagedDeviceMobileAppConfigurationStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphActivateDeviceEsim\ActivateDeviceEsimRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphBypassActivationLock\BypassActivationLockRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphCleanWindowsDevice\CleanWindowsDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphCreateDeviceLogCollectionRequest\CreateDeviceLogCollectionRequestRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphCreateRemoteHelpSession\CreateRemoteHelpSessionRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphDeleteUserFromSharedAppleDevice\DeleteUserFromSharedAppleDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphDeprovision\DeprovisionRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphDisable\DisableRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphDisableLostMode\DisableLostModeRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphEnableLostMode\EnableLostModeRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphEndRemoteHelpSession\EndRemoteHelpSessionRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphEnrollNowAction\EnrollNowActionRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphGetCloudPcRemoteActionResults\GetCloudPcRemoteActionResultsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphGetCloudPcReviewStatus\GetCloudPcReviewStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphGetFileVaultKey\GetFileVaultKeyRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphGetNonCompliantSettings\GetNonCompliantSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphGetOemWarranty\GetOemWarrantyRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphInitiateMobileDeviceManagementKeyRecovery\InitiateMobileDeviceManagementKeyRecoveryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphInitiateOnDemandProactiveRemediation\InitiateOnDemandProactiveRemediationRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphLocateDevice\LocateDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphLogoutSharedAppleDeviceActiveUser\LogoutSharedAppleDeviceActiveUserRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphOverrideComplianceState\OverrideComplianceStateRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphPlayLostModeSound\PlayLostModeSoundRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphRebootNow\RebootNowRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphRecoverPasscode\RecoverPasscodeRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphReenable\ReenableRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphRemoteLock\RemoteLockRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphRemoveDeviceFirmwareConfigurationInterfaceManagement\RemoveDeviceFirmwareConfigurationInterfaceManagementRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphReprovisionCloudPc\ReprovisionCloudPcRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphRequestRemoteAssistance\RequestRemoteAssistanceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphRequestRemoteHelpSessionAccess\RequestRemoteHelpSessionAccessRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphResetPasscode\ResetPasscodeRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphResizeCloudPc\ResizeCloudPcRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphRestoreCloudPc\RestoreCloudPcRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphRetire\RetireRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphRetrieveRemoteHelpSessionWithSessionKey\RetrieveRemoteHelpSessionWithSessionKeyRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphRevokeAppleVppLicenses\RevokeAppleVppLicensesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphRotateBitLockerKeys\RotateBitLockerKeysRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphRotateFileVaultKey\RotateFileVaultKeyRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphSendCustomNotificationToCompanyPortal\SendCustomNotificationToCompanyPortalRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphSetCloudPcReviewStatus\SetCloudPcReviewStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphSetDeviceName\SetDeviceNameRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphShutDown\ShutDownRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphSyncDevice\SyncDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphTriggerConfigurationManagerAction\TriggerConfigurationManagerActionRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphUpdateWindowsDeviceAccount\UpdateWindowsDeviceAccountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphWindowsDefenderScan\WindowsDefenderScanRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphWindowsDefenderUpdateSignatures\WindowsDefenderUpdateSignaturesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\MicrosoftGraphWipe\WipeRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\SecurityBaselineStates\Item\SecurityBaselineStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\SecurityBaselineStates\SecurityBaselineStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\Users\UsersRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\WindowsProtectionState\WindowsProtectionStateRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ManagedDevice;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the comanagedDevices property of the microsoft.graph.deviceManagement entity.
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
    public function microsoftGraphActivateDeviceEsim(): ActivateDeviceEsimRequestBuilder {
        return new ActivateDeviceEsimRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bypassActivationLock method.
    */
    public function microsoftGraphBypassActivationLock(): BypassActivationLockRequestBuilder {
        return new BypassActivationLockRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cleanWindowsDevice method.
    */
    public function microsoftGraphCleanWindowsDevice(): CleanWindowsDeviceRequestBuilder {
        return new CleanWindowsDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createDeviceLogCollectionRequest method.
    */
    public function microsoftGraphCreateDeviceLogCollectionRequest(): CreateDeviceLogCollectionRequestRequestBuilder {
        return new CreateDeviceLogCollectionRequestRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createRemoteHelpSession method.
    */
    public function microsoftGraphCreateRemoteHelpSession(): CreateRemoteHelpSessionRequestBuilder {
        return new CreateRemoteHelpSessionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the deleteUserFromSharedAppleDevice method.
    */
    public function microsoftGraphDeleteUserFromSharedAppleDevice(): DeleteUserFromSharedAppleDeviceRequestBuilder {
        return new DeleteUserFromSharedAppleDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the deprovision method.
    */
    public function microsoftGraphDeprovision(): DeprovisionRequestBuilder {
        return new DeprovisionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the disable method.
    */
    public function microsoftGraphDisable(): DisableRequestBuilder {
        return new DisableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the disableLostMode method.
    */
    public function microsoftGraphDisableLostMode(): DisableLostModeRequestBuilder {
        return new DisableLostModeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the enableLostMode method.
    */
    public function microsoftGraphEnableLostMode(): EnableLostModeRequestBuilder {
        return new EnableLostModeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the endRemoteHelpSession method.
    */
    public function microsoftGraphEndRemoteHelpSession(): EndRemoteHelpSessionRequestBuilder {
        return new EndRemoteHelpSessionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the enrollNowAction method.
    */
    public function microsoftGraphEnrollNowAction(): EnrollNowActionRequestBuilder {
        return new EnrollNowActionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCloudPcRemoteActionResults method.
    */
    public function microsoftGraphGetCloudPcRemoteActionResults(): GetCloudPcRemoteActionResultsRequestBuilder {
        return new GetCloudPcRemoteActionResultsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCloudPcReviewStatus method.
    */
    public function microsoftGraphGetCloudPcReviewStatus(): GetCloudPcReviewStatusRequestBuilder {
        return new GetCloudPcReviewStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getFileVaultKey method.
    */
    public function microsoftGraphGetFileVaultKey(): GetFileVaultKeyRequestBuilder {
        return new GetFileVaultKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getNonCompliantSettings method.
    */
    public function microsoftGraphGetNonCompliantSettings(): GetNonCompliantSettingsRequestBuilder {
        return new GetNonCompliantSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getOemWarranty method.
    */
    public function microsoftGraphGetOemWarranty(): GetOemWarrantyRequestBuilder {
        return new GetOemWarrantyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the initiateMobileDeviceManagementKeyRecovery method.
    */
    public function microsoftGraphInitiateMobileDeviceManagementKeyRecovery(): InitiateMobileDeviceManagementKeyRecoveryRequestBuilder {
        return new InitiateMobileDeviceManagementKeyRecoveryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the initiateOnDemandProactiveRemediation method.
    */
    public function microsoftGraphInitiateOnDemandProactiveRemediation(): InitiateOnDemandProactiveRemediationRequestBuilder {
        return new InitiateOnDemandProactiveRemediationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the locateDevice method.
    */
    public function microsoftGraphLocateDevice(): LocateDeviceRequestBuilder {
        return new LocateDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the logoutSharedAppleDeviceActiveUser method.
    */
    public function microsoftGraphLogoutSharedAppleDeviceActiveUser(): LogoutSharedAppleDeviceActiveUserRequestBuilder {
        return new LogoutSharedAppleDeviceActiveUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the overrideComplianceState method.
    */
    public function microsoftGraphOverrideComplianceState(): OverrideComplianceStateRequestBuilder {
        return new OverrideComplianceStateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the playLostModeSound method.
    */
    public function microsoftGraphPlayLostModeSound(): PlayLostModeSoundRequestBuilder {
        return new PlayLostModeSoundRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rebootNow method.
    */
    public function microsoftGraphRebootNow(): RebootNowRequestBuilder {
        return new RebootNowRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the recoverPasscode method.
    */
    public function microsoftGraphRecoverPasscode(): RecoverPasscodeRequestBuilder {
        return new RecoverPasscodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reenable method.
    */
    public function microsoftGraphReenable(): ReenableRequestBuilder {
        return new ReenableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the remoteLock method.
    */
    public function microsoftGraphRemoteLock(): RemoteLockRequestBuilder {
        return new RemoteLockRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the removeDeviceFirmwareConfigurationInterfaceManagement method.
    */
    public function microsoftGraphRemoveDeviceFirmwareConfigurationInterfaceManagement(): RemoveDeviceFirmwareConfigurationInterfaceManagementRequestBuilder {
        return new RemoveDeviceFirmwareConfigurationInterfaceManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reprovisionCloudPc method.
    */
    public function microsoftGraphReprovisionCloudPc(): ReprovisionCloudPcRequestBuilder {
        return new ReprovisionCloudPcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the requestRemoteAssistance method.
    */
    public function microsoftGraphRequestRemoteAssistance(): RequestRemoteAssistanceRequestBuilder {
        return new RequestRemoteAssistanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the requestRemoteHelpSessionAccess method.
    */
    public function microsoftGraphRequestRemoteHelpSessionAccess(): RequestRemoteHelpSessionAccessRequestBuilder {
        return new RequestRemoteHelpSessionAccessRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the resetPasscode method.
    */
    public function microsoftGraphResetPasscode(): ResetPasscodeRequestBuilder {
        return new ResetPasscodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the resizeCloudPc method.
    */
    public function microsoftGraphResizeCloudPc(): ResizeCloudPcRequestBuilder {
        return new ResizeCloudPcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the restoreCloudPc method.
    */
    public function microsoftGraphRestoreCloudPc(): RestoreCloudPcRequestBuilder {
        return new RestoreCloudPcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the retire method.
    */
    public function microsoftGraphRetire(): RetireRequestBuilder {
        return new RetireRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the revokeAppleVppLicenses method.
    */
    public function microsoftGraphRevokeAppleVppLicenses(): RevokeAppleVppLicensesRequestBuilder {
        return new RevokeAppleVppLicensesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rotateBitLockerKeys method.
    */
    public function microsoftGraphRotateBitLockerKeys(): RotateBitLockerKeysRequestBuilder {
        return new RotateBitLockerKeysRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rotateFileVaultKey method.
    */
    public function microsoftGraphRotateFileVaultKey(): RotateFileVaultKeyRequestBuilder {
        return new RotateFileVaultKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sendCustomNotificationToCompanyPortal method.
    */
    public function microsoftGraphSendCustomNotificationToCompanyPortal(): SendCustomNotificationToCompanyPortalRequestBuilder {
        return new SendCustomNotificationToCompanyPortalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setCloudPcReviewStatus method.
    */
    public function microsoftGraphSetCloudPcReviewStatus(): SetCloudPcReviewStatusRequestBuilder {
        return new SetCloudPcReviewStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setDeviceName method.
    */
    public function microsoftGraphSetDeviceName(): SetDeviceNameRequestBuilder {
        return new SetDeviceNameRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the shutDown method.
    */
    public function microsoftGraphShutDown(): ShutDownRequestBuilder {
        return new ShutDownRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the syncDevice method.
    */
    public function microsoftGraphSyncDevice(): SyncDeviceRequestBuilder {
        return new SyncDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the triggerConfigurationManagerAction method.
    */
    public function microsoftGraphTriggerConfigurationManagerAction(): TriggerConfigurationManagerActionRequestBuilder {
        return new TriggerConfigurationManagerActionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateWindowsDeviceAccount method.
    */
    public function microsoftGraphUpdateWindowsDeviceAccount(): UpdateWindowsDeviceAccountRequestBuilder {
        return new UpdateWindowsDeviceAccountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the windowsDefenderScan method.
    */
    public function microsoftGraphWindowsDefenderScan(): WindowsDefenderScanRequestBuilder {
        return new WindowsDefenderScanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the windowsDefenderUpdateSignatures method.
    */
    public function microsoftGraphWindowsDefenderUpdateSignatures(): WindowsDefenderUpdateSignaturesRequestBuilder {
        return new WindowsDefenderUpdateSignaturesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the wipe method.
    */
    public function microsoftGraphWipe(): WipeRequestBuilder {
        return new WipeRequestBuilder($this->pathParameters, $this->requestAdapter);
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
        return new AssignmentFilterEvaluationStatusDetailsItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Instantiates a new ManagedDeviceItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $managedDeviceId key: id of managedDevice
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $managedDeviceId = null) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/comanagedDevices/{managedDevice%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['managedDevice%2Did'] = $managedDeviceId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property comanagedDevices for deviceManagement
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
        return new DetectedAppItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Provides operations to manage the deviceCompliancePolicyStates property of the microsoft.graph.managedDevice entity.
     * @param string $id Unique identifier of the item
     * @return DeviceCompliancePolicyStateItemRequestBuilder
    */
    public function deviceCompliancePolicyStatesById(string $id): DeviceCompliancePolicyStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceCompliancePolicyState%2Did'] = $id;
        return new DeviceCompliancePolicyStateItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Provides operations to manage the deviceConfigurationStates property of the microsoft.graph.managedDevice entity.
     * @param string $id Unique identifier of the item
     * @return DeviceConfigurationStateItemRequestBuilder
    */
    public function deviceConfigurationStatesById(string $id): DeviceConfigurationStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceConfigurationState%2Did'] = $id;
        return new DeviceConfigurationStateItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * The list of co-managed devices report
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
        return new DeviceLogCollectionResponseItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Provides operations to manage the managedDeviceMobileAppConfigurationStates property of the microsoft.graph.managedDevice entity.
     * @param string $id Unique identifier of the item
     * @return ManagedDeviceMobileAppConfigurationStateItemRequestBuilder
    */
    public function managedDeviceMobileAppConfigurationStatesById(string $id): ManagedDeviceMobileAppConfigurationStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDeviceMobileAppConfigurationState%2Did'] = $id;
        return new ManagedDeviceMobileAppConfigurationStateItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Provides operations to call the retrieveRemoteHelpSession method.
     * @param string $sessionKey Usage: sessionKey='{sessionKey}'
     * @return RetrieveRemoteHelpSessionWithSessionKeyRequestBuilder
    */
    public function microsoftGraphRetrieveRemoteHelpSessionWithSessionKey(string $sessionKey): RetrieveRemoteHelpSessionWithSessionKeyRequestBuilder {
        return new RetrieveRemoteHelpSessionWithSessionKeyRequestBuilder($this->pathParameters, $this->requestAdapter, $sessionKey);
    }

    /**
     * Update the navigation property comanagedDevices in deviceManagement
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
        return new SecurityBaselineStateItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
    }

    /**
     * Delete navigation property comanagedDevices for deviceManagement
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
     * The list of co-managed devices report
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
     * Update the navigation property comanagedDevices in deviceManagement
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
