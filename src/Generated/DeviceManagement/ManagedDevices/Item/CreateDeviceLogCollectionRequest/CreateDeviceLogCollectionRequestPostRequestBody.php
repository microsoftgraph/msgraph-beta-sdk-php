<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\CreateDeviceLogCollectionRequest;

use Microsoft\Graph\Beta\Generated\Models\DeviceLogCollectionRequest;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateDeviceLogCollectionRequestPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DeviceLogCollectionRequest|null $templateType The templateType property
    */
    private ?DeviceLogCollectionRequest $templateType = null;
    
    /**
     * Instantiates a new createDeviceLogCollectionRequestPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateDeviceLogCollectionRequestPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateDeviceLogCollectionRequestPostRequestBody {
        return new CreateDeviceLogCollectionRequestPostRequestBody();
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
        $o = $this;
        return  [
            'templateType' => function (ParseNode $n) use ($o) { $o->setTemplateType($n->getObjectValue(array(DeviceLogCollectionRequest::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the templateType property value. The templateType property
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
     * Sets the templateType property value. The templateType property
     *  @param DeviceLogCollectionRequest|null $value Value to set for the templateType property.
    */
    public function setTemplateType(?DeviceLogCollectionRequest $value ): void {
        $this->templateType = $value;
    }

}
