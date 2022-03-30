<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\AndroidManagedAppProtections\AndroidManagedAppProtectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\AndroidManagedAppProtections\Item\AndroidManagedAppProtectionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\DefaultManagedAppProtections\DefaultManagedAppProtectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\DefaultManagedAppProtections\Item\DefaultManagedAppProtectionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\DeviceAppManagementTasks\DeviceAppManagementTasksRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\DeviceAppManagementTasks\Item\DeviceAppManagementTaskItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\EnterpriseCodeSigningCertificates\EnterpriseCodeSigningCertificatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\EnterpriseCodeSigningCertificates\Item\EnterpriseCodeSigningCertificateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosLobAppProvisioningConfigurations\IosLobAppProvisioningConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosLobAppProvisioningConfigurations\Item\IosLobAppProvisioningConfigurationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosManagedAppProtections\IosManagedAppProtectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosManagedAppProtections\Item\IosManagedAppProtectionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\ManagedAppPolicies\Item\ManagedAppPolicyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\ManagedAppPolicies\ManagedAppPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\ManagedAppRegistrations\Item\ManagedAppRegistrationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\ManagedAppRegistrations\ManagedAppRegistrationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\ManagedAppStatuses\Item\ManagedAppStatusItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\ManagedAppStatuses\ManagedAppStatusesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\ManagedEBookCategories\Item\ManagedEBookCategoryItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\ManagedEBookCategories\ManagedEBookCategoriesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\ManagedEBooks\Item\ManagedEBookItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\ManagedEBooks\ManagedEBooksRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MdmWindowsInformationProtectionPolicies\Item\MdmWindowsInformationProtectionPolicyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MdmWindowsInformationProtectionPolicies\MdmWindowsInformationProtectionPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileAppCategories\Item\MobileAppCategoryItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileAppCategories\MobileAppCategoriesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileAppConfigurations\Item\ManagedDeviceMobileAppConfigurationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileAppConfigurations\MobileAppConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\MobileAppItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\MobileAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\PolicySets\Item\PolicySetItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\PolicySets\PolicySetsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\SideLoadingKeys\Item\SideLoadingKeyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\SideLoadingKeys\SideLoadingKeysRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\SymantecCodeSigningCertificate\SymantecCodeSigningCertificateRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\SyncMicrosoftStoreForBusinessApps\SyncMicrosoftStoreForBusinessAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\TargetedManagedAppConfigurations\Item\TargetedManagedAppConfigurationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\TargetedManagedAppConfigurations\TargetedManagedAppConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\VppTokens\Item\VppTokenItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\VppTokens\VppTokensRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item\WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\WdacSupplementalPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WindowsInformationProtectionDeviceRegistrations\Item\WindowsInformationProtectionDeviceRegistrationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WindowsInformationProtectionDeviceRegistrations\WindowsInformationProtectionDeviceRegistrationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WindowsInformationProtectionPolicies\Item\WindowsInformationProtectionPolicyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WindowsInformationProtectionPolicies\WindowsInformationProtectionPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WindowsInformationProtectionWipeActions\Item\WindowsInformationProtectionWipeActionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WindowsInformationProtectionWipeActions\WindowsInformationProtectionWipeActionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WindowsManagementApp\WindowsManagementAppRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\DeviceAppManagement;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DeviceAppManagementRequestBuilder 
{
    public function androidManagedAppProtections(): AndroidManagedAppProtectionsRequestBuilder {
        return new AndroidManagedAppProtectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function defaultManagedAppProtections(): DefaultManagedAppProtectionsRequestBuilder {
        return new DefaultManagedAppProtectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function deviceAppManagementTasks(): DeviceAppManagementTasksRequestBuilder {
        return new DeviceAppManagementTasksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function enterpriseCodeSigningCertificates(): EnterpriseCodeSigningCertificatesRequestBuilder {
        return new EnterpriseCodeSigningCertificatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function iosLobAppProvisioningConfigurations(): IosLobAppProvisioningConfigurationsRequestBuilder {
        return new IosLobAppProvisioningConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function iosManagedAppProtections(): IosManagedAppProtectionsRequestBuilder {
        return new IosManagedAppProtectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function managedAppPolicies(): ManagedAppPoliciesRequestBuilder {
        return new ManagedAppPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function managedAppRegistrations(): ManagedAppRegistrationsRequestBuilder {
        return new ManagedAppRegistrationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function managedAppStatuses(): ManagedAppStatusesRequestBuilder {
        return new ManagedAppStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function managedEBookCategories(): ManagedEBookCategoriesRequestBuilder {
        return new ManagedEBookCategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function managedEBooks(): ManagedEBooksRequestBuilder {
        return new ManagedEBooksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function mdmWindowsInformationProtectionPolicies(): MdmWindowsInformationProtectionPoliciesRequestBuilder {
        return new MdmWindowsInformationProtectionPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function mobileAppCategories(): MobileAppCategoriesRequestBuilder {
        return new MobileAppCategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function mobileAppConfigurations(): MobileAppConfigurationsRequestBuilder {
        return new MobileAppConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function mobileApps(): MobileAppsRequestBuilder {
        return new MobileAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    public function policySets(): PolicySetsRequestBuilder {
        return new PolicySetsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    public function sideLoadingKeys(): SideLoadingKeysRequestBuilder {
        return new SideLoadingKeysRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function symantecCodeSigningCertificate(): SymantecCodeSigningCertificateRequestBuilder {
        return new SymantecCodeSigningCertificateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function syncMicrosoftStoreForBusinessApps(): SyncMicrosoftStoreForBusinessAppsRequestBuilder {
        return new SyncMicrosoftStoreForBusinessAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function targetedManagedAppConfigurations(): TargetedManagedAppConfigurationsRequestBuilder {
        return new TargetedManagedAppConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    public function vppTokens(): VppTokensRequestBuilder {
        return new VppTokensRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function wdacSupplementalPolicies(): WdacSupplementalPoliciesRequestBuilder {
        return new WdacSupplementalPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function windowsInformationProtectionDeviceRegistrations(): WindowsInformationProtectionDeviceRegistrationsRequestBuilder {
        return new WindowsInformationProtectionDeviceRegistrationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function windowsInformationProtectionPolicies(): WindowsInformationProtectionPoliciesRequestBuilder {
        return new WindowsInformationProtectionPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function windowsInformationProtectionWipeActions(): WindowsInformationProtectionWipeActionsRequestBuilder {
        return new WindowsInformationProtectionWipeActionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function windowsManagementApp(): WindowsManagementAppRequestBuilder {
        return new WindowsManagementAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.androidManagedAppProtections.item collection
     * @param string $id Unique identifier of the item
     * @return AndroidManagedAppProtectionItemRequestBuilder
    */
    public function androidManagedAppProtectionsById(string $id): AndroidManagedAppProtectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['androidManagedAppProtection_id'] = $id;
        return new AndroidManagedAppProtectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DeviceAppManagementRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceAppManagement{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get deviceAppManagement
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
     * Update deviceAppManagement
     * @param DeviceAppManagement $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(DeviceAppManagement $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.defaultManagedAppProtections.item collection
     * @param string $id Unique identifier of the item
     * @return DefaultManagedAppProtectionItemRequestBuilder
    */
    public function defaultManagedAppProtectionsById(string $id): DefaultManagedAppProtectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['defaultManagedAppProtection_id'] = $id;
        return new DefaultManagedAppProtectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.deviceAppManagementTasks.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceAppManagementTaskItemRequestBuilder
    */
    public function deviceAppManagementTasksById(string $id): DeviceAppManagementTaskItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceAppManagementTask_id'] = $id;
        return new DeviceAppManagementTaskItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.enterpriseCodeSigningCertificates.item collection
     * @param string $id Unique identifier of the item
     * @return EnterpriseCodeSigningCertificateItemRequestBuilder
    */
    public function enterpriseCodeSigningCertificatesById(string $id): EnterpriseCodeSigningCertificateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['enterpriseCodeSigningCertificate_id'] = $id;
        return new EnterpriseCodeSigningCertificateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get deviceAppManagement
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, DeviceAppManagement::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.iosLobAppProvisioningConfigurations.item collection
     * @param string $id Unique identifier of the item
     * @return IosLobAppProvisioningConfigurationItemRequestBuilder
    */
    public function iosLobAppProvisioningConfigurationsById(string $id): IosLobAppProvisioningConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['iosLobAppProvisioningConfiguration_id'] = $id;
        return new IosLobAppProvisioningConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.iosManagedAppProtections.item collection
     * @param string $id Unique identifier of the item
     * @return IosManagedAppProtectionItemRequestBuilder
    */
    public function iosManagedAppProtectionsById(string $id): IosManagedAppProtectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['iosManagedAppProtection_id'] = $id;
        return new IosManagedAppProtectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.managedAppPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedAppPolicyItemRequestBuilder
    */
    public function managedAppPoliciesById(string $id): ManagedAppPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAppPolicy_id'] = $id;
        return new ManagedAppPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.managedAppRegistrations.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedAppRegistrationItemRequestBuilder
    */
    public function managedAppRegistrationsById(string $id): ManagedAppRegistrationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAppRegistration_id'] = $id;
        return new ManagedAppRegistrationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.managedAppStatuses.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedAppStatusItemRequestBuilder
    */
    public function managedAppStatusesById(string $id): ManagedAppStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAppStatus_id'] = $id;
        return new ManagedAppStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.managedEBookCategories.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedEBookCategoryItemRequestBuilder
    */
    public function managedEBookCategoriesById(string $id): ManagedEBookCategoryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedEBookCategory_id'] = $id;
        return new ManagedEBookCategoryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.managedEBooks.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedEBookItemRequestBuilder
    */
    public function managedEBooksById(string $id): ManagedEBookItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedEBook_id'] = $id;
        return new ManagedEBookItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.mdmWindowsInformationProtectionPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return MdmWindowsInformationProtectionPolicyItemRequestBuilder
    */
    public function mdmWindowsInformationProtectionPoliciesById(string $id): MdmWindowsInformationProtectionPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mdmWindowsInformationProtectionPolicy_id'] = $id;
        return new MdmWindowsInformationProtectionPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.mobileAppCategories.item collection
     * @param string $id Unique identifier of the item
     * @return MobileAppCategoryItemRequestBuilder
    */
    public function mobileAppCategoriesById(string $id): MobileAppCategoryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileAppCategory_id'] = $id;
        return new MobileAppCategoryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.mobileAppConfigurations.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedDeviceMobileAppConfigurationItemRequestBuilder
    */
    public function mobileAppConfigurationsById(string $id): ManagedDeviceMobileAppConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDeviceMobileAppConfiguration_id'] = $id;
        return new ManagedDeviceMobileAppConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.mobileApps.item collection
     * @param string $id Unique identifier of the item
     * @return MobileAppItemRequestBuilder
    */
    public function mobileAppsById(string $id): MobileAppItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileApp_id'] = $id;
        return new MobileAppItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update deviceAppManagement
     * @param DeviceAppManagement $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(DeviceAppManagement $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.policySets.item collection
     * @param string $id Unique identifier of the item
     * @return PolicySetItemRequestBuilder
    */
    public function policySetsById(string $id): PolicySetItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['policySet_id'] = $id;
        return new PolicySetItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.sideLoadingKeys.item collection
     * @param string $id Unique identifier of the item
     * @return SideLoadingKeyItemRequestBuilder
    */
    public function sideLoadingKeysById(string $id): SideLoadingKeyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sideLoadingKey_id'] = $id;
        return new SideLoadingKeyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.targetedManagedAppConfigurations.item collection
     * @param string $id Unique identifier of the item
     * @return TargetedManagedAppConfigurationItemRequestBuilder
    */
    public function targetedManagedAppConfigurationsById(string $id): TargetedManagedAppConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['targetedManagedAppConfiguration_id'] = $id;
        return new TargetedManagedAppConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.vppTokens.item collection
     * @param string $id Unique identifier of the item
     * @return VppTokenItemRequestBuilder
    */
    public function vppTokensById(string $id): VppTokenItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['vppToken_id'] = $id;
        return new VppTokenItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.wdacSupplementalPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilder
    */
    public function wdacSupplementalPoliciesById(string $id): WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsDefenderApplicationControlSupplementalPolicy_id'] = $id;
        return new WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.windowsInformationProtectionDeviceRegistrations.item collection
     * @param string $id Unique identifier of the item
     * @return WindowsInformationProtectionDeviceRegistrationItemRequestBuilder
    */
    public function windowsInformationProtectionDeviceRegistrationsById(string $id): WindowsInformationProtectionDeviceRegistrationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsInformationProtectionDeviceRegistration_id'] = $id;
        return new WindowsInformationProtectionDeviceRegistrationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.windowsInformationProtectionPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return WindowsInformationProtectionPolicyItemRequestBuilder
    */
    public function windowsInformationProtectionPoliciesById(string $id): WindowsInformationProtectionPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsInformationProtectionPolicy_id'] = $id;
        return new WindowsInformationProtectionPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.windowsInformationProtectionWipeActions.item collection
     * @param string $id Unique identifier of the item
     * @return WindowsInformationProtectionWipeActionItemRequestBuilder
    */
    public function windowsInformationProtectionWipeActionsById(string $id): WindowsInformationProtectionWipeActionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsInformationProtectionWipeAction_id'] = $id;
        return new WindowsInformationProtectionWipeActionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
