<?php

namespace Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\ActivateDeviceEsim\ActivateDeviceEsimRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\AssignmentFilterEvaluationStatusDetails\AssignmentFilterEvaluationStatusDetailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\AssignmentFilterEvaluationStatusDetails\Item\AssignmentFilterEvaluationStatusDetailsItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\BypassActivationLock\BypassActivationLockRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\CleanWindowsDevice\CleanWindowsDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\CreateDeviceLogCollectionRequest\CreateDeviceLogCollectionRequestRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\CreateRemoteHelpSession\CreateRemoteHelpSessionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\DeleteUserFromSharedAppleDevice\DeleteUserFromSharedAppleDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\Deprovision\DeprovisionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\DetectedApps\DetectedAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\DetectedApps\Item\DetectedAppItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\DeviceCategory\DeviceCategoryRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\DeviceCompliancePolicyStates\DeviceCompliancePolicyStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\DeviceCompliancePolicyStates\Item\DeviceCompliancePolicyStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\DeviceConfigurationStates\DeviceConfigurationStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\DeviceConfigurationStates\Item\DeviceConfigurationStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\DeviceHealthScriptStates\DeviceHealthScriptStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\Disable\DisableRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\DisableLostMode\DisableLostModeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\EnableLostMode\EnableLostModeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\EndRemoteHelpSession\EndRemoteHelpSessionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\EnrollNowAction\EnrollNowActionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\GetCloudPcRemoteActionResults\GetCloudPcRemoteActionResultsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\GetCloudPcReviewStatus\GetCloudPcReviewStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\GetFileVaultKey\GetFileVaultKeyRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\GetNonCompliantSettings\GetNonCompliantSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\GetOemWarranty\GetOemWarrantyRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\InitiateMobileDeviceManagementKeyRecovery\InitiateMobileDeviceManagementKeyRecoveryRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\InitiateOnDemandProactiveRemediation\InitiateOnDemandProactiveRemediationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\LocateDevice\LocateDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\LogCollectionRequests\Item\DeviceLogCollectionResponseItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\LogCollectionRequests\LogCollectionRequestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\LogoutSharedAppleDeviceActiveUser\LogoutSharedAppleDeviceActiveUserRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\ManagedDeviceMobileAppConfigurationStates\Item\ManagedDeviceMobileAppConfigurationStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\ManagedDeviceMobileAppConfigurationStates\ManagedDeviceMobileAppConfigurationStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\OverrideComplianceState\OverrideComplianceStateRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\PlayLostModeSound\PlayLostModeSoundRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\RebootNow\RebootNowRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\RecoverPasscode\RecoverPasscodeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\Reenable\ReenableRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\RemoteLock\RemoteLockRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\RemoveDeviceFirmwareConfigurationInterfaceManagement\RemoveDeviceFirmwareConfigurationInterfaceManagementRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\ReprovisionCloudPc\ReprovisionCloudPcRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\RequestRemoteAssistance\RequestRemoteAssistanceRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\RequestRemoteHelpSessionAccess\RequestRemoteHelpSessionAccessRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\ResetPasscode\ResetPasscodeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\ResizeCloudPc\ResizeCloudPcRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\RestoreCloudPc\RestoreCloudPcRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\Retire\RetireRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\RetrieveRemoteHelpSessionWithSessionKey\RetrieveRemoteHelpSessionWithSessionKeyRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\RevokeAppleVppLicenses\RevokeAppleVppLicensesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\RotateBitLockerKeys\RotateBitLockerKeysRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\RotateFileVaultKey\RotateFileVaultKeyRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\RotateLocalAdminPassword\RotateLocalAdminPasswordRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\SecurityBaselineStates\Item\SecurityBaselineStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\SecurityBaselineStates\SecurityBaselineStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\SendCustomNotificationToCompanyPortal\SendCustomNotificationToCompanyPortalRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\SetCloudPcReviewStatus\SetCloudPcReviewStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\SetDeviceName\SetDeviceNameRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\ShutDown\ShutDownRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\SyncDevice\SyncDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\TriggerConfigurationManagerAction\TriggerConfigurationManagerActionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\UpdateWindowsDeviceAccount\UpdateWindowsDeviceAccountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\Users\UsersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\WindowsDefenderScan\WindowsDefenderScanRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\WindowsDefenderUpdateSignatures\WindowsDefenderUpdateSignaturesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\WindowsProtectionState\WindowsProtectionStateRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\Wipe\WipeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ManagedDevice;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to manage the managedDevices property of the microsoft.graph.user entity.
*/
class ManagedDeviceItemRequestBuilder 
{
    /**
     * Provides operations to call the activateDeviceEsim method.
    */
    public function activateDeviceEsim(): ActivateDeviceEsimRequestBuilder {
        return new ActivateDeviceEsimRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignmentFilterEvaluationStatusDetails property of the microsoft.graph.managedDevice entity.
    */
    public function assignmentFilterEvaluationStatusDetails(): AssignmentFilterEvaluationStatusDetailsRequestBuilder {
        return new AssignmentFilterEvaluationStatusDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bypassActivationLock method.
    */
    public function bypassActivationLock(): BypassActivationLockRequestBuilder {
        return new BypassActivationLockRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cleanWindowsDevice method.
    */
    public function cleanWindowsDevice(): CleanWindowsDeviceRequestBuilder {
        return new CleanWindowsDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createDeviceLogCollectionRequest method.
    */
    public function createDeviceLogCollectionRequest(): CreateDeviceLogCollectionRequestRequestBuilder {
        return new CreateDeviceLogCollectionRequestRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createRemoteHelpSession method.
    */
    public function createRemoteHelpSession(): CreateRemoteHelpSessionRequestBuilder {
        return new CreateRemoteHelpSessionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the deleteUserFromSharedAppleDevice method.
    */
    public function deleteUserFromSharedAppleDevice(): DeleteUserFromSharedAppleDeviceRequestBuilder {
        return new DeleteUserFromSharedAppleDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the deprovision method.
    */
    public function deprovision(): DeprovisionRequestBuilder {
        return new DeprovisionRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to call the disable method.
    */
    public function disable(): DisableRequestBuilder {
        return new DisableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the disableLostMode method.
    */
    public function disableLostMode(): DisableLostModeRequestBuilder {
        return new DisableLostModeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the enableLostMode method.
    */
    public function enableLostMode(): EnableLostModeRequestBuilder {
        return new EnableLostModeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the endRemoteHelpSession method.
    */
    public function endRemoteHelpSession(): EndRemoteHelpSessionRequestBuilder {
        return new EndRemoteHelpSessionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the enrollNowAction method.
    */
    public function enrollNowAction(): EnrollNowActionRequestBuilder {
        return new EnrollNowActionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCloudPcRemoteActionResults method.
    */
    public function getCloudPcRemoteActionResults(): GetCloudPcRemoteActionResultsRequestBuilder {
        return new GetCloudPcRemoteActionResultsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCloudPcReviewStatus method.
    */
    public function getCloudPcReviewStatus(): GetCloudPcReviewStatusRequestBuilder {
        return new GetCloudPcReviewStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getFileVaultKey method.
    */
    public function getFileVaultKey(): GetFileVaultKeyRequestBuilder {
        return new GetFileVaultKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getNonCompliantSettings method.
    */
    public function getNonCompliantSettings(): GetNonCompliantSettingsRequestBuilder {
        return new GetNonCompliantSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getOemWarranty method.
    */
    public function getOemWarranty(): GetOemWarrantyRequestBuilder {
        return new GetOemWarrantyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the initiateMobileDeviceManagementKeyRecovery method.
    */
    public function initiateMobileDeviceManagementKeyRecovery(): InitiateMobileDeviceManagementKeyRecoveryRequestBuilder {
        return new InitiateMobileDeviceManagementKeyRecoveryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the initiateOnDemandProactiveRemediation method.
    */
    public function initiateOnDemandProactiveRemediation(): InitiateOnDemandProactiveRemediationRequestBuilder {
        return new InitiateOnDemandProactiveRemediationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the locateDevice method.
    */
    public function locateDevice(): LocateDeviceRequestBuilder {
        return new LocateDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the logCollectionRequests property of the microsoft.graph.managedDevice entity.
    */
    public function logCollectionRequests(): LogCollectionRequestsRequestBuilder {
        return new LogCollectionRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the logoutSharedAppleDeviceActiveUser method.
    */
    public function logoutSharedAppleDeviceActiveUser(): LogoutSharedAppleDeviceActiveUserRequestBuilder {
        return new LogoutSharedAppleDeviceActiveUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedDeviceMobileAppConfigurationStates property of the microsoft.graph.managedDevice entity.
    */
    public function managedDeviceMobileAppConfigurationStates(): ManagedDeviceMobileAppConfigurationStatesRequestBuilder {
        return new ManagedDeviceMobileAppConfigurationStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the overrideComplianceState method.
    */
    public function overrideComplianceState(): OverrideComplianceStateRequestBuilder {
        return new OverrideComplianceStateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to call the playLostModeSound method.
    */
    public function playLostModeSound(): PlayLostModeSoundRequestBuilder {
        return new PlayLostModeSoundRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rebootNow method.
    */
    public function rebootNow(): RebootNowRequestBuilder {
        return new RebootNowRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the recoverPasscode method.
    */
    public function recoverPasscode(): RecoverPasscodeRequestBuilder {
        return new RecoverPasscodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reenable method.
    */
    public function reenable(): ReenableRequestBuilder {
        return new ReenableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the remoteLock method.
    */
    public function remoteLock(): RemoteLockRequestBuilder {
        return new RemoteLockRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the removeDeviceFirmwareConfigurationInterfaceManagement method.
    */
    public function removeDeviceFirmwareConfigurationInterfaceManagement(): RemoveDeviceFirmwareConfigurationInterfaceManagementRequestBuilder {
        return new RemoveDeviceFirmwareConfigurationInterfaceManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reprovisionCloudPc method.
    */
    public function reprovisionCloudPc(): ReprovisionCloudPcRequestBuilder {
        return new ReprovisionCloudPcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to call the requestRemoteAssistance method.
    */
    public function requestRemoteAssistance(): RequestRemoteAssistanceRequestBuilder {
        return new RequestRemoteAssistanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the requestRemoteHelpSessionAccess method.
    */
    public function requestRemoteHelpSessionAccess(): RequestRemoteHelpSessionAccessRequestBuilder {
        return new RequestRemoteHelpSessionAccessRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the resetPasscode method.
    */
    public function resetPasscode(): ResetPasscodeRequestBuilder {
        return new ResetPasscodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the resizeCloudPc method.
    */
    public function resizeCloudPc(): ResizeCloudPcRequestBuilder {
        return new ResizeCloudPcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the restoreCloudPc method.
    */
    public function restoreCloudPc(): RestoreCloudPcRequestBuilder {
        return new RestoreCloudPcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the retire method.
    */
    public function retire(): RetireRequestBuilder {
        return new RetireRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the revokeAppleVppLicenses method.
    */
    public function revokeAppleVppLicenses(): RevokeAppleVppLicensesRequestBuilder {
        return new RevokeAppleVppLicensesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rotateBitLockerKeys method.
    */
    public function rotateBitLockerKeys(): RotateBitLockerKeysRequestBuilder {
        return new RotateBitLockerKeysRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rotateFileVaultKey method.
    */
    public function rotateFileVaultKey(): RotateFileVaultKeyRequestBuilder {
        return new RotateFileVaultKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rotateLocalAdminPassword method.
    */
    public function rotateLocalAdminPassword(): RotateLocalAdminPasswordRequestBuilder {
        return new RotateLocalAdminPasswordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the securityBaselineStates property of the microsoft.graph.managedDevice entity.
    */
    public function securityBaselineStates(): SecurityBaselineStatesRequestBuilder {
        return new SecurityBaselineStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sendCustomNotificationToCompanyPortal method.
    */
    public function sendCustomNotificationToCompanyPortal(): SendCustomNotificationToCompanyPortalRequestBuilder {
        return new SendCustomNotificationToCompanyPortalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setCloudPcReviewStatus method.
    */
    public function setCloudPcReviewStatus(): SetCloudPcReviewStatusRequestBuilder {
        return new SetCloudPcReviewStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setDeviceName method.
    */
    public function setDeviceName(): SetDeviceNameRequestBuilder {
        return new SetDeviceNameRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the shutDown method.
    */
    public function shutDown(): ShutDownRequestBuilder {
        return new ShutDownRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the syncDevice method.
    */
    public function syncDevice(): SyncDeviceRequestBuilder {
        return new SyncDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the triggerConfigurationManagerAction method.
    */
    public function triggerConfigurationManagerAction(): TriggerConfigurationManagerActionRequestBuilder {
        return new TriggerConfigurationManagerActionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateWindowsDeviceAccount method.
    */
    public function updateWindowsDeviceAccount(): UpdateWindowsDeviceAccountRequestBuilder {
        return new UpdateWindowsDeviceAccountRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to call the windowsDefenderScan method.
    */
    public function windowsDefenderScan(): WindowsDefenderScanRequestBuilder {
        return new WindowsDefenderScanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the windowsDefenderUpdateSignatures method.
    */
    public function windowsDefenderUpdateSignatures(): WindowsDefenderUpdateSignaturesRequestBuilder {
        return new WindowsDefenderUpdateSignaturesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsProtectionState property of the microsoft.graph.managedDevice entity.
    */
    public function windowsProtectionState(): WindowsProtectionStateRequestBuilder {
        return new WindowsProtectionStateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the wipe method.
    */
    public function wipe(): WipeRequestBuilder {
        return new WipeRequestBuilder($this->pathParameters, $this->requestAdapter);
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
        $this->urlTemplate = '{+baseurl}/me/managedDevices/{managedDevice%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property managedDevices for me
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
            return $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
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
     * The managed devices associated with the user.
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
     * Update the navigation property managedDevices in me
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
     * Provides operations to call the retrieveRemoteHelpSession method.
     * @param string $sessionKey Usage: sessionKey='{sessionKey}'
     * @return RetrieveRemoteHelpSessionWithSessionKeyRequestBuilder
    */
    public function retrieveRemoteHelpSessionWithSessionKey(string $sessionKey): RetrieveRemoteHelpSessionWithSessionKeyRequestBuilder {
        return new RetrieveRemoteHelpSessionWithSessionKeyRequestBuilder($this->pathParameters, $this->requestAdapter, $sessionKey);
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
     * Delete navigation property managedDevices for me
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
     * The managed devices associated with the user.
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
     * Update the navigation property managedDevices in me
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
