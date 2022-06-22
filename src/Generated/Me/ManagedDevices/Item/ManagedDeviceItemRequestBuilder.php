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
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\DeleteUserFromSharedAppleDevice\DeleteUserFromSharedAppleDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\Deprovision\DeprovisionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\DetectedApps\DetectedAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\DetectedApps\Item\DetectedAppItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\DeviceCategory\DeviceCategoryRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\DeviceCompliancePolicyStates\DeviceCompliancePolicyStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\DeviceCompliancePolicyStates\Item\DeviceCompliancePolicyStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\DeviceConfigurationStates\DeviceConfigurationStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\DeviceConfigurationStates\Item\DeviceConfigurationStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\Disable\DisableRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\DisableLostMode\DisableLostModeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\EnableLostMode\EnableLostModeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\GetCloudPcRemoteActionResults\GetCloudPcRemoteActionResultsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\GetCloudPcReviewStatus\GetCloudPcReviewStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\GetFileVaultKey\GetFileVaultKeyRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\GetNonCompliantSettings\GetNonCompliantSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\GetOemWarranty\GetOemWarrantyRequestBuilder;
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
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\ResetPasscode\ResetPasscodeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\ResizeCloudPc\ResizeCloudPcRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\RestoreCloudPc\RestoreCloudPcRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\Retire\RetireRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\RevokeAppleVppLicenses\RevokeAppleVppLicensesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\RotateBitLockerKeys\RotateBitLockerKeysRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\RotateFileVaultKey\RotateFileVaultKeyRequestBuilder;
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
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class ManagedDeviceItemRequestBuilder 
{
    /**
     * The activateDeviceEsim property
    */
    public function activateDeviceEsim(): ActivateDeviceEsimRequestBuilder {
        return new ActivateDeviceEsimRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The assignmentFilterEvaluationStatusDetails property
    */
    public function assignmentFilterEvaluationStatusDetails(): AssignmentFilterEvaluationStatusDetailsRequestBuilder {
        return new AssignmentFilterEvaluationStatusDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bypassActivationLock property
    */
    public function bypassActivationLock(): BypassActivationLockRequestBuilder {
        return new BypassActivationLockRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The cleanWindowsDevice property
    */
    public function cleanWindowsDevice(): CleanWindowsDeviceRequestBuilder {
        return new CleanWindowsDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The createDeviceLogCollectionRequest property
    */
    public function createDeviceLogCollectionRequest(): CreateDeviceLogCollectionRequestRequestBuilder {
        return new CreateDeviceLogCollectionRequestRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deleteUserFromSharedAppleDevice property
    */
    public function deleteUserFromSharedAppleDevice(): DeleteUserFromSharedAppleDeviceRequestBuilder {
        return new DeleteUserFromSharedAppleDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deprovision property
    */
    public function deprovision(): DeprovisionRequestBuilder {
        return new DeprovisionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The detectedApps property
    */
    public function detectedApps(): DetectedAppsRequestBuilder {
        return new DetectedAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceCategory property
    */
    public function deviceCategory(): DeviceCategoryRequestBuilder {
        return new DeviceCategoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceCompliancePolicyStates property
    */
    public function deviceCompliancePolicyStates(): DeviceCompliancePolicyStatesRequestBuilder {
        return new DeviceCompliancePolicyStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceConfigurationStates property
    */
    public function deviceConfigurationStates(): DeviceConfigurationStatesRequestBuilder {
        return new DeviceConfigurationStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The disable property
    */
    public function disable(): DisableRequestBuilder {
        return new DisableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The disableLostMode property
    */
    public function disableLostMode(): DisableLostModeRequestBuilder {
        return new DisableLostModeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The enableLostMode property
    */
    public function enableLostMode(): EnableLostModeRequestBuilder {
        return new EnableLostModeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The locateDevice property
    */
    public function locateDevice(): LocateDeviceRequestBuilder {
        return new LocateDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The logCollectionRequests property
    */
    public function logCollectionRequests(): LogCollectionRequestsRequestBuilder {
        return new LogCollectionRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The logoutSharedAppleDeviceActiveUser property
    */
    public function logoutSharedAppleDeviceActiveUser(): LogoutSharedAppleDeviceActiveUserRequestBuilder {
        return new LogoutSharedAppleDeviceActiveUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The managedDeviceMobileAppConfigurationStates property
    */
    public function managedDeviceMobileAppConfigurationStates(): ManagedDeviceMobileAppConfigurationStatesRequestBuilder {
        return new ManagedDeviceMobileAppConfigurationStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The overrideComplianceState property
    */
    public function overrideComplianceState(): OverrideComplianceStateRequestBuilder {
        return new OverrideComplianceStateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The playLostModeSound property
    */
    public function playLostModeSound(): PlayLostModeSoundRequestBuilder {
        return new PlayLostModeSoundRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The rebootNow property
    */
    public function rebootNow(): RebootNowRequestBuilder {
        return new RebootNowRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The recoverPasscode property
    */
    public function recoverPasscode(): RecoverPasscodeRequestBuilder {
        return new RecoverPasscodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The reenable property
    */
    public function reenable(): ReenableRequestBuilder {
        return new ReenableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The remoteLock property
    */
    public function remoteLock(): RemoteLockRequestBuilder {
        return new RemoteLockRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The removeDeviceFirmwareConfigurationInterfaceManagement property
    */
    public function removeDeviceFirmwareConfigurationInterfaceManagement(): RemoveDeviceFirmwareConfigurationInterfaceManagementRequestBuilder {
        return new RemoveDeviceFirmwareConfigurationInterfaceManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The reprovisionCloudPc property
    */
    public function reprovisionCloudPc(): ReprovisionCloudPcRequestBuilder {
        return new ReprovisionCloudPcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The requestRemoteAssistance property
    */
    public function requestRemoteAssistance(): RequestRemoteAssistanceRequestBuilder {
        return new RequestRemoteAssistanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The resetPasscode property
    */
    public function resetPasscode(): ResetPasscodeRequestBuilder {
        return new ResetPasscodeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The resizeCloudPc property
    */
    public function resizeCloudPc(): ResizeCloudPcRequestBuilder {
        return new ResizeCloudPcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The restoreCloudPc property
    */
    public function restoreCloudPc(): RestoreCloudPcRequestBuilder {
        return new RestoreCloudPcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The retire property
    */
    public function retire(): RetireRequestBuilder {
        return new RetireRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The revokeAppleVppLicenses property
    */
    public function revokeAppleVppLicenses(): RevokeAppleVppLicensesRequestBuilder {
        return new RevokeAppleVppLicensesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The rotateBitLockerKeys property
    */
    public function rotateBitLockerKeys(): RotateBitLockerKeysRequestBuilder {
        return new RotateBitLockerKeysRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The rotateFileVaultKey property
    */
    public function rotateFileVaultKey(): RotateFileVaultKeyRequestBuilder {
        return new RotateFileVaultKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The securityBaselineStates property
    */
    public function securityBaselineStates(): SecurityBaselineStatesRequestBuilder {
        return new SecurityBaselineStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The sendCustomNotificationToCompanyPortal property
    */
    public function sendCustomNotificationToCompanyPortal(): SendCustomNotificationToCompanyPortalRequestBuilder {
        return new SendCustomNotificationToCompanyPortalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The setCloudPcReviewStatus property
    */
    public function setCloudPcReviewStatus(): SetCloudPcReviewStatusRequestBuilder {
        return new SetCloudPcReviewStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The setDeviceName property
    */
    public function setDeviceName(): SetDeviceNameRequestBuilder {
        return new SetDeviceNameRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The shutDown property
    */
    public function shutDown(): ShutDownRequestBuilder {
        return new ShutDownRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The syncDevice property
    */
    public function syncDevice(): SyncDeviceRequestBuilder {
        return new SyncDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The triggerConfigurationManagerAction property
    */
    public function triggerConfigurationManagerAction(): TriggerConfigurationManagerActionRequestBuilder {
        return new TriggerConfigurationManagerActionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The updateWindowsDeviceAccount property
    */
    public function updateWindowsDeviceAccount(): UpdateWindowsDeviceAccountRequestBuilder {
        return new UpdateWindowsDeviceAccountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * The users property
    */
    public function users(): UsersRequestBuilder {
        return new UsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The windowsDefenderScan property
    */
    public function windowsDefenderScan(): WindowsDefenderScanRequestBuilder {
        return new WindowsDefenderScanRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The windowsDefenderUpdateSignatures property
    */
    public function windowsDefenderUpdateSignatures(): WindowsDefenderUpdateSignaturesRequestBuilder {
        return new WindowsDefenderUpdateSignaturesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The windowsProtectionState property
    */
    public function windowsProtectionState(): WindowsProtectionStateRequestBuilder {
        return new WindowsProtectionStateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The wipe property
    */
    public function wipe(): WipeRequestBuilder {
        return new WipeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.managedDevices.item.assignmentFilterEvaluationStatusDetails.item collection
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
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me/managedDevices/{managedDevice%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property managedDevices for me
     * @param ManagedDeviceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?ManagedDeviceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The managed devices associated with the user.
     * @param ManagedDeviceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?ManagedDeviceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property managedDevices in me
     * @param ManagedDevice $body 
     * @param ManagedDeviceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(ManagedDevice $body, ?ManagedDeviceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * Delete navigation property managedDevices for me
     * @param ManagedDeviceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?ManagedDeviceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.managedDevices.item.detectedApps.item collection
     * @param string $id Unique identifier of the item
     * @return DetectedAppItemRequestBuilder
    */
    public function detectedAppsById(string $id): DetectedAppItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['detectedApp%2Did'] = $id;
        return new DetectedAppItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.managedDevices.item.deviceCompliancePolicyStates.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceCompliancePolicyStateItemRequestBuilder
    */
    public function deviceCompliancePolicyStatesById(string $id): DeviceCompliancePolicyStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceCompliancePolicyState%2Did'] = $id;
        return new DeviceCompliancePolicyStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.managedDevices.item.deviceConfigurationStates.item collection
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
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?ManagedDeviceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(ManagedDevice::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
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
     * Provides operations to call the getCloudPcReviewStatus method.
     * @return GetCloudPcReviewStatusRequestBuilder
    */
    public function getCloudPcReviewStatus(): GetCloudPcReviewStatusRequestBuilder {
        return new GetCloudPcReviewStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.managedDevices.item.logCollectionRequests.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceLogCollectionResponseItemRequestBuilder
    */
    public function logCollectionRequestsById(string $id): DeviceLogCollectionResponseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceLogCollectionResponse%2Did'] = $id;
        return new DeviceLogCollectionResponseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.managedDevices.item.managedDeviceMobileAppConfigurationStates.item collection
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
     * @param ManagedDevice $body 
     * @param ManagedDeviceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(ManagedDevice $body, ?ManagedDeviceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.managedDevices.item.securityBaselineStates.item collection
     * @param string $id Unique identifier of the item
     * @return SecurityBaselineStateItemRequestBuilder
    */
    public function securityBaselineStatesById(string $id): SecurityBaselineStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['securityBaselineState%2Did'] = $id;
        return new SecurityBaselineStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
