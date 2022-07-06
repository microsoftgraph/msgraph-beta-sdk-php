<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppleDeviceFeaturesConfigurationBase extends DeviceConfiguration implements Parsable 
{
    /**
     * @var array<AirPrintDestination>|null $airPrintDestinations An array of AirPrint printers that should always be shown. This collection can contain a maximum of 500 elements.
    */
    private ?array $airPrintDestinations = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new AppleDeviceFeaturesConfigurationBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppleDeviceFeaturesConfigurationBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppleDeviceFeaturesConfigurationBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.iosDeviceFeaturesConfiguration': return new IosDeviceFeaturesConfiguration();
                case '#microsoft.graph.macOSDeviceFeaturesConfiguration': return new MacOSDeviceFeaturesConfiguration();
            }
        }
        return new AppleDeviceFeaturesConfigurationBase();
    }

    /**
     * Gets the airPrintDestinations property value. An array of AirPrint printers that should always be shown. This collection can contain a maximum of 500 elements.
     * @return array<AirPrintDestination>|null
    */
    public function getAirPrintDestinations(): ?array {
        return $this->airPrintDestinations;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'airPrintDestinations' => function (ParseNode $n) use ($o) { $o->setAirPrintDestinations($n->getCollectionOfObjectValues(array(AirPrintDestination::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdatatype($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the @odata.type property value. The type property
     * @return string|null
    */
    public function getOdatatype(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('airPrintDestinations', $this->airPrintDestinations);
        $writer->writeStringValue('@odata.type', $this->type);
    }

    /**
     * Sets the airPrintDestinations property value. An array of AirPrint printers that should always be shown. This collection can contain a maximum of 500 elements.
     *  @param array<AirPrintDestination>|null $value Value to set for the airPrintDestinations property.
    */
    public function setAirPrintDestinations(?array $value ): void {
        $this->airPrintDestinations = $value;
    }

    /**
     * Sets the @odata.type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setOdatatype(?string $value ): void {
        $this->type = $value;
    }

}
