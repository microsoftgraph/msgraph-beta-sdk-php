<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceProfile extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceProfile {
        return new DeviceProfile();
    }

    /**
     * Gets the azureAdDeviceId property value. The Microsoft Entra device identifier. Read-only.
     * @return string|null
    */
    public function getAzureAdDeviceId(): ?string {
        $val = $this->getBackingStore()->get('azureAdDeviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureAdDeviceId'");
    }

    /**
     * Gets the deviceModel property value. The hardware model of the device. Read-only.
     * @return string|null
    */
    public function getDeviceModel(): ?string {
        $val = $this->getBackingStore()->get('deviceModel');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceModel'");
    }

    /**
     * Gets the deviceName property value. The device name. Read-only.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        $val = $this->getBackingStore()->get('deviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'azureAdDeviceId' => fn(ParseNode $n) => $o->setAzureAdDeviceId($n->getStringValue()),
            'deviceModel' => fn(ParseNode $n) => $o->setDeviceModel($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'hotpatchReadiness' => fn(ParseNode $n) => $o->setHotpatchReadiness($n->getEnumValue(HotpatchReadiness::class)),
            'osBuild' => fn(ParseNode $n) => $o->setOsBuild($n->getStringValue()),
            'osStatus' => fn(ParseNode $n) => $o->setOsStatus($n->getEnumValue(OsStatus::class)),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
            'serialNumber' => fn(ParseNode $n) => $o->setSerialNumber($n->getStringValue()),
        ]);
    }

    /**
     * Gets the hotpatchReadiness property value. The hotpatchReadiness property
     * @return HotpatchReadiness|null
    */
    public function getHotpatchReadiness(): ?HotpatchReadiness {
        $val = $this->getBackingStore()->get('hotpatchReadiness');
        if (is_null($val) || $val instanceof HotpatchReadiness) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hotpatchReadiness'");
    }

    /**
     * Gets the osBuild property value. The Windows build installed on the device. Read-only.
     * @return string|null
    */
    public function getOsBuild(): ?string {
        $val = $this->getBackingStore()->get('osBuild');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osBuild'");
    }

    /**
     * Gets the osStatus property value. The osStatus property
     * @return OsStatus|null
    */
    public function getOsStatus(): ?OsStatus {
        $val = $this->getBackingStore()->get('osStatus');
        if (is_null($val) || $val instanceof OsStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osStatus'");
    }

    /**
     * Gets the osVersion property value. The Windows version installed on the device. Read-only.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        $val = $this->getBackingStore()->get('osVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osVersion'");
    }

    /**
     * Gets the serialNumber property value. The device serial number. Read-only.
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        $val = $this->getBackingStore()->get('serialNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serialNumber'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('hotpatchReadiness', $this->getHotpatchReadiness());
        $writer->writeEnumValue('osStatus', $this->getOsStatus());
    }

    /**
     * Sets the azureAdDeviceId property value. The Microsoft Entra device identifier. Read-only.
     * @param string|null $value Value to set for the azureAdDeviceId property.
    */
    public function setAzureAdDeviceId(?string $value): void {
        $this->getBackingStore()->set('azureAdDeviceId', $value);
    }

    /**
     * Sets the deviceModel property value. The hardware model of the device. Read-only.
     * @param string|null $value Value to set for the deviceModel property.
    */
    public function setDeviceModel(?string $value): void {
        $this->getBackingStore()->set('deviceModel', $value);
    }

    /**
     * Sets the deviceName property value. The device name. Read-only.
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the hotpatchReadiness property value. The hotpatchReadiness property
     * @param HotpatchReadiness|null $value Value to set for the hotpatchReadiness property.
    */
    public function setHotpatchReadiness(?HotpatchReadiness $value): void {
        $this->getBackingStore()->set('hotpatchReadiness', $value);
    }

    /**
     * Sets the osBuild property value. The Windows build installed on the device. Read-only.
     * @param string|null $value Value to set for the osBuild property.
    */
    public function setOsBuild(?string $value): void {
        $this->getBackingStore()->set('osBuild', $value);
    }

    /**
     * Sets the osStatus property value. The osStatus property
     * @param OsStatus|null $value Value to set for the osStatus property.
    */
    public function setOsStatus(?OsStatus $value): void {
        $this->getBackingStore()->set('osStatus', $value);
    }

    /**
     * Sets the osVersion property value. The Windows version installed on the device. Read-only.
     * @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

    /**
     * Sets the serialNumber property value. The device serial number. Read-only.
     * @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value): void {
        $this->getBackingStore()->set('serialNumber', $value);
    }

}
