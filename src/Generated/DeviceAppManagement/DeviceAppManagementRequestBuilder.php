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
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the deviceAppManagement singleton.
*/
class DeviceAppManagementRequestBuilder 
{
    /**
     * Provides operations to manage the androidManagedAppProtections property of the microsoft.graph.deviceAppManagement entity.
    */
    public function androidManagedAppProtections(): AndroidManagedAppProtectionsRequestBuilder {
        return new AndroidManagedAppProtectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the defaultManagedAppProtections property of the microsoft.graph.deviceAppManagement entity.
    */
    public function defaultManagedAppProtections(): DefaultManagedAppProtectionsRequestBuilder {
        return new DefaultManagedAppProtectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceAppManagementTasks property of the microsoft.graph.deviceAppManagement entity.
    */
    public function deviceAppManagementTasks(): DeviceAppManagementTasksRequestBuilder {
        return new DeviceAppManagementTasksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the enterpriseCodeSigningCertificates property of the microsoft.graph.deviceAppManagement entity.
    */
    public function enterpriseCodeSigningCertificates(): EnterpriseCodeSigningCertificatesRequestBuilder {
        return new EnterpriseCodeSigningCertificatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the iosLobAppProvisioningConfigurations property of the microsoft.graph.deviceAppManagement entity.
    */
    public function iosLobAppProvisioningConfigurations(): IosLobAppProvisioningConfigurationsRequestBuilder {
        return new IosLobAppProvisioningConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the iosManagedAppProtections property of the microsoft.graph.deviceAppManagement entity.
    */
    public function iosManagedAppProtections(): IosManagedAppProtectionsRequestBuilder {
        return new IosManagedAppProtectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedAppPolicies property of the microsoft.graph.deviceAppManagement entity.
    */
    public function managedAppPolicies(): ManagedAppPoliciesRequestBuilder {
        return new ManagedAppPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedAppRegistrations property of the microsoft.graph.deviceAppManagement entity.
    */
    public function managedAppRegistrations(): ManagedAppRegistrationsRequestBuilder {
        return new ManagedAppRegistrationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedAppStatuses property of the microsoft.graph.deviceAppManagement entity.
    */
    public function managedAppStatuses(): ManagedAppStatusesRequestBuilder {
        return new ManagedAppStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedEBookCategories property of the microsoft.graph.deviceAppManagement entity.
    */
    public function managedEBookCategories(): ManagedEBookCategoriesRequestBuilder {
        return new ManagedEBookCategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedEBooks property of the microsoft.graph.deviceAppManagement entity.
    */
    public function managedEBooks(): ManagedEBooksRequestBuilder {
        return new ManagedEBooksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mdmWindowsInformationProtectionPolicies property of the microsoft.graph.deviceAppManagement entity.
    */
    public function mdmWindowsInformationProtectionPolicies(): MdmWindowsInformationProtectionPoliciesRequestBuilder {
        return new MdmWindowsInformationProtectionPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mobileAppCategories property of the microsoft.graph.deviceAppManagement entity.
    */
    public function mobileAppCategories(): MobileAppCategoriesRequestBuilder {
        return new MobileAppCategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mobileAppConfigurations property of the microsoft.graph.deviceAppManagement entity.
    */
    public function mobileAppConfigurations(): MobileAppConfigurationsRequestBuilder {
        return new MobileAppConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mobileApps property of the microsoft.graph.deviceAppManagement entity.
    */
    public function mobileApps(): MobileAppsRequestBuilder {
        return new MobileAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the policySets property of the microsoft.graph.deviceAppManagement entity.
    */
    public function policySets(): PolicySetsRequestBuilder {
        return new PolicySetsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the symantecCodeSigningCertificate property of the microsoft.graph.deviceAppManagement entity.
    */
    public function symantecCodeSigningCertificate(): SymantecCodeSigningCertificateRequestBuilder {
        return new SymantecCodeSigningCertificateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the syncMicrosoftStoreForBusinessApps method.
    */
    public function syncMicrosoftStoreForBusinessApps(): SyncMicrosoftStoreForBusinessAppsRequestBuilder {
        return new SyncMicrosoftStoreForBusinessAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the targetedManagedAppConfigurations property of the microsoft.graph.deviceAppManagement entity.
    */
    public function targetedManagedAppConfigurations(): TargetedManagedAppConfigurationsRequestBuilder {
        return new TargetedManagedAppConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the vppTokens property of the microsoft.graph.deviceAppManagement entity.
    */
    public function vppTokens(): VppTokensRequestBuilder {
        return new VppTokensRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the wdacSupplementalPolicies property of the microsoft.graph.deviceAppManagement entity.
    */
    public function wdacSupplementalPolicies(): WdacSupplementalPoliciesRequestBuilder {
        return new WdacSupplementalPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsInformationProtectionDeviceRegistrations property of the microsoft.graph.deviceAppManagement entity.
    */
    public function windowsInformationProtectionDeviceRegistrations(): WindowsInformationProtectionDeviceRegistrationsRequestBuilder {
        return new WindowsInformationProtectionDeviceRegistrationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsInformationProtectionPolicies property of the microsoft.graph.deviceAppManagement entity.
    */
    public function windowsInformationProtectionPolicies(): WindowsInformationProtectionPoliciesRequestBuilder {
        return new WindowsInformationProtectionPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsInformationProtectionWipeActions property of the microsoft.graph.deviceAppManagement entity.
    */
    public function windowsInformationProtectionWipeActions(): WindowsInformationProtectionWipeActionsRequestBuilder {
        return new WindowsInformationProtectionWipeActionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsManagedAppProtections property of the microsoft.graph.deviceAppManagement entity.
    */
    public function windowsManagedAppProtections(): WindowsManagedAppProtectionsRequestBuilder {
        return new WindowsManagedAppProtectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsManagementApp property of the microsoft.graph.deviceAppManagement entity.
    */
    public function windowsManagementApp(): WindowsManagementAppRequestBuilder {
        return new WindowsManagementAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the androidManagedAppProtections property of the microsoft.graph.deviceAppManagement entity.
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
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceAppManagement{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Provides operations to manage the defaultManagedAppProtections property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return DefaultManagedAppProtectionItemRequestBuilder
    */
    public function defaultManagedAppProtectionsById(string $id): DefaultManagedAppProtectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['defaultManagedAppProtection%2Did'] = $id;
        return new DefaultManagedAppProtectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the deviceAppManagementTasks property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return DeviceAppManagementTaskItemRequestBuilder
    */
    public function deviceAppManagementTasksById(string $id): DeviceAppManagementTaskItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceAppManagementTask%2Did'] = $id;
        return new DeviceAppManagementTaskItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the enterpriseCodeSigningCertificates property of the microsoft.graph.deviceAppManagement entity.
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
     * @return Promise
    */
    public function get(?DeviceAppManagementRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DeviceAppManagement::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the iosLobAppProvisioningConfigurations property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return IosLobAppProvisioningConfigurationItemRequestBuilder
    */
    public function iosLobAppProvisioningConfigurationsById(string $id): IosLobAppProvisioningConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['iosLobAppProvisioningConfiguration%2Did'] = $id;
        return new IosLobAppProvisioningConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the iosManagedAppProtections property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return IosManagedAppProtectionItemRequestBuilder
    */
    public function iosManagedAppProtectionsById(string $id): IosManagedAppProtectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['iosManagedAppProtection%2Did'] = $id;
        return new IosManagedAppProtectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managedAppPolicies property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return ManagedAppPolicyItemRequestBuilder
    */
    public function managedAppPoliciesById(string $id): ManagedAppPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAppPolicy%2Did'] = $id;
        return new ManagedAppPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managedAppRegistrations property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return ManagedAppRegistrationItemRequestBuilder
    */
    public function managedAppRegistrationsById(string $id): ManagedAppRegistrationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAppRegistration%2Did'] = $id;
        return new ManagedAppRegistrationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managedAppStatuses property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return ManagedAppStatusItemRequestBuilder
    */
    public function managedAppStatusesById(string $id): ManagedAppStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAppStatus%2Did'] = $id;
        return new ManagedAppStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managedEBookCategories property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return ManagedEBookCategoryItemRequestBuilder
    */
    public function managedEBookCategoriesById(string $id): ManagedEBookCategoryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedEBookCategory%2Did'] = $id;
        return new ManagedEBookCategoryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the managedEBooks property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return ManagedEBookItemRequestBuilder
    */
    public function managedEBooksById(string $id): ManagedEBookItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedEBook%2Did'] = $id;
        return new ManagedEBookItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the mdmWindowsInformationProtectionPolicies property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return MdmWindowsInformationProtectionPolicyItemRequestBuilder
    */
    public function mdmWindowsInformationProtectionPoliciesById(string $id): MdmWindowsInformationProtectionPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mdmWindowsInformationProtectionPolicy%2Did'] = $id;
        return new MdmWindowsInformationProtectionPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the mobileAppCategories property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return MobileAppCategoryItemRequestBuilder
    */
    public function mobileAppCategoriesById(string $id): MobileAppCategoryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileAppCategory%2Did'] = $id;
        return new MobileAppCategoryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the mobileAppConfigurations property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return ManagedDeviceMobileAppConfigurationItemRequestBuilder
    */
    public function mobileAppConfigurationsById(string $id): ManagedDeviceMobileAppConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDeviceMobileAppConfiguration%2Did'] = $id;
        return new ManagedDeviceMobileAppConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the mobileApps property of the microsoft.graph.deviceAppManagement entity.
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
     * @param DeviceAppManagement $body The request body
     * @param DeviceAppManagementRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(DeviceAppManagement $body, ?DeviceAppManagementRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DeviceAppManagement::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the policySets property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return PolicySetItemRequestBuilder
    */
    public function policySetsById(string $id): PolicySetItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['policySet%2Did'] = $id;
        return new PolicySetItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the targetedManagedAppConfigurations property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return TargetedManagedAppConfigurationItemRequestBuilder
    */
    public function targetedManagedAppConfigurationsById(string $id): TargetedManagedAppConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['targetedManagedAppConfiguration%2Did'] = $id;
        return new TargetedManagedAppConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get deviceAppManagement
     * @param DeviceAppManagementRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceAppManagementRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update deviceAppManagement
     * @param DeviceAppManagement $body The request body
     * @param DeviceAppManagementRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceAppManagement $body, ?DeviceAppManagementRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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

    /**
     * Provides operations to manage the vppTokens property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return VppTokenItemRequestBuilder
    */
    public function vppTokensById(string $id): VppTokenItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['vppToken%2Did'] = $id;
        return new VppTokenItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the wdacSupplementalPolicies property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilder
    */
    public function wdacSupplementalPoliciesById(string $id): WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsDefenderApplicationControlSupplementalPolicy%2Did'] = $id;
        return new WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the windowsInformationProtectionDeviceRegistrations property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return WindowsInformationProtectionDeviceRegistrationItemRequestBuilder
    */
    public function windowsInformationProtectionDeviceRegistrationsById(string $id): WindowsInformationProtectionDeviceRegistrationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsInformationProtectionDeviceRegistration%2Did'] = $id;
        return new WindowsInformationProtectionDeviceRegistrationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the windowsInformationProtectionPolicies property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return WindowsInformationProtectionPolicyItemRequestBuilder
    */
    public function windowsInformationProtectionPoliciesById(string $id): WindowsInformationProtectionPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsInformationProtectionPolicy%2Did'] = $id;
        return new WindowsInformationProtectionPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the windowsInformationProtectionWipeActions property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return WindowsInformationProtectionWipeActionItemRequestBuilder
    */
    public function windowsInformationProtectionWipeActionsById(string $id): WindowsInformationProtectionWipeActionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsInformationProtectionWipeAction%2Did'] = $id;
        return new WindowsInformationProtectionWipeActionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the windowsManagedAppProtections property of the microsoft.graph.deviceAppManagement entity.
     * @param string $id Unique identifier of the item
     * @return WindowsManagedAppProtectionItemRequestBuilder
    */
    public function windowsManagedAppProtectionsById(string $id): WindowsManagedAppProtectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsManagedAppProtection%2Did'] = $id;
        return new WindowsManagedAppProtectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
