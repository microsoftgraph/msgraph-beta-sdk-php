<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents an ADMX listBox element and an ADMX list element.
*/
class GroupPolicyPresentationListBox extends GroupPolicyUploadedPresentation implements Parsable 
{
    /**
     * Instantiates a new groupPolicyPresentationListBox and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.groupPolicyPresentationListBox');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyPresentationListBox
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyPresentationListBox {
        return new GroupPolicyPresentationListBox();
    }

    /**
     * Gets the explicitValue property value. If this option is specified true the user must specify the registry subkey value and the registry subkey name. The list box shows two columns, one for the name and one for the data. The default value is false.
     * @return bool|null
    */
    public function getExplicitValue(): ?bool {
        $val = $this->getBackingStore()->get('explicitValue');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'explicitValue'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'explicitValue' => fn(ParseNode $n) => $o->setExplicitValue($n->getBooleanValue()),
            'valuePrefix' => fn(ParseNode $n) => $o->setValuePrefix($n->getStringValue()),
        ]);
    }

    /**
     * Gets the valuePrefix property value. Not yet documented
     * @return string|null
    */
    public function getValuePrefix(): ?string {
        $val = $this->getBackingStore()->get('valuePrefix');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'valuePrefix'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('explicitValue', $this->getExplicitValue());
        $writer->writeStringValue('valuePrefix', $this->getValuePrefix());
    }

    /**
     * Sets the explicitValue property value. If this option is specified true the user must specify the registry subkey value and the registry subkey name. The list box shows two columns, one for the name and one for the data. The default value is false.
     * @param bool|null $value Value to set for the explicitValue property.
    */
    public function setExplicitValue(?bool $value): void {
        $this->getBackingStore()->set('explicitValue', $value);
    }

    /**
     * Sets the valuePrefix property value. Not yet documented
     * @param string|null $value Value to set for the valuePrefix property.
    */
    public function setValuePrefix(?string $value): void {
        $this->getBackingStore()->set('valuePrefix', $value);
    }

}
