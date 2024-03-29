<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * A class containing the properties used for Assignment Filter.
*/
class DeviceAndAppManagementAssignmentFilter extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceAndAppManagementAssignmentFilter and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceAndAppManagementAssignmentFilter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceAndAppManagementAssignmentFilter {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.payloadCompatibleAssignmentFilter': return new PayloadCompatibleAssignmentFilter();
            }
        }
        return new DeviceAndAppManagementAssignmentFilter();
    }

    /**
     * Gets the assignmentFilterManagementType property value. Supported filter management types whether its devices or apps.
     * @return AssignmentFilterManagementType|null
    */
    public function getAssignmentFilterManagementType(): ?AssignmentFilterManagementType {
        $val = $this->getBackingStore()->get('assignmentFilterManagementType');
        if (is_null($val) || $val instanceof AssignmentFilterManagementType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentFilterManagementType'");
    }

    /**
     * Gets the createdDateTime property value. The creation time of the assignment filter. The value cannot be modified and is automatically populated during new assignment filter process. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'.
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
     * Gets the description property value. Optional description of the Assignment Filter.
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
     * Gets the displayName property value. The name of the Assignment Filter.
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
            'assignmentFilterManagementType' => fn(ParseNode $n) => $o->setAssignmentFilterManagementType($n->getEnumValue(AssignmentFilterManagementType::class)),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'payloads' => fn(ParseNode $n) => $o->setPayloads($n->getCollectionOfObjectValues([PayloadByFilter::class, 'createFromDiscriminatorValue'])),
            'platform' => fn(ParseNode $n) => $o->setPlatform($n->getEnumValue(DevicePlatformType::class)),
            'roleScopeTags' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoleScopeTags($val);
            },
            'rule' => fn(ParseNode $n) => $o->setRule($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. Last modified time of the Assignment Filter. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'
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
     * Gets the payloads property value. Indicates associated assignments for a specific filter.
     * @return array<PayloadByFilter>|null
    */
    public function getPayloads(): ?array {
        $val = $this->getBackingStore()->get('payloads');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PayloadByFilter::class);
            /** @var array<PayloadByFilter>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'payloads'");
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
     * Gets the roleScopeTags property value. Indicates role scope tags assigned for the assignment filter.
     * @return array<string>|null
    */
    public function getRoleScopeTags(): ?array {
        $val = $this->getBackingStore()->get('roleScopeTags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleScopeTags'");
    }

    /**
     * Gets the rule property value. Rule definition of the assignment filter.
     * @return string|null
    */
    public function getRule(): ?string {
        $val = $this->getBackingStore()->get('rule');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rule'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('assignmentFilterManagementType', $this->getAssignmentFilterManagementType());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfObjectValues('payloads', $this->getPayloads());
        $writer->writeEnumValue('platform', $this->getPlatform());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTags', $this->getRoleScopeTags());
        $writer->writeStringValue('rule', $this->getRule());
    }

    /**
     * Sets the assignmentFilterManagementType property value. Supported filter management types whether its devices or apps.
     * @param AssignmentFilterManagementType|null $value Value to set for the assignmentFilterManagementType property.
    */
    public function setAssignmentFilterManagementType(?AssignmentFilterManagementType $value): void {
        $this->getBackingStore()->set('assignmentFilterManagementType', $value);
    }

    /**
     * Sets the createdDateTime property value. The creation time of the assignment filter. The value cannot be modified and is automatically populated during new assignment filter process. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. Optional description of the Assignment Filter.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The name of the Assignment Filter.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Last modified time of the Assignment Filter. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the payloads property value. Indicates associated assignments for a specific filter.
     * @param array<PayloadByFilter>|null $value Value to set for the payloads property.
    */
    public function setPayloads(?array $value): void {
        $this->getBackingStore()->set('payloads', $value);
    }

    /**
     * Sets the platform property value. Supported platform types.
     * @param DevicePlatformType|null $value Value to set for the platform property.
    */
    public function setPlatform(?DevicePlatformType $value): void {
        $this->getBackingStore()->set('platform', $value);
    }

    /**
     * Sets the roleScopeTags property value. Indicates role scope tags assigned for the assignment filter.
     * @param array<string>|null $value Value to set for the roleScopeTags property.
    */
    public function setRoleScopeTags(?array $value): void {
        $this->getBackingStore()->set('roleScopeTags', $value);
    }

    /**
     * Sets the rule property value. Rule definition of the assignment filter.
     * @param string|null $value Value to set for the rule property.
    */
    public function setRule(?string $value): void {
        $this->getBackingStore()->set('rule', $value);
    }

}
