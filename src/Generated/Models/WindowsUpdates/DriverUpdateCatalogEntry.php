<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DriverUpdateCatalogEntry extends SoftwareUpdateCatalogEntry implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new driverUpdateCatalogEntry and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdates.driverUpdateCatalogEntry');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DriverUpdateCatalogEntry
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DriverUpdateCatalogEntry {
        return new DriverUpdateCatalogEntry();
    }

    /**
     * Gets the description property value. The description of the content.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the driverClass property value. The classification of the driver.
     * @return string|null
    */
    public function getDriverClass(): ?string {
        $val = $this->getBackingStore()->get('driverClass');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driverClass'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'driverClass' => fn(ParseNode $n) => $o->setDriverClass($n->getStringValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getStringValue()),
            'setupInformationFile' => fn(ParseNode $n) => $o->setSetupInformationFile($n->getStringValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
            'versionDateTime' => fn(ParseNode $n) => $o->setVersionDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the manufacturer property value. The manufacturer of the driver.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        $val = $this->getBackingStore()->get('manufacturer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'manufacturer'");
    }

    /**
     * Gets the provider property value. The provider of the driver.
     * @return string|null
    */
    public function getProvider(): ?string {
        $val = $this->getBackingStore()->get('provider');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'provider'");
    }

    /**
     * Gets the setupInformationFile property value. The setup information file of the driver.
     * @return string|null
    */
    public function getSetupInformationFile(): ?string {
        $val = $this->getBackingStore()->get('setupInformationFile');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'setupInformationFile'");
    }

    /**
     * Gets the version property value. The unique version of the content.
     * @return string|null
    */
    public function getVersion(): ?string {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Gets the versionDateTime property value. The date and time when a new version of content was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getVersionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('versionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'versionDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('driverClass', $this->getDriverClass());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('provider', $this->getProvider());
        $writer->writeStringValue('setupInformationFile', $this->getSetupInformationFile());
        $writer->writeStringValue('version', $this->getVersion());
        $writer->writeDateTimeValue('versionDateTime', $this->getVersionDateTime());
    }

    /**
     * Sets the description property value. The description of the content.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the driverClass property value. The classification of the driver.
     * @param string|null $value Value to set for the driverClass property.
    */
    public function setDriverClass(?string $value): void {
        $this->getBackingStore()->set('driverClass', $value);
    }

    /**
     * Sets the manufacturer property value. The manufacturer of the driver.
     * @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the provider property value. The provider of the driver.
     * @param string|null $value Value to set for the provider property.
    */
    public function setProvider(?string $value): void {
        $this->getBackingStore()->set('provider', $value);
    }

    /**
     * Sets the setupInformationFile property value. The setup information file of the driver.
     * @param string|null $value Value to set for the setupInformationFile property.
    */
    public function setSetupInformationFile(?string $value): void {
        $this->getBackingStore()->set('setupInformationFile', $value);
    }

    /**
     * Sets the version property value. The unique version of the content.
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

    /**
     * Sets the versionDateTime property value. The date and time when a new version of content was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the versionDateTime property.
    */
    public function setVersionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('versionDateTime', $value);
    }

}
