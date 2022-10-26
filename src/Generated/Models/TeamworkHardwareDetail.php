<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkHardwareDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $macAddresses MAC address.
    */
    private ?array $macAddresses = null;
    
    /**
     * @var string|null $manufacturer Device manufacturer.
    */
    private ?string $manufacturer = null;
    
    /**
     * @var string|null $model Devie model.
    */
    private ?string $model = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $serialNumber Device serial number.
    */
    private ?string $serialNumber = null;
    
    /**
     * @var string|null $uniqueId The unique identifier for the device.
    */
    private ?string $uniqueId = null;
    
    /**
     * Instantiates a new teamworkHardwareDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.teamworkHardwareDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkHardwareDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkHardwareDetail {
        return new TeamworkHardwareDetail();
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
            'macAddresses' => fn(ParseNode $n) => $o->setMacAddresses($n->getCollectionOfPrimitiveValues()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'serialNumber' => fn(ParseNode $n) => $o->setSerialNumber($n->getStringValue()),
            'uniqueId' => fn(ParseNode $n) => $o->setUniqueId($n->getStringValue()),
        ];
    }

    /**
     * Gets the macAddresses property value. MAC address.
     * @return array<string>|null
    */
    public function getMacAddresses(): ?array {
        return $this->macAddresses;
    }

    /**
     * Gets the manufacturer property value. Device manufacturer.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->manufacturer;
    }

    /**
     * Gets the model property value. Devie model.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->model;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the serialNumber property value. Device serial number.
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        return $this->serialNumber;
    }

    /**
     * Gets the uniqueId property value. The unique identifier for the device.
     * @return string|null
    */
    public function getUniqueId(): ?string {
        return $this->uniqueId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('macAddresses', $this->macAddresses);
        $writer->writeStringValue('manufacturer', $this->manufacturer);
        $writer->writeStringValue('model', $this->model);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('serialNumber', $this->serialNumber);
        $writer->writeStringValue('uniqueId', $this->uniqueId);
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
     * Sets the macAddresses property value. MAC address.
     *  @param array<string>|null $value Value to set for the macAddresses property.
    */
    public function setMacAddresses(?array $value ): void {
        $this->macAddresses = $value;
    }

    /**
     * Sets the manufacturer property value. Device manufacturer.
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value ): void {
        $this->manufacturer = $value;
    }

    /**
     * Sets the model property value. Devie model.
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value ): void {
        $this->model = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the serialNumber property value. Device serial number.
     *  @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value ): void {
        $this->serialNumber = $value;
    }

    /**
     * Sets the uniqueId property value. The unique identifier for the device.
     *  @param string|null $value Value to set for the uniqueId property.
    */
    public function setUniqueId(?string $value ): void {
        $this->uniqueId = $value;
    }

}
