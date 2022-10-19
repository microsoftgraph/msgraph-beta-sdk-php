<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedTenant extends Entity implements Parsable 
{
    /**
     * @var array<AggregatedPolicyCompliance>|null $aggregatedPolicyCompliances Aggregate view of device compliance policies across managed tenants.
    */
    private ?array $aggregatedPolicyCompliances = null;
    
    /**
     * @var array<AuditEvent>|null $auditEvents The collection of audit events across managed tenants.
    */
    private ?array $auditEvents = null;
    
    /**
     * @var array<CloudPcConnection>|null $cloudPcConnections The collection of cloud PC connections across managed tenants.
    */
    private ?array $cloudPcConnections = null;
    
    /**
     * @var array<CloudPcDevice>|null $cloudPcDevices The collection of cloud PC devices across managed tenants.
    */
    private ?array $cloudPcDevices = null;
    
    /**
     * @var array<CloudPcOverview>|null $cloudPcsOverview Overview of cloud PC information across managed tenants.
    */
    private ?array $cloudPcsOverview = null;
    
    /**
     * @var array<ConditionalAccessPolicyCoverage>|null $conditionalAccessPolicyCoverages Aggregate view of conditional access policy coverage across managed tenants.
    */
    private ?array $conditionalAccessPolicyCoverages = null;
    
    /**
     * @var array<CredentialUserRegistrationsSummary>|null $credentialUserRegistrationsSummaries Summary information for user registration for multi-factor authentication and self service password reset across managed tenants.
    */
    private ?array $credentialUserRegistrationsSummaries = null;
    
    /**
     * @var array<DeviceCompliancePolicySettingStateSummary>|null $deviceCompliancePolicySettingStateSummaries Summary information for device compliance policy setting states across managed tenants.
    */
    private ?array $deviceCompliancePolicySettingStateSummaries = null;
    
    /**
     * @var array<ManagedDeviceCompliance>|null $managedDeviceCompliances The collection of compliance for managed devices across managed tenants.
    */
    private ?array $managedDeviceCompliances = null;
    
    /**
     * @var array<ManagedDeviceComplianceTrend>|null $managedDeviceComplianceTrends Trend insights for device compliance across managed tenants.
    */
    private ?array $managedDeviceComplianceTrends = null;
    
    /**
     * @var array<ManagementAction>|null $managementActions The collection of baseline management actions across managed tenants.
    */
    private ?array $managementActions = null;
    
    /**
     * @var array<ManagementActionTenantDeploymentStatus>|null $managementActionTenantDeploymentStatuses The tenant level status of management actions across managed tenants.
    */
    private ?array $managementActionTenantDeploymentStatuses = null;
    
    /**
     * @var array<ManagementIntent>|null $managementIntents The collection of baseline management intents across managed tenants.
    */
    private ?array $managementIntents = null;
    
    /**
     * @var array<ManagementTemplateCollection>|null $managementTemplateCollections The managementTemplateCollections property
    */
    private ?array $managementTemplateCollections = null;
    
    /**
     * @var array<ManagementTemplate>|null $managementTemplates The collection of baseline management templates across managed tenants.
    */
    private ?array $managementTemplates = null;
    
    /**
     * @var array<ManagementTemplateStep>|null $managementTemplateSteps The managementTemplateSteps property
    */
    private ?array $managementTemplateSteps = null;
    
    /**
     * @var array<ManagementTemplateStepVersion>|null $managementTemplateStepVersions The managementTemplateStepVersions property
    */
    private ?array $managementTemplateStepVersions = null;
    
    /**
     * @var array<MyRole>|null $myRoles The collection of role assignments to a signed-in user for a managed tenant.
    */
    private ?array $myRoles = null;
    
    /**
     * @var array<TenantGroup>|null $tenantGroups The collection of a logical grouping of managed tenants used by the multi-tenant management platform.
    */
    private ?array $tenantGroups = null;
    
    /**
     * @var array<Tenant>|null $tenants The collection of tenants associated with the managing entity.
    */
    private ?array $tenants = null;
    
    /**
     * @var array<TenantCustomizedInformation>|null $tenantsCustomizedInformation The collection of tenant level customized information across managed tenants.
    */
    private ?array $tenantsCustomizedInformation = null;
    
    /**
     * @var array<TenantDetailedInformation>|null $tenantsDetailedInformation The collection tenant level detailed information across managed tenants.
    */
    private ?array $tenantsDetailedInformation = null;
    
    /**
     * @var array<TenantTag>|null $tenantTags The collection of tenant tags across managed tenants.
    */
    private ?array $tenantTags = null;
    
    /**
     * @var array<WindowsDeviceMalwareState>|null $windowsDeviceMalwareStates The state of malware for Windows devices, registered with Microsoft Endpoint Manager, across managed tenants.
    */
    private ?array $windowsDeviceMalwareStates = null;
    
    /**
     * @var array<WindowsProtectionState>|null $windowsProtectionStates The protection state for Windows devices, registered with Microsoft Endpoint Manager, across managed tenants.
    */
    private ?array $windowsProtectionStates = null;
    
    /**
     * Instantiates a new managedTenant and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedTenants.managedTenant');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedTenant
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedTenant {
        return new ManagedTenant();
    }

    /**
     * Gets the aggregatedPolicyCompliances property value. Aggregate view of device compliance policies across managed tenants.
     * @return array<AggregatedPolicyCompliance>|null
    */
    public function getAggregatedPolicyCompliances(): ?array {
        return $this->aggregatedPolicyCompliances;
    }

    /**
     * Gets the auditEvents property value. The collection of audit events across managed tenants.
     * @return array<AuditEvent>|null
    */
    public function getAuditEvents(): ?array {
        return $this->auditEvents;
    }

    /**
     * Gets the cloudPcConnections property value. The collection of cloud PC connections across managed tenants.
     * @return array<CloudPcConnection>|null
    */
    public function getCloudPcConnections(): ?array {
        return $this->cloudPcConnections;
    }

    /**
     * Gets the cloudPcDevices property value. The collection of cloud PC devices across managed tenants.
     * @return array<CloudPcDevice>|null
    */
    public function getCloudPcDevices(): ?array {
        return $this->cloudPcDevices;
    }

    /**
     * Gets the cloudPcsOverview property value. Overview of cloud PC information across managed tenants.
     * @return array<CloudPcOverview>|null
    */
    public function getCloudPcsOverview(): ?array {
        return $this->cloudPcsOverview;
    }

    /**
     * Gets the conditionalAccessPolicyCoverages property value. Aggregate view of conditional access policy coverage across managed tenants.
     * @return array<ConditionalAccessPolicyCoverage>|null
    */
    public function getConditionalAccessPolicyCoverages(): ?array {
        return $this->conditionalAccessPolicyCoverages;
    }

    /**
     * Gets the credentialUserRegistrationsSummaries property value. Summary information for user registration for multi-factor authentication and self service password reset across managed tenants.
     * @return array<CredentialUserRegistrationsSummary>|null
    */
    public function getCredentialUserRegistrationsSummaries(): ?array {
        return $this->credentialUserRegistrationsSummaries;
    }

    /**
     * Gets the deviceCompliancePolicySettingStateSummaries property value. Summary information for device compliance policy setting states across managed tenants.
     * @return array<DeviceCompliancePolicySettingStateSummary>|null
    */
    public function getDeviceCompliancePolicySettingStateSummaries(): ?array {
        return $this->deviceCompliancePolicySettingStateSummaries;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'aggregatedPolicyCompliances' => fn(ParseNode $n) => $o->setAggregatedPolicyCompliances($n->getCollectionOfObjectValues([AggregatedPolicyCompliance::class, 'createFromDiscriminatorValue'])),
            'auditEvents' => fn(ParseNode $n) => $o->setAuditEvents($n->getCollectionOfObjectValues([AuditEvent::class, 'createFromDiscriminatorValue'])),
            'cloudPcConnections' => fn(ParseNode $n) => $o->setCloudPcConnections($n->getCollectionOfObjectValues([CloudPcConnection::class, 'createFromDiscriminatorValue'])),
            'cloudPcDevices' => fn(ParseNode $n) => $o->setCloudPcDevices($n->getCollectionOfObjectValues([CloudPcDevice::class, 'createFromDiscriminatorValue'])),
            'cloudPcsOverview' => fn(ParseNode $n) => $o->setCloudPcsOverview($n->getCollectionOfObjectValues([CloudPcOverview::class, 'createFromDiscriminatorValue'])),
            'conditionalAccessPolicyCoverages' => fn(ParseNode $n) => $o->setConditionalAccessPolicyCoverages($n->getCollectionOfObjectValues([ConditionalAccessPolicyCoverage::class, 'createFromDiscriminatorValue'])),
            'credentialUserRegistrationsSummaries' => fn(ParseNode $n) => $o->setCredentialUserRegistrationsSummaries($n->getCollectionOfObjectValues([CredentialUserRegistrationsSummary::class, 'createFromDiscriminatorValue'])),
            'deviceCompliancePolicySettingStateSummaries' => fn(ParseNode $n) => $o->setDeviceCompliancePolicySettingStateSummaries($n->getCollectionOfObjectValues([DeviceCompliancePolicySettingStateSummary::class, 'createFromDiscriminatorValue'])),
            'managedDeviceCompliances' => fn(ParseNode $n) => $o->setManagedDeviceCompliances($n->getCollectionOfObjectValues([ManagedDeviceCompliance::class, 'createFromDiscriminatorValue'])),
            'managedDeviceComplianceTrends' => fn(ParseNode $n) => $o->setManagedDeviceComplianceTrends($n->getCollectionOfObjectValues([ManagedDeviceComplianceTrend::class, 'createFromDiscriminatorValue'])),
            'managementActions' => fn(ParseNode $n) => $o->setManagementActions($n->getCollectionOfObjectValues([ManagementAction::class, 'createFromDiscriminatorValue'])),
            'managementActionTenantDeploymentStatuses' => fn(ParseNode $n) => $o->setManagementActionTenantDeploymentStatuses($n->getCollectionOfObjectValues([ManagementActionTenantDeploymentStatus::class, 'createFromDiscriminatorValue'])),
            'managementIntents' => fn(ParseNode $n) => $o->setManagementIntents($n->getCollectionOfObjectValues([ManagementIntent::class, 'createFromDiscriminatorValue'])),
            'managementTemplateCollections' => fn(ParseNode $n) => $o->setManagementTemplateCollections($n->getCollectionOfObjectValues([ManagementTemplateCollection::class, 'createFromDiscriminatorValue'])),
            'managementTemplates' => fn(ParseNode $n) => $o->setManagementTemplates($n->getCollectionOfObjectValues([ManagementTemplate::class, 'createFromDiscriminatorValue'])),
            'managementTemplateSteps' => fn(ParseNode $n) => $o->setManagementTemplateSteps($n->getCollectionOfObjectValues([ManagementTemplateStep::class, 'createFromDiscriminatorValue'])),
            'managementTemplateStepVersions' => fn(ParseNode $n) => $o->setManagementTemplateStepVersions($n->getCollectionOfObjectValues([ManagementTemplateStepVersion::class, 'createFromDiscriminatorValue'])),
            'myRoles' => fn(ParseNode $n) => $o->setMyRoles($n->getCollectionOfObjectValues([MyRole::class, 'createFromDiscriminatorValue'])),
            'tenantGroups' => fn(ParseNode $n) => $o->setTenantGroups($n->getCollectionOfObjectValues([TenantGroup::class, 'createFromDiscriminatorValue'])),
            'tenants' => fn(ParseNode $n) => $o->setTenants($n->getCollectionOfObjectValues([Tenant::class, 'createFromDiscriminatorValue'])),
            'tenantsCustomizedInformation' => fn(ParseNode $n) => $o->setTenantsCustomizedInformation($n->getCollectionOfObjectValues([TenantCustomizedInformation::class, 'createFromDiscriminatorValue'])),
            'tenantsDetailedInformation' => fn(ParseNode $n) => $o->setTenantsDetailedInformation($n->getCollectionOfObjectValues([TenantDetailedInformation::class, 'createFromDiscriminatorValue'])),
            'tenantTags' => fn(ParseNode $n) => $o->setTenantTags($n->getCollectionOfObjectValues([TenantTag::class, 'createFromDiscriminatorValue'])),
            'windowsDeviceMalwareStates' => fn(ParseNode $n) => $o->setWindowsDeviceMalwareStates($n->getCollectionOfObjectValues([WindowsDeviceMalwareState::class, 'createFromDiscriminatorValue'])),
            'windowsProtectionStates' => fn(ParseNode $n) => $o->setWindowsProtectionStates($n->getCollectionOfObjectValues([WindowsProtectionState::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the managedDeviceCompliances property value. The collection of compliance for managed devices across managed tenants.
     * @return array<ManagedDeviceCompliance>|null
    */
    public function getManagedDeviceCompliances(): ?array {
        return $this->managedDeviceCompliances;
    }

    /**
     * Gets the managedDeviceComplianceTrends property value. Trend insights for device compliance across managed tenants.
     * @return array<ManagedDeviceComplianceTrend>|null
    */
    public function getManagedDeviceComplianceTrends(): ?array {
        return $this->managedDeviceComplianceTrends;
    }

    /**
     * Gets the managementActions property value. The collection of baseline management actions across managed tenants.
     * @return array<ManagementAction>|null
    */
    public function getManagementActions(): ?array {
        return $this->managementActions;
    }

    /**
     * Gets the managementActionTenantDeploymentStatuses property value. The tenant level status of management actions across managed tenants.
     * @return array<ManagementActionTenantDeploymentStatus>|null
    */
    public function getManagementActionTenantDeploymentStatuses(): ?array {
        return $this->managementActionTenantDeploymentStatuses;
    }

    /**
     * Gets the managementIntents property value. The collection of baseline management intents across managed tenants.
     * @return array<ManagementIntent>|null
    */
    public function getManagementIntents(): ?array {
        return $this->managementIntents;
    }

    /**
     * Gets the managementTemplateCollections property value. The managementTemplateCollections property
     * @return array<ManagementTemplateCollection>|null
    */
    public function getManagementTemplateCollections(): ?array {
        return $this->managementTemplateCollections;
    }

    /**
     * Gets the managementTemplates property value. The collection of baseline management templates across managed tenants.
     * @return array<ManagementTemplate>|null
    */
    public function getManagementTemplates(): ?array {
        return $this->managementTemplates;
    }

    /**
     * Gets the managementTemplateSteps property value. The managementTemplateSteps property
     * @return array<ManagementTemplateStep>|null
    */
    public function getManagementTemplateSteps(): ?array {
        return $this->managementTemplateSteps;
    }

    /**
     * Gets the managementTemplateStepVersions property value. The managementTemplateStepVersions property
     * @return array<ManagementTemplateStepVersion>|null
    */
    public function getManagementTemplateStepVersions(): ?array {
        return $this->managementTemplateStepVersions;
    }

    /**
     * Gets the myRoles property value. The collection of role assignments to a signed-in user for a managed tenant.
     * @return array<MyRole>|null
    */
    public function getMyRoles(): ?array {
        return $this->myRoles;
    }

    /**
     * Gets the tenantGroups property value. The collection of a logical grouping of managed tenants used by the multi-tenant management platform.
     * @return array<TenantGroup>|null
    */
    public function getTenantGroups(): ?array {
        return $this->tenantGroups;
    }

    /**
     * Gets the tenants property value. The collection of tenants associated with the managing entity.
     * @return array<Tenant>|null
    */
    public function getTenants(): ?array {
        return $this->tenants;
    }

    /**
     * Gets the tenantsCustomizedInformation property value. The collection of tenant level customized information across managed tenants.
     * @return array<TenantCustomizedInformation>|null
    */
    public function getTenantsCustomizedInformation(): ?array {
        return $this->tenantsCustomizedInformation;
    }

    /**
     * Gets the tenantsDetailedInformation property value. The collection tenant level detailed information across managed tenants.
     * @return array<TenantDetailedInformation>|null
    */
    public function getTenantsDetailedInformation(): ?array {
        return $this->tenantsDetailedInformation;
    }

    /**
     * Gets the tenantTags property value. The collection of tenant tags across managed tenants.
     * @return array<TenantTag>|null
    */
    public function getTenantTags(): ?array {
        return $this->tenantTags;
    }

    /**
     * Gets the windowsDeviceMalwareStates property value. The state of malware for Windows devices, registered with Microsoft Endpoint Manager, across managed tenants.
     * @return array<WindowsDeviceMalwareState>|null
    */
    public function getWindowsDeviceMalwareStates(): ?array {
        return $this->windowsDeviceMalwareStates;
    }

    /**
     * Gets the windowsProtectionStates property value. The protection state for Windows devices, registered with Microsoft Endpoint Manager, across managed tenants.
     * @return array<WindowsProtectionState>|null
    */
    public function getWindowsProtectionStates(): ?array {
        return $this->windowsProtectionStates;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('aggregatedPolicyCompliances', $this->aggregatedPolicyCompliances);
        $writer->writeCollectionOfObjectValues('auditEvents', $this->auditEvents);
        $writer->writeCollectionOfObjectValues('cloudPcConnections', $this->cloudPcConnections);
        $writer->writeCollectionOfObjectValues('cloudPcDevices', $this->cloudPcDevices);
        $writer->writeCollectionOfObjectValues('cloudPcsOverview', $this->cloudPcsOverview);
        $writer->writeCollectionOfObjectValues('conditionalAccessPolicyCoverages', $this->conditionalAccessPolicyCoverages);
        $writer->writeCollectionOfObjectValues('credentialUserRegistrationsSummaries', $this->credentialUserRegistrationsSummaries);
        $writer->writeCollectionOfObjectValues('deviceCompliancePolicySettingStateSummaries', $this->deviceCompliancePolicySettingStateSummaries);
        $writer->writeCollectionOfObjectValues('managedDeviceCompliances', $this->managedDeviceCompliances);
        $writer->writeCollectionOfObjectValues('managedDeviceComplianceTrends', $this->managedDeviceComplianceTrends);
        $writer->writeCollectionOfObjectValues('managementActions', $this->managementActions);
        $writer->writeCollectionOfObjectValues('managementActionTenantDeploymentStatuses', $this->managementActionTenantDeploymentStatuses);
        $writer->writeCollectionOfObjectValues('managementIntents', $this->managementIntents);
        $writer->writeCollectionOfObjectValues('managementTemplateCollections', $this->managementTemplateCollections);
        $writer->writeCollectionOfObjectValues('managementTemplates', $this->managementTemplates);
        $writer->writeCollectionOfObjectValues('managementTemplateSteps', $this->managementTemplateSteps);
        $writer->writeCollectionOfObjectValues('managementTemplateStepVersions', $this->managementTemplateStepVersions);
        $writer->writeCollectionOfObjectValues('myRoles', $this->myRoles);
        $writer->writeCollectionOfObjectValues('tenantGroups', $this->tenantGroups);
        $writer->writeCollectionOfObjectValues('tenants', $this->tenants);
        $writer->writeCollectionOfObjectValues('tenantsCustomizedInformation', $this->tenantsCustomizedInformation);
        $writer->writeCollectionOfObjectValues('tenantsDetailedInformation', $this->tenantsDetailedInformation);
        $writer->writeCollectionOfObjectValues('tenantTags', $this->tenantTags);
        $writer->writeCollectionOfObjectValues('windowsDeviceMalwareStates', $this->windowsDeviceMalwareStates);
        $writer->writeCollectionOfObjectValues('windowsProtectionStates', $this->windowsProtectionStates);
    }

    /**
     * Sets the aggregatedPolicyCompliances property value. Aggregate view of device compliance policies across managed tenants.
     *  @param array<AggregatedPolicyCompliance>|null $value Value to set for the aggregatedPolicyCompliances property.
    */
    public function setAggregatedPolicyCompliances(?array $value ): void {
        $this->aggregatedPolicyCompliances = $value;
    }

    /**
     * Sets the auditEvents property value. The collection of audit events across managed tenants.
     *  @param array<AuditEvent>|null $value Value to set for the auditEvents property.
    */
    public function setAuditEvents(?array $value ): void {
        $this->auditEvents = $value;
    }

    /**
     * Sets the cloudPcConnections property value. The collection of cloud PC connections across managed tenants.
     *  @param array<CloudPcConnection>|null $value Value to set for the cloudPcConnections property.
    */
    public function setCloudPcConnections(?array $value ): void {
        $this->cloudPcConnections = $value;
    }

    /**
     * Sets the cloudPcDevices property value. The collection of cloud PC devices across managed tenants.
     *  @param array<CloudPcDevice>|null $value Value to set for the cloudPcDevices property.
    */
    public function setCloudPcDevices(?array $value ): void {
        $this->cloudPcDevices = $value;
    }

    /**
     * Sets the cloudPcsOverview property value. Overview of cloud PC information across managed tenants.
     *  @param array<CloudPcOverview>|null $value Value to set for the cloudPcsOverview property.
    */
    public function setCloudPcsOverview(?array $value ): void {
        $this->cloudPcsOverview = $value;
    }

    /**
     * Sets the conditionalAccessPolicyCoverages property value. Aggregate view of conditional access policy coverage across managed tenants.
     *  @param array<ConditionalAccessPolicyCoverage>|null $value Value to set for the conditionalAccessPolicyCoverages property.
    */
    public function setConditionalAccessPolicyCoverages(?array $value ): void {
        $this->conditionalAccessPolicyCoverages = $value;
    }

    /**
     * Sets the credentialUserRegistrationsSummaries property value. Summary information for user registration for multi-factor authentication and self service password reset across managed tenants.
     *  @param array<CredentialUserRegistrationsSummary>|null $value Value to set for the credentialUserRegistrationsSummaries property.
    */
    public function setCredentialUserRegistrationsSummaries(?array $value ): void {
        $this->credentialUserRegistrationsSummaries = $value;
    }

    /**
     * Sets the deviceCompliancePolicySettingStateSummaries property value. Summary information for device compliance policy setting states across managed tenants.
     *  @param array<DeviceCompliancePolicySettingStateSummary>|null $value Value to set for the deviceCompliancePolicySettingStateSummaries property.
    */
    public function setDeviceCompliancePolicySettingStateSummaries(?array $value ): void {
        $this->deviceCompliancePolicySettingStateSummaries = $value;
    }

    /**
     * Sets the managedDeviceCompliances property value. The collection of compliance for managed devices across managed tenants.
     *  @param array<ManagedDeviceCompliance>|null $value Value to set for the managedDeviceCompliances property.
    */
    public function setManagedDeviceCompliances(?array $value ): void {
        $this->managedDeviceCompliances = $value;
    }

    /**
     * Sets the managedDeviceComplianceTrends property value. Trend insights for device compliance across managed tenants.
     *  @param array<ManagedDeviceComplianceTrend>|null $value Value to set for the managedDeviceComplianceTrends property.
    */
    public function setManagedDeviceComplianceTrends(?array $value ): void {
        $this->managedDeviceComplianceTrends = $value;
    }

    /**
     * Sets the managementActions property value. The collection of baseline management actions across managed tenants.
     *  @param array<ManagementAction>|null $value Value to set for the managementActions property.
    */
    public function setManagementActions(?array $value ): void {
        $this->managementActions = $value;
    }

    /**
     * Sets the managementActionTenantDeploymentStatuses property value. The tenant level status of management actions across managed tenants.
     *  @param array<ManagementActionTenantDeploymentStatus>|null $value Value to set for the managementActionTenantDeploymentStatuses property.
    */
    public function setManagementActionTenantDeploymentStatuses(?array $value ): void {
        $this->managementActionTenantDeploymentStatuses = $value;
    }

    /**
     * Sets the managementIntents property value. The collection of baseline management intents across managed tenants.
     *  @param array<ManagementIntent>|null $value Value to set for the managementIntents property.
    */
    public function setManagementIntents(?array $value ): void {
        $this->managementIntents = $value;
    }

    /**
     * Sets the managementTemplateCollections property value. The managementTemplateCollections property
     *  @param array<ManagementTemplateCollection>|null $value Value to set for the managementTemplateCollections property.
    */
    public function setManagementTemplateCollections(?array $value ): void {
        $this->managementTemplateCollections = $value;
    }

    /**
     * Sets the managementTemplates property value. The collection of baseline management templates across managed tenants.
     *  @param array<ManagementTemplate>|null $value Value to set for the managementTemplates property.
    */
    public function setManagementTemplates(?array $value ): void {
        $this->managementTemplates = $value;
    }

    /**
     * Sets the managementTemplateSteps property value. The managementTemplateSteps property
     *  @param array<ManagementTemplateStep>|null $value Value to set for the managementTemplateSteps property.
    */
    public function setManagementTemplateSteps(?array $value ): void {
        $this->managementTemplateSteps = $value;
    }

    /**
     * Sets the managementTemplateStepVersions property value. The managementTemplateStepVersions property
     *  @param array<ManagementTemplateStepVersion>|null $value Value to set for the managementTemplateStepVersions property.
    */
    public function setManagementTemplateStepVersions(?array $value ): void {
        $this->managementTemplateStepVersions = $value;
    }

    /**
     * Sets the myRoles property value. The collection of role assignments to a signed-in user for a managed tenant.
     *  @param array<MyRole>|null $value Value to set for the myRoles property.
    */
    public function setMyRoles(?array $value ): void {
        $this->myRoles = $value;
    }

    /**
     * Sets the tenantGroups property value. The collection of a logical grouping of managed tenants used by the multi-tenant management platform.
     *  @param array<TenantGroup>|null $value Value to set for the tenantGroups property.
    */
    public function setTenantGroups(?array $value ): void {
        $this->tenantGroups = $value;
    }

    /**
     * Sets the tenants property value. The collection of tenants associated with the managing entity.
     *  @param array<Tenant>|null $value Value to set for the tenants property.
    */
    public function setTenants(?array $value ): void {
        $this->tenants = $value;
    }

    /**
     * Sets the tenantsCustomizedInformation property value. The collection of tenant level customized information across managed tenants.
     *  @param array<TenantCustomizedInformation>|null $value Value to set for the tenantsCustomizedInformation property.
    */
    public function setTenantsCustomizedInformation(?array $value ): void {
        $this->tenantsCustomizedInformation = $value;
    }

    /**
     * Sets the tenantsDetailedInformation property value. The collection tenant level detailed information across managed tenants.
     *  @param array<TenantDetailedInformation>|null $value Value to set for the tenantsDetailedInformation property.
    */
    public function setTenantsDetailedInformation(?array $value ): void {
        $this->tenantsDetailedInformation = $value;
    }

    /**
     * Sets the tenantTags property value. The collection of tenant tags across managed tenants.
     *  @param array<TenantTag>|null $value Value to set for the tenantTags property.
    */
    public function setTenantTags(?array $value ): void {
        $this->tenantTags = $value;
    }

    /**
     * Sets the windowsDeviceMalwareStates property value. The state of malware for Windows devices, registered with Microsoft Endpoint Manager, across managed tenants.
     *  @param array<WindowsDeviceMalwareState>|null $value Value to set for the windowsDeviceMalwareStates property.
    */
    public function setWindowsDeviceMalwareStates(?array $value ): void {
        $this->windowsDeviceMalwareStates = $value;
    }

    /**
     * Sets the windowsProtectionStates property value. The protection state for Windows devices, registered with Microsoft Endpoint Manager, across managed tenants.
     *  @param array<WindowsProtectionState>|null $value Value to set for the windowsProtectionStates property.
    */
    public function setWindowsProtectionStates(?array $value ): void {
        $this->windowsProtectionStates = $value;
    }

}
