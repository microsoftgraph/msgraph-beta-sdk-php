<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceLogCollectionRequest implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $id The unique identifier */
    private ?string $id = null;
    
    /** @var DeviceLogCollectionTemplateType|null $templateType The template type that is sent with the collection request. Possible values are: predefined. */
    private ?DeviceLogCollectionTemplateType $templateType = null;
    
    /**
     * Instantiates a new deviceLogCollectionRequest and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceLogCollectionRequest
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceLogCollectionRequest {
        return new DeviceLogCollectionRequest();
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
        return  [
            'id' => function (self $o, ParseNode $n) { $o->setId($n->getStringValue()); },
            'templateType' => function (self $o, ParseNode $n) { $o->setTemplateType($n->getEnumValue(DeviceLogCollectionTemplateType::class)); },
        ];
    }

    /**
     * Gets the id property value. The unique identifier
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the templateType property value. The template type that is sent with the collection request. Possible values are: predefined.
     * @return DeviceLogCollectionTemplateType|null
    */
    public function getTemplateType(): ?DeviceLogCollectionTemplateType {
        return $this->templateType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->id);
        $writer->writeEnumValue('templateType', $this->templateType);
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
     * Sets the id property value. The unique identifier
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the templateType property value. The template type that is sent with the collection request. Possible values are: predefined.
     *  @param DeviceLogCollectionTemplateType|null $value Value to set for the templateType property.
    */
    public function setTemplateType(?DeviceLogCollectionTemplateType $value ): void {
        $this->templateType = $value;
    }

}
