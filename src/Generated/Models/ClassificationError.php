<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ClassificationError extends ClassifcationErrorBase implements Parsable 
{
    /**
     * @var array<ClassifcationErrorBase>|null $details The details property
    */
    private ?array $details = null;
    
    /**
     * Instantiates a new ClassificationError and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.classificationError');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClassificationError
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClassificationError {
        return new ClassificationError();
    }

    /**
     * Gets the details property value. The details property
     * @return array<ClassifcationErrorBase>|null
    */
    public function getDetails(): ?array {
        return $this->details;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'details' => function (ParseNode $n) use ($o) { $o->setDetails($n->getCollectionOfObjectValues(array(ClassifcationErrorBase::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('details', $this->details);
    }

    /**
     * Sets the details property value. The details property
     *  @param array<ClassifcationErrorBase>|null $value Value to set for the details property.
    */
    public function setDetails(?array $value ): void {
        $this->details = $value;
    }

}
