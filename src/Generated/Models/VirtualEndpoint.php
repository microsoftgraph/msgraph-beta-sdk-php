<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VirtualEndpoint extends Entity implements Parsable 
{
    /**
     * Instantiates a new VirtualEndpoint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualEndpoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualEndpoint {
        return new VirtualEndpoint();
    }

    /**
     * Gets the auditEvents property value. Cloud PC audit event.
     * @return array<CloudPcAuditEvent>|null
    */
    public function getAuditEvents(): ?array {
        return $this->getBackingStore()->get('auditEvents');
    }

    /**
     * Gets the cloudPCs property value. Cloud managed virtual desktops.
     * @return array<CloudPC>|null
    */
    public function getCloudPCs(): ?array {
        return $this->getBackingStore()->get('cloudPCs');
    }

    /**
     * Gets the crossCloudGovernmentOrganizationMapping property value. Cloud PC organization mapping between public and US Government Community Cloud (GCC) organizations.
     * @return CloudPcCrossCloudGovernmentOrganizationMapping|null
    */
    public function getCrossCloudGovernmentOrganizationMapping(): ?CloudPcCrossCloudGovernmentOrganizationMapping {
        return $this->getBackingStore()->get('crossCloudGovernmentOrganizationMapping');
    }

    /**
     * Gets the deviceImages property value. The image resource on Cloud PC.
     * @return array<CloudPcDeviceImage>|null
    */
    public function getDeviceImages(): ?array {
        return $this->getBackingStore()->get('deviceImages');
    }

    /**
     * Gets the externalPartnerSettings property value. The external partner settings on a Cloud PC.
     * @return array<CloudPcExternalPartnerSetting>|null
    */
    public function getExternalPartnerSettings(): ?array {
        return $this->getBackingStore()->get('externalPartnerSettings');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'auditEvents' => fn(ParseNode $n) => $o->setAuditEvents($n->getCollectionOfObjectValues([CloudPcAuditEvent::class, 'createFromDiscriminatorValue'])),
            'cloudPCs' => fn(ParseNode $n) => $o->setCloudPCs($n->getCollectionOfObjectValues([CloudPC::class, 'createFromDiscriminatorValue'])),
            'crossCloudGovernmentOrganizationMapping' => fn(ParseNode $n) => $o->setCrossCloudGovernmentOrganizationMapping($n->getObjectValue([CloudPcCrossCloudGovernmentOrganizationMapping::class, 'createFromDiscriminatorValue'])),
            'deviceImages' => fn(ParseNode $n) => $o->setDeviceImages($n->getCollectionOfObjectValues([CloudPcDeviceImage::class, 'createFromDiscriminatorValue'])),
            'externalPartnerSettings' => fn(ParseNode $n) => $o->setExternalPartnerSettings($n->getCollectionOfObjectValues([CloudPcExternalPartnerSetting::class, 'createFromDiscriminatorValue'])),
            'galleryImages' => fn(ParseNode $n) => $o->setGalleryImages($n->getCollectionOfObjectValues([CloudPcGalleryImage::class, 'createFromDiscriminatorValue'])),
            'onPremisesConnections' => fn(ParseNode $n) => $o->setOnPremisesConnections($n->getCollectionOfObjectValues([CloudPcOnPremisesConnection::class, 'createFromDiscriminatorValue'])),
            'organizationSettings' => fn(ParseNode $n) => $o->setOrganizationSettings($n->getObjectValue([CloudPcOrganizationSettings::class, 'createFromDiscriminatorValue'])),
            'provisioningPolicies' => fn(ParseNode $n) => $o->setProvisioningPolicies($n->getCollectionOfObjectValues([CloudPcProvisioningPolicy::class, 'createFromDiscriminatorValue'])),
            'reports' => fn(ParseNode $n) => $o->setReports($n->getObjectValue([CloudPcReports::class, 'createFromDiscriminatorValue'])),
            'servicePlans' => fn(ParseNode $n) => $o->setServicePlans($n->getCollectionOfObjectValues([CloudPcServicePlan::class, 'createFromDiscriminatorValue'])),
            'sharedUseServicePlans' => fn(ParseNode $n) => $o->setSharedUseServicePlans($n->getCollectionOfObjectValues([CloudPcSharedUseServicePlan::class, 'createFromDiscriminatorValue'])),
            'snapshots' => fn(ParseNode $n) => $o->setSnapshots($n->getCollectionOfObjectValues([CloudPcSnapshot::class, 'createFromDiscriminatorValue'])),
            'supportedRegions' => fn(ParseNode $n) => $o->setSupportedRegions($n->getCollectionOfObjectValues([CloudPcSupportedRegion::class, 'createFromDiscriminatorValue'])),
            'userSettings' => fn(ParseNode $n) => $o->setUserSettings($n->getCollectionOfObjectValues([CloudPcUserSetting::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the galleryImages property value. The gallery image resource on Cloud PC.
     * @return array<CloudPcGalleryImage>|null
    */
    public function getGalleryImages(): ?array {
        return $this->getBackingStore()->get('galleryImages');
    }

    /**
     * Gets the onPremisesConnections property value. A defined collection of Azure resource information that can be used to establish on-premises network connectivity for Cloud PCs.
     * @return array<CloudPcOnPremisesConnection>|null
    */
    public function getOnPremisesConnections(): ?array {
        return $this->getBackingStore()->get('onPremisesConnections');
    }

    /**
     * Gets the organizationSettings property value. The Cloud PC organization settings for a tenant.
     * @return CloudPcOrganizationSettings|null
    */
    public function getOrganizationSettings(): ?CloudPcOrganizationSettings {
        return $this->getBackingStore()->get('organizationSettings');
    }

    /**
     * Gets the provisioningPolicies property value. Cloud PC provisioning policy.
     * @return array<CloudPcProvisioningPolicy>|null
    */
    public function getProvisioningPolicies(): ?array {
        return $this->getBackingStore()->get('provisioningPolicies');
    }

    /**
     * Gets the reports property value. Cloud PC related reports.
     * @return CloudPcReports|null
    */
    public function getReports(): ?CloudPcReports {
        return $this->getBackingStore()->get('reports');
    }

    /**
     * Gets the servicePlans property value. Cloud PC service plans.
     * @return array<CloudPcServicePlan>|null
    */
    public function getServicePlans(): ?array {
        return $this->getBackingStore()->get('servicePlans');
    }

    /**
     * Gets the sharedUseServicePlans property value. Cloud PC shared-use service plans.
     * @return array<CloudPcSharedUseServicePlan>|null
    */
    public function getSharedUseServicePlans(): ?array {
        return $this->getBackingStore()->get('sharedUseServicePlans');
    }

    /**
     * Gets the snapshots property value. Cloud PC snapshots.
     * @return array<CloudPcSnapshot>|null
    */
    public function getSnapshots(): ?array {
        return $this->getBackingStore()->get('snapshots');
    }

    /**
     * Gets the supportedRegions property value. Cloud PC supported regions.
     * @return array<CloudPcSupportedRegion>|null
    */
    public function getSupportedRegions(): ?array {
        return $this->getBackingStore()->get('supportedRegions');
    }

    /**
     * Gets the userSettings property value. Cloud PC user settings.
     * @return array<CloudPcUserSetting>|null
    */
    public function getUserSettings(): ?array {
        return $this->getBackingStore()->get('userSettings');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('auditEvents', $this->getAuditEvents());
        $writer->writeCollectionOfObjectValues('cloudPCs', $this->getCloudPCs());
        $writer->writeObjectValue('crossCloudGovernmentOrganizationMapping', $this->getCrossCloudGovernmentOrganizationMapping());
        $writer->writeCollectionOfObjectValues('deviceImages', $this->getDeviceImages());
        $writer->writeCollectionOfObjectValues('externalPartnerSettings', $this->getExternalPartnerSettings());
        $writer->writeCollectionOfObjectValues('galleryImages', $this->getGalleryImages());
        $writer->writeCollectionOfObjectValues('onPremisesConnections', $this->getOnPremisesConnections());
        $writer->writeObjectValue('organizationSettings', $this->getOrganizationSettings());
        $writer->writeCollectionOfObjectValues('provisioningPolicies', $this->getProvisioningPolicies());
        $writer->writeObjectValue('reports', $this->getReports());
        $writer->writeCollectionOfObjectValues('servicePlans', $this->getServicePlans());
        $writer->writeCollectionOfObjectValues('sharedUseServicePlans', $this->getSharedUseServicePlans());
        $writer->writeCollectionOfObjectValues('snapshots', $this->getSnapshots());
        $writer->writeCollectionOfObjectValues('supportedRegions', $this->getSupportedRegions());
        $writer->writeCollectionOfObjectValues('userSettings', $this->getUserSettings());
    }

    /**
     * Sets the auditEvents property value. Cloud PC audit event.
     * @param array<CloudPcAuditEvent>|null $value Value to set for the auditEvents property.
    */
    public function setAuditEvents(?array $value): void {
        $this->getBackingStore()->set('auditEvents', $value);
    }

    /**
     * Sets the cloudPCs property value. Cloud managed virtual desktops.
     * @param array<CloudPC>|null $value Value to set for the cloudPCs property.
    */
    public function setCloudPCs(?array $value): void {
        $this->getBackingStore()->set('cloudPCs', $value);
    }

    /**
     * Sets the crossCloudGovernmentOrganizationMapping property value. Cloud PC organization mapping between public and US Government Community Cloud (GCC) organizations.
     * @param CloudPcCrossCloudGovernmentOrganizationMapping|null $value Value to set for the crossCloudGovernmentOrganizationMapping property.
    */
    public function setCrossCloudGovernmentOrganizationMapping(?CloudPcCrossCloudGovernmentOrganizationMapping $value): void {
        $this->getBackingStore()->set('crossCloudGovernmentOrganizationMapping', $value);
    }

    /**
     * Sets the deviceImages property value. The image resource on Cloud PC.
     * @param array<CloudPcDeviceImage>|null $value Value to set for the deviceImages property.
    */
    public function setDeviceImages(?array $value): void {
        $this->getBackingStore()->set('deviceImages', $value);
    }

    /**
     * Sets the externalPartnerSettings property value. The external partner settings on a Cloud PC.
     * @param array<CloudPcExternalPartnerSetting>|null $value Value to set for the externalPartnerSettings property.
    */
    public function setExternalPartnerSettings(?array $value): void {
        $this->getBackingStore()->set('externalPartnerSettings', $value);
    }

    /**
     * Sets the galleryImages property value. The gallery image resource on Cloud PC.
     * @param array<CloudPcGalleryImage>|null $value Value to set for the galleryImages property.
    */
    public function setGalleryImages(?array $value): void {
        $this->getBackingStore()->set('galleryImages', $value);
    }

    /**
     * Sets the onPremisesConnections property value. A defined collection of Azure resource information that can be used to establish on-premises network connectivity for Cloud PCs.
     * @param array<CloudPcOnPremisesConnection>|null $value Value to set for the onPremisesConnections property.
    */
    public function setOnPremisesConnections(?array $value): void {
        $this->getBackingStore()->set('onPremisesConnections', $value);
    }

    /**
     * Sets the organizationSettings property value. The Cloud PC organization settings for a tenant.
     * @param CloudPcOrganizationSettings|null $value Value to set for the organizationSettings property.
    */
    public function setOrganizationSettings(?CloudPcOrganizationSettings $value): void {
        $this->getBackingStore()->set('organizationSettings', $value);
    }

    /**
     * Sets the provisioningPolicies property value. Cloud PC provisioning policy.
     * @param array<CloudPcProvisioningPolicy>|null $value Value to set for the provisioningPolicies property.
    */
    public function setProvisioningPolicies(?array $value): void {
        $this->getBackingStore()->set('provisioningPolicies', $value);
    }

    /**
     * Sets the reports property value. Cloud PC related reports.
     * @param CloudPcReports|null $value Value to set for the reports property.
    */
    public function setReports(?CloudPcReports $value): void {
        $this->getBackingStore()->set('reports', $value);
    }

    /**
     * Sets the servicePlans property value. Cloud PC service plans.
     * @param array<CloudPcServicePlan>|null $value Value to set for the servicePlans property.
    */
    public function setServicePlans(?array $value): void {
        $this->getBackingStore()->set('servicePlans', $value);
    }

    /**
     * Sets the sharedUseServicePlans property value. Cloud PC shared-use service plans.
     * @param array<CloudPcSharedUseServicePlan>|null $value Value to set for the sharedUseServicePlans property.
    */
    public function setSharedUseServicePlans(?array $value): void {
        $this->getBackingStore()->set('sharedUseServicePlans', $value);
    }

    /**
     * Sets the snapshots property value. Cloud PC snapshots.
     * @param array<CloudPcSnapshot>|null $value Value to set for the snapshots property.
    */
    public function setSnapshots(?array $value): void {
        $this->getBackingStore()->set('snapshots', $value);
    }

    /**
     * Sets the supportedRegions property value. Cloud PC supported regions.
     * @param array<CloudPcSupportedRegion>|null $value Value to set for the supportedRegions property.
    */
    public function setSupportedRegions(?array $value): void {
        $this->getBackingStore()->set('supportedRegions', $value);
    }

    /**
     * Sets the userSettings property value. Cloud PC user settings.
     * @param array<CloudPcUserSetting>|null $value Value to set for the userSettings property.
    */
    public function setUserSettings(?array $value): void {
        $this->getBackingStore()->set('userSettings', $value);
    }

}
