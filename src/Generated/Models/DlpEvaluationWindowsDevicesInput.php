<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DlpEvaluationWindowsDevicesInput extends DlpEvaluationInput implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ContentProperties|null $contentProperties The contentProperties property
    */
    private ?ContentProperties $contentProperties = null;
    
    /**
     * @var string|null $sharedBy The sharedBy property
    */
    private ?string $sharedBy = null;
    
    /**
     * Instantiates a new DlpEvaluationWindowsDevicesInput and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DlpEvaluationWindowsDevicesInput
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DlpEvaluationWindowsDevicesInput {
        return new DlpEvaluationWindowsDevicesInput();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the contentProperties property value. The contentProperties property
     * @return ContentProperties|null
    */
    public function getContentProperties(): ?ContentProperties {
        return $this->contentProperties;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contentProperties' => function (ParseNode $n) use ($o) { $o->setContentProperties($n->getObjectValue(array(ContentProperties::class, 'createFromDiscriminatorValue'))); },
            'sharedBy' => function (ParseNode $n) use ($o) { $o->setSharedBy($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the sharedBy property value. The sharedBy property
     * @return string|null
    */
    public function getSharedBy(): ?string {
        return $this->sharedBy;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('contentProperties', $this->contentProperties);
        $writer->writeStringValue('sharedBy', $this->sharedBy);
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
     * Sets the contentProperties property value. The contentProperties property
     *  @param ContentProperties|null $value Value to set for the contentProperties property.
    */
    public function setContentProperties(?ContentProperties $value ): void {
        $this->contentProperties = $value;
    }

    /**
     * Sets the sharedBy property value. The sharedBy property
     *  @param string|null $value Value to set for the sharedBy property.
    */
    public function setSharedBy(?string $value ): void {
        $this->sharedBy = $value;
    }

}
