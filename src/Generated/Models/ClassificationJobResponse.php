<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ClassificationJobResponse extends JobResponseBase implements Parsable 
{
    /**
     * @var DetectedSensitiveContentWrapper|null $result The result property
    */
    private ?DetectedSensitiveContentWrapper $result = null;
    
    /**
     * Instantiates a new ClassificationJobResponse and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClassificationJobResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClassificationJobResponse {
        return new ClassificationJobResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'result' => function (ParseNode $n) use ($o) { $o->setResult($n->getObjectValue(array(DetectedSensitiveContentWrapper::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the result property value. The result property
     * @return DetectedSensitiveContentWrapper|null
    */
    public function getResult(): ?DetectedSensitiveContentWrapper {
        return $this->result;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('result', $this->result);
    }

    /**
     * Sets the result property value. The result property
     *  @param DetectedSensitiveContentWrapper|null $value Value to set for the result property.
    */
    public function setResult(?DetectedSensitiveContentWrapper $value ): void {
        $this->result = $value;
    }

}
