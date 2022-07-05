<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedDeviceModelsAndManufacturers implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $deviceManufacturers List of Manufactures for managed devices in the account
    */
    private ?array $deviceManufacturers = null;
    
    /**
     * @var array<string>|null $deviceModels List of Models for managed devices in the account
    */
    private ?array $deviceModels = null;
    
    /**
     * Instantiates a new managedDeviceModelsAndManufacturers and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedDeviceModelsAndManufacturers
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedDeviceModelsAndManufacturers {
        return new ManagedDeviceModelsAndManufacturers();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceManufacturers property value. List of Manufactures for managed devices in the account
     * @return array<string>|null
    */
    public function getDeviceManufacturers(): ?array {
        return $this->deviceManufacturers;
    }

    /**
     * Gets the deviceModels property value. List of Models for managed devices in the account
     * @return array<string>|null
    */
    public function getDeviceModels(): ?array {
        return $this->deviceModels;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceManufacturers' => function (ParseNode $n) use ($o) { $o->setDeviceManufacturers($n->getCollectionOfPrimitiveValues()); },
            'deviceModels' => function (ParseNode $n) use ($o) { $o->setDeviceModels($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('deviceManufacturers', $this->deviceManufacturers);
        $writer->writeCollectionOfPrimitiveValues('deviceModels', $this->deviceModels);
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
     * Sets the deviceManufacturers property value. List of Manufactures for managed devices in the account
     *  @param array<string>|null $value Value to set for the deviceManufacturers property.
    */
    public function setDeviceManufacturers(?array $value ): void {
        $this->deviceManufacturers = $value;
    }

    /**
     * Sets the deviceModels property value. List of Models for managed devices in the account
     *  @param array<string>|null $value Value to set for the deviceModels property.
    */
    public function setDeviceModels(?array $value ): void {
        $this->deviceModels = $value;
    }

}
