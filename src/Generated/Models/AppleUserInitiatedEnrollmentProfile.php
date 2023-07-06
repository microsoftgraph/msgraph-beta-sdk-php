<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AppleUserInitiatedEnrollmentProfile extends Entity implements Parsable 
{
    /**
     * Instantiates a new AppleUserInitiatedEnrollmentProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppleUserInitiatedEnrollmentProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppleUserInitiatedEnrollmentProfile {
        return new AppleUserInitiatedEnrollmentProfile();
    }

    /**
     * Gets the assignments property value. The list of assignments for this profile.
     * @return array<AppleEnrollmentProfileAssignment>|null
    */
    public function getAssignments(): ?array {
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppleEnrollmentProfileAssignment::class);
            /** @var array<AppleEnrollmentProfileAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * Gets the availableEnrollmentTypeOptions property value. List of available enrollment type options
     * @return array<AppleOwnerTypeEnrollmentType>|null
    */
    public function getAvailableEnrollmentTypeOptions(): ?array {
        $val = $this->getBackingStore()->get('availableEnrollmentTypeOptions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppleOwnerTypeEnrollmentType::class);
            /** @var array<AppleOwnerTypeEnrollmentType>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'availableEnrollmentTypeOptions'");
    }

    /**
     * Gets the createdDateTime property value. Profile creation time
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
     * Gets the defaultEnrollmentType property value. The defaultEnrollmentType property
     * @return AppleUserInitiatedEnrollmentType|null
    */
    public function getDefaultEnrollmentType(): ?AppleUserInitiatedEnrollmentType {
        $val = $this->getBackingStore()->get('defaultEnrollmentType');
        if (is_null($val) || $val instanceof AppleUserInitiatedEnrollmentType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultEnrollmentType'");
    }

    /**
     * Gets the description property value. Description of the profile
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
     * Gets the displayName property value. Name of the profile
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([AppleEnrollmentProfileAssignment::class, 'createFromDiscriminatorValue'])),
            'availableEnrollmentTypeOptions' => fn(ParseNode $n) => $o->setAvailableEnrollmentTypeOptions($n->getCollectionOfObjectValues([AppleOwnerTypeEnrollmentType::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'defaultEnrollmentType' => fn(ParseNode $n) => $o->setDefaultEnrollmentType($n->getEnumValue(AppleUserInitiatedEnrollmentType::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'platform' => fn(ParseNode $n) => $o->setPlatform($n->getEnumValue(DevicePlatformType::class)),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. Profile last modified time
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
     * Gets the platform property value. Supported platform types.
     * @return DevicePlatformType|null
    */
    public function getPlatform(): ?DevicePlatformType {
        $val = $this->getBackingStore()->get('platform');
        if (is_null($val) || $val instanceof DevicePlatformType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'platform'");
    }

    /**
     * Gets the priority property value. Priority, 0 is highest
     * @return int|null
    */
    public function getPriority(): ?int {
        $val = $this->getBackingStore()->get('priority');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'priority'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeCollectionOfObjectValues('availableEnrollmentTypeOptions', $this->getAvailableEnrollmentTypeOptions());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeEnumValue('defaultEnrollmentType', $this->getDefaultEnrollmentType());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeEnumValue('platform', $this->getPlatform());
        $writer->writeIntegerValue('priority', $this->getPriority());
    }

    /**
     * Sets the assignments property value. The list of assignments for this profile.
     * @param array<AppleEnrollmentProfileAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the availableEnrollmentTypeOptions property value. List of available enrollment type options
     * @param array<AppleOwnerTypeEnrollmentType>|null $value Value to set for the availableEnrollmentTypeOptions property.
    */
    public function setAvailableEnrollmentTypeOptions(?array $value): void {
        $this->getBackingStore()->set('availableEnrollmentTypeOptions', $value);
    }

    /**
     * Sets the createdDateTime property value. Profile creation time
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the defaultEnrollmentType property value. The defaultEnrollmentType property
     * @param AppleUserInitiatedEnrollmentType|null $value Value to set for the defaultEnrollmentType property.
    */
    public function setDefaultEnrollmentType(?AppleUserInitiatedEnrollmentType $value): void {
        $this->getBackingStore()->set('defaultEnrollmentType', $value);
    }

    /**
     * Sets the description property value. Description of the profile
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Name of the profile
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Profile last modified time
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the platform property value. Supported platform types.
     * @param DevicePlatformType|null $value Value to set for the platform property.
    */
    public function setPlatform(?DevicePlatformType $value): void {
        $this->getBackingStore()->set('platform', $value);
    }

    /**
     * Sets the priority property value. Priority, 0 is highest
     * @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

}
