<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OmaSettingInteger extends OmaSetting implements Parsable 
{
    /**
     * @var bool|null $isReadOnly By setting to true, the CSP (configuration service provider) specified in the OMA-URI will perform a get, instead of set
    */
    private ?bool $isReadOnly = null;
    
    /**
     * @var int|null $value Value.
    */
    private ?int $value = null;
    
    /**
     * Instantiates a new OmaSettingInteger and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OmaSettingInteger
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OmaSettingInteger {
        return new OmaSettingInteger();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isReadOnly' => function (ParseNode $n) use ($o) { $o->setIsReadOnly($n->getBooleanValue()); },
            'value' => function (ParseNode $n) use ($o) { $o->setValue($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the isReadOnly property value. By setting to true, the CSP (configuration service provider) specified in the OMA-URI will perform a get, instead of set
     * @return bool|null
    */
    public function getIsReadOnly(): ?bool {
        return $this->isReadOnly;
    }

    /**
     * Gets the value property value. Value.
     * @return int|null
    */
    public function getValue(): ?int {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isReadOnly', $this->isReadOnly);
        $writer->writeIntegerValue('value', $this->value);
    }

    /**
     * Sets the isReadOnly property value. By setting to true, the CSP (configuration service provider) specified in the OMA-URI will perform a get, instead of set
     *  @param bool|null $value Value to set for the isReadOnly property.
    */
    public function setIsReadOnly(?bool $value ): void {
        $this->isReadOnly = $value;
    }

    /**
     * Sets the value property value. Value.
     *  @param int|null $value Value to set for the value property.
    */
    public function setValue(?int $value ): void {
        $this->value = $value;
    }

}
