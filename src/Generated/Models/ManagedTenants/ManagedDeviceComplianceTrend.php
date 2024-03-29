<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedDeviceComplianceTrend extends Entity implements Parsable 
{
    /**
     * Instantiates a new ManagedDeviceComplianceTrend and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedDeviceComplianceTrend
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedDeviceComplianceTrend {
        return new ManagedDeviceComplianceTrend();
    }

    /**
     * Gets the compliantDeviceCount property value. The number of devices with a compliant status. Required. Read-only.
     * @return int|null
    */
    public function getCompliantDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('compliantDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliantDeviceCount'");
    }

    /**
     * Gets the configManagerDeviceCount property value. The number of devices manged by Configuration Manager. Required. Read-only.
     * @return int|null
    */
    public function getConfigManagerDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('configManagerDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configManagerDeviceCount'");
    }

    /**
     * Gets the countDateTime property value. The date and time compliance snapshot was performed. Required. Read-only.
     * @return string|null
    */
    public function getCountDateTime(): ?string {
        $val = $this->getBackingStore()->get('countDateTime');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countDateTime'");
    }

    /**
     * Gets the errorDeviceCount property value. The number of devices with an error status. Required. Read-only.
     * @return int|null
    */
    public function getErrorDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('errorDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorDeviceCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'compliantDeviceCount' => fn(ParseNode $n) => $o->setCompliantDeviceCount($n->getIntegerValue()),
            'configManagerDeviceCount' => fn(ParseNode $n) => $o->setConfigManagerDeviceCount($n->getIntegerValue()),
            'countDateTime' => fn(ParseNode $n) => $o->setCountDateTime($n->getStringValue()),
            'errorDeviceCount' => fn(ParseNode $n) => $o->setErrorDeviceCount($n->getIntegerValue()),
            'inGracePeriodDeviceCount' => fn(ParseNode $n) => $o->setInGracePeriodDeviceCount($n->getIntegerValue()),
            'noncompliantDeviceCount' => fn(ParseNode $n) => $o->setNoncompliantDeviceCount($n->getIntegerValue()),
            'tenantDisplayName' => fn(ParseNode $n) => $o->setTenantDisplayName($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'unknownDeviceCount' => fn(ParseNode $n) => $o->setUnknownDeviceCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the inGracePeriodDeviceCount property value. The number of devices that are in a grace period status. Required. Read-only.
     * @return int|null
    */
    public function getInGracePeriodDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('inGracePeriodDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inGracePeriodDeviceCount'");
    }

    /**
     * Gets the noncompliantDeviceCount property value. The number of devices that are in a non-compliant status. Required. Read-only.
     * @return int|null
    */
    public function getNoncompliantDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('noncompliantDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'noncompliantDeviceCount'");
    }

    /**
     * Gets the tenantDisplayName property value. The display name for the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getTenantDisplayName(): ?string {
        $val = $this->getBackingStore()->get('tenantDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantDisplayName'");
    }

    /**
     * Gets the tenantId property value. The Microsoft Entra tenant identifier for the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Gets the unknownDeviceCount property value. The number of devices in an unknown status. Required. Read-only.
     * @return int|null
    */
    public function getUnknownDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('unknownDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unknownDeviceCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('compliantDeviceCount', $this->getCompliantDeviceCount());
        $writer->writeIntegerValue('configManagerDeviceCount', $this->getConfigManagerDeviceCount());
        $writer->writeStringValue('countDateTime', $this->getCountDateTime());
        $writer->writeIntegerValue('errorDeviceCount', $this->getErrorDeviceCount());
        $writer->writeIntegerValue('inGracePeriodDeviceCount', $this->getInGracePeriodDeviceCount());
        $writer->writeIntegerValue('noncompliantDeviceCount', $this->getNoncompliantDeviceCount());
        $writer->writeStringValue('tenantDisplayName', $this->getTenantDisplayName());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeIntegerValue('unknownDeviceCount', $this->getUnknownDeviceCount());
    }

    /**
     * Sets the compliantDeviceCount property value. The number of devices with a compliant status. Required. Read-only.
     * @param int|null $value Value to set for the compliantDeviceCount property.
    */
    public function setCompliantDeviceCount(?int $value): void {
        $this->getBackingStore()->set('compliantDeviceCount', $value);
    }

    /**
     * Sets the configManagerDeviceCount property value. The number of devices manged by Configuration Manager. Required. Read-only.
     * @param int|null $value Value to set for the configManagerDeviceCount property.
    */
    public function setConfigManagerDeviceCount(?int $value): void {
        $this->getBackingStore()->set('configManagerDeviceCount', $value);
    }

    /**
     * Sets the countDateTime property value. The date and time compliance snapshot was performed. Required. Read-only.
     * @param string|null $value Value to set for the countDateTime property.
    */
    public function setCountDateTime(?string $value): void {
        $this->getBackingStore()->set('countDateTime', $value);
    }

    /**
     * Sets the errorDeviceCount property value. The number of devices with an error status. Required. Read-only.
     * @param int|null $value Value to set for the errorDeviceCount property.
    */
    public function setErrorDeviceCount(?int $value): void {
        $this->getBackingStore()->set('errorDeviceCount', $value);
    }

    /**
     * Sets the inGracePeriodDeviceCount property value. The number of devices that are in a grace period status. Required. Read-only.
     * @param int|null $value Value to set for the inGracePeriodDeviceCount property.
    */
    public function setInGracePeriodDeviceCount(?int $value): void {
        $this->getBackingStore()->set('inGracePeriodDeviceCount', $value);
    }

    /**
     * Sets the noncompliantDeviceCount property value. The number of devices that are in a non-compliant status. Required. Read-only.
     * @param int|null $value Value to set for the noncompliantDeviceCount property.
    */
    public function setNoncompliantDeviceCount(?int $value): void {
        $this->getBackingStore()->set('noncompliantDeviceCount', $value);
    }

    /**
     * Sets the tenantDisplayName property value. The display name for the managed tenant. Optional. Read-only.
     * @param string|null $value Value to set for the tenantDisplayName property.
    */
    public function setTenantDisplayName(?string $value): void {
        $this->getBackingStore()->set('tenantDisplayName', $value);
    }

    /**
     * Sets the tenantId property value. The Microsoft Entra tenant identifier for the managed tenant. Optional. Read-only.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the unknownDeviceCount property value. The number of devices in an unknown status. Required. Read-only.
     * @param int|null $value Value to set for the unknownDeviceCount property.
    */
    public function setUnknownDeviceCount(?int $value): void {
        $this->getBackingStore()->set('unknownDeviceCount', $value);
    }

}
