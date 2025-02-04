<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The importedDeviceIdentity resource represents a unique hardware identity of a device that has been pre-staged for pre-enrollment configuration.
*/
class ImportedDeviceIdentity extends Entity implements Parsable 
{
    /**
     * Instantiates a new ImportedDeviceIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImportedDeviceIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImportedDeviceIdentity {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.importedDeviceIdentityResult': return new ImportedDeviceIdentityResult();
            }
        }
        return new ImportedDeviceIdentity();
    }

    /**
     * Gets the createdDateTime property value. Created Date Time of the device
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the description property value. The description of the device
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
     * Gets the enrollmentState property value. The enrollmentState property
     * @return EnrollmentState|null
    */
    public function getEnrollmentState(): ?EnrollmentState {
        $val = $this->getBackingStore()->get('enrollmentState');
        if (is_null($val) || $val instanceof EnrollmentState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentState'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'enrollmentState' => fn(ParseNode $n) => $o->setEnrollmentState($n->getEnumValue(EnrollmentState::class)),
            'importedDeviceIdentifier' => fn(ParseNode $n) => $o->setImportedDeviceIdentifier($n->getStringValue()),
            'importedDeviceIdentityType' => fn(ParseNode $n) => $o->setImportedDeviceIdentityType($n->getEnumValue(ImportedDeviceIdentityType::class)),
            'lastContactedDateTime' => fn(ParseNode $n) => $o->setLastContactedDateTime($n->getDateTimeValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'platform' => fn(ParseNode $n) => $o->setPlatform($n->getEnumValue(Platform::class)),
        ]);
    }

    /**
     * Gets the importedDeviceIdentifier property value. Imported Device Identifier
     * @return string|null
    */
    public function getImportedDeviceIdentifier(): ?string {
        $val = $this->getBackingStore()->get('importedDeviceIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'importedDeviceIdentifier'");
    }

    /**
     * Gets the importedDeviceIdentityType property value. The importedDeviceIdentityType property
     * @return ImportedDeviceIdentityType|null
    */
    public function getImportedDeviceIdentityType(): ?ImportedDeviceIdentityType {
        $val = $this->getBackingStore()->get('importedDeviceIdentityType');
        if (is_null($val) || $val instanceof ImportedDeviceIdentityType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'importedDeviceIdentityType'");
    }

    /**
     * Gets the lastContactedDateTime property value. Last Contacted Date Time of the device
     * @return DateTime|null
    */
    public function getLastContactedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastContactedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastContactedDateTime'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Last Modified DateTime of the description
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the platform property value. Supported platform types for policies.
     * @return Platform|null
    */
    public function getPlatform(): ?Platform {
        $val = $this->getBackingStore()->get('platform');
        if (is_null($val) || $val instanceof Platform) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'platform'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeEnumValue('enrollmentState', $this->getEnrollmentState());
        $writer->writeStringValue('importedDeviceIdentifier', $this->getImportedDeviceIdentifier());
        $writer->writeEnumValue('importedDeviceIdentityType', $this->getImportedDeviceIdentityType());
        $writer->writeDateTimeValue('lastContactedDateTime', $this->getLastContactedDateTime());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeEnumValue('platform', $this->getPlatform());
    }

    /**
     * Sets the createdDateTime property value. Created Date Time of the device
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description of the device
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the enrollmentState property value. The enrollmentState property
     * @param EnrollmentState|null $value Value to set for the enrollmentState property.
    */
    public function setEnrollmentState(?EnrollmentState $value): void {
        $this->getBackingStore()->set('enrollmentState', $value);
    }

    /**
     * Sets the importedDeviceIdentifier property value. Imported Device Identifier
     * @param string|null $value Value to set for the importedDeviceIdentifier property.
    */
    public function setImportedDeviceIdentifier(?string $value): void {
        $this->getBackingStore()->set('importedDeviceIdentifier', $value);
    }

    /**
     * Sets the importedDeviceIdentityType property value. The importedDeviceIdentityType property
     * @param ImportedDeviceIdentityType|null $value Value to set for the importedDeviceIdentityType property.
    */
    public function setImportedDeviceIdentityType(?ImportedDeviceIdentityType $value): void {
        $this->getBackingStore()->set('importedDeviceIdentityType', $value);
    }

    /**
     * Sets the lastContactedDateTime property value. Last Contacted Date Time of the device
     * @param DateTime|null $value Value to set for the lastContactedDateTime property.
    */
    public function setLastContactedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastContactedDateTime', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Last Modified DateTime of the description
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the platform property value. Supported platform types for policies.
     * @param Platform|null $value Value to set for the platform property.
    */
    public function setPlatform(?Platform $value): void {
        $this->getBackingStore()->set('platform', $value);
    }

}
