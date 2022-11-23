<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedDeviceCompliance extends Entity implements Parsable 
{
    /**
     * Instantiates a new managedDeviceCompliance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedDeviceCompliance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedDeviceCompliance {
        return new ManagedDeviceCompliance();
    }

    /**
     * Gets the complianceStatus property value. Compliance state of the device. This property is read-only. Possible values are: unknown, compliant, noncompliant, conflict, error, inGracePeriod, configManager. Optional. Read-only.
     * @return string|null
    */
    public function getComplianceStatus(): ?string {
        return $this->getBackingStore()->get('complianceStatus');
    }

    /**
     * Gets the deviceType property value. Platform of the device. This property is read-only. Possible values are: desktop, windowsRT, winMO6, nokia, windowsPhone, mac, winCE, winEmbedded, iPhone, iPad, iPod, android, iSocConsumer, unix, macMDM, holoLens, surfaceHub, androidForWork, androidEnterprise, windows10x, androidnGMS, chromeOS, linux, blackberry, palm, unknown, cloudPC.  Optional. Read-only.
     * @return string|null
    */
    public function getDeviceType(): ?string {
        return $this->getBackingStore()->get('deviceType');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'complianceStatus' => fn(ParseNode $n) => $o->setComplianceStatus($n->getStringValue()),
            'deviceType' => fn(ParseNode $n) => $o->setDeviceType($n->getStringValue()),
            'inGracePeriodUntilDateTime' => fn(ParseNode $n) => $o->setInGracePeriodUntilDateTime($n->getDateTimeValue()),
            'lastRefreshedDateTime' => fn(ParseNode $n) => $o->setLastRefreshedDateTime($n->getDateTimeValue()),
            'lastSyncDateTime' => fn(ParseNode $n) => $o->setLastSyncDateTime($n->getDateTimeValue()),
            'managedDeviceId' => fn(ParseNode $n) => $o->setManagedDeviceId($n->getStringValue()),
            'managedDeviceName' => fn(ParseNode $n) => $o->setManagedDeviceName($n->getStringValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'osDescription' => fn(ParseNode $n) => $o->setOsDescription($n->getStringValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
            'ownerType' => fn(ParseNode $n) => $o->setOwnerType($n->getStringValue()),
            'tenantDisplayName' => fn(ParseNode $n) => $o->setTenantDisplayName($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the inGracePeriodUntilDateTime property value. The date and time when the grace period will expire. Optional. Read-only.
     * @return DateTime|null
    */
    public function getInGracePeriodUntilDateTime(): ?DateTime {
        return $this->getBackingStore()->get('inGracePeriodUntilDateTime');
    }

    /**
     * Gets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastRefreshedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastRefreshedDateTime');
    }

    /**
     * Gets the lastSyncDateTime property value. The date and time that the device last completed a successful sync with Microsoft Endpoint Manager. Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastSyncDateTime');
    }

    /**
     * Gets the managedDeviceId property value. The identifier for the managed device in Microsoft Endpoint Manager. Optional. Read-only.
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->getBackingStore()->get('managedDeviceId');
    }

    /**
     * Gets the managedDeviceName property value. The display name for the managed device. Optional. Read-only.
     * @return string|null
    */
    public function getManagedDeviceName(): ?string {
        return $this->getBackingStore()->get('managedDeviceName');
    }

    /**
     * Gets the manufacturer property value. The manufacture for the device. Optional. Read-only.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->getBackingStore()->get('manufacturer');
    }

    /**
     * Gets the model property value. The model for the device. Optional. Read-only.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->getBackingStore()->get('model');
    }

    /**
     * Gets the osDescription property value. The description of the operating system for the managed device. Optional. Read-only.
     * @return string|null
    */
    public function getOsDescription(): ?string {
        return $this->getBackingStore()->get('osDescription');
    }

    /**
     * Gets the osVersion property value. The version of the operating system for the managed device. Optional. Read-only.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->getBackingStore()->get('osVersion');
    }

    /**
     * Gets the ownerType property value. The type of owner for the managed device. Optional. Read-only.
     * @return string|null
    */
    public function getOwnerType(): ?string {
        return $this->getBackingStore()->get('ownerType');
    }

    /**
     * Gets the tenantDisplayName property value. The display name for the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getTenantDisplayName(): ?string {
        return $this->getBackingStore()->get('tenantDisplayName');
    }

    /**
     * Gets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->getBackingStore()->get('tenantId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('complianceStatus', $this->getComplianceStatus());
        $writer->writeStringValue('deviceType', $this->getDeviceType());
        $writer->writeDateTimeValue('inGracePeriodUntilDateTime', $this->getInGracePeriodUntilDateTime());
        $writer->writeDateTimeValue('lastRefreshedDateTime', $this->getLastRefreshedDateTime());
        $writer->writeDateTimeValue('lastSyncDateTime', $this->getLastSyncDateTime());
        $writer->writeStringValue('managedDeviceId', $this->getManagedDeviceId());
        $writer->writeStringValue('managedDeviceName', $this->getManagedDeviceName());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeStringValue('osDescription', $this->getOsDescription());
        $writer->writeStringValue('osVersion', $this->getOsVersion());
        $writer->writeStringValue('ownerType', $this->getOwnerType());
        $writer->writeStringValue('tenantDisplayName', $this->getTenantDisplayName());
        $writer->writeStringValue('tenantId', $this->getTenantId());
    }

    /**
     * Sets the complianceStatus property value. Compliance state of the device. This property is read-only. Possible values are: unknown, compliant, noncompliant, conflict, error, inGracePeriod, configManager. Optional. Read-only.
     *  @param string|null $value Value to set for the complianceStatus property.
    */
    public function setComplianceStatus(?string $value): void {
        $this->getBackingStore()->set('complianceStatus', $value);
    }

    /**
     * Sets the deviceType property value. Platform of the device. This property is read-only. Possible values are: desktop, windowsRT, winMO6, nokia, windowsPhone, mac, winCE, winEmbedded, iPhone, iPad, iPod, android, iSocConsumer, unix, macMDM, holoLens, surfaceHub, androidForWork, androidEnterprise, windows10x, androidnGMS, chromeOS, linux, blackberry, palm, unknown, cloudPC.  Optional. Read-only.
     *  @param string|null $value Value to set for the deviceType property.
    */
    public function setDeviceType(?string $value): void {
        $this->getBackingStore()->set('deviceType', $value);
    }

    /**
     * Sets the inGracePeriodUntilDateTime property value. The date and time when the grace period will expire. Optional. Read-only.
     *  @param DateTime|null $value Value to set for the inGracePeriodUntilDateTime property.
    */
    public function setInGracePeriodUntilDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('inGracePeriodUntilDateTime', $value);
    }

    /**
     * Sets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
     *  @param DateTime|null $value Value to set for the lastRefreshedDateTime property.
    */
    public function setLastRefreshedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastRefreshedDateTime', $value);
    }

    /**
     * Sets the lastSyncDateTime property value. The date and time that the device last completed a successful sync with Microsoft Endpoint Manager. Optional. Read-only.
     *  @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSyncDateTime', $value);
    }

    /**
     * Sets the managedDeviceId property value. The identifier for the managed device in Microsoft Endpoint Manager. Optional. Read-only.
     *  @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value): void {
        $this->getBackingStore()->set('managedDeviceId', $value);
    }

    /**
     * Sets the managedDeviceName property value. The display name for the managed device. Optional. Read-only.
     *  @param string|null $value Value to set for the managedDeviceName property.
    */
    public function setManagedDeviceName(?string $value): void {
        $this->getBackingStore()->set('managedDeviceName', $value);
    }

    /**
     * Sets the manufacturer property value. The manufacture for the device. Optional. Read-only.
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the model property value. The model for the device. Optional. Read-only.
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

    /**
     * Sets the osDescription property value. The description of the operating system for the managed device. Optional. Read-only.
     *  @param string|null $value Value to set for the osDescription property.
    */
    public function setOsDescription(?string $value): void {
        $this->getBackingStore()->set('osDescription', $value);
    }

    /**
     * Sets the osVersion property value. The version of the operating system for the managed device. Optional. Read-only.
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

    /**
     * Sets the ownerType property value. The type of owner for the managed device. Optional. Read-only.
     *  @param string|null $value Value to set for the ownerType property.
    */
    public function setOwnerType(?string $value): void {
        $this->getBackingStore()->set('ownerType', $value);
    }

    /**
     * Sets the tenantDisplayName property value. The display name for the managed tenant. Optional. Read-only.
     *  @param string|null $value Value to set for the tenantDisplayName property.
    */
    public function setTenantDisplayName(?string $value): void {
        $this->getBackingStore()->set('tenantDisplayName', $value);
    }

    /**
     * Sets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

}
