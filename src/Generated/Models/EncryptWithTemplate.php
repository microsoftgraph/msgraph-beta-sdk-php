<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EncryptWithTemplate extends EncryptContent implements Parsable 
{
    /**
     * Instantiates a new encryptWithTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.encryptWithTemplate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EncryptWithTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EncryptWithTemplate {
        return new EncryptWithTemplate();
    }

    /**
     * Gets the availableForEncryption property value. The availableForEncryption property
     * @return bool|null
    */
    public function getAvailableForEncryption(): ?bool {
        $val = $this->getBackingStore()->get('availableForEncryption');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'availableForEncryption'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'availableForEncryption' => fn(ParseNode $n) => $o->setAvailableForEncryption($n->getBooleanValue()),
            'templateId' => fn(ParseNode $n) => $o->setTemplateId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the templateId property value. The templateId property
     * @return string|null
    */
    public function getTemplateId(): ?string {
        $val = $this->getBackingStore()->get('templateId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'templateId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('availableForEncryption', $this->getAvailableForEncryption());
        $writer->writeStringValue('templateId', $this->getTemplateId());
    }

    /**
     * Sets the availableForEncryption property value. The availableForEncryption property
     * @param bool|null $value Value to set for the availableForEncryption property.
    */
    public function setAvailableForEncryption(?bool $value): void {
        $this->getBackingStore()->set('availableForEncryption', $value);
    }

    /**
     * Sets the templateId property value. The templateId property
     * @param string|null $value Value to set for the templateId property.
    */
    public function setTemplateId(?string $value): void {
        $this->getBackingStore()->set('templateId', $value);
    }

}
