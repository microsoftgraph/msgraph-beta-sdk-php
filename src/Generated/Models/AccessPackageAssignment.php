<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessPackageAssignment extends Entity implements Parsable 
{
    /**
     * Instantiates a new AccessPackageAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignment {
        return new AccessPackageAssignment();
    }

    /**
     * Gets the accessPackage property value. Read-only. Nullable. Supports $filter (eq) on the id property and $expand query parameters.
     * @return AccessPackage|null
    */
    public function getAccessPackage(): ?AccessPackage {
        $val = $this->getBackingStore()->get('accessPackage');
        if (is_null($val) || $val instanceof AccessPackage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackage'");
    }

    /**
     * Gets the accessPackageAssignmentPolicy property value. Read-only. Nullable. Supports $filter (eq) on the id property
     * @return AccessPackageAssignmentPolicy|null
    */
    public function getAccessPackageAssignmentPolicy(): ?AccessPackageAssignmentPolicy {
        $val = $this->getBackingStore()->get('accessPackageAssignmentPolicy');
        if (is_null($val) || $val instanceof AccessPackageAssignmentPolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageAssignmentPolicy'");
    }

    /**
     * Gets the accessPackageAssignmentRequests property value. The accessPackageAssignmentRequests property
     * @return array<AccessPackageAssignmentRequest>|null
    */
    public function getAccessPackageAssignmentRequests(): ?array {
        $val = $this->getBackingStore()->get('accessPackageAssignmentRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageAssignmentRequest::class);
            /** @var array<AccessPackageAssignmentRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageAssignmentRequests'");
    }

    /**
     * Gets the accessPackageAssignmentResourceRoles property value. The resource roles delivered to the target user for this assignment. Read-only. Nullable.
     * @return array<AccessPackageAssignmentResourceRole>|null
    */
    public function getAccessPackageAssignmentResourceRoles(): ?array {
        $val = $this->getBackingStore()->get('accessPackageAssignmentResourceRoles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageAssignmentResourceRole::class);
            /** @var array<AccessPackageAssignmentResourceRole>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageAssignmentResourceRoles'");
    }

    /**
     * Gets the accessPackageId property value. The identifier of the access package. Read-only.
     * @return string|null
    */
    public function getAccessPackageId(): ?string {
        $val = $this->getBackingStore()->get('accessPackageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageId'");
    }

    /**
     * Gets the assignmentPolicyId property value. The identifier of the access package assignment policy. Read-only.
     * @return string|null
    */
    public function getAssignmentPolicyId(): ?string {
        $val = $this->getBackingStore()->get('assignmentPolicyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentPolicyId'");
    }

    /**
     * Gets the assignmentState property value. The state of the access package assignment. Possible values are Delivering, Delivered, or Expired. Read-only. Supports $filter (eq).
     * @return string|null
    */
    public function getAssignmentState(): ?string {
        $val = $this->getBackingStore()->get('assignmentState');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentState'");
    }

    /**
     * Gets the assignmentStatus property value. More information about the assignment lifecycle. Possible values include Delivering, Delivered, AutoAssignmentInGracePeriod, NearExpiry1DayNotificationTriggered, or ExpiredNotificationTriggered. Read-only.
     * @return string|null
    */
    public function getAssignmentStatus(): ?string {
        $val = $this->getBackingStore()->get('assignmentStatus');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentStatus'");
    }

    /**
     * Gets the catalogId property value. The identifier of the catalog containing the access package. Read-only.
     * @return string|null
    */
    public function getCatalogId(): ?string {
        $val = $this->getBackingStore()->get('catalogId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'catalogId'");
    }

    /**
     * Gets the customExtensionCalloutInstances property value. Information about all the custom extension calls that were made during the access package assignment workflow.
     * @return array<CustomExtensionCalloutInstance>|null
    */
    public function getCustomExtensionCalloutInstances(): ?array {
        $val = $this->getBackingStore()->get('customExtensionCalloutInstances');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomExtensionCalloutInstance::class);
            /** @var array<CustomExtensionCalloutInstance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customExtensionCalloutInstances'");
    }

    /**
     * Gets the expiredDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getExpiredDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expiredDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expiredDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackage' => fn(ParseNode $n) => $o->setAccessPackage($n->getObjectValue([AccessPackage::class, 'createFromDiscriminatorValue'])),
            'accessPackageAssignmentPolicy' => fn(ParseNode $n) => $o->setAccessPackageAssignmentPolicy($n->getObjectValue([AccessPackageAssignmentPolicy::class, 'createFromDiscriminatorValue'])),
            'accessPackageAssignmentRequests' => fn(ParseNode $n) => $o->setAccessPackageAssignmentRequests($n->getCollectionOfObjectValues([AccessPackageAssignmentRequest::class, 'createFromDiscriminatorValue'])),
            'accessPackageAssignmentResourceRoles' => fn(ParseNode $n) => $o->setAccessPackageAssignmentResourceRoles($n->getCollectionOfObjectValues([AccessPackageAssignmentResourceRole::class, 'createFromDiscriminatorValue'])),
            'accessPackageId' => fn(ParseNode $n) => $o->setAccessPackageId($n->getStringValue()),
            'assignmentPolicyId' => fn(ParseNode $n) => $o->setAssignmentPolicyId($n->getStringValue()),
            'assignmentState' => fn(ParseNode $n) => $o->setAssignmentState($n->getStringValue()),
            'assignmentStatus' => fn(ParseNode $n) => $o->setAssignmentStatus($n->getStringValue()),
            'catalogId' => fn(ParseNode $n) => $o->setCatalogId($n->getStringValue()),
            'customExtensionCalloutInstances' => fn(ParseNode $n) => $o->setCustomExtensionCalloutInstances($n->getCollectionOfObjectValues([CustomExtensionCalloutInstance::class, 'createFromDiscriminatorValue'])),
            'expiredDateTime' => fn(ParseNode $n) => $o->setExpiredDateTime($n->getDateTimeValue()),
            'isExtended' => fn(ParseNode $n) => $o->setIsExtended($n->getBooleanValue()),
            'schedule' => fn(ParseNode $n) => $o->setSchedule($n->getObjectValue([RequestSchedule::class, 'createFromDiscriminatorValue'])),
            'target' => fn(ParseNode $n) => $o->setTarget($n->getObjectValue([AccessPackageSubject::class, 'createFromDiscriminatorValue'])),
            'targetId' => fn(ParseNode $n) => $o->setTargetId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isExtended property value. Indicates whether the access package assignment is extended. Read-only.
     * @return bool|null
    */
    public function getIsExtended(): ?bool {
        $val = $this->getBackingStore()->get('isExtended');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isExtended'");
    }

    /**
     * Gets the schedule property value. When the access assignment is to be in place. Read-only.
     * @return RequestSchedule|null
    */
    public function getSchedule(): ?RequestSchedule {
        $val = $this->getBackingStore()->get('schedule');
        if (is_null($val) || $val instanceof RequestSchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schedule'");
    }

    /**
     * Gets the target property value. The subject of the access package assignment. Read-only. Nullable. Supports $expand. Supports $filter (eq) on objectId.
     * @return AccessPackageSubject|null
    */
    public function getTarget(): ?AccessPackageSubject {
        $val = $this->getBackingStore()->get('target');
        if (is_null($val) || $val instanceof AccessPackageSubject) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'target'");
    }

    /**
     * Gets the targetId property value. This property should not be used as a dependency, as it may change without notice. Instead, expand the target relationship and use the objectId property. Read-only.
     * @return string|null
    */
    public function getTargetId(): ?string {
        $val = $this->getBackingStore()->get('targetId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessPackage', $this->getAccessPackage());
        $writer->writeObjectValue('accessPackageAssignmentPolicy', $this->getAccessPackageAssignmentPolicy());
        $writer->writeCollectionOfObjectValues('accessPackageAssignmentRequests', $this->getAccessPackageAssignmentRequests());
        $writer->writeCollectionOfObjectValues('accessPackageAssignmentResourceRoles', $this->getAccessPackageAssignmentResourceRoles());
        $writer->writeStringValue('accessPackageId', $this->getAccessPackageId());
        $writer->writeStringValue('assignmentPolicyId', $this->getAssignmentPolicyId());
        $writer->writeStringValue('assignmentState', $this->getAssignmentState());
        $writer->writeStringValue('assignmentStatus', $this->getAssignmentStatus());
        $writer->writeStringValue('catalogId', $this->getCatalogId());
        $writer->writeCollectionOfObjectValues('customExtensionCalloutInstances', $this->getCustomExtensionCalloutInstances());
        $writer->writeDateTimeValue('expiredDateTime', $this->getExpiredDateTime());
        $writer->writeBooleanValue('isExtended', $this->getIsExtended());
        $writer->writeObjectValue('schedule', $this->getSchedule());
        $writer->writeObjectValue('target', $this->getTarget());
        $writer->writeStringValue('targetId', $this->getTargetId());
    }

    /**
     * Sets the accessPackage property value. Read-only. Nullable. Supports $filter (eq) on the id property and $expand query parameters.
     * @param AccessPackage|null $value Value to set for the accessPackage property.
    */
    public function setAccessPackage(?AccessPackage $value): void {
        $this->getBackingStore()->set('accessPackage', $value);
    }

    /**
     * Sets the accessPackageAssignmentPolicy property value. Read-only. Nullable. Supports $filter (eq) on the id property
     * @param AccessPackageAssignmentPolicy|null $value Value to set for the accessPackageAssignmentPolicy property.
    */
    public function setAccessPackageAssignmentPolicy(?AccessPackageAssignmentPolicy $value): void {
        $this->getBackingStore()->set('accessPackageAssignmentPolicy', $value);
    }

    /**
     * Sets the accessPackageAssignmentRequests property value. The accessPackageAssignmentRequests property
     * @param array<AccessPackageAssignmentRequest>|null $value Value to set for the accessPackageAssignmentRequests property.
    */
    public function setAccessPackageAssignmentRequests(?array $value): void {
        $this->getBackingStore()->set('accessPackageAssignmentRequests', $value);
    }

    /**
     * Sets the accessPackageAssignmentResourceRoles property value. The resource roles delivered to the target user for this assignment. Read-only. Nullable.
     * @param array<AccessPackageAssignmentResourceRole>|null $value Value to set for the accessPackageAssignmentResourceRoles property.
    */
    public function setAccessPackageAssignmentResourceRoles(?array $value): void {
        $this->getBackingStore()->set('accessPackageAssignmentResourceRoles', $value);
    }

    /**
     * Sets the accessPackageId property value. The identifier of the access package. Read-only.
     * @param string|null $value Value to set for the accessPackageId property.
    */
    public function setAccessPackageId(?string $value): void {
        $this->getBackingStore()->set('accessPackageId', $value);
    }

    /**
     * Sets the assignmentPolicyId property value. The identifier of the access package assignment policy. Read-only.
     * @param string|null $value Value to set for the assignmentPolicyId property.
    */
    public function setAssignmentPolicyId(?string $value): void {
        $this->getBackingStore()->set('assignmentPolicyId', $value);
    }

    /**
     * Sets the assignmentState property value. The state of the access package assignment. Possible values are Delivering, Delivered, or Expired. Read-only. Supports $filter (eq).
     * @param string|null $value Value to set for the assignmentState property.
    */
    public function setAssignmentState(?string $value): void {
        $this->getBackingStore()->set('assignmentState', $value);
    }

    /**
     * Sets the assignmentStatus property value. More information about the assignment lifecycle. Possible values include Delivering, Delivered, AutoAssignmentInGracePeriod, NearExpiry1DayNotificationTriggered, or ExpiredNotificationTriggered. Read-only.
     * @param string|null $value Value to set for the assignmentStatus property.
    */
    public function setAssignmentStatus(?string $value): void {
        $this->getBackingStore()->set('assignmentStatus', $value);
    }

    /**
     * Sets the catalogId property value. The identifier of the catalog containing the access package. Read-only.
     * @param string|null $value Value to set for the catalogId property.
    */
    public function setCatalogId(?string $value): void {
        $this->getBackingStore()->set('catalogId', $value);
    }

    /**
     * Sets the customExtensionCalloutInstances property value. Information about all the custom extension calls that were made during the access package assignment workflow.
     * @param array<CustomExtensionCalloutInstance>|null $value Value to set for the customExtensionCalloutInstances property.
    */
    public function setCustomExtensionCalloutInstances(?array $value): void {
        $this->getBackingStore()->set('customExtensionCalloutInstances', $value);
    }

    /**
     * Sets the expiredDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the expiredDateTime property.
    */
    public function setExpiredDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expiredDateTime', $value);
    }

    /**
     * Sets the isExtended property value. Indicates whether the access package assignment is extended. Read-only.
     * @param bool|null $value Value to set for the isExtended property.
    */
    public function setIsExtended(?bool $value): void {
        $this->getBackingStore()->set('isExtended', $value);
    }

    /**
     * Sets the schedule property value. When the access assignment is to be in place. Read-only.
     * @param RequestSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?RequestSchedule $value): void {
        $this->getBackingStore()->set('schedule', $value);
    }

    /**
     * Sets the target property value. The subject of the access package assignment. Read-only. Nullable. Supports $expand. Supports $filter (eq) on objectId.
     * @param AccessPackageSubject|null $value Value to set for the target property.
    */
    public function setTarget(?AccessPackageSubject $value): void {
        $this->getBackingStore()->set('target', $value);
    }

    /**
     * Sets the targetId property value. This property should not be used as a dependency, as it may change without notice. Instead, expand the target relationship and use the objectId property. Read-only.
     * @param string|null $value Value to set for the targetId property.
    */
    public function setTargetId(?string $value): void {
        $this->getBackingStore()->set('targetId', $value);
    }

}
