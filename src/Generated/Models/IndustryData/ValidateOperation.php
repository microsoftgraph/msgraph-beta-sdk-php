<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Graph\Beta\Generated\Models\LongRunningOperation;
use Microsoft\Graph\Beta\Generated\Models\PublicError;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ValidateOperation extends LongRunningOperation implements Parsable 
{
    /**
     * Instantiates a new ValidateOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ValidateOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ValidateOperation {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.industryData.fileValidateOperation': return new FileValidateOperation();
            }
        }
        return new ValidateOperation();
    }

    /**
     * Gets the errors property value. Set of errors discovered through validation.
     * @return array<PublicError>|null
    */
    public function getErrors(): ?array {
        return $this->getBackingStore()->get('errors');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getCollectionOfObjectValues([PublicError::class, 'createFromDiscriminatorValue'])),
            'warnings' => fn(ParseNode $n) => $o->setWarnings($n->getCollectionOfObjectValues([PublicError::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the warnings property value. Set of warnings discovered through validation.
     * @return array<PublicError>|null
    */
    public function getWarnings(): ?array {
        return $this->getBackingStore()->get('warnings');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

    /**
     * Sets the errors property value. Set of errors discovered through validation.
     * @param array<PublicError>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->getBackingStore()->set('errors', $value);
    }

    /**
     * Sets the warnings property value. Set of warnings discovered through validation.
     * @param array<PublicError>|null $value Value to set for the warnings property.
    */
    public function setWarnings(?array $value): void {
        $this->getBackingStore()->set('warnings', $value);
    }

}
