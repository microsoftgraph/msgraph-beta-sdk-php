<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementExchangeAccessRule implements AdditionalDataHolder, Parsable 
{
    /**
     * @var DeviceManagementExchangeAccessLevel|null $accessLevel Access Level in Exchange.
    */
    private ?DeviceManagementExchangeAccessLevel $accessLevel = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DeviceManagementExchangeDeviceClass|null $deviceClass Device Class which will be impacted by this rule.
    */
    private ?DeviceManagementExchangeDeviceClass $deviceClass = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new deviceManagementExchangeAccessRule and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.deviceManagementExchangeAccessRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementExchangeAccessRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementExchangeAccessRule {
        return new DeviceManagementExchangeAccessRule();
    }

    /**
     * Gets the accessLevel property value. Access Level in Exchange.
     * @return DeviceManagementExchangeAccessLevel|null
    */
    public function getAccessLevel(): ?DeviceManagementExchangeAccessLevel {
        return $this->accessLevel;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceClass property value. Device Class which will be impacted by this rule.
     * @return DeviceManagementExchangeDeviceClass|null
    */
    public function getDeviceClass(): ?DeviceManagementExchangeDeviceClass {
        return $this->deviceClass;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessLevel' => fn(ParseNode $n) => $o->setAccessLevel($n->getEnumValue(DeviceManagementExchangeAccessLevel::class)),
            'deviceClass' => fn(ParseNode $n) => $o->setDeviceClass($n->getObjectValue([DeviceManagementExchangeDeviceClass::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('accessLevel', $this->accessLevel);
        $writer->writeObjectValue('deviceClass', $this->deviceClass);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accessLevel property value. Access Level in Exchange.
     *  @param DeviceManagementExchangeAccessLevel|null $value Value to set for the accessLevel property.
    */
    public function setAccessLevel(?DeviceManagementExchangeAccessLevel $value ): void {
        $this->accessLevel = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the deviceClass property value. Device Class which will be impacted by this rule.
     *  @param DeviceManagementExchangeDeviceClass|null $value Value to set for the deviceClass property.
    */
    public function setDeviceClass(?DeviceManagementExchangeDeviceClass $value ): void {
        $this->deviceClass = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
