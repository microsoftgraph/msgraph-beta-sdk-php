<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The base entity for the display presentation of any of the additional options in a group policy definition.
*/
class GroupPolicyPresentation extends Entity implements Parsable 
{
    /**
     * Instantiates a new groupPolicyPresentation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyPresentation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyPresentation {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.groupPolicyPresentationCheckBox': return new GroupPolicyPresentationCheckBox();
                case '#microsoft.graph.groupPolicyPresentationComboBox': return new GroupPolicyPresentationComboBox();
                case '#microsoft.graph.groupPolicyPresentationDecimalTextBox': return new GroupPolicyPresentationDecimalTextBox();
                case '#microsoft.graph.groupPolicyPresentationDropdownList': return new GroupPolicyPresentationDropdownList();
                case '#microsoft.graph.groupPolicyPresentationListBox': return new GroupPolicyPresentationListBox();
                case '#microsoft.graph.groupPolicyPresentationLongDecimalTextBox': return new GroupPolicyPresentationLongDecimalTextBox();
                case '#microsoft.graph.groupPolicyPresentationMultiTextBox': return new GroupPolicyPresentationMultiTextBox();
                case '#microsoft.graph.groupPolicyPresentationText': return new GroupPolicyPresentationText();
                case '#microsoft.graph.groupPolicyPresentationTextBox': return new GroupPolicyPresentationTextBox();
                case '#microsoft.graph.groupPolicyUploadedPresentation': return new GroupPolicyUploadedPresentation();
            }
        }
        return new GroupPolicyPresentation();
    }

    /**
     * Gets the definition property value. The group policy definition associated with the presentation.
     * @return GroupPolicyDefinition|null
    */
    public function getDefinition(): ?GroupPolicyDefinition {
        $val = $this->getBackingStore()->get('definition');
        if (is_null($val) || $val instanceof GroupPolicyDefinition) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'definition'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'definition' => fn(ParseNode $n) => $o->setDefinition($n->getObjectValue([GroupPolicyDefinition::class, 'createFromDiscriminatorValue'])),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the label property value. Localized text label for any presentation entity. The default value is empty.
     * @return string|null
    */
    public function getLabel(): ?string {
        $val = $this->getBackingStore()->get('label');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'label'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('definition', $this->getDefinition());
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
    }

    /**
     * Sets the definition property value. The group policy definition associated with the presentation.
     * @param GroupPolicyDefinition|null $value Value to set for the definition property.
    */
    public function setDefinition(?GroupPolicyDefinition $value): void {
        $this->getBackingStore()->set('definition', $value);
    }

    /**
     * Sets the label property value. Localized text label for any presentation entity. The default value is empty.
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->getBackingStore()->set('label', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the entity was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

}
