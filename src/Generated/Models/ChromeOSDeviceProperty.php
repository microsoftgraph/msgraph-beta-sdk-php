<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChromeOSDeviceProperty implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $name Name of the property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var bool|null $updatable Whether this property is updatable
    */
    private ?bool $updatable = null;
    
    /**
     * @var string|null $value Value of the property
    */
    private ?string $value = null;
    
    /**
     * @var string|null $valueType Type of the value
    */
    private ?string $valueType = null;
    
    /**
     * Instantiates a new chromeOSDeviceProperty and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.chromeOSDeviceProperty');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChromeOSDeviceProperty
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChromeOSDeviceProperty {
        return new ChromeOSDeviceProperty();
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
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'updatable' => fn(ParseNode $n) => $o->setUpdatable($n->getBooleanValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
            'valueType' => fn(ParseNode $n) => $o->setValueType($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. Name of the property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the updatable property value. Whether this property is updatable
     * @return bool|null
    */
    public function getUpdatable(): ?bool {
        return $this->updatable;
    }

    /**
     * Gets the value property value. Value of the property
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Gets the valueType property value. Type of the value
     * @return string|null
    */
    public function getValueType(): ?string {
        return $this->valueType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeBooleanValue('updatable', $this->updatable);
        $writer->writeStringValue('value', $this->value);
        $writer->writeStringValue('valueType', $this->valueType);
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
     * Sets the name property value. Name of the property
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the updatable property value. Whether this property is updatable
     *  @param bool|null $value Value to set for the updatable property.
    */
    public function setUpdatable(?bool $value ): void {
        $this->updatable = $value;
    }

    /**
     * Sets the value property value. Value of the property
     *  @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value ): void {
        $this->value = $value;
    }

    /**
     * Sets the valueType property value. Type of the value
     *  @param string|null $value Value to set for the valueType property.
    */
    public function setValueType(?string $value ): void {
        $this->valueType = $value;
    }

}
