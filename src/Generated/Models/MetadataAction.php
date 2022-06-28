<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MetadataAction extends InformationProtectionAction implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<KeyValuePair>|null $metadataToAdd A collection of key value pairs that should be added to the file.
    */
    private ?array $metadataToAdd = null;
    
    /**
     * @var array<string>|null $metadataToRemove A collection of strings that indicate which keys to remove from the file metadata.
    */
    private ?array $metadataToRemove = null;
    
    /**
     * Instantiates a new MetadataAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'metadataToAdd' => function (ParseNode $n) use ($o) { $o->setMetadataToAdd($n->getCollectionOfObjectValues(array(KeyValuePair::class, 'createFromDiscriminatorValue'))); },
            'metadataToRemove' => function (ParseNode $n) use ($o) { $o->setMetadataToRemove($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the metadataToAdd property value. A collection of key value pairs that should be added to the file.
     * @return array<KeyValuePair>|null
    */
    public function getMetadataToAdd(): ?array {
        return $this->metadataToAdd;
    }

    /**
     * Gets the metadataToRemove property value. A collection of strings that indicate which keys to remove from the file metadata.
     * @return array<string>|null
    */
    public function getMetadataToRemove(): ?array {
        return $this->metadataToRemove;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('metadataToAdd', $this->metadataToAdd);
        $writer->writeCollectionOfPrimitiveValues('metadataToRemove', $this->metadataToRemove);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the metadataToAdd property value. A collection of key value pairs that should be added to the file.
     *  @param array<KeyValuePair>|null $value Value to set for the metadataToAdd property.
    */
    public function setMetadataToAdd(?array $value ): void {
        $this->metadataToAdd = $value;
    }

    /**
     * Sets the metadataToRemove property value. A collection of strings that indicate which keys to remove from the file metadata.
     *  @param array<string>|null $value Value to set for the metadataToRemove property.
    */
    public function setMetadataToRemove(?array $value ): void {
        $this->metadataToRemove = $value;
    }

}
