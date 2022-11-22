<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedTenant extends Entity implements Parsable 
{
    /**
     * Instantiates a new managedTenant and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('aggregatedPolicyCompliances');
    }

    /**
     * Gets the auditEvents property value. The collection of audit events across managed tenants.
     * @return array<AuditEvent>|null
    */
    public function getAuditEvents(): ?array {
        return $this->getBackingStore()->get('auditEvents');
    }

    /**
     * Gets the cloudPcConnections property value. The collection of cloud PC connections across managed tenants.
     * @return array<CloudPcConnection>|null
    */
    public function getCloudPcConnections(): ?array {
        return $this->getBackingStore()->get('cloudPcConnections');
    }

    /**
     * Gets the cloudPcDevices property value. The collection of cloud PC devices across managed tenants.
     * @return array<CloudPcDevice>|null
    */
    public function getCloudPcDevices(): ?array {
        return $this->getBackingStore()->get('cloudPcDevices');
    }

    /**
     * Gets the cloudPcsOverview property value. Overview of cloud PC information across managed tenants.
     * @return array<CloudPcOverview>|null
    */
    public function getCloudPcsOverview(): ?array {
        return $this->getBackingStore()->get('cloudPcsOverview');
    }

    /**
     * Gets the conditionalAccessPolicyCoverages property value. Aggregate view of conditional access policy coverage across managed tenants.
     * @return array<ConditionalAccessPolicyCoverage>|null
    */
    public function getConditionalAccessPolicyCoverages(): ?array {
        return $this->getBackingStore()->get('conditionalAccessPolicyCoverages');
    }

    /**
     * Gets the credentialUserRegistrationsSummaries property value. Summary information for user registration for multi-factor authentication and self service password reset across managed tenants.
     * @return array<CredentialUserRegistrationsSummary>|null
    */
    public function getCredentialUserRegistrationsSummaries(): ?array {
        return $this->getBackingStore()->get('credentialUserRegistrationsSummaries');
    }

    /**
     * Gets the deviceCompliancePolicySettingStateSummaries property value. Summary information for device compliance policy setting states across managed tenants.
     * @return array<DeviceCompliancePolicySettingStateSummary>|null
    */
    public function getDeviceCompliancePolicySettingStateSummaries(): ?array {
        return $this->getBackingStore()->get('deviceCompliancePolicySettingStateSummaries');
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
            'managedTenantAlertLogs' => fn(ParseNode $n) => $o->setManagedTenantAlertLogs($n->getCollectionOfObjectValues([ManagedTenantAlertLog::class, 'createFromDiscriminatorValue'])),
            'managedTenantAlertRuleDefinitions' => fn(ParseNode $n) => $o->setManagedTenantAlertRuleDefinitions($n->getCollectionOfObjectValues([ManagedTenantAlertRuleDefinition::class, 'createFromDiscriminatorValue'])),
            'managedTenantAlertRules' => fn(ParseNode $n) => $o->setManagedTenantAlertRules($n->getCollectionOfObjectValues([ManagedTenantAlertRule::class, 'createFromDiscriminatorValue'])),
            'managedTenantAlerts' => fn(ParseNode $n) => $o->setManagedTenantAlerts($n->getCollectionOfObjectValues([ManagedTenantAlert::class, 'createFromDiscriminatorValue'])),
            'managedTenantApiNotifications' => fn(ParseNode $n) => $o->setManagedTenantApiNotifications($n->getCollectionOfObjectValues([ManagedTenantApiNotification::class, 'createFromDiscriminatorValue'])),
            'managedTenantEmailNotifications' => fn(ParseNode $n) => $o->setManagedTenantEmailNotifications($n->getCollectionOfObjectValues([ManagedTenantEmailNotification::class, 'createFromDiscriminatorValue'])),
            'managedTenantTicketingEndpoints' => fn(ParseNode $n) => $o->setManagedTenantTicketingEndpoints($n->getCollectionOfObjectValues([ManagedTenantTicketingEndpoint::class, 'createFromDiscriminatorValue'])),
            'managementActions' => fn(ParseNode $n) => $o->setManagementActions($n->getCollectionOfObjectValues([ManagementAction::class, 'createFromDiscriminatorValue'])),
            'managementActionTenantDeploymentStatuses' => fn(ParseNode $n) => $o->setManagementActionTenantDeploymentStatuses($n->getCollectionOfObjectValues([ManagementActionTenantDeploymentStatus::class, 'createFromDiscriminatorValue'])),
            'managementIntents' => fn(ParseNode $n) => $o->setManagementIntents($n->getCollectionOfObjectValues([ManagementIntent::class, 'createFromDiscriminatorValue'])),
            'managementTemplateCollections' => fn(ParseNode $n) => $o->setManagementTemplateCollections($n->getCollectionOfObjectValues([ManagementTemplateCollection::class, 'createFromDiscriminatorValue'])),
            'managementTemplateCollectionTenantSummaries' => fn(ParseNode $n) => $o->setManagementTemplateCollectionTenantSummaries($n->getCollectionOfObjectValues([ManagementTemplateCollectionTenantSummary::class, 'createFromDiscriminatorValue'])),
            'managementTemplates' => fn(ParseNode $n) => $o->setManagementTemplates($n->getCollectionOfObjectValues([ManagementTemplate::class, 'createFromDiscriminatorValue'])),
            'managementTemplateSteps' => fn(ParseNode $n) => $o->setManagementTemplateSteps($n->getCollectionOfObjectValues([ManagementTemplateStep::class, 'createFromDiscriminatorValue'])),
            'managementTemplateStepTenantSummaries' => fn(ParseNode $n) => $o->setManagementTemplateStepTenantSummaries($n->getCollectionOfObjectValues([ManagementTemplateStepTenantSummary::class, 'createFromDiscriminatorValue'])),
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
        return $this->getBackingStore()->get('managedDeviceCompliances');
    }

    /**
     * Gets the managedDeviceComplianceTrends property value. Trend insights for device compliance across managed tenants.
     * @return array<ManagedDeviceComplianceTrend>|null
    */
    public function getManagedDeviceComplianceTrends(): ?array {
        return $this->getBackingStore()->get('managedDeviceComplianceTrends');
    }

    /**
     * Gets the managedTenantAlertLogs property value. The managedTenantAlertLogs property
     * @return array<ManagedTenantAlertLog>|null
    */
    public function getManagedTenantAlertLogs(): ?array {
        return $this->getBackingStore()->get('managedTenantAlertLogs');
    }

    /**
     * Gets the managedTenantAlertRuleDefinitions property value. The managedTenantAlertRuleDefinitions property
     * @return array<ManagedTenantAlertRuleDefinition>|null
    */
    public function getManagedTenantAlertRuleDefinitions(): ?array {
        return $this->getBackingStore()->get('managedTenantAlertRuleDefinitions');
    }

    /**
     * Gets the managedTenantAlertRules property value. The managedTenantAlertRules property
     * @return array<ManagedTenantAlertRule>|null
    */
    public function getManagedTenantAlertRules(): ?array {
        return $this->getBackingStore()->get('managedTenantAlertRules');
    }

    /**
     * Gets the managedTenantAlerts property value. The managedTenantAlerts property
     * @return array<ManagedTenantAlert>|null
    */
    public function getManagedTenantAlerts(): ?array {
        return $this->getBackingStore()->get('managedTenantAlerts');
    }

    /**
     * Gets the managedTenantApiNotifications property value. The managedTenantApiNotifications property
     * @return array<ManagedTenantApiNotification>|null
    */
    public function getManagedTenantApiNotifications(): ?array {
        return $this->getBackingStore()->get('managedTenantApiNotifications');
    }

    /**
     * Gets the managedTenantEmailNotifications property value. The managedTenantEmailNotifications property
     * @return array<ManagedTenantEmailNotification>|null
    */
    public function getManagedTenantEmailNotifications(): ?array {
        return $this->getBackingStore()->get('managedTenantEmailNotifications');
    }

    /**
     * Gets the managedTenantTicketingEndpoints property value. The managedTenantTicketingEndpoints property
     * @return array<ManagedTenantTicketingEndpoint>|null
    */
    public function getManagedTenantTicketingEndpoints(): ?array {
        return $this->getBackingStore()->get('managedTenantTicketingEndpoints');
    }

    /**
     * Gets the managementActions property value. The collection of baseline management actions across managed tenants.
     * @return array<ManagementAction>|null
    */
    public function getManagementActions(): ?array {
        return $this->getBackingStore()->get('managementActions');
    }

    /**
     * Gets the managementActionTenantDeploymentStatuses property value. The tenant level status of management actions across managed tenants.
     * @return array<ManagementActionTenantDeploymentStatus>|null
    */
    public function getManagementActionTenantDeploymentStatuses(): ?array {
        return $this->getBackingStore()->get('managementActionTenantDeploymentStatuses');
    }

    /**
     * Gets the managementIntents property value. The collection of baseline management intents across managed tenants.
     * @return array<ManagementIntent>|null
    */
    public function getManagementIntents(): ?array {
        return $this->getBackingStore()->get('managementIntents');
    }

    /**
     * Gets the managementTemplateCollections property value. The managementTemplateCollections property
     * @return array<ManagementTemplateCollection>|null
    */
    public function getManagementTemplateCollections(): ?array {
        return $this->getBackingStore()->get('managementTemplateCollections');
    }

    /**
     * Gets the managementTemplateCollectionTenantSummaries property value. The managementTemplateCollectionTenantSummaries property
     * @return array<ManagementTemplateCollectionTenantSummary>|null
    */
    public function getManagementTemplateCollectionTenantSummaries(): ?array {
        return $this->getBackingStore()->get('managementTemplateCollectionTenantSummaries');
    }

    /**
     * Gets the managementTemplates property value. The collection of baseline management templates across managed tenants.
     * @return array<ManagementTemplate>|null
    */
    public function getManagementTemplates(): ?array {
        return $this->getBackingStore()->get('managementTemplates');
    }

    /**
     * Gets the managementTemplateSteps property value. The managementTemplateSteps property
     * @return array<ManagementTemplateStep>|null
    */
    public function getManagementTemplateSteps(): ?array {
        return $this->getBackingStore()->get('managementTemplateSteps');
    }

    /**
     * Gets the managementTemplateStepTenantSummaries property value. The managementTemplateStepTenantSummaries property
     * @return array<ManagementTemplateStepTenantSummary>|null
    */
    public function getManagementTemplateStepTenantSummaries(): ?array {
        return $this->getBackingStore()->get('managementTemplateStepTenantSummaries');
    }

    /**
     * Gets the managementTemplateStepVersions property value. The managementTemplateStepVersions property
     * @return array<ManagementTemplateStepVersion>|null
    */
    public function getManagementTemplateStepVersions(): ?array {
        return $this->getBackingStore()->get('managementTemplateStepVersions');
    }

    /**
     * Gets the myRoles property value. The collection of role assignments to a signed-in user for a managed tenant.
     * @return array<MyRole>|null
    */
    public function getMyRoles(): ?array {
        return $this->getBackingStore()->get('myRoles');
    }

    /**
     * Gets the tenantGroups property value. The collection of a logical grouping of managed tenants used by the multi-tenant management platform.
     * @return array<TenantGroup>|null
    */
    public function getTenantGroups(): ?array {
        return $this->getBackingStore()->get('tenantGroups');
    }

    /**
     * Gets the tenants property value. The collection of tenants associated with the managing entity.
     * @return array<Tenant>|null
    */
    public function getTenants(): ?array {
        return $this->getBackingStore()->get('tenants');
    }

    /**
     * Gets the tenantsCustomizedInformation property value. The collection of tenant level customized information across managed tenants.
     * @return array<TenantCustomizedInformation>|null
    */
    public function getTenantsCustomizedInformation(): ?array {
        return $this->getBackingStore()->get('tenantsCustomizedInformation');
    }

    /**
     * Gets the tenantsDetailedInformation property value. The collection tenant level detailed information across managed tenants.
     * @return array<TenantDetailedInformation>|null
    */
    public function getTenantsDetailedInformation(): ?array {
        return $this->getBackingStore()->get('tenantsDetailedInformation');
    }

    /**
     * Gets the tenantTags property value. The collection of tenant tags across managed tenants.
     * @return array<TenantTag>|null
    */
    public function getTenantTags(): ?array {
        return $this->getBackingStore()->get('tenantTags');
    }

    /**
     * Gets the windowsDeviceMalwareStates property value. The state of malware for Windows devices, registered with Microsoft Endpoint Manager, across managed tenants.
     * @return array<WindowsDeviceMalwareState>|null
    */
    public function getWindowsDeviceMalwareStates(): ?array {
        return $this->getBackingStore()->get('windowsDeviceMalwareStates');
    }

    /**
     * Gets the windowsProtectionStates property value. The protection state for Windows devices, registered with Microsoft Endpoint Manager, across managed tenants.
     * @return array<WindowsProtectionState>|null
    */
    public function getWindowsProtectionStates(): ?array {
        return $this->getBackingStore()->get('windowsProtectionStates');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('aggregatedPolicyCompliances', $this->getAggregatedPolicyCompliances());
        $writer->writeCollectionOfObjectValues('auditEvents', $this->getAuditEvents());
        $writer->writeCollectionOfObjectValues('cloudPcConnections', $this->getCloudPcConnections());
        $writer->writeCollectionOfObjectValues('cloudPcDevices', $this->getCloudPcDevices());
        $writer->writeCollectionOfObjectValues('cloudPcsOverview', $this->getCloudPcsOverview());
        $writer->writeCollectionOfObjectValues('conditionalAccessPolicyCoverages', $this->getConditionalAccessPolicyCoverages());
        $writer->writeCollectionOfObjectValues('credentialUserRegistrationsSummaries', $this->getCredentialUserRegistrationsSummaries());
        $writer->writeCollectionOfObjectValues('deviceCompliancePolicySettingStateSummaries', $this->getDeviceCompliancePolicySettingStateSummaries());
        $writer->writeCollectionOfObjectValues('managedDeviceCompliances', $this->getManagedDeviceCompliances());
        $writer->writeCollectionOfObjectValues('managedDeviceComplianceTrends', $this->getManagedDeviceComplianceTrends());
        $writer->writeCollectionOfObjectValues('managedTenantAlertLogs', $this->getManagedTenantAlertLogs());
        $writer->writeCollectionOfObjectValues('managedTenantAlertRuleDefinitions', $this->getManagedTenantAlertRuleDefinitions());
        $writer->writeCollectionOfObjectValues('managedTenantAlertRules', $this->getManagedTenantAlertRules());
        $writer->writeCollectionOfObjectValues('managedTenantAlerts', $this->getManagedTenantAlerts());
        $writer->writeCollectionOfObjectValues('managedTenantApiNotifications', $this->getManagedTenantApiNotifications());
        $writer->writeCollectionOfObjectValues('managedTenantEmailNotifications', $this->getManagedTenantEmailNotifications());
        $writer->writeCollectionOfObjectValues('managedTenantTicketingEndpoints', $this->getManagedTenantTicketingEndpoints());
        $writer->writeCollectionOfObjectValues('managementActions', $this->getManagementActions());
        $writer->writeCollectionOfObjectValues('managementActionTenantDeploymentStatuses', $this->getManagementActionTenantDeploymentStatuses());
        $writer->writeCollectionOfObjectValues('managementIntents', $this->getManagementIntents());
        $writer->writeCollectionOfObjectValues('managementTemplateCollections', $this->getManagementTemplateCollections());
        $writer->writeCollectionOfObjectValues('managementTemplateCollectionTenantSummaries', $this->getManagementTemplateCollectionTenantSummaries());
        $writer->writeCollectionOfObjectValues('managementTemplates', $this->getManagementTemplates());
        $writer->writeCollectionOfObjectValues('managementTemplateSteps', $this->getManagementTemplateSteps());
        $writer->writeCollectionOfObjectValues('managementTemplateStepTenantSummaries', $this->getManagementTemplateStepTenantSummaries());
        $writer->writeCollectionOfObjectValues('managementTemplateStepVersions', $this->getManagementTemplateStepVersions());
        $writer->writeCollectionOfObjectValues('myRoles', $this->getMyRoles());
        $writer->writeCollectionOfObjectValues('tenantGroups', $this->getTenantGroups());
        $writer->writeCollectionOfObjectValues('tenants', $this->getTenants());
        $writer->writeCollectionOfObjectValues('tenantsCustomizedInformation', $this->getTenantsCustomizedInformation());
        $writer->writeCollectionOfObjectValues('tenantsDetailedInformation', $this->getTenantsDetailedInformation());
        $writer->writeCollectionOfObjectValues('tenantTags', $this->getTenantTags());
        $writer->writeCollectionOfObjectValues('windowsDeviceMalwareStates', $this->getWindowsDeviceMalwareStates());
        $writer->writeCollectionOfObjectValues('windowsProtectionStates', $this->getWindowsProtectionStates());
    }

    /**
     * Sets the aggregatedPolicyCompliances property value. Aggregate view of device compliance policies across managed tenants.
     *  @param array<AggregatedPolicyCompliance>|null $value Value to set for the aggregatedPolicyCompliances property.
    */
    public function setAggregatedPolicyCompliances(?array $value): void {
        $this->getBackingStore()->set('aggregatedPolicyCompliances', $value);
    }

    /**
     * Sets the auditEvents property value. The collection of audit events across managed tenants.
     *  @param array<AuditEvent>|null $value Value to set for the auditEvents property.
    */
    public function setAuditEvents(?array $value): void {
        $this->getBackingStore()->set('auditEvents', $value);
    }

    /**
     * Sets the cloudPcConnections property value. The collection of cloud PC connections across managed tenants.
     *  @param array<CloudPcConnection>|null $value Value to set for the cloudPcConnections property.
    */
    public function setCloudPcConnections(?array $value): void {
        $this->getBackingStore()->set('cloudPcConnections', $value);
    }

    /**
     * Sets the cloudPcDevices property value. The collection of cloud PC devices across managed tenants.
     *  @param array<CloudPcDevice>|null $value Value to set for the cloudPcDevices property.
    */
    public function setCloudPcDevices(?array $value): void {
        $this->getBackingStore()->set('cloudPcDevices', $value);
    }

    /**
     * Sets the cloudPcsOverview property value. Overview of cloud PC information across managed tenants.
     *  @param array<CloudPcOverview>|null $value Value to set for the cloudPcsOverview property.
    */
    public function setCloudPcsOverview(?array $value): void {
        $this->getBackingStore()->set('cloudPcsOverview', $value);
    }

    /**
     * Sets the conditionalAccessPolicyCoverages property value. Aggregate view of conditional access policy coverage across managed tenants.
     *  @param array<ConditionalAccessPolicyCoverage>|null $value Value to set for the conditionalAccessPolicyCoverages property.
    */
    public function setConditionalAccessPolicyCoverages(?array $value): void {
        $this->getBackingStore()->set('conditionalAccessPolicyCoverages', $value);
    }

    /**
     * Sets the credentialUserRegistrationsSummaries property value. Summary information for user registration for multi-factor authentication and self service password reset across managed tenants.
     *  @param array<CredentialUserRegistrationsSummary>|null $value Value to set for the credentialUserRegistrationsSummaries property.
    */
    public function setCredentialUserRegistrationsSummaries(?array $value): void {
        $this->getBackingStore()->set('credentialUserRegistrationsSummaries', $value);
    }

    /**
     * Sets the deviceCompliancePolicySettingStateSummaries property value. Summary information for device compliance policy setting states across managed tenants.
     *  @param array<DeviceCompliancePolicySettingStateSummary>|null $value Value to set for the deviceCompliancePolicySettingStateSummaries property.
    */
    public function setDeviceCompliancePolicySettingStateSummaries(?array $value): void {
        $this->getBackingStore()->set('deviceCompliancePolicySettingStateSummaries', $value);
    }

    /**
     * Sets the managedDeviceCompliances property value. The collection of compliance for managed devices across managed tenants.
     *  @param array<ManagedDeviceCompliance>|null $value Value to set for the managedDeviceCompliances property.
    */
    public function setManagedDeviceCompliances(?array $value): void {
        $this->getBackingStore()->set('managedDeviceCompliances', $value);
    }

    /**
     * Sets the managedDeviceComplianceTrends property value. Trend insights for device compliance across managed tenants.
     *  @param array<ManagedDeviceComplianceTrend>|null $value Value to set for the managedDeviceComplianceTrends property.
    */
    public function setManagedDeviceComplianceTrends(?array $value): void {
        $this->getBackingStore()->set('managedDeviceComplianceTrends', $value);
    }

    /**
     * Sets the managedTenantAlertLogs property value. The managedTenantAlertLogs property
     *  @param array<ManagedTenantAlertLog>|null $value Value to set for the managedTenantAlertLogs property.
    */
    public function setManagedTenantAlertLogs(?array $value): void {
        $this->getBackingStore()->set('managedTenantAlertLogs', $value);
    }

    /**
     * Sets the managedTenantAlertRuleDefinitions property value. The managedTenantAlertRuleDefinitions property
     *  @param array<ManagedTenantAlertRuleDefinition>|null $value Value to set for the managedTenantAlertRuleDefinitions property.
    */
    public function setManagedTenantAlertRuleDefinitions(?array $value): void {
        $this->getBackingStore()->set('managedTenantAlertRuleDefinitions', $value);
    }

    /**
     * Sets the managedTenantAlertRules property value. The managedTenantAlertRules property
     *  @param array<ManagedTenantAlertRule>|null $value Value to set for the managedTenantAlertRules property.
    */
    public function setManagedTenantAlertRules(?array $value): void {
        $this->getBackingStore()->set('managedTenantAlertRules', $value);
    }

    /**
     * Sets the managedTenantAlerts property value. The managedTenantAlerts property
     *  @param array<ManagedTenantAlert>|null $value Value to set for the managedTenantAlerts property.
    */
    public function setManagedTenantAlerts(?array $value): void {
        $this->getBackingStore()->set('managedTenantAlerts', $value);
    }

    /**
     * Sets the managedTenantApiNotifications property value. The managedTenantApiNotifications property
     *  @param array<ManagedTenantApiNotification>|null $value Value to set for the managedTenantApiNotifications property.
    */
    public function setManagedTenantApiNotifications(?array $value): void {
        $this->getBackingStore()->set('managedTenantApiNotifications', $value);
    }

    /**
     * Sets the managedTenantEmailNotifications property value. The managedTenantEmailNotifications property
     *  @param array<ManagedTenantEmailNotification>|null $value Value to set for the managedTenantEmailNotifications property.
    */
    public function setManagedTenantEmailNotifications(?array $value): void {
        $this->getBackingStore()->set('managedTenantEmailNotifications', $value);
    }

    /**
     * Sets the managedTenantTicketingEndpoints property value. The managedTenantTicketingEndpoints property
     *  @param array<ManagedTenantTicketingEndpoint>|null $value Value to set for the managedTenantTicketingEndpoints property.
    */
    public function setManagedTenantTicketingEndpoints(?array $value): void {
        $this->getBackingStore()->set('managedTenantTicketingEndpoints', $value);
    }

    /**
     * Sets the managementActions property value. The collection of baseline management actions across managed tenants.
     *  @param array<ManagementAction>|null $value Value to set for the managementActions property.
    */
    public function setManagementActions(?array $value): void {
        $this->getBackingStore()->set('managementActions', $value);
    }

    /**
     * Sets the managementActionTenantDeploymentStatuses property value. The tenant level status of management actions across managed tenants.
     *  @param array<ManagementActionTenantDeploymentStatus>|null $value Value to set for the managementActionTenantDeploymentStatuses property.
    */
    public function setManagementActionTenantDeploymentStatuses(?array $value): void {
        $this->getBackingStore()->set('managementActionTenantDeploymentStatuses', $value);
    }

    /**
     * Sets the managementIntents property value. The collection of baseline management intents across managed tenants.
     *  @param array<ManagementIntent>|null $value Value to set for the managementIntents property.
    */
    public function setManagementIntents(?array $value): void {
        $this->getBackingStore()->set('managementIntents', $value);
    }

    /**
     * Sets the managementTemplateCollections property value. The managementTemplateCollections property
     *  @param array<ManagementTemplateCollection>|null $value Value to set for the managementTemplateCollections property.
    */
    public function setManagementTemplateCollections(?array $value): void {
        $this->getBackingStore()->set('managementTemplateCollections', $value);
    }

    /**
     * Sets the managementTemplateCollectionTenantSummaries property value. The managementTemplateCollectionTenantSummaries property
     *  @param array<ManagementTemplateCollectionTenantSummary>|null $value Value to set for the managementTemplateCollectionTenantSummaries property.
    */
    public function setManagementTemplateCollectionTenantSummaries(?array $value): void {
        $this->getBackingStore()->set('managementTemplateCollectionTenantSummaries', $value);
    }

    /**
     * Sets the managementTemplates property value. The collection of baseline management templates across managed tenants.
     *  @param array<ManagementTemplate>|null $value Value to set for the managementTemplates property.
    */
    public function setManagementTemplates(?array $value): void {
        $this->getBackingStore()->set('managementTemplates', $value);
    }

    /**
     * Sets the managementTemplateSteps property value. The managementTemplateSteps property
     *  @param array<ManagementTemplateStep>|null $value Value to set for the managementTemplateSteps property.
    */
    public function setManagementTemplateSteps(?array $value): void {
        $this->getBackingStore()->set('managementTemplateSteps', $value);
    }

    /**
     * Sets the managementTemplateStepTenantSummaries property value. The managementTemplateStepTenantSummaries property
     *  @param array<ManagementTemplateStepTenantSummary>|null $value Value to set for the managementTemplateStepTenantSummaries property.
    */
    public function setManagementTemplateStepTenantSummaries(?array $value): void {
        $this->getBackingStore()->set('managementTemplateStepTenantSummaries', $value);
    }

    /**
     * Sets the managementTemplateStepVersions property value. The managementTemplateStepVersions property
     *  @param array<ManagementTemplateStepVersion>|null $value Value to set for the managementTemplateStepVersions property.
    */
    public function setManagementTemplateStepVersions(?array $value): void {
        $this->getBackingStore()->set('managementTemplateStepVersions', $value);
    }

    /**
     * Sets the myRoles property value. The collection of role assignments to a signed-in user for a managed tenant.
     *  @param array<MyRole>|null $value Value to set for the myRoles property.
    */
    public function setMyRoles(?array $value): void {
        $this->getBackingStore()->set('myRoles', $value);
    }

    /**
     * Sets the tenantGroups property value. The collection of a logical grouping of managed tenants used by the multi-tenant management platform.
     *  @param array<TenantGroup>|null $value Value to set for the tenantGroups property.
    */
    public function setTenantGroups(?array $value): void {
        $this->getBackingStore()->set('tenantGroups', $value);
    }

    /**
     * Sets the tenants property value. The collection of tenants associated with the managing entity.
     *  @param array<Tenant>|null $value Value to set for the tenants property.
    */
    public function setTenants(?array $value): void {
        $this->getBackingStore()->set('tenants', $value);
    }

    /**
     * Sets the tenantsCustomizedInformation property value. The collection of tenant level customized information across managed tenants.
     *  @param array<TenantCustomizedInformation>|null $value Value to set for the tenantsCustomizedInformation property.
    */
    public function setTenantsCustomizedInformation(?array $value): void {
        $this->getBackingStore()->set('tenantsCustomizedInformation', $value);
    }

    /**
     * Sets the tenantsDetailedInformation property value. The collection tenant level detailed information across managed tenants.
     *  @param array<TenantDetailedInformation>|null $value Value to set for the tenantsDetailedInformation property.
    */
    public function setTenantsDetailedInformation(?array $value): void {
        $this->getBackingStore()->set('tenantsDetailedInformation', $value);
    }

    /**
     * Sets the tenantTags property value. The collection of tenant tags across managed tenants.
     *  @param array<TenantTag>|null $value Value to set for the tenantTags property.
    */
    public function setTenantTags(?array $value): void {
        $this->getBackingStore()->set('tenantTags', $value);
    }

    /**
     * Sets the windowsDeviceMalwareStates property value. The state of malware for Windows devices, registered with Microsoft Endpoint Manager, across managed tenants.
     *  @param array<WindowsDeviceMalwareState>|null $value Value to set for the windowsDeviceMalwareStates property.
    */
    public function setWindowsDeviceMalwareStates(?array $value): void {
        $this->getBackingStore()->set('windowsDeviceMalwareStates', $value);
    }

    /**
     * Sets the windowsProtectionStates property value. The protection state for Windows devices, registered with Microsoft Endpoint Manager, across managed tenants.
     *  @param array<WindowsProtectionState>|null $value Value to set for the windowsProtectionStates property.
    */
    public function setWindowsProtectionStates(?array $value): void {
        $this->getBackingStore()->set('windowsProtectionStates', $value);
    }

}
