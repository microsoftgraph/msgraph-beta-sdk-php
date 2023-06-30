<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The importedAppleDeviceIdentity resource represents the imported device identity of an Apple device .
*/
class ImportedAppleDeviceIdentity extends Entity implements Parsable 
{
    /**
     * Instantiates a new importedAppleDeviceIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImportedAppleDeviceIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImportedAppleDeviceIdentity {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.importedAppleDeviceIdentityResult': return new ImportedAppleDeviceIdentityResult();
            }
        }
        return new ImportedAppleDeviceIdentity();
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
     * Gets the discoverySource property value. The discoverySource property
     * @return DiscoverySource|null
    */
    public function getDiscoverySource(): ?DiscoverySource {
        $val = $this->getBackingStore()->get('discoverySource');
        if (is_null($val) || $val instanceof DiscoverySource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'discoverySource'");
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
            'discoverySource' => fn(ParseNode $n) => $o->setDiscoverySource($n->getEnumValue(DiscoverySource::class)),
            'enrollmentState' => fn(ParseNode $n) => $o->setEnrollmentState($n->getEnumValue(EnrollmentState::class)),
            'isDeleted' => fn(ParseNode $n) => $o->setIsDeleted($n->getBooleanValue()),
            'isSupervised' => fn(ParseNode $n) => $o->setIsSupervised($n->getBooleanValue()),
            'lastContactedDateTime' => fn(ParseNode $n) => $o->setLastContactedDateTime($n->getDateTimeValue()),
            'platform' => fn(ParseNode $n) => $o->setPlatform($n->getEnumValue(Platform::class)),
            'requestedEnrollmentProfileAssignmentDateTime' => fn(ParseNode $n) => $o->setRequestedEnrollmentProfileAssignmentDateTime($n->getDateTimeValue()),
            'requestedEnrollmentProfileId' => fn(ParseNode $n) => $o->setRequestedEnrollmentProfileId($n->getStringValue()),
            'serialNumber' => fn(ParseNode $n) => $o->setSerialNumber($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isDeleted property value. Indicates if the device is deleted from Apple Business Manager
     * @return bool|null
    */
    public function getIsDeleted(): ?bool {
        $val = $this->getBackingStore()->get('isDeleted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDeleted'");
    }

    /**
     * Gets the isSupervised property value. Indicates if the Apple device is supervised. More information is at: https://support.apple.com/en-us/HT202837
     * @return bool|null
    */
    public function getIsSupervised(): ?bool {
        $val = $this->getBackingStore()->get('isSupervised');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSupervised'");
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
     * Gets the platform property value. The platform property
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
     * Gets the requestedEnrollmentProfileAssignmentDateTime property value. The time enrollment profile was assigned to the device
     * @return DateTime|null
    */
    public function getRequestedEnrollmentProfileAssignmentDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('requestedEnrollmentProfileAssignmentDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestedEnrollmentProfileAssignmentDateTime'");
    }

    /**
     * Gets the requestedEnrollmentProfileId property value. Enrollment profile Id admin intends to apply to the device during next enrollment
     * @return string|null
    */
    public function getRequestedEnrollmentProfileId(): ?string {
        $val = $this->getBackingStore()->get('requestedEnrollmentProfileId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestedEnrollmentProfileId'");
    }

    /**
     * Gets the serialNumber property value. Device serial number
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
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeEnumValue('discoverySource', $this->getDiscoverySource());
        $writer->writeEnumValue('enrollmentState', $this->getEnrollmentState());
        $writer->writeBooleanValue('isDeleted', $this->getIsDeleted());
        $writer->writeBooleanValue('isSupervised', $this->getIsSupervised());
        $writer->writeDateTimeValue('lastContactedDateTime', $this->getLastContactedDateTime());
        $writer->writeEnumValue('platform', $this->getPlatform());
        $writer->writeDateTimeValue('requestedEnrollmentProfileAssignmentDateTime', $this->getRequestedEnrollmentProfileAssignmentDateTime());
        $writer->writeStringValue('requestedEnrollmentProfileId', $this->getRequestedEnrollmentProfileId());
        $writer->writeStringValue('serialNumber', $this->getSerialNumber());
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
     * Sets the discoverySource property value. The discoverySource property
     * @param DiscoverySource|null $value Value to set for the discoverySource property.
    */
    public function setDiscoverySource(?DiscoverySource $value): void {
        $this->getBackingStore()->set('discoverySource', $value);
    }

    /**
     * Sets the enrollmentState property value. The enrollmentState property
     * @param EnrollmentState|null $value Value to set for the enrollmentState property.
    */
    public function setEnrollmentState(?EnrollmentState $value): void {
        $this->getBackingStore()->set('enrollmentState', $value);
    }

    /**
     * Sets the isDeleted property value. Indicates if the device is deleted from Apple Business Manager
     * @param bool|null $value Value to set for the isDeleted property.
    */
    public function setIsDeleted(?bool $value): void {
        $this->getBackingStore()->set('isDeleted', $value);
    }

    /**
     * Sets the isSupervised property value. Indicates if the Apple device is supervised. More information is at: https://support.apple.com/en-us/HT202837
     * @param bool|null $value Value to set for the isSupervised property.
    */
    public function setIsSupervised(?bool $value): void {
        $this->getBackingStore()->set('isSupervised', $value);
    }

    /**
     * Sets the lastContactedDateTime property value. Last Contacted Date Time of the device
     * @param DateTime|null $value Value to set for the lastContactedDateTime property.
    */
    public function setLastContactedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastContactedDateTime', $value);
    }

    /**
     * Sets the platform property value. The platform property
     * @param Platform|null $value Value to set for the platform property.
    */
    public function setPlatform(?Platform $value): void {
        $this->getBackingStore()->set('platform', $value);
    }

    /**
     * Sets the requestedEnrollmentProfileAssignmentDateTime property value. The time enrollment profile was assigned to the device
     * @param DateTime|null $value Value to set for the requestedEnrollmentProfileAssignmentDateTime property.
    */
    public function setRequestedEnrollmentProfileAssignmentDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('requestedEnrollmentProfileAssignmentDateTime', $value);
    }

    /**
     * Sets the requestedEnrollmentProfileId property value. Enrollment profile Id admin intends to apply to the device during next enrollment
     * @param string|null $value Value to set for the requestedEnrollmentProfileId property.
    */
    public function setRequestedEnrollmentProfileId(?string $value): void {
        $this->getBackingStore()->set('requestedEnrollmentProfileId', $value);
    }

    /**
     * Sets the serialNumber property value. Device serial number
     * @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value): void {
        $this->getBackingStore()->set('serialNumber', $value);
    }

}
