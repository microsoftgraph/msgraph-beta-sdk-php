<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EncryptContent extends LabelActionBase implements Parsable 
{
    /**
     * Instantiates a new EncryptContent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.encryptContent');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EncryptContent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EncryptContent {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.encryptWithTemplate': return new EncryptWithTemplate();
                case '#microsoft.graph.encryptWithUserDefinedRights': return new EncryptWithUserDefinedRights();
            }
        }
        return new EncryptContent();
    }

    /**
     * Gets the encryptWith property value. The encryptWith property
     * @return EncryptWith|null
    */
    public function getEncryptWith(): ?EncryptWith {
        $val = $this->getBackingStore()->get('encryptWith');
        if (is_null($val) || $val instanceof EncryptWith) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'encryptWith'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'encryptWith' => fn(ParseNode $n) => $o->setEncryptWith($n->getEnumValue(EncryptWith::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('encryptWith', $this->getEncryptWith());
    }

    /**
     * Sets the encryptWith property value. The encryptWith property
     * @param EncryptWith|null $value Value to set for the encryptWith property.
    */
    public function setEncryptWith(?EncryptWith $value): void {
        $this->getBackingStore()->set('encryptWith', $value);
    }

}
