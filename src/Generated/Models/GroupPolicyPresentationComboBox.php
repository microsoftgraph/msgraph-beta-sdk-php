<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Represents an ADMX comboBox element and an ADMX text element.
*/
class GroupPolicyPresentationComboBox extends GroupPolicyUploadedPresentation implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new groupPolicyPresentationComboBox and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.groupPolicyPresentationComboBox');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyPresentationComboBox
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyPresentationComboBox {
        return new GroupPolicyPresentationComboBox();
    }

    /**
     * Gets the defaultValue property value. Localized default string displayed in the combo box. The default value is empty.
     * @return string|null
    */
    public function getDefaultValue(): ?string {
        $val = $this->getBackingStore()->get('defaultValue');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultValue'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultValue' => fn(ParseNode $n) => $o->setDefaultValue($n->getStringValue()),
            'maxLength' => fn(ParseNode $n) => $o->setMaxLength($n->getIntegerValue()),
            'required' => fn(ParseNode $n) => $o->setRequired($n->getBooleanValue()),
            'suggestions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSuggestions($val);
            },
        ]);
    }

    /**
     * Gets the maxLength property value. An unsigned integer that specifies the maximum number of text characters for the parameter. The default value is 1023.
     * @return int|null
    */
    public function getMaxLength(): ?int {
        $val = $this->getBackingStore()->get('maxLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxLength'");
    }

    /**
     * Gets the required property value. Specifies whether a value must be specified for the parameter. The default value is false.
     * @return bool|null
    */
    public function getRequired(): ?bool {
        $val = $this->getBackingStore()->get('required');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'required'");
    }

    /**
     * Gets the suggestions property value. Localized strings listed in the drop-down list of the combo box. The default value is empty.
     * @return array<string>|null
    */
    public function getSuggestions(): ?array {
        $val = $this->getBackingStore()->get('suggestions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'suggestions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('defaultValue', $this->getDefaultValue());
        $writer->writeIntegerValue('maxLength', $this->getMaxLength());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('required', $this->getRequired());
        $writer->writeCollectionOfPrimitiveValues('suggestions', $this->getSuggestions());
    }

    /**
     * Sets the defaultValue property value. Localized default string displayed in the combo box. The default value is empty.
     * @param string|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?string $value): void {
        $this->getBackingStore()->set('defaultValue', $value);
    }

    /**
     * Sets the maxLength property value. An unsigned integer that specifies the maximum number of text characters for the parameter. The default value is 1023.
     * @param int|null $value Value to set for the maxLength property.
    */
    public function setMaxLength(?int $value): void {
        $this->getBackingStore()->set('maxLength', $value);
    }

    /**
     * Sets the required property value. Specifies whether a value must be specified for the parameter. The default value is false.
     * @param bool|null $value Value to set for the required property.
    */
    public function setRequired(?bool $value): void {
        $this->getBackingStore()->set('required', $value);
    }

    /**
     * Sets the suggestions property value. Localized strings listed in the drop-down list of the combo box. The default value is empty.
     * @param array<string>|null $value Value to set for the suggestions property.
    */
    public function setSuggestions(?array $value): void {
        $this->getBackingStore()->set('suggestions', $value);
    }

}
