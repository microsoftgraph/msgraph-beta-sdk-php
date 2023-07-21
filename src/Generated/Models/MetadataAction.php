<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MetadataAction extends InformationProtectionAction implements Parsable 
{
    /**
     * Instantiates a new metadataAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.metadataAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MetadataAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MetadataAction {
        return new MetadataAction();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'metadataToAdd' => fn(ParseNode $n) => $o->setMetadataToAdd($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'metadataToRemove' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setMetadataToRemove($val);
            },
        ]);
    }

    /**
     * Gets the metadataToAdd property value. A collection of key value pairs that should be added to the file.
     * @return array<KeyValuePair>|null
    */
    public function getMetadataToAdd(): ?array {
        $val = $this->getBackingStore()->get('metadataToAdd');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValuePair::class);
            /** @var array<KeyValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'metadataToAdd'");
    }

    /**
     * Gets the metadataToRemove property value. A collection of strings that indicate which keys to remove from the file metadata.
     * @return array<string>|null
    */
    public function getMetadataToRemove(): ?array {
        $val = $this->getBackingStore()->get('metadataToRemove');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'metadataToRemove'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('metadataToAdd', $this->getMetadataToAdd());
        $writer->writeCollectionOfPrimitiveValues('metadataToRemove', $this->getMetadataToRemove());
    }

    /**
     * Sets the metadataToAdd property value. A collection of key value pairs that should be added to the file.
     * @param array<KeyValuePair>|null $value Value to set for the metadataToAdd property.
    */
    public function setMetadataToAdd(?array $value): void {
        $this->getBackingStore()->set('metadataToAdd', $value);
    }

    /**
     * Sets the metadataToRemove property value. A collection of strings that indicate which keys to remove from the file metadata.
     * @param array<string>|null $value Value to set for the metadataToRemove property.
    */
    public function setMetadataToRemove(?array $value): void {
        $this->getBackingStore()->set('metadataToRemove', $value);
    }

}
