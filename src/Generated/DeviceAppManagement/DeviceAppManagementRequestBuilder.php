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
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WindowsManagedAppProtections\Item\WindowsManagedAppProtectionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WindowsManagedAppProtections\WindowsManagedAppProtectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WindowsManagementApp\WindowsManagementAppRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DeviceAppManagement;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DeviceAppManagementRequestBuilder 
{
    /**
     * The androidManagedAppProtections property
    */
    public function androidManagedAppProtections(): AndroidManagedAppProtectionsRequestBuilder {
        return new AndroidManagedAppProtectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The defaultManagedAppProtections property
    */
    public function defaultManagedAppProtections(): DefaultManagedAppProtectionsRequestBuilder {
        return new DefaultManagedAppProtectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceAppManagementTasks property
    */
    public function deviceAppManagementTasks(): DeviceAppManagementTasksRequestBuilder {
        return new DeviceAppManagementTasksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The enterpriseCodeSigningCertificates property
    */
    public function enterpriseCodeSigningCertificates(): EnterpriseCodeSigningCertificatesRequestBuilder {
        return new EnterpriseCodeSigningCertificatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The iosLobAppProvisioningConfigurations property
    */
    public function iosLobAppProvisioningConfigurations(): IosLobAppProvisioningConfigurationsRequestBuilder {
        return new IosLobAppProvisioningConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The iosManagedAppProtections property
    */
    public function iosManagedAppProtections(): IosManagedAppProtectionsRequestBuilder {
        return new IosManagedAppProtectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The managedAppPolicies property
    */
    public function managedAppPolicies(): ManagedAppPoliciesRequestBuilder {
        return new ManagedAppPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The managedAppRegistrations property
    */
    public function managedAppRegistrations(): ManagedAppRegistrationsRequestBuilder {
        return new ManagedAppRegistrationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The managedAppStatuses property
    */
    public function managedAppStatuses(): ManagedAppStatusesRequestBuilder {
        return new ManagedAppStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The managedEBookCategories property
    */
    public function managedEBookCategories(): ManagedEBookCategoriesRequestBuilder {
        return new ManagedEBookCategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The managedEBooks property
    */
    public function managedEBooks(): ManagedEBooksRequestBuilder {
        return new ManagedEBooksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The mdmWindowsInformationProtectionPolicies property
    */
    public function mdmWindowsInformationProtectionPolicies(): MdmWindowsInformationProtectionPoliciesRequestBuilder {
        return new MdmWindowsInformationProtectionPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The mobileAppCategories property
    */
    public function mobileAppCategories(): MobileAppCategoriesRequestBuilder {
        return new MobileAppCategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The mobileAppConfigurations property
    */
    public function mobileAppConfigurations(): MobileAppConfigurationsRequestBuilder {
        return new MobileAppConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The mobileApps property
    */
    public function mobileApps(): MobileAppsRequestBuilder {
        return new MobileAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The policySets property
    */
    public function policySets(): PolicySetsRequestBuilder {
        return new PolicySetsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The sideLoadingKeys property
    */
    public function sideLoadingKeys(): SideLoadingKeysRequestBuilder {
        return new SideLoadingKeysRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The symantecCodeSigningCertificate property
    */
    public function symantecCodeSigningCertificate(): SymantecCodeSigningCertificateRequestBuilder {
        return new SymantecCodeSigningCertificateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The syncMicrosoftStoreForBusinessApps property
    */
    public function syncMicrosoftStoreForBusinessApps(): SyncMicrosoftStoreForBusinessAppsRequestBuilder {
        return new SyncMicrosoftStoreForBusinessAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The targetedManagedAppConfigurations property
    */
    public function targetedManagedAppConfigurations(): TargetedManagedAppConfigurationsRequestBuilder {
        return new TargetedManagedAppConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * The vppTokens property
    */
    public function vppTokens(): VppTokensRequestBuilder {
        return new VppTokensRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The wdacSupplementalPolicies property
    */
    public function wdacSupplementalPolicies(): WdacSupplementalPoliciesRequestBuilder {
        return new WdacSupplementalPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The windowsInformationProtectionDeviceRegistrations property
    */
    public function windowsInformationProtectionDeviceRegistrations(): WindowsInformationProtectionDeviceRegistrationsRequestBuilder {
        return new WindowsInformationProtectionDeviceRegistrationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The windowsInformationProtectionPolicies property
    */
    public function windowsInformationProtectionPolicies(): WindowsInformationProtectionPoliciesRequestBuilder {
        return new WindowsInformationProtectionPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The windowsInformationProtectionWipeActions property
    */
    public function windowsInformationProtectionWipeActions(): WindowsInformationProtectionWipeActionsRequestBuilder {
        return new WindowsInformationProtectionWipeActionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The windowsManagedAppProtections property
    */
    public function windowsManagedAppProtections(): WindowsManagedAppProtectionsRequestBuilder {
        return new WindowsManagedAppProtectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The windowsManagementApp property
    */
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
        $urlTplParams['androidManagedAppProtection%2Did'] = $id;
        return new AndroidManagedAppProtectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DeviceAppManagementRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceAppManagement{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get deviceAppManagement
     * @param DeviceAppManagementRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?DeviceAppManagementRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update deviceAppManagement
     * @param DeviceAppManagement $body 
     * @param DeviceAppManagementRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(DeviceAppManagement $body, ?DeviceAppManagementRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.defaultManagedAppProtections.item collection
     * @param string $id Unique identifier of the item
     * @return DefaultManagedAppProtectionItemRequestBuilder
    */
    public function defaultManagedAppProtectionsById(string $id): DefaultManagedAppProtectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['defaultManagedAppProtection%2Did'] = $id;
        return new DefaultManagedAppProtectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.deviceAppManagementTasks.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceAppManagementTaskItemRequestBuilder
    */
    public function deviceAppManagementTasksById(string $id): DeviceAppManagementTaskItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceAppManagementTask%2Did'] = $id;
        return new DeviceAppManagementTaskItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.enterpriseCodeSigningCertificates.item collection
     * @param string $id Unique identifier of the item
     * @return EnterpriseCodeSigningCertificateItemRequestBuilder
    */
    public function enterpriseCodeSigningCertificatesById(string $id): EnterpriseCodeSigningCertificateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['enterpriseCodeSigningCertificate%2Did'] = $id;
        return new EnterpriseCodeSigningCertificateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get deviceAppManagement
     * @param DeviceAppManagementRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?DeviceAppManagementRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(DeviceAppManagement::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
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
        $urlTplParams['iosLobAppProvisioningConfiguration%2Did'] = $id;
        return new IosLobAppProvisioningConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.iosManagedAppProtections.item collection
     * @param string $id Unique identifier of the item
     * @return IosManagedAppProtectionItemRequestBuilder
    */
    public function iosManagedAppProtectionsById(string $id): IosManagedAppProtectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['iosManagedAppProtection%2Did'] = $id;
        return new IosManagedAppProtectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.managedAppPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedAppPolicyItemRequestBuilder
    */
    public function managedAppPoliciesById(string $id): ManagedAppPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAppPolicy%2Did'] = $id;
        return new ManagedAppPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.managedAppRegistrations.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedAppRegistrationItemRequestBuilder
    */
    public function managedAppRegistrationsById(string $id): ManagedAppRegistrationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAppRegistration%2Did'] = $id;
        return new ManagedAppRegistrationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.managedAppStatuses.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedAppStatusItemRequestBuilder
    */
    public function managedAppStatusesById(string $id): ManagedAppStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAppStatus%2Did'] = $id;
        return new ManagedAppStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.managedEBookCategories.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedEBookCategoryItemRequestBuilder
    */
    public function managedEBookCategoriesById(string $id): ManagedEBookCategoryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedEBookCategory%2Did'] = $id;
        return new ManagedEBookCategoryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.managedEBooks.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedEBookItemRequestBuilder
    */
    public function managedEBooksById(string $id): ManagedEBookItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedEBook%2Did'] = $id;
        return new ManagedEBookItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.mdmWindowsInformationProtectionPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return MdmWindowsInformationProtectionPolicyItemRequestBuilder
    */
    public function mdmWindowsInformationProtectionPoliciesById(string $id): MdmWindowsInformationProtectionPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mdmWindowsInformationProtectionPolicy%2Did'] = $id;
        return new MdmWindowsInformationProtectionPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.mobileAppCategories.item collection
     * @param string $id Unique identifier of the item
     * @return MobileAppCategoryItemRequestBuilder
    */
    public function mobileAppCategoriesById(string $id): MobileAppCategoryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileAppCategory%2Did'] = $id;
        return new MobileAppCategoryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.mobileAppConfigurations.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedDeviceMobileAppConfigurationItemRequestBuilder
    */
    public function mobileAppConfigurationsById(string $id): ManagedDeviceMobileAppConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDeviceMobileAppConfiguration%2Did'] = $id;
        return new ManagedDeviceMobileAppConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.mobileApps.item collection
     * @param string $id Unique identifier of the item
     * @return MobileAppItemRequestBuilder
    */
    public function mobileAppsById(string $id): MobileAppItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileApp%2Did'] = $id;
        return new MobileAppItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update deviceAppManagement
     * @param DeviceAppManagement $body 
     * @param DeviceAppManagementRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(DeviceAppManagement $body, ?DeviceAppManagementRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.policySets.item collection
     * @param string $id Unique identifier of the item
     * @return PolicySetItemRequestBuilder
    */
    public function policySetsById(string $id): PolicySetItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['policySet%2Did'] = $id;
        return new PolicySetItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.sideLoadingKeys.item collection
     * @param string $id Unique identifier of the item
     * @return SideLoadingKeyItemRequestBuilder
    */
    public function sideLoadingKeysById(string $id): SideLoadingKeyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sideLoadingKey%2Did'] = $id;
        return new SideLoadingKeyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.targetedManagedAppConfigurations.item collection
     * @param string $id Unique identifier of the item
     * @return TargetedManagedAppConfigurationItemRequestBuilder
    */
    public function targetedManagedAppConfigurationsById(string $id): TargetedManagedAppConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['targetedManagedAppConfiguration%2Did'] = $id;
        return new TargetedManagedAppConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.vppTokens.item collection
     * @param string $id Unique identifier of the item
     * @return VppTokenItemRequestBuilder
    */
    public function vppTokensById(string $id): VppTokenItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['vppToken%2Did'] = $id;
        return new VppTokenItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.wdacSupplementalPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilder
    */
    public function wdacSupplementalPoliciesById(string $id): WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsDefenderApplicationControlSupplementalPolicy%2Did'] = $id;
        return new WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.windowsInformationProtectionDeviceRegistrations.item collection
     * @param string $id Unique identifier of the item
     * @return WindowsInformationProtectionDeviceRegistrationItemRequestBuilder
    */
    public function windowsInformationProtectionDeviceRegistrationsById(string $id): WindowsInformationProtectionDeviceRegistrationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsInformationProtectionDeviceRegistration%2Did'] = $id;
        return new WindowsInformationProtectionDeviceRegistrationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.windowsInformationProtectionPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return WindowsInformationProtectionPolicyItemRequestBuilder
    */
    public function windowsInformationProtectionPoliciesById(string $id): WindowsInformationProtectionPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsInformationProtectionPolicy%2Did'] = $id;
        return new WindowsInformationProtectionPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.windowsInformationProtectionWipeActions.item collection
     * @param string $id Unique identifier of the item
     * @return WindowsInformationProtectionWipeActionItemRequestBuilder
    */
    public function windowsInformationProtectionWipeActionsById(string $id): WindowsInformationProtectionWipeActionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsInformationProtectionWipeAction%2Did'] = $id;
        return new WindowsInformationProtectionWipeActionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceAppManagement.windowsManagedAppProtections.item collection
     * @param string $id Unique identifier of the item
     * @return WindowsManagedAppProtectionItemRequestBuilder
    */
    public function windowsManagedAppProtectionsById(string $id): WindowsManagedAppProtectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsManagedAppProtection%2Did'] = $id;
        return new WindowsManagedAppProtectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
