<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class StaleSignInAlertIncident extends UnifiedRoleManagementAlertIncident implements Parsable 
{
    /**
     * Instantiates a new StaleSignInAlertIncident and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.staleSignInAlertIncident');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StaleSignInAlertIncident
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StaleSignInAlertIncident {
        return new StaleSignInAlertIncident();
    }

    /**
     * Gets the assigneeDisplayName property value. Display name of the subject that the incident applies to.
     * @return string|null
    */
    public function getAssigneeDisplayName(): ?string {
        return $this->getBackingStore()->get('assigneeDisplayName');
    }

    /**
     * Gets the assigneeId property value. The identifier of the subject that the incident applies to.
     * @return string|null
    */
    public function getAssigneeId(): ?string {
        return $this->getBackingStore()->get('assigneeId');
    }

    /**
     * Gets the assigneeUserPrincipalName property value. User principal name of the subject that the incident applies to. Applies to user principals.
     * @return string|null
    */
    public function getAssigneeUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('assigneeUserPrincipalName');
    }

    /**
     * Gets the assignmentCreatedDateTime property value. Date and time of assignment creation.
     * @return DateTime|null
    */
    public function getAssignmentCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('assignmentCreatedDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assigneeDisplayName' => fn(ParseNode $n) => $o->setAssigneeDisplayName($n->getStringValue()),
            'assigneeId' => fn(ParseNode $n) => $o->setAssigneeId($n->getStringValue()),
            'assigneeUserPrincipalName' => fn(ParseNode $n) => $o->setAssigneeUserPrincipalName($n->getStringValue()),
            'assignmentCreatedDateTime' => fn(ParseNode $n) => $o->setAssignmentCreatedDateTime($n->getDateTimeValue()),
            'lastSignInDateTime' => fn(ParseNode $n) => $o->setLastSignInDateTime($n->getDateTimeValue()),
            'roleDefinitionId' => fn(ParseNode $n) => $o->setRoleDefinitionId($n->getStringValue()),
            'roleDisplayName' => fn(ParseNode $n) => $o->setRoleDisplayName($n->getStringValue()),
            'roleTemplateId' => fn(ParseNode $n) => $o->setRoleTemplateId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastSignInDateTime property value. Date and time of last sign in.
     * @return DateTime|null
    */
    public function getLastSignInDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastSignInDateTime');
    }

    /**
     * Gets the roleDefinitionId property value. The identifier for the directory role definition that's in scope of this incident.
     * @return string|null
    */
    public function getRoleDefinitionId(): ?string {
        return $this->getBackingStore()->get('roleDefinitionId');
    }

    /**
     * Gets the roleDisplayName property value. The display name for the directory role.
     * @return string|null
    */
    public function getRoleDisplayName(): ?string {
        return $this->getBackingStore()->get('roleDisplayName');
    }

    /**
     * Gets the roleTemplateId property value. The globally unique identifier for the directory role.
     * @return string|null
    */
    public function getRoleTemplateId(): ?string {
        return $this->getBackingStore()->get('roleTemplateId');
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
        $writer->writeDateTimeValue('assignmentCreatedDateTime', $this->getAssignmentCreatedDateTime());
        $writer->writeDateTimeValue('lastSignInDateTime', $this->getLastSignInDateTime());
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
     * Sets the assigneeUserPrincipalName property value. User principal name of the subject that the incident applies to. Applies to user principals.
     * @param string|null $value Value to set for the assigneeUserPrincipalName property.
    */
    public function setAssigneeUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('assigneeUserPrincipalName', $value);
    }

    /**
     * Sets the assignmentCreatedDateTime property value. Date and time of assignment creation.
     * @param DateTime|null $value Value to set for the assignmentCreatedDateTime property.
    */
    public function setAssignmentCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('assignmentCreatedDateTime', $value);
    }

    /**
     * Sets the lastSignInDateTime property value. Date and time of last sign in.
     * @param DateTime|null $value Value to set for the lastSignInDateTime property.
    */
    public function setLastSignInDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSignInDateTime', $value);
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
