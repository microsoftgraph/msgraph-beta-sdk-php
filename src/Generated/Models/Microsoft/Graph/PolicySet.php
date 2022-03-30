<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PolicySet extends Entity 
{
    /** @var array<PolicySetAssignment>|null $assignments Assignments of the PolicySet. */
    private ?array $assignments = null;
    
    /** @var DateTime|null $createdDateTime Creation time of the PolicySet. */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $description Description of the PolicySet. */
    private ?string $description = null;
    
    /** @var string|null $displayName DisplayName of the PolicySet. */
    private ?string $displayName = null;
    
    /** @var ErrorCode|null $errorCode Error code if any occured. Possible values are: noError, unauthorized, notFound, deleted. */
    private ?ErrorCode $errorCode = null;
    
    /** @var array<string>|null $guidedDeploymentTags Tags of the guided deployment */
    private ?array $guidedDeploymentTags = null;
    
    /** @var array<PolicySetItem>|null $items Items of the PolicySet with maximum count 100. */
    private ?array $items = null;
    
    /** @var DateTime|null $lastModifiedDateTime Last modified time of the PolicySet. */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var array<string>|null $roleScopeTags RoleScopeTags of the PolicySet */
    private ?array $roleScopeTags = null;
    
    /** @var PolicySetStatus|null $status Validation/assignment status of the PolicySet. Possible values are: unknown, validating, partialSuccess, success, error, notAssigned. */
    private ?PolicySetStatus $status = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): PolicySet {
        return new PolicySet();
    }

    /**
     * Gets the assignments property value. Assignments of the PolicySet.
     * @return array<PolicySetAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the createdDateTime property value. Creation time of the PolicySet.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. Description of the PolicySet.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. DisplayName of the PolicySet.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the errorCode property value. Error code if any occured. Possible values are: noError, unauthorized, notFound, deleted.
     * @return ErrorCode|null
    */
    public function getErrorCode(): ?ErrorCode {
        return $this->errorCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => function (self $o, ParseNode $n) { $o->setAssignments($n->getCollectionOfObjectValues(PolicySetAssignment::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'errorCode' => function (self $o, ParseNode $n) { $o->setErrorCode($n->getEnumValue(ErrorCode::class)); },
            'guidedDeploymentTags' => function (self $o, ParseNode $n) { $o->setGuidedDeploymentTags($n->getCollectionOfPrimitiveValues()); },
            'items' => function (self $o, ParseNode $n) { $o->setItems($n->getCollectionOfObjectValues(PolicySetItem::class)); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'roleScopeTags' => function (self $o, ParseNode $n) { $o->setRoleScopeTags($n->getCollectionOfPrimitiveValues()); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getEnumValue(PolicySetStatus::class)); },
        ]);
    }

    /**
     * Gets the guidedDeploymentTags property value. Tags of the guided deployment
     * @return array<string>|null
    */
    public function getGuidedDeploymentTags(): ?array {
        return $this->guidedDeploymentTags;
    }

    /**
     * Gets the items property value. Items of the PolicySet with maximum count 100.
     * @return array<PolicySetItem>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the lastModifiedDateTime property value. Last modified time of the PolicySet.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the roleScopeTags property value. RoleScopeTags of the PolicySet
     * @return array<string>|null
    */
    public function getRoleScopeTags(): ?array {
        return $this->roleScopeTags;
    }

    /**
     * Gets the status property value. Validation/assignment status of the PolicySet. Possible values are: unknown, validating, partialSuccess, success, error, notAssigned.
     * @return PolicySetStatus|null
    */
    public function getStatus(): ?PolicySetStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('errorCode', $this->errorCode);
        $writer->writeCollectionOfPrimitiveValues('guidedDeploymentTags', $this->guidedDeploymentTags);
        $writer->writeCollectionOfObjectValues('items', $this->items);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTags', $this->roleScopeTags);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the assignments property value. Assignments of the PolicySet.
     *  @param array<PolicySetAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the createdDateTime property value. Creation time of the PolicySet.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. Description of the PolicySet.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. DisplayName of the PolicySet.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the errorCode property value. Error code if any occured. Possible values are: noError, unauthorized, notFound, deleted.
     *  @param ErrorCode|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?ErrorCode $value ): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the guidedDeploymentTags property value. Tags of the guided deployment
     *  @param array<string>|null $value Value to set for the guidedDeploymentTags property.
    */
    public function setGuidedDeploymentTags(?array $value ): void {
        $this->guidedDeploymentTags = $value;
    }

    /**
     * Sets the items property value. Items of the PolicySet with maximum count 100.
     *  @param array<PolicySetItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value ): void {
        $this->items = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Last modified time of the PolicySet.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the roleScopeTags property value. RoleScopeTags of the PolicySet
     *  @param array<string>|null $value Value to set for the roleScopeTags property.
    */
    public function setRoleScopeTags(?array $value ): void {
        $this->roleScopeTags = $value;
    }

    /**
     * Sets the status property value. Validation/assignment status of the PolicySet. Possible values are: unknown, validating, partialSuccess, success, error, notAssigned.
     *  @param PolicySetStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PolicySetStatus $value ): void {
        $this->status = $value;
    }

}
