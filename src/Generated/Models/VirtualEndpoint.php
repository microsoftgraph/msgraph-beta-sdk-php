<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VirtualEndpoint extends Entity implements Parsable 
{
    /**
     * @var array<CloudPcAuditEvent>|null $auditEvents Cloud PC audit event.
    */
    private ?array $auditEvents = null;
    
    /**
     * @var array<CloudPC>|null $cloudPCs Cloud managed virtual desktops.
    */
    private ?array $cloudPCs = null;
    
    /**
     * @var array<CloudPcDeviceImage>|null $deviceImages The image resource on Cloud PC.
    */
    private ?array $deviceImages = null;
    
    /**
     * @var array<CloudPcExternalPartnerSetting>|null $externalPartnerSettings The external partner settings on a Cloud PC.
    */
    private ?array $externalPartnerSettings = null;
    
    /**
     * @var array<CloudPcGalleryImage>|null $galleryImages The gallery image resource on Cloud PC.
    */
    private ?array $galleryImages = null;
    
    /**
     * @var array<CloudPcOnPremisesConnection>|null $onPremisesConnections A defined collection of Azure resource information that can be used to establish on-premises network connectivity for Cloud PCs.
    */
    private ?array $onPremisesConnections = null;
    
    /**
     * @var CloudPcOrganizationSettings|null $organizationSettings The Cloud PC organization settings for a tenant.
    */
    private ?CloudPcOrganizationSettings $organizationSettings = null;
    
    /**
     * @var array<CloudPcProvisioningPolicy>|null $provisioningPolicies Cloud PC provisioning policy.
    */
    private ?array $provisioningPolicies = null;
    
    /**
     * @var array<CloudPcServicePlan>|null $servicePlans Cloud PC service plans.
    */
    private ?array $servicePlans = null;
    
    /**
     * @var array<CloudPcSnapshot>|null $snapshots Cloud PC snapshots.
    */
    private ?array $snapshots = null;
    
    /**
     * @var array<CloudPcSupportedRegion>|null $supportedRegions Cloud PC supported regions.
    */
    private ?array $supportedRegions = null;
    
    /**
     * @var array<CloudPcUserSetting>|null $userSettings Cloud PC user settings.
    */
    private ?array $userSettings = null;
    
    /**
     * Instantiates a new VirtualEndpoint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.virtualEndpoint');
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
        return $this->auditEvents;
    }

    /**
     * Gets the cloudPCs property value. Cloud managed virtual desktops.
     * @return array<CloudPC>|null
    */
    public function getCloudPCs(): ?array {
        return $this->cloudPCs;
    }

    /**
     * Gets the deviceImages property value. The image resource on Cloud PC.
     * @return array<CloudPcDeviceImage>|null
    */
    public function getDeviceImages(): ?array {
        return $this->deviceImages;
    }

    /**
     * Gets the externalPartnerSettings property value. The external partner settings on a Cloud PC.
     * @return array<CloudPcExternalPartnerSetting>|null
    */
    public function getExternalPartnerSettings(): ?array {
        return $this->externalPartnerSettings;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'auditEvents' => function (ParseNode $n) use ($o) { $o->setAuditEvents($n->getCollectionOfObjectValues(array(CloudPcAuditEvent::class, 'createFromDiscriminatorValue'))); },
            'cloudPCs' => function (ParseNode $n) use ($o) { $o->setCloudPCs($n->getCollectionOfObjectValues(array(CloudPC::class, 'createFromDiscriminatorValue'))); },
            'deviceImages' => function (ParseNode $n) use ($o) { $o->setDeviceImages($n->getCollectionOfObjectValues(array(CloudPcDeviceImage::class, 'createFromDiscriminatorValue'))); },
            'externalPartnerSettings' => function (ParseNode $n) use ($o) { $o->setExternalPartnerSettings($n->getCollectionOfObjectValues(array(CloudPcExternalPartnerSetting::class, 'createFromDiscriminatorValue'))); },
            'galleryImages' => function (ParseNode $n) use ($o) { $o->setGalleryImages($n->getCollectionOfObjectValues(array(CloudPcGalleryImage::class, 'createFromDiscriminatorValue'))); },
            'onPremisesConnections' => function (ParseNode $n) use ($o) { $o->setOnPremisesConnections($n->getCollectionOfObjectValues(array(CloudPcOnPremisesConnection::class, 'createFromDiscriminatorValue'))); },
            'organizationSettings' => function (ParseNode $n) use ($o) { $o->setOrganizationSettings($n->getObjectValue(array(CloudPcOrganizationSettings::class, 'createFromDiscriminatorValue'))); },
            'provisioningPolicies' => function (ParseNode $n) use ($o) { $o->setProvisioningPolicies($n->getCollectionOfObjectValues(array(CloudPcProvisioningPolicy::class, 'createFromDiscriminatorValue'))); },
            'servicePlans' => function (ParseNode $n) use ($o) { $o->setServicePlans($n->getCollectionOfObjectValues(array(CloudPcServicePlan::class, 'createFromDiscriminatorValue'))); },
            'snapshots' => function (ParseNode $n) use ($o) { $o->setSnapshots($n->getCollectionOfObjectValues(array(CloudPcSnapshot::class, 'createFromDiscriminatorValue'))); },
            'supportedRegions' => function (ParseNode $n) use ($o) { $o->setSupportedRegions($n->getCollectionOfObjectValues(array(CloudPcSupportedRegion::class, 'createFromDiscriminatorValue'))); },
            'userSettings' => function (ParseNode $n) use ($o) { $o->setUserSettings($n->getCollectionOfObjectValues(array(CloudPcUserSetting::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the galleryImages property value. The gallery image resource on Cloud PC.
     * @return array<CloudPcGalleryImage>|null
    */
    public function getGalleryImages(): ?array {
        return $this->galleryImages;
    }

    /**
     * Gets the onPremisesConnections property value. A defined collection of Azure resource information that can be used to establish on-premises network connectivity for Cloud PCs.
     * @return array<CloudPcOnPremisesConnection>|null
    */
    public function getOnPremisesConnections(): ?array {
        return $this->onPremisesConnections;
    }

    /**
     * Gets the organizationSettings property value. The Cloud PC organization settings for a tenant.
     * @return CloudPcOrganizationSettings|null
    */
    public function getOrganizationSettings(): ?CloudPcOrganizationSettings {
        return $this->organizationSettings;
    }

    /**
     * Gets the provisioningPolicies property value. Cloud PC provisioning policy.
     * @return array<CloudPcProvisioningPolicy>|null
    */
    public function getProvisioningPolicies(): ?array {
        return $this->provisioningPolicies;
    }

    /**
     * Gets the servicePlans property value. Cloud PC service plans.
     * @return array<CloudPcServicePlan>|null
    */
    public function getServicePlans(): ?array {
        return $this->servicePlans;
    }

    /**
     * Gets the snapshots property value. Cloud PC snapshots.
     * @return array<CloudPcSnapshot>|null
    */
    public function getSnapshots(): ?array {
        return $this->snapshots;
    }

    /**
     * Gets the supportedRegions property value. Cloud PC supported regions.
     * @return array<CloudPcSupportedRegion>|null
    */
    public function getSupportedRegions(): ?array {
        return $this->supportedRegions;
    }

    /**
     * Gets the userSettings property value. Cloud PC user settings.
     * @return array<CloudPcUserSetting>|null
    */
    public function getUserSettings(): ?array {
        return $this->userSettings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('auditEvents', $this->auditEvents);
        $writer->writeCollectionOfObjectValues('cloudPCs', $this->cloudPCs);
        $writer->writeCollectionOfObjectValues('deviceImages', $this->deviceImages);
        $writer->writeCollectionOfObjectValues('externalPartnerSettings', $this->externalPartnerSettings);
        $writer->writeCollectionOfObjectValues('galleryImages', $this->galleryImages);
        $writer->writeCollectionOfObjectValues('onPremisesConnections', $this->onPremisesConnections);
        $writer->writeObjectValue('organizationSettings', $this->organizationSettings);
        $writer->writeCollectionOfObjectValues('provisioningPolicies', $this->provisioningPolicies);
        $writer->writeCollectionOfObjectValues('servicePlans', $this->servicePlans);
        $writer->writeCollectionOfObjectValues('snapshots', $this->snapshots);
        $writer->writeCollectionOfObjectValues('supportedRegions', $this->supportedRegions);
        $writer->writeCollectionOfObjectValues('userSettings', $this->userSettings);
    }

    /**
     * Sets the auditEvents property value. Cloud PC audit event.
     *  @param array<CloudPcAuditEvent>|null $value Value to set for the auditEvents property.
    */
    public function setAuditEvents(?array $value ): void {
        $this->auditEvents = $value;
    }

    /**
     * Sets the cloudPCs property value. Cloud managed virtual desktops.
     *  @param array<CloudPC>|null $value Value to set for the cloudPCs property.
    */
    public function setCloudPCs(?array $value ): void {
        $this->cloudPCs = $value;
    }

    /**
     * Sets the deviceImages property value. The image resource on Cloud PC.
     *  @param array<CloudPcDeviceImage>|null $value Value to set for the deviceImages property.
    */
    public function setDeviceImages(?array $value ): void {
        $this->deviceImages = $value;
    }

    /**
     * Sets the externalPartnerSettings property value. The external partner settings on a Cloud PC.
     *  @param array<CloudPcExternalPartnerSetting>|null $value Value to set for the externalPartnerSettings property.
    */
    public function setExternalPartnerSettings(?array $value ): void {
        $this->externalPartnerSettings = $value;
    }

    /**
     * Sets the galleryImages property value. The gallery image resource on Cloud PC.
     *  @param array<CloudPcGalleryImage>|null $value Value to set for the galleryImages property.
    */
    public function setGalleryImages(?array $value ): void {
        $this->galleryImages = $value;
    }

    /**
     * Sets the onPremisesConnections property value. A defined collection of Azure resource information that can be used to establish on-premises network connectivity for Cloud PCs.
     *  @param array<CloudPcOnPremisesConnection>|null $value Value to set for the onPremisesConnections property.
    */
    public function setOnPremisesConnections(?array $value ): void {
        $this->onPremisesConnections = $value;
    }

    /**
     * Sets the organizationSettings property value. The Cloud PC organization settings for a tenant.
     *  @param CloudPcOrganizationSettings|null $value Value to set for the organizationSettings property.
    */
    public function setOrganizationSettings(?CloudPcOrganizationSettings $value ): void {
        $this->organizationSettings = $value;
    }

    /**
     * Sets the provisioningPolicies property value. Cloud PC provisioning policy.
     *  @param array<CloudPcProvisioningPolicy>|null $value Value to set for the provisioningPolicies property.
    */
    public function setProvisioningPolicies(?array $value ): void {
        $this->provisioningPolicies = $value;
    }

    /**
     * Sets the servicePlans property value. Cloud PC service plans.
     *  @param array<CloudPcServicePlan>|null $value Value to set for the servicePlans property.
    */
    public function setServicePlans(?array $value ): void {
        $this->servicePlans = $value;
    }

    /**
     * Sets the snapshots property value. Cloud PC snapshots.
     *  @param array<CloudPcSnapshot>|null $value Value to set for the snapshots property.
    */
    public function setSnapshots(?array $value ): void {
        $this->snapshots = $value;
    }

    /**
     * Sets the supportedRegions property value. Cloud PC supported regions.
     *  @param array<CloudPcSupportedRegion>|null $value Value to set for the supportedRegions property.
    */
    public function setSupportedRegions(?array $value ): void {
        $this->supportedRegions = $value;
    }

    /**
     * Sets the userSettings property value. Cloud PC user settings.
     *  @param array<CloudPcUserSetting>|null $value Value to set for the userSettings property.
    */
    public function setUserSettings(?array $value ): void {
        $this->userSettings = $value;
    }

}
