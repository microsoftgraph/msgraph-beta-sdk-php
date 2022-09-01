<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupPolicyConfiguration extends Entity implements Parsable 
{
    /**
     * @var array<GroupPolicyConfigurationAssignment>|null $assignments The list of group assignments for the configuration.
    */
    private ?array $assignments = null;
    
    /**
     * @var DateTime|null $createdDateTime The date and time the object was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var array<GroupPolicyDefinitionValue>|null $definitionValues The list of enabled or disabled group policy definition values for the configuration.
    */
    private ?array $definitionValues = null;
    
    /**
     * @var string|null $description User provided description for the resource object.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName User provided name for the resource object.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date and time the entity was last modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var GroupPolicyConfigurationIngestionType|null $policyConfigurationIngestionType Group Policy Configuration Ingestion Type
    */
    private ?GroupPolicyConfigurationIngestionType $policyConfigurationIngestionType = null;
    
    /**
     * @var array<string>|null $roleScopeTagIds The list of scope tags for the configuration.
    */
    private ?array $roleScopeTagIds = null;
    
    /**
     * Instantiates a new groupPolicyConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.groupPolicyConfiguration');
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
        return $this->assignments;
    }

    /**
     * Gets the createdDateTime property value. The date and time the object was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the definitionValues property value. The list of enabled or disabled group policy definition values for the configuration.
     * @return array<GroupPolicyDefinitionValue>|null
    */
    public function getDefinitionValues(): ?array {
        return $this->definitionValues;
    }

    /**
     * Gets the description property value. User provided description for the resource object.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. User provided name for the resource object.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => function (ParseNode $n) use ($o) { $o->setAssignments($n->getCollectionOfObjectValues(array(GroupPolicyConfigurationAssignment::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'definitionValues' => function (ParseNode $n) use ($o) { $o->setDefinitionValues($n->getCollectionOfObjectValues(array(GroupPolicyDefinitionValue::class, 'createFromDiscriminatorValue'))); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'policyConfigurationIngestionType' => function (ParseNode $n) use ($o) { $o->setPolicyConfigurationIngestionType($n->getEnumValue(GroupPolicyConfigurationIngestionType::class)); },
            'roleScopeTagIds' => function (ParseNode $n) use ($o) { $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the entity was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the policyConfigurationIngestionType property value. Group Policy Configuration Ingestion Type
     * @return GroupPolicyConfigurationIngestionType|null
    */
    public function getPolicyConfigurationIngestionType(): ?GroupPolicyConfigurationIngestionType {
        return $this->policyConfigurationIngestionType;
    }

    /**
     * Gets the roleScopeTagIds property value. The list of scope tags for the configuration.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeCollectionOfObjectValues('definitionValues', $this->definitionValues);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeEnumValue('policyConfigurationIngestionType', $this->policyConfigurationIngestionType);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
    }

    /**
     * Sets the assignments property value. The list of group assignments for the configuration.
     *  @param array<GroupPolicyConfigurationAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time the object was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the definitionValues property value. The list of enabled or disabled group policy definition values for the configuration.
     *  @param array<GroupPolicyDefinitionValue>|null $value Value to set for the definitionValues property.
    */
    public function setDefinitionValues(?array $value ): void {
        $this->definitionValues = $value;
    }

    /**
     * Sets the description property value. User provided description for the resource object.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. User provided name for the resource object.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the entity was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the policyConfigurationIngestionType property value. Group Policy Configuration Ingestion Type
     *  @param GroupPolicyConfigurationIngestionType|null $value Value to set for the policyConfigurationIngestionType property.
    */
    public function setPolicyConfigurationIngestionType(?GroupPolicyConfigurationIngestionType $value ): void {
        $this->policyConfigurationIngestionType = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. The list of scope tags for the configuration.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

}
