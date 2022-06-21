<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupPolicyDefinition extends Entity 
{
    /** @var GroupPolicyCategory|null $category The group policy category associated with the definition. */
    private ?GroupPolicyCategory $category = null;
    
    /** @var string|null $categoryPath The localized full category path for the policy. */
    private ?string $categoryPath = null;
    
    /** @var GroupPolicyDefinitionClassType|null $classType Identifies the type of groups the policy can be applied to. Possible values are: user, machine. */
    private ?GroupPolicyDefinitionClassType $classType = null;
    
    /** @var GroupPolicyDefinitionFile|null $definitionFile The group policy file associated with the definition. */
    private ?GroupPolicyDefinitionFile $definitionFile = null;
    
    /** @var string|null $displayName The localized policy name. */
    private ?string $displayName = null;
    
    /** @var string|null $explainText The localized explanation or help text associated with the policy. The default value is empty. */
    private ?string $explainText = null;
    
    /** @var string|null $groupPolicyCategoryId The category id of the parent category */
    private ?string $groupPolicyCategoryId = null;
    
    /** @var bool|null $hasRelatedDefinitions Signifies whether or not there are related definitions to this definition */
    private ?bool $hasRelatedDefinitions = null;
    
    /** @var DateTime|null $lastModifiedDateTime The date and time the entity was last modified. */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var string|null $minDeviceCspVersion Minimum required CSP version for device configuration in this definition */
    private ?string $minDeviceCspVersion = null;
    
    /** @var string|null $minUserCspVersion Minimum required CSP version for user configuration in this definition */
    private ?string $minUserCspVersion = null;
    
    /** @var GroupPolicyDefinition|null $nextVersionDefinition Definition of the next version of this definition */
    private ?GroupPolicyDefinition $nextVersionDefinition = null;
    
    /** @var GroupPolicyType|null $policyType Specifies the type of group policy. Possible values are: admxBacked, admxIngested. */
    private ?GroupPolicyType $policyType = null;
    
    /** @var array<GroupPolicyPresentation>|null $presentations The group policy presentations associated with the definition. */
    private ?array $presentations = null;
    
    /** @var GroupPolicyDefinition|null $previousVersionDefinition Definition of the previous version of this definition */
    private ?GroupPolicyDefinition $previousVersionDefinition = null;
    
    /** @var string|null $supportedOn Localized string used to specify what operating system or application version is affected by the policy. */
    private ?string $supportedOn = null;
    
    /** @var string|null $version Setting definition version */
    private ?string $version = null;
    
    /**
     * Instantiates a new groupPolicyDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyDefinition
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyDefinition {
        return new GroupPolicyDefinition();
    }

    /**
     * Gets the category property value. The group policy category associated with the definition.
     * @return GroupPolicyCategory|null
    */
    public function getCategory(): ?GroupPolicyCategory {
        return $this->category;
    }

    /**
     * Gets the categoryPath property value. The localized full category path for the policy.
     * @return string|null
    */
    public function getCategoryPath(): ?string {
        return $this->categoryPath;
    }

    /**
     * Gets the classType property value. Identifies the type of groups the policy can be applied to. Possible values are: user, machine.
     * @return GroupPolicyDefinitionClassType|null
    */
    public function getClassType(): ?GroupPolicyDefinitionClassType {
        return $this->classType;
    }

    /**
     * Gets the definitionFile property value. The group policy file associated with the definition.
     * @return GroupPolicyDefinitionFile|null
    */
    public function getDefinitionFile(): ?GroupPolicyDefinitionFile {
        return $this->definitionFile;
    }

    /**
     * Gets the displayName property value. The localized policy name.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the explainText property value. The localized explanation or help text associated with the policy. The default value is empty.
     * @return string|null
    */
    public function getExplainText(): ?string {
        return $this->explainText;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'category' => function (self $o, ParseNode $n) { $o->setCategory($n->getObjectValue(GroupPolicyCategory::class)); },
            'categoryPath' => function (self $o, ParseNode $n) { $o->setCategoryPath($n->getStringValue()); },
            'classType' => function (self $o, ParseNode $n) { $o->setClassType($n->getEnumValue(GroupPolicyDefinitionClassType::class)); },
            'definitionFile' => function (self $o, ParseNode $n) { $o->setDefinitionFile($n->getObjectValue(GroupPolicyDefinitionFile::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'explainText' => function (self $o, ParseNode $n) { $o->setExplainText($n->getStringValue()); },
            'groupPolicyCategoryId' => function (self $o, ParseNode $n) { $o->setGroupPolicyCategoryId($n->getStringValue()); },
            'hasRelatedDefinitions' => function (self $o, ParseNode $n) { $o->setHasRelatedDefinitions($n->getBooleanValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'minDeviceCspVersion' => function (self $o, ParseNode $n) { $o->setMinDeviceCspVersion($n->getStringValue()); },
            'minUserCspVersion' => function (self $o, ParseNode $n) { $o->setMinUserCspVersion($n->getStringValue()); },
            'nextVersionDefinition' => function (self $o, ParseNode $n) { $o->setNextVersionDefinition($n->getObjectValue(GroupPolicyDefinition::class)); },
            'policyType' => function (self $o, ParseNode $n) { $o->setPolicyType($n->getEnumValue(GroupPolicyType::class)); },
            'presentations' => function (self $o, ParseNode $n) { $o->setPresentations($n->getCollectionOfObjectValues(GroupPolicyPresentation::class)); },
            'previousVersionDefinition' => function (self $o, ParseNode $n) { $o->setPreviousVersionDefinition($n->getObjectValue(GroupPolicyDefinition::class)); },
            'supportedOn' => function (self $o, ParseNode $n) { $o->setSupportedOn($n->getStringValue()); },
            'version' => function (self $o, ParseNode $n) { $o->setVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the groupPolicyCategoryId property value. The category id of the parent category
     * @return string|null
    */
    public function getGroupPolicyCategoryId(): ?string {
        return $this->groupPolicyCategoryId;
    }

    /**
     * Gets the hasRelatedDefinitions property value. Signifies whether or not there are related definitions to this definition
     * @return bool|null
    */
    public function getHasRelatedDefinitions(): ?bool {
        return $this->hasRelatedDefinitions;
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the entity was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the minDeviceCspVersion property value. Minimum required CSP version for device configuration in this definition
     * @return string|null
    */
    public function getMinDeviceCspVersion(): ?string {
        return $this->minDeviceCspVersion;
    }

    /**
     * Gets the minUserCspVersion property value. Minimum required CSP version for user configuration in this definition
     * @return string|null
    */
    public function getMinUserCspVersion(): ?string {
        return $this->minUserCspVersion;
    }

    /**
     * Gets the nextVersionDefinition property value. Definition of the next version of this definition
     * @return GroupPolicyDefinition|null
    */
    public function getNextVersionDefinition(): ?GroupPolicyDefinition {
        return $this->nextVersionDefinition;
    }

    /**
     * Gets the policyType property value. Specifies the type of group policy. Possible values are: admxBacked, admxIngested.
     * @return GroupPolicyType|null
    */
    public function getPolicyType(): ?GroupPolicyType {
        return $this->policyType;
    }

    /**
     * Gets the presentations property value. The group policy presentations associated with the definition.
     * @return array<GroupPolicyPresentation>|null
    */
    public function getPresentations(): ?array {
        return $this->presentations;
    }

    /**
     * Gets the previousVersionDefinition property value. Definition of the previous version of this definition
     * @return GroupPolicyDefinition|null
    */
    public function getPreviousVersionDefinition(): ?GroupPolicyDefinition {
        return $this->previousVersionDefinition;
    }

    /**
     * Gets the supportedOn property value. Localized string used to specify what operating system or application version is affected by the policy.
     * @return string|null
    */
    public function getSupportedOn(): ?string {
        return $this->supportedOn;
    }

    /**
     * Gets the version property value. Setting definition version
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('category', $this->category);
        $writer->writeStringValue('categoryPath', $this->categoryPath);
        $writer->writeEnumValue('classType', $this->classType);
        $writer->writeObjectValue('definitionFile', $this->definitionFile);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('explainText', $this->explainText);
        $writer->writeStringValue('groupPolicyCategoryId', $this->groupPolicyCategoryId);
        $writer->writeBooleanValue('hasRelatedDefinitions', $this->hasRelatedDefinitions);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('minDeviceCspVersion', $this->minDeviceCspVersion);
        $writer->writeStringValue('minUserCspVersion', $this->minUserCspVersion);
        $writer->writeObjectValue('nextVersionDefinition', $this->nextVersionDefinition);
        $writer->writeEnumValue('policyType', $this->policyType);
        $writer->writeCollectionOfObjectValues('presentations', $this->presentations);
        $writer->writeObjectValue('previousVersionDefinition', $this->previousVersionDefinition);
        $writer->writeStringValue('supportedOn', $this->supportedOn);
        $writer->writeStringValue('version', $this->version);
    }

    /**
     * Sets the category property value. The group policy category associated with the definition.
     *  @param GroupPolicyCategory|null $value Value to set for the category property.
    */
    public function setCategory(?GroupPolicyCategory $value ): void {
        $this->category = $value;
    }

    /**
     * Sets the categoryPath property value. The localized full category path for the policy.
     *  @param string|null $value Value to set for the categoryPath property.
    */
    public function setCategoryPath(?string $value ): void {
        $this->categoryPath = $value;
    }

    /**
     * Sets the classType property value. Identifies the type of groups the policy can be applied to. Possible values are: user, machine.
     *  @param GroupPolicyDefinitionClassType|null $value Value to set for the classType property.
    */
    public function setClassType(?GroupPolicyDefinitionClassType $value ): void {
        $this->classType = $value;
    }

    /**
     * Sets the definitionFile property value. The group policy file associated with the definition.
     *  @param GroupPolicyDefinitionFile|null $value Value to set for the definitionFile property.
    */
    public function setDefinitionFile(?GroupPolicyDefinitionFile $value ): void {
        $this->definitionFile = $value;
    }

    /**
     * Sets the displayName property value. The localized policy name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the explainText property value. The localized explanation or help text associated with the policy. The default value is empty.
     *  @param string|null $value Value to set for the explainText property.
    */
    public function setExplainText(?string $value ): void {
        $this->explainText = $value;
    }

    /**
     * Sets the groupPolicyCategoryId property value. The category id of the parent category
     *  @param string|null $value Value to set for the groupPolicyCategoryId property.
    */
    public function setGroupPolicyCategoryId(?string $value ): void {
        $this->groupPolicyCategoryId = $value;
    }

    /**
     * Sets the hasRelatedDefinitions property value. Signifies whether or not there are related definitions to this definition
     *  @param bool|null $value Value to set for the hasRelatedDefinitions property.
    */
    public function setHasRelatedDefinitions(?bool $value ): void {
        $this->hasRelatedDefinitions = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the entity was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the minDeviceCspVersion property value. Minimum required CSP version for device configuration in this definition
     *  @param string|null $value Value to set for the minDeviceCspVersion property.
    */
    public function setMinDeviceCspVersion(?string $value ): void {
        $this->minDeviceCspVersion = $value;
    }

    /**
     * Sets the minUserCspVersion property value. Minimum required CSP version for user configuration in this definition
     *  @param string|null $value Value to set for the minUserCspVersion property.
    */
    public function setMinUserCspVersion(?string $value ): void {
        $this->minUserCspVersion = $value;
    }

    /**
     * Sets the nextVersionDefinition property value. Definition of the next version of this definition
     *  @param GroupPolicyDefinition|null $value Value to set for the nextVersionDefinition property.
    */
    public function setNextVersionDefinition(?GroupPolicyDefinition $value ): void {
        $this->nextVersionDefinition = $value;
    }

    /**
     * Sets the policyType property value. Specifies the type of group policy. Possible values are: admxBacked, admxIngested.
     *  @param GroupPolicyType|null $value Value to set for the policyType property.
    */
    public function setPolicyType(?GroupPolicyType $value ): void {
        $this->policyType = $value;
    }

    /**
     * Sets the presentations property value. The group policy presentations associated with the definition.
     *  @param array<GroupPolicyPresentation>|null $value Value to set for the presentations property.
    */
    public function setPresentations(?array $value ): void {
        $this->presentations = $value;
    }

    /**
     * Sets the previousVersionDefinition property value. Definition of the previous version of this definition
     *  @param GroupPolicyDefinition|null $value Value to set for the previousVersionDefinition property.
    */
    public function setPreviousVersionDefinition(?GroupPolicyDefinition $value ): void {
        $this->previousVersionDefinition = $value;
    }

    /**
     * Sets the supportedOn property value. Localized string used to specify what operating system or application version is affected by the policy.
     *  @param string|null $value Value to set for the supportedOn property.
    */
    public function setSupportedOn(?string $value ): void {
        $this->supportedOn = $value;
    }

    /**
     * Sets the version property value. Setting definition version
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

}
