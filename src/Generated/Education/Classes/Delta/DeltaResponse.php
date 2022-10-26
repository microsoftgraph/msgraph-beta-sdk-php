<?php

namespace Microsoft\Graph\Beta\Generated\Education\Classes\Delta;

use Microsoft\Graph\Beta\Generated\Models\BaseDeltaFunctionResponse;
use Microsoft\Graph\Beta\Generated\Models\EducationClass;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeltaResponse extends BaseDeltaFunctionResponse implements Parsable 
{
    /**
     * @var array<EducationClass>|null $value The value property
    */
    private ?array $value = null;
    
    /**
     * Instantiates a new deltaResponse and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeltaResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeltaResponse {
        return new DeltaResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'value' => fn(ParseNode $n) => $o->setValue($n->getCollectionOfObjectValues([EducationClass::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the value property value. The value property
     * @return array<EducationClass>|null
    */
    public function getValue(): ?array {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('value', $this->value);
    }

    /**
     * Sets the value property value. The value property
     *  @param array<EducationClass>|null $value Value to set for the value property.
    */
    public function setValue(?array $value ): void {
        $this->value = $value;
    }

}
