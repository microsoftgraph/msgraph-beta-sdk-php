<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupPolicyConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new GroupPolicyConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyConfiguration {
        return new GroupPolicyConfiguration();
    }

    /**
     * Gets the assignments property value. The list of group assignments for the configuration.
     * @return array<GroupPolicyConfigurationAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->getBackingStore()->get('assignments');
    }

    /**
     * Gets the createdDateTime property value. The date and time the object was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the definitionValues property value. The list of enabled or disabled group policy definition values for the configuration.
     * @return array<GroupPolicyDefinitionValue>|null
    */
    public function getDefinitionValues(): ?array {
        return $this->getBackingStore()->get('definitionValues');
    }

    /**
     * Gets the description property value. User provided description for the resource object.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. User provided name for the resource object.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([GroupPolicyConfigurationAssignment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'definitionValues' => fn(ParseNode $n) => $o->setDefinitionValues($n->getCollectionOfObjectValues([GroupPolicyDefinitionValue::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'policyConfigurationIngestionType' => fn(ParseNode $n) => $o->setPolicyConfigurationIngestionType($n->getEnumValue(GroupPolicyConfigurationIngestionType::class)),
            'roleScopeTagIds' => fn(ParseNode $n) => $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the entity was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the policyConfigurationIngestionType property value. Group Policy Configuration Ingestion Type
     * @return GroupPolicyConfigurationIngestionType|null
    */
    public function getPolicyConfigurationIngestionType(): ?GroupPolicyConfigurationIngestionType {
        return $this->getBackingStore()->get('policyConfigurationIngestionType');
    }

    /**
     * Gets the roleScopeTagIds property value. The list of scope tags for the configuration.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->getBackingStore()->get('roleScopeTagIds');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfObjectValues('definitionValues', $this->getDefinitionValues());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeEnumValue('policyConfigurationIngestionType', $this->getPolicyConfigurationIngestionType());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
    }

    /**
     * Sets the assignments property value. The list of group assignments for the configuration.
     * @param array<GroupPolicyConfigurationAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time the object was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the definitionValues property value. The list of enabled or disabled group policy definition values for the configuration.
     * @param array<GroupPolicyDefinitionValue>|null $value Value to set for the definitionValues property.
    */
    public function setDefinitionValues(?array $value): void {
        $this->getBackingStore()->set('definitionValues', $value);
    }

    /**
     * Sets the description property value. User provided description for the resource object.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. User provided name for the resource object.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the entity was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the policyConfigurationIngestionType property value. Group Policy Configuration Ingestion Type
     * @param GroupPolicyConfigurationIngestionType|null $value Value to set for the policyConfigurationIngestionType property.
    */
    public function setPolicyConfigurationIngestionType(?GroupPolicyConfigurationIngestionType $value): void {
        $this->getBackingStore()->set('policyConfigurationIngestionType', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. The list of scope tags for the configuration.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

}
