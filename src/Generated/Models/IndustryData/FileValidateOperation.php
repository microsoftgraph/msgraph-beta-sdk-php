<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FileValidateOperation extends ValidateOperation implements Parsable 
{
    /**
     * Instantiates a new FileValidateOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.industryData.fileValidateOperation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileValidateOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileValidateOperation {
        return new FileValidateOperation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'validatedFiles' => fn(ParseNode $n) => $o->setValidatedFiles($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the validatedFiles property value. Set of files validated by the validate operation.
     * @return array<string>|null
    */
    public function getValidatedFiles(): ?array {
        return $this->getBackingStore()->get('validatedFiles');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

    /**
     * Sets the validatedFiles property value. Set of files validated by the validate operation.
     * @param array<string>|null $value Value to set for the validatedFiles property.
    */
    public function setValidatedFiles(?array $value): void {
        $this->getBackingStore()->set('validatedFiles', $value);
    }

}
