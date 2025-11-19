<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
        $val = $this->getBackingStore()->get('auditEvents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcAuditEvent::class);
            /** @var array<CloudPcAuditEvent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'auditEvents'");
    }

    /**
     * Gets the bulkActions property value. Bulk actions applied to a Cloud PC.
     * @return array<CloudPcBulkAction>|null
    */
    public function getBulkActions(): ?array {
        $val = $this->getBackingStore()->get('bulkActions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcBulkAction::class);
            /** @var array<CloudPcBulkAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bulkActions'");
    }

    /**
     * Gets the cloudApps property value. A collection of cloud apps that are built on frontline shared options and provide Windows 365 end users with access to app-only sessions instead of a full desktop experience.
     * @return array<CloudPcCloudApp>|null
    */
    public function getCloudApps(): ?array {
        $val = $this->getBackingStore()->get('cloudApps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcCloudApp::class);
            /** @var array<CloudPcCloudApp>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudApps'");
    }

    /**
     * Gets the cloudPCs property value. Cloud managed virtual desktops.
     * @return array<CloudPC>|null
    */
    public function getCloudPCs(): ?array {
        $val = $this->getBackingStore()->get('cloudPCs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPC::class);
            /** @var array<CloudPC>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudPCs'");
    }

    /**
     * Gets the crossCloudGovernmentOrganizationMapping property value. Cloud PC organization mapping between public and US Government Community Cloud (GCC) organizations.
     * @return CloudPcCrossCloudGovernmentOrganizationMapping|null
    */
    public function getCrossCloudGovernmentOrganizationMapping(): ?CloudPcCrossCloudGovernmentOrganizationMapping {
        $val = $this->getBackingStore()->get('crossCloudGovernmentOrganizationMapping');
        if (is_null($val) || $val instanceof CloudPcCrossCloudGovernmentOrganizationMapping) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'crossCloudGovernmentOrganizationMapping'");
    }

    /**
     * Gets the deviceImages property value. The image resource on Cloud PC.
     * @return array<CloudPcDeviceImage>|null
    */
    public function getDeviceImages(): ?array {
        $val = $this->getBackingStore()->get('deviceImages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcDeviceImage::class);
            /** @var array<CloudPcDeviceImage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceImages'");
    }

    /**
     * Gets the externalPartners property value. The external partners on a Cloud PC.
     * @return array<CloudPcExternalPartner>|null
    */
    public function getExternalPartners(): ?array {
        $val = $this->getBackingStore()->get('externalPartners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcExternalPartner::class);
            /** @var array<CloudPcExternalPartner>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalPartners'");
    }

    /**
     * Gets the externalPartnerSettings property value. The external partner settings on a Cloud PC.
     * @return array<CloudPcExternalPartnerSetting>|null
    */
    public function getExternalPartnerSettings(): ?array {
        $val = $this->getBackingStore()->get('externalPartnerSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcExternalPartnerSetting::class);
            /** @var array<CloudPcExternalPartnerSetting>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalPartnerSettings'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'auditEvents' => fn(ParseNode $n) => $o->setAuditEvents($n->getCollectionOfObjectValues([CloudPcAuditEvent::class, 'createFromDiscriminatorValue'])),
            'bulkActions' => fn(ParseNode $n) => $o->setBulkActions($n->getCollectionOfObjectValues([CloudPcBulkAction::class, 'createFromDiscriminatorValue'])),
            'cloudApps' => fn(ParseNode $n) => $o->setCloudApps($n->getCollectionOfObjectValues([CloudPcCloudApp::class, 'createFromDiscriminatorValue'])),
            'cloudPCs' => fn(ParseNode $n) => $o->setCloudPCs($n->getCollectionOfObjectValues([CloudPC::class, 'createFromDiscriminatorValue'])),
            'crossCloudGovernmentOrganizationMapping' => fn(ParseNode $n) => $o->setCrossCloudGovernmentOrganizationMapping($n->getObjectValue([CloudPcCrossCloudGovernmentOrganizationMapping::class, 'createFromDiscriminatorValue'])),
            'deviceImages' => fn(ParseNode $n) => $o->setDeviceImages($n->getCollectionOfObjectValues([CloudPcDeviceImage::class, 'createFromDiscriminatorValue'])),
            'externalPartners' => fn(ParseNode $n) => $o->setExternalPartners($n->getCollectionOfObjectValues([CloudPcExternalPartner::class, 'createFromDiscriminatorValue'])),
            'externalPartnerSettings' => fn(ParseNode $n) => $o->setExternalPartnerSettings($n->getCollectionOfObjectValues([CloudPcExternalPartnerSetting::class, 'createFromDiscriminatorValue'])),
            'frontLineServicePlans' => fn(ParseNode $n) => $o->setFrontLineServicePlans($n->getCollectionOfObjectValues([CloudPcFrontLineServicePlan::class, 'createFromDiscriminatorValue'])),
            'galleryImages' => fn(ParseNode $n) => $o->setGalleryImages($n->getCollectionOfObjectValues([CloudPcGalleryImage::class, 'createFromDiscriminatorValue'])),
            'managedLicenses' => fn(ParseNode $n) => $o->setManagedLicenses($n->getCollectionOfObjectValues([CloudPcManagedLicense::class, 'createFromDiscriminatorValue'])),
            'onPremisesConnections' => fn(ParseNode $n) => $o->setOnPremisesConnections($n->getCollectionOfObjectValues([CloudPcOnPremisesConnection::class, 'createFromDiscriminatorValue'])),
            'organizationSettings' => fn(ParseNode $n) => $o->setOrganizationSettings($n->getObjectValue([CloudPcOrganizationSettings::class, 'createFromDiscriminatorValue'])),
            'provisioningPolicies' => fn(ParseNode $n) => $o->setProvisioningPolicies($n->getCollectionOfObjectValues([CloudPcProvisioningPolicy::class, 'createFromDiscriminatorValue'])),
            'report' => fn(ParseNode $n) => $o->setReport($n->getObjectValue([CloudPcReport::class, 'createFromDiscriminatorValue'])),
            'reports' => fn(ParseNode $n) => $o->setReports($n->getObjectValue([CloudPcReports::class, 'createFromDiscriminatorValue'])),
            'servicePlans' => fn(ParseNode $n) => $o->setServicePlans($n->getCollectionOfObjectValues([CloudPcServicePlan::class, 'createFromDiscriminatorValue'])),
            'snapshots' => fn(ParseNode $n) => $o->setSnapshots($n->getCollectionOfObjectValues([CloudPcSnapshot::class, 'createFromDiscriminatorValue'])),
            'supportedRegions' => fn(ParseNode $n) => $o->setSupportedRegions($n->getCollectionOfObjectValues([CloudPcSupportedRegion::class, 'createFromDiscriminatorValue'])),
            'userSettings' => fn(ParseNode $n) => $o->setUserSettings($n->getCollectionOfObjectValues([CloudPcUserSetting::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the frontLineServicePlans property value. Front-line service plans for a Cloud PC.
     * @return array<CloudPcFrontLineServicePlan>|null
    */
    public function getFrontLineServicePlans(): ?array {
        $val = $this->getBackingStore()->get('frontLineServicePlans');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcFrontLineServicePlan::class);
            /** @var array<CloudPcFrontLineServicePlan>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'frontLineServicePlans'");
    }

    /**
     * Gets the galleryImages property value. The gallery image resource on Cloud PC.
     * @return array<CloudPcGalleryImage>|null
    */
    public function getGalleryImages(): ?array {
        $val = $this->getBackingStore()->get('galleryImages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcGalleryImage::class);
            /** @var array<CloudPcGalleryImage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'galleryImages'");
    }

    /**
     * Gets the managedLicenses property value. The managed licenses for Cloud PCs in the organization.
     * @return array<CloudPcManagedLicense>|null
    */
    public function getManagedLicenses(): ?array {
        $val = $this->getBackingStore()->get('managedLicenses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcManagedLicense::class);
            /** @var array<CloudPcManagedLicense>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedLicenses'");
    }

    /**
     * Gets the onPremisesConnections property value. A defined collection of Azure resource information that can be used to establish on-premises network connectivity for Cloud PCs.
     * @return array<CloudPcOnPremisesConnection>|null
    */
    public function getOnPremisesConnections(): ?array {
        $val = $this->getBackingStore()->get('onPremisesConnections');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcOnPremisesConnection::class);
            /** @var array<CloudPcOnPremisesConnection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesConnections'");
    }

    /**
     * Gets the organizationSettings property value. The Cloud PC organization settings for a tenant.
     * @return CloudPcOrganizationSettings|null
    */
    public function getOrganizationSettings(): ?CloudPcOrganizationSettings {
        $val = $this->getBackingStore()->get('organizationSettings');
        if (is_null($val) || $val instanceof CloudPcOrganizationSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organizationSettings'");
    }

    /**
     * Gets the provisioningPolicies property value. Cloud PC provisioning policy.
     * @return array<CloudPcProvisioningPolicy>|null
    */
    public function getProvisioningPolicies(): ?array {
        $val = $this->getBackingStore()->get('provisioningPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcProvisioningPolicy::class);
            /** @var array<CloudPcProvisioningPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'provisioningPolicies'");
    }

    /**
     * Gets the report property value. Cloud PC-related reports. Read-only.
     * @return CloudPcReport|null
    */
    public function getReport(): ?CloudPcReport {
        $val = $this->getBackingStore()->get('report');
        if (is_null($val) || $val instanceof CloudPcReport) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'report'");
    }

    /**
     * Gets the reports property value. Cloud PC-related reports.
     * @return CloudPcReports|null
    */
    public function getReports(): ?CloudPcReports {
        $val = $this->getBackingStore()->get('reports');
        if (is_null($val) || $val instanceof CloudPcReports) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reports'");
    }

    /**
     * Gets the servicePlans property value. Cloud PC service plans.
     * @return array<CloudPcServicePlan>|null
    */
    public function getServicePlans(): ?array {
        $val = $this->getBackingStore()->get('servicePlans');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcServicePlan::class);
            /** @var array<CloudPcServicePlan>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePlans'");
    }

    /**
     * Gets the snapshots property value. Cloud PC snapshots.
     * @return array<CloudPcSnapshot>|null
    */
    public function getSnapshots(): ?array {
        $val = $this->getBackingStore()->get('snapshots');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcSnapshot::class);
            /** @var array<CloudPcSnapshot>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'snapshots'");
    }

    /**
     * Gets the supportedRegions property value. Cloud PC supported regions.
     * @return array<CloudPcSupportedRegion>|null
    */
    public function getSupportedRegions(): ?array {
        $val = $this->getBackingStore()->get('supportedRegions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcSupportedRegion::class);
            /** @var array<CloudPcSupportedRegion>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportedRegions'");
    }

    /**
     * Gets the userSettings property value. Cloud PC user settings.
     * @return array<CloudPcUserSetting>|null
    */
    public function getUserSettings(): ?array {
        $val = $this->getBackingStore()->get('userSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcUserSetting::class);
            /** @var array<CloudPcUserSetting>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userSettings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('auditEvents', $this->getAuditEvents());
        $writer->writeCollectionOfObjectValues('bulkActions', $this->getBulkActions());
        $writer->writeCollectionOfObjectValues('cloudApps', $this->getCloudApps());
        $writer->writeCollectionOfObjectValues('cloudPCs', $this->getCloudPCs());
        $writer->writeObjectValue('crossCloudGovernmentOrganizationMapping', $this->getCrossCloudGovernmentOrganizationMapping());
        $writer->writeCollectionOfObjectValues('deviceImages', $this->getDeviceImages());
        $writer->writeCollectionOfObjectValues('externalPartners', $this->getExternalPartners());
        $writer->writeCollectionOfObjectValues('externalPartnerSettings', $this->getExternalPartnerSettings());
        $writer->writeCollectionOfObjectValues('frontLineServicePlans', $this->getFrontLineServicePlans());
        $writer->writeCollectionOfObjectValues('galleryImages', $this->getGalleryImages());
        $writer->writeCollectionOfObjectValues('managedLicenses', $this->getManagedLicenses());
        $writer->writeCollectionOfObjectValues('onPremisesConnections', $this->getOnPremisesConnections());
        $writer->writeObjectValue('organizationSettings', $this->getOrganizationSettings());
        $writer->writeCollectionOfObjectValues('provisioningPolicies', $this->getProvisioningPolicies());
        $writer->writeObjectValue('report', $this->getReport());
        $writer->writeObjectValue('reports', $this->getReports());
        $writer->writeCollectionOfObjectValues('servicePlans', $this->getServicePlans());
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
     * Sets the bulkActions property value. Bulk actions applied to a Cloud PC.
     * @param array<CloudPcBulkAction>|null $value Value to set for the bulkActions property.
    */
    public function setBulkActions(?array $value): void {
        $this->getBackingStore()->set('bulkActions', $value);
    }

    /**
     * Sets the cloudApps property value. A collection of cloud apps that are built on frontline shared options and provide Windows 365 end users with access to app-only sessions instead of a full desktop experience.
     * @param array<CloudPcCloudApp>|null $value Value to set for the cloudApps property.
    */
    public function setCloudApps(?array $value): void {
        $this->getBackingStore()->set('cloudApps', $value);
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
     * Sets the externalPartners property value. The external partners on a Cloud PC.
     * @param array<CloudPcExternalPartner>|null $value Value to set for the externalPartners property.
    */
    public function setExternalPartners(?array $value): void {
        $this->getBackingStore()->set('externalPartners', $value);
    }

    /**
     * Sets the externalPartnerSettings property value. The external partner settings on a Cloud PC.
     * @param array<CloudPcExternalPartnerSetting>|null $value Value to set for the externalPartnerSettings property.
    */
    public function setExternalPartnerSettings(?array $value): void {
        $this->getBackingStore()->set('externalPartnerSettings', $value);
    }

    /**
     * Sets the frontLineServicePlans property value. Front-line service plans for a Cloud PC.
     * @param array<CloudPcFrontLineServicePlan>|null $value Value to set for the frontLineServicePlans property.
    */
    public function setFrontLineServicePlans(?array $value): void {
        $this->getBackingStore()->set('frontLineServicePlans', $value);
    }

    /**
     * Sets the galleryImages property value. The gallery image resource on Cloud PC.
     * @param array<CloudPcGalleryImage>|null $value Value to set for the galleryImages property.
    */
    public function setGalleryImages(?array $value): void {
        $this->getBackingStore()->set('galleryImages', $value);
    }

    /**
     * Sets the managedLicenses property value. The managed licenses for Cloud PCs in the organization.
     * @param array<CloudPcManagedLicense>|null $value Value to set for the managedLicenses property.
    */
    public function setManagedLicenses(?array $value): void {
        $this->getBackingStore()->set('managedLicenses', $value);
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
     * Sets the report property value. Cloud PC-related reports. Read-only.
     * @param CloudPcReport|null $value Value to set for the report property.
    */
    public function setReport(?CloudPcReport $value): void {
        $this->getBackingStore()->set('report', $value);
    }

    /**
     * Sets the reports property value. Cloud PC-related reports.
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
