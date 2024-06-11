<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AzureDataLakeConnector extends FileDataConnector implements Parsable 
{
    /**
     * Instantiates a new AzureDataLakeConnector and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.industryData.azureDataLakeConnector');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AzureDataLakeConnector
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AzureDataLakeConnector {
        return new AzureDataLakeConnector();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fileFormat' => fn(ParseNode $n) => $o->setFileFormat($n->getObjectValue([FileFormatReferenceValue::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the fileFormat property value. The file format that external systems can upload using this connector.
     * @return FileFormatReferenceValue|null
    */
    public function getFileFormat(): ?FileFormatReferenceValue {
        $val = $this->getBackingStore()->get('fileFormat');
        if (is_null($val) || $val instanceof FileFormatReferenceValue) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileFormat'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('fileFormat', $this->getFileFormat());
    }

    /**
     * Sets the fileFormat property value. The file format that external systems can upload using this connector.
     * @param FileFormatReferenceValue|null $value Value to set for the fileFormat property.
    */
    public function setFileFormat(?FileFormatReferenceValue $value): void {
        $this->getBackingStore()->set('fileFormat', $value);
    }

}
