<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A class containing the properties used for PolicySet.
*/
class PolicySet extends Entity implements Parsable 
{
    /**
     * Instantiates a new policySet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PolicySet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PolicySet {
        return new PolicySet();
    }

    /**
     * Gets the assignments property value. Assignments of the PolicySet.
     * @return array<PolicySetAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->getBackingStore()->get('assignments');
    }

    /**
     * Gets the createdDateTime property value. Creation time of the PolicySet.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the description property value. Description of the PolicySet.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. DisplayName of the PolicySet.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the errorCode property value. The errorCode property
     * @return ErrorCode|null
    */
    public function getErrorCode(): ?ErrorCode {
        return $this->getBackingStore()->get('errorCode');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([PolicySetAssignment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getEnumValue(ErrorCode::class)),
            'guidedDeploymentTags' => fn(ParseNode $n) => $o->setGuidedDeploymentTags($n->getCollectionOfPrimitiveValues()),
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([PolicySetItem::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'roleScopeTags' => fn(ParseNode $n) => $o->setRoleScopeTags($n->getCollectionOfPrimitiveValues()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(PolicySetStatus::class)),
        ]);
    }

    /**
     * Gets the guidedDeploymentTags property value. Tags of the guided deployment
     * @return array<string>|null
    */
    public function getGuidedDeploymentTags(): ?array {
        return $this->getBackingStore()->get('guidedDeploymentTags');
    }

    /**
     * Gets the items property value. Items of the PolicySet with maximum count 100.
     * @return array<PolicySetItem>|null
    */
    public function getItems(): ?array {
        return $this->getBackingStore()->get('items');
    }

    /**
     * Gets the lastModifiedDateTime property value. Last modified time of the PolicySet.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the roleScopeTags property value. RoleScopeTags of the PolicySet
     * @return array<string>|null
    */
    public function getRoleScopeTags(): ?array {
        return $this->getBackingStore()->get('roleScopeTags');
    }

    /**
     * Gets the status property value. The enum to specify the status of PolicySet.
     * @return PolicySetStatus|null
    */
    public function getStatus(): ?PolicySetStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('errorCode', $this->getErrorCode());
        $writer->writeCollectionOfPrimitiveValues('guidedDeploymentTags', $this->getGuidedDeploymentTags());
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTags', $this->getRoleScopeTags());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the assignments property value. Assignments of the PolicySet.
     * @param array<PolicySetAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the createdDateTime property value. Creation time of the PolicySet.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. Description of the PolicySet.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. DisplayName of the PolicySet.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the errorCode property value. The errorCode property
     * @param ErrorCode|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?ErrorCode $value): void {
        $this->getBackingStore()->set('errorCode', $value);
    }

    /**
     * Sets the guidedDeploymentTags property value. Tags of the guided deployment
     * @param array<string>|null $value Value to set for the guidedDeploymentTags property.
    */
    public function setGuidedDeploymentTags(?array $value): void {
        $this->getBackingStore()->set('guidedDeploymentTags', $value);
    }

    /**
     * Sets the items property value. Items of the PolicySet with maximum count 100.
     * @param array<PolicySetItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->getBackingStore()->set('items', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Last modified time of the PolicySet.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the roleScopeTags property value. RoleScopeTags of the PolicySet
     * @param array<string>|null $value Value to set for the roleScopeTags property.
    */
    public function setRoleScopeTags(?array $value): void {
        $this->getBackingStore()->set('roleScopeTags', $value);
    }

    /**
     * Sets the status property value. The enum to specify the status of PolicySet.
     * @param PolicySetStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PolicySetStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
