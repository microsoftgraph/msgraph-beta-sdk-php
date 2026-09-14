<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomFieldDefinition extends Entity implements Parsable 
{
    /**
     * Instantiates a new CustomFieldDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomFieldDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomFieldDefinition {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.caseManagement.dateTimeCustomFieldDefinition': return new DateTimeCustomFieldDefinition();
                case '#microsoft.graph.security.caseManagement.numberCustomFieldDefinition': return new NumberCustomFieldDefinition();
                case '#microsoft.graph.security.caseManagement.optionsCustomFieldDefinition': return new OptionsCustomFieldDefinition();
                case '#microsoft.graph.security.caseManagement.stringCustomFieldDefinition': return new StringCustomFieldDefinition();
            }
        }
        return new CustomFieldDefinition();
    }

    /**
     * Gets the description property value. The field description. Supports $filter and $orderby.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The field label shown on the case form. Supports $filter and $orderby.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isDisabled' => fn(ParseNode $n) => $o->setIsDisabled($n->getBooleanValue()),
            'isRequired' => fn(ParseNode $n) => $o->setIsRequired($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isDisabled property value. true if the field is disabled; otherwise, false. Supports $filter and $orderby.
     * @return bool|null
    */
    public function getIsDisabled(): ?bool {
        $val = $this->getBackingStore()->get('isDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDisabled'");
    }

    /**
     * Gets the isRequired property value. true if a value is required for this field; otherwise, false. Supports $filter and $orderby.
     * @return bool|null
    */
    public function getIsRequired(): ?bool {
        $val = $this->getBackingStore()->get('isRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRequired'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isDisabled', $this->getIsDisabled());
        $writer->writeBooleanValue('isRequired', $this->getIsRequired());
    }

    /**
     * Sets the description property value. The field description. Supports $filter and $orderby.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The field label shown on the case form. Supports $filter and $orderby.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isDisabled property value. true if the field is disabled; otherwise, false. Supports $filter and $orderby.
     * @param bool|null $value Value to set for the isDisabled property.
    */
    public function setIsDisabled(?bool $value): void {
        $this->getBackingStore()->set('isDisabled', $value);
    }

    /**
     * Sets the isRequired property value. true if a value is required for this field; otherwise, false. Supports $filter and $orderby.
     * @param bool|null $value Value to set for the isRequired property.
    */
    public function setIsRequired(?bool $value): void {
        $this->getBackingStore()->set('isRequired', $value);
    }

}
