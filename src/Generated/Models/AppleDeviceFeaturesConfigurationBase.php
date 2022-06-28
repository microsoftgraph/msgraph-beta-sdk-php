<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppleDeviceFeaturesConfigurationBase extends DeviceConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<AirPrintDestination>|null $airPrintDestinations An array of AirPrint printers that should always be shown. This collection can contain a maximum of 500 elements.
    */
    private ?array $airPrintDestinations = null;
    
    /**
     * Instantiates a new AppleDeviceFeaturesConfigurationBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('airPrintDestinations', $this->airPrintDestinations);
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
     * Sets the airPrintDestinations property value. An array of AirPrint printers that should always be shown. This collection can contain a maximum of 500 elements.
     *  @param array<AirPrintDestination>|null $value Value to set for the airPrintDestinations property.
    */
    public function setAirPrintDestinations(?array $value ): void {
        $this->airPrintDestinations = $value;
    }

}
