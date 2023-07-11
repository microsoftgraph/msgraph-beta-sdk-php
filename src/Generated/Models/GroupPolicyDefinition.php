<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The entity describes all of the information about a single group policy.
*/
class GroupPolicyDefinition extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyDefinition {
        return new GroupPolicyDefinition();
    }

    /**
     * Gets the category property value. The group policy category associated with the definition.
     * @return GroupPolicyCategory|null
    */
    public function getCategory(): ?GroupPolicyCategory {
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || $val instanceof GroupPolicyCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * Gets the categoryPath property value. The localized full category path for the policy.
     * @return string|null
    */
    public function getCategoryPath(): ?string {
        $val = $this->getBackingStore()->get('categoryPath');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'categoryPath'");
    }

    /**
     * Gets the classType property value. Group Policy Definition Class Type.
     * @return GroupPolicyDefinitionClassType|null
    */
    public function getClassType(): ?GroupPolicyDefinitionClassType {
        $val = $this->getBackingStore()->get('classType');
        if (is_null($val) || $val instanceof GroupPolicyDefinitionClassType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classType'");
    }

    /**
     * Gets the definitionFile property value. The group policy file associated with the definition.
     * @return GroupPolicyDefinitionFile|null
    */
    public function getDefinitionFile(): ?GroupPolicyDefinitionFile {
        $val = $this->getBackingStore()->get('definitionFile');
        if (is_null($val) || $val instanceof GroupPolicyDefinitionFile) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'definitionFile'");
    }

    /**
     * Gets the displayName property value. The localized policy name.
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
     * Gets the explainText property value. The localized explanation or help text associated with the policy. The default value is empty.
     * @return string|null
    */
    public function getExplainText(): ?string {
        $val = $this->getBackingStore()->get('explainText');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'explainText'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getObjectValue([GroupPolicyCategory::class, 'createFromDiscriminatorValue'])),
            'categoryPath' => fn(ParseNode $n) => $o->setCategoryPath($n->getStringValue()),
            'classType' => fn(ParseNode $n) => $o->setClassType($n->getEnumValue(GroupPolicyDefinitionClassType::class)),
            'definitionFile' => fn(ParseNode $n) => $o->setDefinitionFile($n->getObjectValue([GroupPolicyDefinitionFile::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'explainText' => fn(ParseNode $n) => $o->setExplainText($n->getStringValue()),
            'groupPolicyCategoryId' => fn(ParseNode $n) => $o->setGroupPolicyCategoryId($n->getStringValue()),
            'hasRelatedDefinitions' => fn(ParseNode $n) => $o->setHasRelatedDefinitions($n->getBooleanValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'minDeviceCspVersion' => fn(ParseNode $n) => $o->setMinDeviceCspVersion($n->getStringValue()),
            'minUserCspVersion' => fn(ParseNode $n) => $o->setMinUserCspVersion($n->getStringValue()),
            'nextVersionDefinition' => fn(ParseNode $n) => $o->setNextVersionDefinition($n->getObjectValue([GroupPolicyDefinition::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'policyType' => fn(ParseNode $n) => $o->setPolicyType($n->getEnumValue(GroupPolicyType::class)),
            'presentations' => fn(ParseNode $n) => $o->setPresentations($n->getCollectionOfObjectValues([GroupPolicyPresentation::class, 'createFromDiscriminatorValue'])),
            'previousVersionDefinition' => fn(ParseNode $n) => $o->setPreviousVersionDefinition($n->getObjectValue([GroupPolicyDefinition::class, 'createFromDiscriminatorValue'])),
            'supportedOn' => fn(ParseNode $n) => $o->setSupportedOn($n->getStringValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the groupPolicyCategoryId property value. The category id of the parent category
     * @return string|null
    */
    public function getGroupPolicyCategoryId(): ?string {
        $val = $this->getBackingStore()->get('groupPolicyCategoryId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupPolicyCategoryId'");
    }

    /**
     * Gets the hasRelatedDefinitions property value. Signifies whether or not there are related definitions to this definition
     * @return bool|null
    */
    public function getHasRelatedDefinitions(): ?bool {
        $val = $this->getBackingStore()->get('hasRelatedDefinitions');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasRelatedDefinitions'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the entity was last modified.
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
     * Gets the minDeviceCspVersion property value. Minimum required CSP version for device configuration in this definition
     * @return string|null
    */
    public function getMinDeviceCspVersion(): ?string {
        $val = $this->getBackingStore()->get('minDeviceCspVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minDeviceCspVersion'");
    }

    /**
     * Gets the minUserCspVersion property value. Minimum required CSP version for user configuration in this definition
     * @return string|null
    */
    public function getMinUserCspVersion(): ?string {
        $val = $this->getBackingStore()->get('minUserCspVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minUserCspVersion'");
    }

    /**
     * Gets the nextVersionDefinition property value. Definition of the next version of this definition
     * @return GroupPolicyDefinition|null
    */
    public function getNextVersionDefinition(): ?GroupPolicyDefinition {
        $val = $this->getBackingStore()->get('nextVersionDefinition');
        if (is_null($val) || $val instanceof GroupPolicyDefinition) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nextVersionDefinition'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the policyType property value. Type of Group Policy File or Definition.
     * @return GroupPolicyType|null
    */
    public function getPolicyType(): ?GroupPolicyType {
        $val = $this->getBackingStore()->get('policyType');
        if (is_null($val) || $val instanceof GroupPolicyType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyType'");
    }

    /**
     * Gets the presentations property value. The group policy presentations associated with the definition.
     * @return array<GroupPolicyPresentation>|null
    */
    public function getPresentations(): ?array {
        $val = $this->getBackingStore()->get('presentations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GroupPolicyPresentation::class);
            /** @var array<GroupPolicyPresentation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'presentations'");
    }

    /**
     * Gets the previousVersionDefinition property value. Definition of the previous version of this definition
     * @return GroupPolicyDefinition|null
    */
    public function getPreviousVersionDefinition(): ?GroupPolicyDefinition {
        $val = $this->getBackingStore()->get('previousVersionDefinition');
        if (is_null($val) || $val instanceof GroupPolicyDefinition) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'previousVersionDefinition'");
    }

    /**
     * Gets the supportedOn property value. Localized string used to specify what operating system or application version is affected by the policy.
     * @return string|null
    */
    public function getSupportedOn(): ?string {
        $val = $this->getBackingStore()->get('supportedOn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportedOn'");
    }

    /**
     * Gets the version property value. Setting definition version
     * @return string|null
    */
    public function getVersion(): ?string {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('category', $this->getCategory());
        $writer->writeStringValue('categoryPath', $this->getCategoryPath());
        $writer->writeEnumValue('classType', $this->getClassType());
        $writer->writeObjectValue('definitionFile', $this->getDefinitionFile());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('explainText', $this->getExplainText());
        $writer->writeStringValue('groupPolicyCategoryId', $this->getGroupPolicyCategoryId());
        $writer->writeBooleanValue('hasRelatedDefinitions', $this->getHasRelatedDefinitions());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('minDeviceCspVersion', $this->getMinDeviceCspVersion());
        $writer->writeStringValue('minUserCspVersion', $this->getMinUserCspVersion());
        $writer->writeObjectValue('nextVersionDefinition', $this->getNextVersionDefinition());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('policyType', $this->getPolicyType());
        $writer->writeCollectionOfObjectValues('presentations', $this->getPresentations());
        $writer->writeObjectValue('previousVersionDefinition', $this->getPreviousVersionDefinition());
        $writer->writeStringValue('supportedOn', $this->getSupportedOn());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the category property value. The group policy category associated with the definition.
     * @param GroupPolicyCategory|null $value Value to set for the category property.
    */
    public function setCategory(?GroupPolicyCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the categoryPath property value. The localized full category path for the policy.
     * @param string|null $value Value to set for the categoryPath property.
    */
    public function setCategoryPath(?string $value): void {
        $this->getBackingStore()->set('categoryPath', $value);
    }

    /**
     * Sets the classType property value. Group Policy Definition Class Type.
     * @param GroupPolicyDefinitionClassType|null $value Value to set for the classType property.
    */
    public function setClassType(?GroupPolicyDefinitionClassType $value): void {
        $this->getBackingStore()->set('classType', $value);
    }

    /**
     * Sets the definitionFile property value. The group policy file associated with the definition.
     * @param GroupPolicyDefinitionFile|null $value Value to set for the definitionFile property.
    */
    public function setDefinitionFile(?GroupPolicyDefinitionFile $value): void {
        $this->getBackingStore()->set('definitionFile', $value);
    }

    /**
     * Sets the displayName property value. The localized policy name.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the explainText property value. The localized explanation or help text associated with the policy. The default value is empty.
     * @param string|null $value Value to set for the explainText property.
    */
    public function setExplainText(?string $value): void {
        $this->getBackingStore()->set('explainText', $value);
    }

    /**
     * Sets the groupPolicyCategoryId property value. The category id of the parent category
     * @param string|null $value Value to set for the groupPolicyCategoryId property.
    */
    public function setGroupPolicyCategoryId(?string $value): void {
        $this->getBackingStore()->set('groupPolicyCategoryId', $value);
    }

    /**
     * Sets the hasRelatedDefinitions property value. Signifies whether or not there are related definitions to this definition
     * @param bool|null $value Value to set for the hasRelatedDefinitions property.
    */
    public function setHasRelatedDefinitions(?bool $value): void {
        $this->getBackingStore()->set('hasRelatedDefinitions', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the entity was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the minDeviceCspVersion property value. Minimum required CSP version for device configuration in this definition
     * @param string|null $value Value to set for the minDeviceCspVersion property.
    */
    public function setMinDeviceCspVersion(?string $value): void {
        $this->getBackingStore()->set('minDeviceCspVersion', $value);
    }

    /**
     * Sets the minUserCspVersion property value. Minimum required CSP version for user configuration in this definition
     * @param string|null $value Value to set for the minUserCspVersion property.
    */
    public function setMinUserCspVersion(?string $value): void {
        $this->getBackingStore()->set('minUserCspVersion', $value);
    }

    /**
     * Sets the nextVersionDefinition property value. Definition of the next version of this definition
     * @param GroupPolicyDefinition|null $value Value to set for the nextVersionDefinition property.
    */
    public function setNextVersionDefinition(?GroupPolicyDefinition $value): void {
        $this->getBackingStore()->set('nextVersionDefinition', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the policyType property value. Type of Group Policy File or Definition.
     * @param GroupPolicyType|null $value Value to set for the policyType property.
    */
    public function setPolicyType(?GroupPolicyType $value): void {
        $this->getBackingStore()->set('policyType', $value);
    }

    /**
     * Sets the presentations property value. The group policy presentations associated with the definition.
     * @param array<GroupPolicyPresentation>|null $value Value to set for the presentations property.
    */
    public function setPresentations(?array $value): void {
        $this->getBackingStore()->set('presentations', $value);
    }

    /**
     * Sets the previousVersionDefinition property value. Definition of the previous version of this definition
     * @param GroupPolicyDefinition|null $value Value to set for the previousVersionDefinition property.
    */
    public function setPreviousVersionDefinition(?GroupPolicyDefinition $value): void {
        $this->getBackingStore()->set('previousVersionDefinition', $value);
    }

    /**
     * Sets the supportedOn property value. Localized string used to specify what operating system or application version is affected by the policy.
     * @param string|null $value Value to set for the supportedOn property.
    */
    public function setSupportedOn(?string $value): void {
        $this->getBackingStore()->set('supportedOn', $value);
    }

    /**
     * Sets the version property value. Setting definition version
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
