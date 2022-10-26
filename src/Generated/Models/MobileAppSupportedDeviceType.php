<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppSupportedDeviceType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $maximumOperatingSystemVersion Maximum OS version
    */
    private ?string $maximumOperatingSystemVersion = null;
    
    /**
     * @var string|null $minimumOperatingSystemVersion Minimum OS version
    */
    private ?string $minimumOperatingSystemVersion = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var DeviceType|null $type Device type.
    */
    private ?DeviceType $type = null;
    
    /**
     * Instantiates a new mobileAppSupportedDeviceType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.mobileAppSupportedDeviceType');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppSupportedDeviceType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppSupportedDeviceType {
        return new MobileAppSupportedDeviceType();
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
            'maximumOperatingSystemVersion' => fn(ParseNode $n) => $o->setMaximumOperatingSystemVersion($n->getStringValue()),
            'minimumOperatingSystemVersion' => fn(ParseNode $n) => $o->setMinimumOperatingSystemVersion($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(DeviceType::class)),
        ];
    }

    /**
     * Gets the maximumOperatingSystemVersion property value. Maximum OS version
     * @return string|null
    */
    public function getMaximumOperatingSystemVersion(): ?string {
        return $this->maximumOperatingSystemVersion;
    }

    /**
     * Gets the minimumOperatingSystemVersion property value. Minimum OS version
     * @return string|null
    */
    public function getMinimumOperatingSystemVersion(): ?string {
        return $this->minimumOperatingSystemVersion;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the type property value. Device type.
     * @return DeviceType|null
    */
    public function getType(): ?DeviceType {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('maximumOperatingSystemVersion', $this->maximumOperatingSystemVersion);
        $writer->writeStringValue('minimumOperatingSystemVersion', $this->minimumOperatingSystemVersion);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('type', $this->type);
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
     * Sets the maximumOperatingSystemVersion property value. Maximum OS version
     *  @param string|null $value Value to set for the maximumOperatingSystemVersion property.
    */
    public function setMaximumOperatingSystemVersion(?string $value ): void {
        $this->maximumOperatingSystemVersion = $value;
    }

    /**
     * Sets the minimumOperatingSystemVersion property value. Minimum OS version
     *  @param string|null $value Value to set for the minimumOperatingSystemVersion property.
    */
    public function setMinimumOperatingSystemVersion(?string $value ): void {
        $this->minimumOperatingSystemVersion = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the type property value. Device type.
     *  @param DeviceType|null $value Value to set for the type property.
    */
    public function setType(?DeviceType $value ): void {
        $this->type = $value;
    }

}
