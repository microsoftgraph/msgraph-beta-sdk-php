<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RedundantAssignmentAlertIncident extends UnifiedRoleManagementAlertIncident implements Parsable 
{
    /**
     * Instantiates a new RedundantAssignmentAlertIncident and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.redundantAssignmentAlertIncident');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RedundantAssignmentAlertIncident
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RedundantAssignmentAlertIncident {
        return new RedundantAssignmentAlertIncident();
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
     * Gets the assigneeUserPrincipalName property value. User principal name of the subject that the incident applies to. Applies to user principals only.
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
            'assigneeDisplayName' => fn(ParseNode $n) => $o->setAssigneeDisplayName($n->getStringValue()),
            'assigneeId' => fn(ParseNode $n) => $o->setAssigneeId($n->getStringValue()),
            'assigneeUserPrincipalName' => fn(ParseNode $n) => $o->setAssigneeUserPrincipalName($n->getStringValue()),
            'lastActivationDateTime' => fn(ParseNode $n) => $o->setLastActivationDateTime($n->getDateTimeValue()),
            'roleDefinitionId' => fn(ParseNode $n) => $o->setRoleDefinitionId($n->getStringValue()),
            'roleDisplayName' => fn(ParseNode $n) => $o->setRoleDisplayName($n->getStringValue()),
            'roleTemplateId' => fn(ParseNode $n) => $o->setRoleTemplateId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastActivationDateTime property value. Date and time of the last activation of the eligible assignment.
     * @return DateTime|null
    */
    public function getLastActivationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastActivationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastActivationDateTime'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assigneeDisplayName', $this->getAssigneeDisplayName());
        $writer->writeStringValue('assigneeId', $this->getAssigneeId());
        $writer->writeStringValue('assigneeUserPrincipalName', $this->getAssigneeUserPrincipalName());
        $writer->writeDateTimeValue('lastActivationDateTime', $this->getLastActivationDateTime());
        $writer->writeStringValue('roleDefinitionId', $this->getRoleDefinitionId());
        $writer->writeStringValue('roleDisplayName', $this->getRoleDisplayName());
        $writer->writeStringValue('roleTemplateId', $this->getRoleTemplateId());
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
     * Sets the assigneeUserPrincipalName property value. User principal name of the subject that the incident applies to. Applies to user principals only.
     * @param string|null $value Value to set for the assigneeUserPrincipalName property.
    */
    public function setAssigneeUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('assigneeUserPrincipalName', $value);
    }

    /**
     * Sets the lastActivationDateTime property value. Date and time of the last activation of the eligible assignment.
     * @param DateTime|null $value Value to set for the lastActivationDateTime property.
    */
    public function setLastActivationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastActivationDateTime', $value);
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

}
