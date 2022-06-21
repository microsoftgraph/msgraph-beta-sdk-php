<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\ActivateDeviceEsim;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ActivateDeviceEsimPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $carrierUrl The carrierUrl property
    */
    private ?string $carrierUrl = null;
    
    /**
     * Instantiates a new activateDeviceEsimPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ActivateDeviceEsimPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ActivateDeviceEsimPostRequestBody {
        return new ActivateDeviceEsimPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the carrierUrl property value. The carrierUrl property
     * @return string|null
    */
    public function getCarrierUrl(): ?string {
        return $this->carrierUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'carrierUrl' => function (ParseNode $n) use ($o) { $o->setCarrierUrl($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('carrierUrl', $this->carrierUrl);
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
     * Sets the carrierUrl property value. The carrierUrl property
     *  @param string|null $value Value to set for the carrierUrl property.
    */
    public function setCarrierUrl(?string $value ): void {
        $this->carrierUrl = $value;
    }

}
