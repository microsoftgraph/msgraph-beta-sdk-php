<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamworkDeviceSoftwareVersions implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TeamworkDeviceSoftwareVersions and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkDeviceSoftwareVersions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkDeviceSoftwareVersions {
        return new TeamworkDeviceSoftwareVersions();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the adminAgentSoftwareVersion property value. The software version for the admin agent running on the device.
     * @return string|null
    */
    public function getAdminAgentSoftwareVersion(): ?string {
        $val = $this->getBackingStore()->get('adminAgentSoftwareVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'adminAgentSoftwareVersion'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adminAgentSoftwareVersion' => fn(ParseNode $n) => $o->setAdminAgentSoftwareVersion($n->getStringValue()),
            'firmwareSoftwareVersion' => fn(ParseNode $n) => $o->setFirmwareSoftwareVersion($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'operatingSystemSoftwareVersion' => fn(ParseNode $n) => $o->setOperatingSystemSoftwareVersion($n->getStringValue()),
            'partnerAgentSoftwareVersion' => fn(ParseNode $n) => $o->setPartnerAgentSoftwareVersion($n->getStringValue()),
            'teamsClientSoftwareVersion' => fn(ParseNode $n) => $o->setTeamsClientSoftwareVersion($n->getStringValue()),
        ];
    }

    /**
     * Gets the firmwareSoftwareVersion property value. The software version for the firmware running on the device.
     * @return string|null
    */
    public function getFirmwareSoftwareVersion(): ?string {
        $val = $this->getBackingStore()->get('firmwareSoftwareVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firmwareSoftwareVersion'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the operatingSystemSoftwareVersion property value. The software version for the operating system on the device.
     * @return string|null
    */
    public function getOperatingSystemSoftwareVersion(): ?string {
        $val = $this->getBackingStore()->get('operatingSystemSoftwareVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operatingSystemSoftwareVersion'");
    }

    /**
     * Gets the partnerAgentSoftwareVersion property value. The software version for the partner agent running on the device.
     * @return string|null
    */
    public function getPartnerAgentSoftwareVersion(): ?string {
        $val = $this->getBackingStore()->get('partnerAgentSoftwareVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'partnerAgentSoftwareVersion'");
    }

    /**
     * Gets the teamsClientSoftwareVersion property value. The software version for the Teams client running on the device.
     * @return string|null
    */
    public function getTeamsClientSoftwareVersion(): ?string {
        $val = $this->getBackingStore()->get('teamsClientSoftwareVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamsClientSoftwareVersion'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('adminAgentSoftwareVersion', $this->getAdminAgentSoftwareVersion());
        $writer->writeStringValue('firmwareSoftwareVersion', $this->getFirmwareSoftwareVersion());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('operatingSystemSoftwareVersion', $this->getOperatingSystemSoftwareVersion());
        $writer->writeStringValue('partnerAgentSoftwareVersion', $this->getPartnerAgentSoftwareVersion());
        $writer->writeStringValue('teamsClientSoftwareVersion', $this->getTeamsClientSoftwareVersion());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the adminAgentSoftwareVersion property value. The software version for the admin agent running on the device.
     * @param string|null $value Value to set for the adminAgentSoftwareVersion property.
    */
    public function setAdminAgentSoftwareVersion(?string $value): void {
        $this->getBackingStore()->set('adminAgentSoftwareVersion', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the firmwareSoftwareVersion property value. The software version for the firmware running on the device.
     * @param string|null $value Value to set for the firmwareSoftwareVersion property.
    */
    public function setFirmwareSoftwareVersion(?string $value): void {
        $this->getBackingStore()->set('firmwareSoftwareVersion', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the operatingSystemSoftwareVersion property value. The software version for the operating system on the device.
     * @param string|null $value Value to set for the operatingSystemSoftwareVersion property.
    */
    public function setOperatingSystemSoftwareVersion(?string $value): void {
        $this->getBackingStore()->set('operatingSystemSoftwareVersion', $value);
    }

    /**
     * Sets the partnerAgentSoftwareVersion property value. The software version for the partner agent running on the device.
     * @param string|null $value Value to set for the partnerAgentSoftwareVersion property.
    */
    public function setPartnerAgentSoftwareVersion(?string $value): void {
        $this->getBackingStore()->set('partnerAgentSoftwareVersion', $value);
    }

    /**
     * Sets the teamsClientSoftwareVersion property value. The software version for the Teams client running on the device.
     * @param string|null $value Value to set for the teamsClientSoftwareVersion property.
    */
    public function setTeamsClientSoftwareVersion(?string $value): void {
        $this->getBackingStore()->set('teamsClientSoftwareVersion', $value);
    }

}
