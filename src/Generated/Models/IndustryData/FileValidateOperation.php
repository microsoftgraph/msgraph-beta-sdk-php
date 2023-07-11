<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class FileValidateOperation extends ValidateOperation implements Parsable 
{
    /**
     * Instantiates a new fileValidateOperation and sets the default values.
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'validatedFiles' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setValidatedFiles($val);
            },
        ]);
    }

    /**
     * Gets the validatedFiles property value. Set of files validated by the validate operation.
     * @return array<string>|null
    */
    public function getValidatedFiles(): ?array {
        $val = $this->getBackingStore()->get('validatedFiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'validatedFiles'");
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
