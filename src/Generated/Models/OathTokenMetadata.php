<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OathTokenMetadata implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $enabled The enabled property
    */
    private ?bool $enabled = null;
    
    /**
     * @var string|null $manufacturer The manufacturer property
    */
    private ?string $manufacturer = null;
    
    /**
     * @var array<KeyValue>|null $manufacturerProperties The manufacturerProperties property
    */
    private ?array $manufacturerProperties = null;
    
    /**
     * @var string|null $serialNumber The serialNumber property
    */
    private ?string $serialNumber = null;
    
    /**
     * @var string|null $tokenType The tokenType property
    */
    private ?string $tokenType = null;
    
    /**
     * Instantiates a new oathTokenMetadata and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OathTokenMetadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OathTokenMetadata {
        return new OathTokenMetadata();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the enabled property value. The enabled property
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enabled' => function (ParseNode $n) use ($o) { $o->setEnabled($n->getBooleanValue()); },
            'manufacturer' => function (ParseNode $n) use ($o) { $o->setManufacturer($n->getStringValue()); },
            'manufacturerProperties' => function (ParseNode $n) use ($o) { $o->setManufacturerProperties($n->getCollectionOfObjectValues(array(KeyValue::class, 'createFromDiscriminatorValue'))); },
            'serialNumber' => function (ParseNode $n) use ($o) { $o->setSerialNumber($n->getStringValue()); },
            'tokenType' => function (ParseNode $n) use ($o) { $o->setTokenType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the manufacturer property value. The manufacturer property
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->manufacturer;
    }

    /**
     * Gets the manufacturerProperties property value. The manufacturerProperties property
     * @return array<KeyValue>|null
    */
    public function getManufacturerProperties(): ?array {
        return $this->manufacturerProperties;
    }

    /**
     * Gets the serialNumber property value. The serialNumber property
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        return $this->serialNumber;
    }

    /**
     * Gets the tokenType property value. The tokenType property
     * @return string|null
    */
    public function getTokenType(): ?string {
        return $this->tokenType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('enabled', $this->enabled);
        $writer->writeStringValue('manufacturer', $this->manufacturer);
        $writer->writeCollectionOfObjectValues('manufacturerProperties', $this->manufacturerProperties);
        $writer->writeStringValue('serialNumber', $this->serialNumber);
        $writer->writeStringValue('tokenType', $this->tokenType);
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
     * Sets the enabled property value. The enabled property
     *  @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value ): void {
        $this->enabled = $value;
    }

    /**
     * Sets the manufacturer property value. The manufacturer property
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value ): void {
        $this->manufacturer = $value;
    }

    /**
     * Sets the manufacturerProperties property value. The manufacturerProperties property
     *  @param array<KeyValue>|null $value Value to set for the manufacturerProperties property.
    */
    public function setManufacturerProperties(?array $value ): void {
        $this->manufacturerProperties = $value;
    }

    /**
     * Sets the serialNumber property value. The serialNumber property
     *  @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value ): void {
        $this->serialNumber = $value;
    }

    /**
     * Sets the tokenType property value. The tokenType property
     *  @param string|null $value Value to set for the tokenType property.
    */
    public function setTokenType(?string $value ): void {
        $this->tokenType = $value;
    }

}
