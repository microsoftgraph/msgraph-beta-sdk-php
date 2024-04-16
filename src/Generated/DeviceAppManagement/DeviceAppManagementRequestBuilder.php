<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\AndroidManagedAppProtections\AndroidManagedAppProtectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\DefaultManagedAppProtections\DefaultManagedAppProtectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\DeviceAppManagementTasks\DeviceAppManagementTasksRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\EnterpriseCodeSigningCertificates\EnterpriseCodeSigningCertificatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosLobAppProvisioningConfigurations\IosLobAppProvisioningConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosManagedAppProtections\IosManagedAppProtectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\ManagedAppPolicies\ManagedAppPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\ManagedAppRegistrations\ManagedAppRegistrationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\ManagedAppStatuses\ManagedAppStatusesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\ManagedEBookCategories\ManagedEBookCategoriesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\ManagedEBooks\ManagedEBooksRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MdmWindowsInformationProtectionPolicies\MdmWindowsInformationProtectionPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileAppCatalogPackages\MobileAppCatalogPackagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileAppCategories\MobileAppCategoriesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileAppConfigurations\MobileAppConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\MobileAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\PolicySets\PolicySetsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\SymantecCodeSigningCertificate\SymantecCodeSigningCertificateRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\SyncMicrosoftStoreForBusinessApps\SyncMicrosoftStoreForBusinessAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\TargetedManagedAppConfigurations\TargetedManagedAppConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\VppTokens\VppTokensRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\WdacSupplementalPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WindowsInformationProtectionDeviceRegistrations\WindowsInformationProtectionDeviceRegistrationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WindowsInformationProtectionPolicies\WindowsInformationProtectionPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WindowsInformationProtectionWipeActions\WindowsInformationProtectionWipeActionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WindowsManagedAppProtections\WindowsManagedAppProtectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\WindowsManagementApp\WindowsManagementAppRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DeviceAppManagement;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceAppManagement singleton.
*/
class DeviceAppManagementRequestBuilder extends BaseRequestBuilder 
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
     * Provides operations to manage the mobileAppCatalogPackages property of the microsoft.graph.deviceAppManagement entity.
    */
    public function mobileAppCatalogPackages(): MobileAppCatalogPackagesRequestBuilder {
        return new MobileAppCatalogPackagesRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to manage the policySets property of the microsoft.graph.deviceAppManagement entity.
    */
    public function policySets(): PolicySetsRequestBuilder {
        return new PolicySetsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
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
     * Instantiates a new DeviceAppManagementRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceAppManagement{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get deviceAppManagement
     * @param DeviceAppManagementRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceAppManagement|null>
     * @throws Exception
    */
    public function get(?DeviceAppManagementRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceAppManagement::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update deviceAppManagement
     * @param DeviceAppManagement $body The request body
     * @param DeviceAppManagementRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceAppManagement|null>
     * @throws Exception
    */
    public function patch(DeviceAppManagement $body, ?DeviceAppManagementRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceAppManagement::class, 'createFromDiscriminatorValue'], $errorMappings);
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
     * @return DeviceAppManagementRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceAppManagementRequestBuilder {
        return new DeviceAppManagementRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
