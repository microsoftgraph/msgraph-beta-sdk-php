<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SequentialActivationRenewalsAlertIncident extends UnifiedRoleManagementAlertIncident implements Parsable 
{
    /**
     * Instantiates a new SequentialActivationRenewalsAlertIncident and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.sequentialActivationRenewalsAlertIncident');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SequentialActivationRenewalsAlertIncident
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SequentialActivationRenewalsAlertIncident {
        return new SequentialActivationRenewalsAlertIncident();
    }

    /**
     * Gets the activationCount property value. The length of sequential activation of the same role.
     * @return int|null
    */
    public function getActivationCount(): ?int {
        $val = $this->getBackingStore()->get('activationCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activationCount'");
    }

    /**
     * Gets the assigneeDisplayName property value. Display name of the subject that the incident applies to.
     * @return string|null
    */
    public function getAssigneeDisplayName(): ?string {
        $val = $this->getBackingStore()->get('assigneeDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assigneeDisplayName'");
    }

    /**
     * Gets the assigneeId property value. The identifier of the subject that the incident applies to.
     * @return string|null
    */
    public function getAssigneeId(): ?string {
        $val = $this->getBackingStore()->get('assigneeId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assigneeId'");
    }

    /**
     * Gets the assigneeUserPrincipalName property value. User principal name of the subject that the incident applies to. Applies to user principals.
     * @return string|null
    */
    public function getAssigneeUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('assigneeUserPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assigneeUserPrincipalName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activationCount' => fn(ParseNode $n) => $o->setActivationCount($n->getIntegerValue()),
            'assigneeDisplayName' => fn(ParseNode $n) => $o->setAssigneeDisplayName($n->getStringValue()),
            'assigneeId' => fn(ParseNode $n) => $o->setAssigneeId($n->getStringValue()),
            'assigneeUserPrincipalName' => fn(ParseNode $n) => $o->setAssigneeUserPrincipalName($n->getStringValue()),
            'roleDefinitionId' => fn(ParseNode $n) => $o->setRoleDefinitionId($n->getStringValue()),
            'roleDisplayName' => fn(ParseNode $n) => $o->setRoleDisplayName($n->getStringValue()),
            'roleTemplateId' => fn(ParseNode $n) => $o->setRoleTemplateId($n->getStringValue()),
            'sequenceEndDateTime' => fn(ParseNode $n) => $o->setSequenceEndDateTime($n->getDateTimeValue()),
            'sequenceStartDateTime' => fn(ParseNode $n) => $o->setSequenceStartDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the roleDefinitionId property value. The identifier for the directory role definition that's in scope of this incident.
     * @return string|null
    */
    public function getRoleDefinitionId(): ?string {
        $val = $this->getBackingStore()->get('roleDefinitionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleDefinitionId'");
    }

    /**
     * Gets the roleDisplayName property value. The display name for the directory role.
     * @return string|null
    */
    public function getRoleDisplayName(): ?string {
        $val = $this->getBackingStore()->get('roleDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleDisplayName'");
    }

    /**
     * Gets the roleTemplateId property value. The globally unique identifier for the directory role.
     * @return string|null
    */
    public function getRoleTemplateId(): ?string {
        $val = $this->getBackingStore()->get('roleTemplateId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleTemplateId'");
    }

    /**
     * Gets the sequenceEndDateTime property value. End date time of the sequential activation event.
     * @return DateTime|null
    */
    public function getSequenceEndDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('sequenceEndDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sequenceEndDateTime'");
    }

    /**
     * Gets the sequenceStartDateTime property value. Start date time of the sequential activation event.
     * @return DateTime|null
    */
    public function getSequenceStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('sequenceStartDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sequenceStartDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('activationCount', $this->getActivationCount());
        $writer->writeStringValue('assigneeDisplayName', $this->getAssigneeDisplayName());
        $writer->writeStringValue('assigneeId', $this->getAssigneeId());
        $writer->writeStringValue('assigneeUserPrincipalName', $this->getAssigneeUserPrincipalName());
        $writer->writeStringValue('roleDefinitionId', $this->getRoleDefinitionId());
        $writer->writeStringValue('roleDisplayName', $this->getRoleDisplayName());
        $writer->writeStringValue('roleTemplateId', $this->getRoleTemplateId());
        $writer->writeDateTimeValue('sequenceEndDateTime', $this->getSequenceEndDateTime());
        $writer->writeDateTimeValue('sequenceStartDateTime', $this->getSequenceStartDateTime());
    }

    /**
     * Sets the activationCount property value. The length of sequential activation of the same role.
     * @param int|null $value Value to set for the activationCount property.
    */
    public function setActivationCount(?int $value): void {
        $this->getBackingStore()->set('activationCount', $value);
    }

    /**
     * Sets the assigneeDisplayName property value. Display name of the subject that the incident applies to.
     * @param string|null $value Value to set for the assigneeDisplayName property.
    */
    public function setAssigneeDisplayName(?string $value): void {
        $this->getBackingStore()->set('assigneeDisplayName', $value);
    }

    /**
     * Sets the assigneeId property value. The identifier of the subject that the incident applies to.
     * @param string|null $value Value to set for the assigneeId property.
    */
    public function setAssigneeId(?string $value): void {
        $this->getBackingStore()->set('assigneeId', $value);
    }

    /**
     * Sets the assigneeUserPrincipalName property value. User principal name of the subject that the incident applies to. Applies to user principals.
     * @param string|null $value Value to set for the assigneeUserPrincipalName property.
    */
    public function setAssigneeUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('assigneeUserPrincipalName', $value);
    }

    /**
     * Sets the roleDefinitionId property value. The identifier for the directory role definition that's in scope of this incident.
     * @param string|null $value Value to set for the roleDefinitionId property.
    */
    public function setRoleDefinitionId(?string $value): void {
        $this->getBackingStore()->set('roleDefinitionId', $value);
    }

    /**
     * Sets the roleDisplayName property value. The display name for the directory role.
     * @param string|null $value Value to set for the roleDisplayName property.
    */
    public function setRoleDisplayName(?string $value): void {
        $this->getBackingStore()->set('roleDisplayName', $value);
    }

    /**
     * Sets the roleTemplateId property value. The globally unique identifier for the directory role.
     * @param string|null $value Value to set for the roleTemplateId property.
    */
    public function setRoleTemplateId(?string $value): void {
        $this->getBackingStore()->set('roleTemplateId', $value);
    }

    /**
     * Sets the sequenceEndDateTime property value. End date time of the sequential activation event.
     * @param DateTime|null $value Value to set for the sequenceEndDateTime property.
    */
    public function setSequenceEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('sequenceEndDateTime', $value);
    }

    /**
     * Sets the sequenceStartDateTime property value. Start date time of the sequential activation event.
     * @param DateTime|null $value Value to set for the sequenceStartDateTime property.
    */
    public function setSequenceStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('sequenceStartDateTime', $value);
    }

}
