<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\Deprovision;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeprovisionRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $deprovisionReason  */
    private ?string $deprovisionReason = null;
    
    /**
     * Instantiates a new deprovisionRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeprovisionRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeprovisionRequestBody {
        return new DeprovisionRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deprovisionReason property value. 
     * @return string|null
    */
    public function getDeprovisionReason(): ?string {
        return $this->deprovisionReason;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'deprovisionReason' => function (self $o, ParseNode $n) { $o->setDeprovisionReason($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('deprovisionReason', $this->deprovisionReason);
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
     * Sets the deprovisionReason property value. 
     *  @param string|null $value Value to set for the deprovisionReason property.
    */
    public function setDeprovisionReason(?string $value ): void {
        $this->deprovisionReason = $value;
    }

}
