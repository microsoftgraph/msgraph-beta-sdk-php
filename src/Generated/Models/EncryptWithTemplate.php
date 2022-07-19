<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EncryptWithTemplate extends EncryptContent implements Parsable 
{
    /**
     * @var bool|null $availableForEncryption The availableForEncryption property
    */
    private ?bool $availableForEncryption = null;
    
    /**
     * @var string|null $templateId The templateId property
    */
    private ?string $templateId = null;
    
    /**
     * Instantiates a new EncryptWithTemplate and sets the default values.
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
        return $this->availableForEncryption;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'availableForEncryption' => function (ParseNode $n) use ($o) { $o->setAvailableForEncryption($n->getBooleanValue()); },
            'templateId' => function (ParseNode $n) use ($o) { $o->setTemplateId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the templateId property value. The templateId property
     * @return string|null
    */
    public function getTemplateId(): ?string {
        return $this->templateId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('availableForEncryption', $this->availableForEncryption);
        $writer->writeStringValue('templateId', $this->templateId);
    }

    /**
     * Sets the availableForEncryption property value. The availableForEncryption property
     *  @param bool|null $value Value to set for the availableForEncryption property.
    */
    public function setAvailableForEncryption(?bool $value ): void {
        $this->availableForEncryption = $value;
    }

    /**
     * Sets the templateId property value. The templateId property
     *  @param string|null $value Value to set for the templateId property.
    */
    public function setTemplateId(?string $value ): void {
        $this->templateId = $value;
    }

}
