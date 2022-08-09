<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnsupportedDeviceConfigurationDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $message A message explaining why an entity is unsupported.
    */
    private ?string $message = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $propertyName If message is related to a specific property in the original entity, then the name of that property.
    */
    private ?string $propertyName = null;
    
    /**
     * Instantiates a new unsupportedDeviceConfigurationDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.unsupportedDeviceConfigurationDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnsupportedDeviceConfigurationDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnsupportedDeviceConfigurationDetail {
        return new UnsupportedDeviceConfigurationDetail();
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
            'message' => function (ParseNode $n) use ($o) { $o->setMessage($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'propertyName' => function (ParseNode $n) use ($o) { $o->setPropertyName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the message property value. A message explaining why an entity is unsupported.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the propertyName property value. If message is related to a specific property in the original entity, then the name of that property.
     * @return string|null
    */
    public function getPropertyName(): ?string {
        return $this->propertyName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('message', $this->message);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('propertyName', $this->propertyName);
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
     * Sets the message property value. A message explaining why an entity is unsupported.
     *  @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value ): void {
        $this->message = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the propertyName property value. If message is related to a specific property in the original entity, then the name of that property.
     *  @param string|null $value Value to set for the propertyName property.
    */
    public function setPropertyName(?string $value ): void {
        $this->propertyName = $value;
    }

}
