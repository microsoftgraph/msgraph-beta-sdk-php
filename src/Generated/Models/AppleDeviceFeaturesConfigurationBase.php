<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Apple device features configuration profile.
*/
class AppleDeviceFeaturesConfigurationBase extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new AppleDeviceFeaturesConfigurationBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.appleDeviceFeaturesConfigurationBase');
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
        $val = $this->getBackingStore()->get('airPrintDestinations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AirPrintDestination::class);
            /** @var array<AirPrintDestination>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'airPrintDestinations'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'airPrintDestinations' => fn(ParseNode $n) => $o->setAirPrintDestinations($n->getCollectionOfObjectValues([AirPrintDestination::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('airPrintDestinations', $this->getAirPrintDestinations());
    }

    /**
     * Sets the airPrintDestinations property value. An array of AirPrint printers that should always be shown. This collection can contain a maximum of 500 elements.
     * @param array<AirPrintDestination>|null $value Value to set for the airPrintDestinations property.
    */
    public function setAirPrintDestinations(?array $value): void {
        $this->getBackingStore()->set('airPrintDestinations', $value);
    }

}
