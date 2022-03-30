<?php

namespace Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\CreateDeviceLogCollectionRequest;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\DeviceLogCollectionRequest;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateDeviceLogCollectionRequestRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var DeviceLogCollectionRequest|null $templateType  */
    private ?DeviceLogCollectionRequest $templateType = null;
    
    /**
     * Instantiates a new createDeviceLogCollectionRequestRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateDeviceLogCollectionRequestRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CreateDeviceLogCollectionRequestRequestBody {
        return new CreateDeviceLogCollectionRequestRequestBody();
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
            'templateType' => function (self $o, ParseNode $n) { $o->setTemplateType($n->getObjectValue(DeviceLogCollectionRequest::class)); },
        ];
    }

    /**
     * Gets the templateType property value. 
     * @return DeviceLogCollectionRequest|null
    */
    public function getTemplateType(): ?DeviceLogCollectionRequest {
        return $this->templateType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('templateType', $this->templateType);
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
     * Sets the templateType property value. 
     *  @param DeviceLogCollectionRequest|null $value Value to set for the templateType property.
    */
    public function setTemplateType(?DeviceLogCollectionRequest $value ): void {
        $this->templateType = $value;
    }

}
