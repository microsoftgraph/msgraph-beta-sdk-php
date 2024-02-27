<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExternalProfile extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new ExternalProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.externalProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExternalProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExternalProfile {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.externalUserProfile': return new ExternalUserProfile();
                case '#microsoft.graph.pendingExternalUserProfile': return new PendingExternalUserProfile();
            }
        }
        return new ExternalProfile();
    }

    /**
     * Gets the address property value. The office address of the external user profile.
     * @return PhysicalOfficeAddress|null
    */
    public function getAddress(): ?PhysicalOfficeAddress {
        $val = $this->getBackingStore()->get('address');
        if (is_null($val) || $val instanceof PhysicalOfficeAddress) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'address'");
    }

    /**
     * Gets the companyName property value. The company name of the external user profile. Supports $filter (eq, startswith).
     * @return string|null
    */
    public function getCompanyName(): ?string {
        $val = $this->getBackingStore()->get('companyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'companyName'");
    }

    /**
     * Gets the createdBy property value. The object ID of the user who created the external user profile. Read-only. Not nullable.
     * @return string|null
    */
    public function getCreatedBy(): ?string {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. Date and time when this external user was created. Not nullable. Read-only.
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
     * Gets the department property value. The department of the external user profile.
     * @return string|null
    */
    public function getDepartment(): ?string {
        $val = $this->getBackingStore()->get('department');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'department'");
    }

    /**
     * Gets the displayName property value. The display name of the external user profile.
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
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([PhysicalOfficeAddress::class, 'createFromDiscriminatorValue'])),
            'companyName' => fn(ParseNode $n) => $o->setCompanyName($n->getStringValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'department' => fn(ParseNode $n) => $o->setDepartment($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isDiscoverable' => fn(ParseNode $n) => $o->setIsDiscoverable($n->getBooleanValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'jobTitle' => fn(ParseNode $n) => $o->setJobTitle($n->getStringValue()),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'supervisorId' => fn(ParseNode $n) => $o->setSupervisorId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isDiscoverable property value. Represents whether the external user profile is discoverable in the directory. When true, this external profile shows up in Teams search.
     * @return bool|null
    */
    public function getIsDiscoverable(): ?bool {
        $val = $this->getBackingStore()->get('isDiscoverable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDiscoverable'");
    }

    /**
     * Gets the isEnabled property value. Represents whether the external user profile is enabled in the directory. This property is peer to the accountEnabled property on the user object.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
    }

    /**
     * Gets the jobTitle property value. The job title of the external user profile.
     * @return string|null
    */
    public function getJobTitle(): ?string {
        $val = $this->getBackingStore()->get('jobTitle');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'jobTitle'");
    }

    /**
     * Gets the phoneNumber property value. The phone number of the external user profile. Must be in E164 format.
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        $val = $this->getBackingStore()->get('phoneNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phoneNumber'");
    }

    /**
     * Gets the supervisorId property value. The object ID of the supervisor of the external user profile. Supports $filter (eq, startswith).
     * @return string|null
    */
    public function getSupervisorId(): ?string {
        $val = $this->getBackingStore()->get('supervisorId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supervisorId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('address', $this->getAddress());
        $writer->writeStringValue('companyName', $this->getCompanyName());
        $writer->writeStringValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('department', $this->getDepartment());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isDiscoverable', $this->getIsDiscoverable());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeStringValue('jobTitle', $this->getJobTitle());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeStringValue('supervisorId', $this->getSupervisorId());
    }

    /**
     * Sets the address property value. The office address of the external user profile.
     * @param PhysicalOfficeAddress|null $value Value to set for the address property.
    */
    public function setAddress(?PhysicalOfficeAddress $value): void {
        $this->getBackingStore()->set('address', $value);
    }

    /**
     * Sets the companyName property value. The company name of the external user profile. Supports $filter (eq, startswith).
     * @param string|null $value Value to set for the companyName property.
    */
    public function setCompanyName(?string $value): void {
        $this->getBackingStore()->set('companyName', $value);
    }

    /**
     * Sets the createdBy property value. The object ID of the user who created the external user profile. Read-only. Not nullable.
     * @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time when this external user was created. Not nullable. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the department property value. The department of the external user profile.
     * @param string|null $value Value to set for the department property.
    */
    public function setDepartment(?string $value): void {
        $this->getBackingStore()->set('department', $value);
    }

    /**
     * Sets the displayName property value. The display name of the external user profile.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isDiscoverable property value. Represents whether the external user profile is discoverable in the directory. When true, this external profile shows up in Teams search.
     * @param bool|null $value Value to set for the isDiscoverable property.
    */
    public function setIsDiscoverable(?bool $value): void {
        $this->getBackingStore()->set('isDiscoverable', $value);
    }

    /**
     * Sets the isEnabled property value. Represents whether the external user profile is enabled in the directory. This property is peer to the accountEnabled property on the user object.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the jobTitle property value. The job title of the external user profile.
     * @param string|null $value Value to set for the jobTitle property.
    */
    public function setJobTitle(?string $value): void {
        $this->getBackingStore()->set('jobTitle', $value);
    }

    /**
     * Sets the phoneNumber property value. The phone number of the external user profile. Must be in E164 format.
     * @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value): void {
        $this->getBackingStore()->set('phoneNumber', $value);
    }

    /**
     * Sets the supervisorId property value. The object ID of the supervisor of the external user profile. Supports $filter (eq, startswith).
     * @param string|null $value Value to set for the supervisorId property.
    */
    public function setSupervisorId(?string $value): void {
        $this->getBackingStore()->set('supervisorId', $value);
    }

}
