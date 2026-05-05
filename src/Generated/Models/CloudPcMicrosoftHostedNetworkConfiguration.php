<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CloudPcMicrosoftHostedNetworkConfiguration extends CloudPcNetworkConfiguration implements Parsable 
{
    /**
     * Instantiates a new CloudPcMicrosoftHostedNetworkConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcMicrosoftHostedNetworkConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcMicrosoftHostedNetworkConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcMicrosoftHostedNetworkConfiguration {
        return new CloudPcMicrosoftHostedNetworkConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'geographicLocationType' => fn(ParseNode $n) => $o->setGeographicLocationType($n->getEnumValue(CloudPcGeographicLocationType::class)),
            'regionGroups' => fn(ParseNode $n) => $o->setRegionGroups($n->getCollectionOfObjectValues([CloudPcRegionGroupConfiguration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the geographicLocationType property value. The geographicLocationType property
     * @return CloudPcGeographicLocationType|null
    */
    public function getGeographicLocationType(): ?CloudPcGeographicLocationType {
        $val = $this->getBackingStore()->get('geographicLocationType');
        if (is_null($val) || $val instanceof CloudPcGeographicLocationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'geographicLocationType'");
    }

    /**
     * Gets the regionGroups property value. The regionGroups property
     * @return array<CloudPcRegionGroupConfiguration>|null
    */
    public function getRegionGroups(): ?array {
        $val = $this->getBackingStore()->get('regionGroups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcRegionGroupConfiguration::class);
            /** @var array<CloudPcRegionGroupConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'regionGroups'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('geographicLocationType', $this->getGeographicLocationType());
        $writer->writeCollectionOfObjectValues('regionGroups', $this->getRegionGroups());
    }

    /**
     * Sets the geographicLocationType property value. The geographicLocationType property
     * @param CloudPcGeographicLocationType|null $value Value to set for the geographicLocationType property.
    */
    public function setGeographicLocationType(?CloudPcGeographicLocationType $value): void {
        $this->getBackingStore()->set('geographicLocationType', $value);
    }

    /**
     * Sets the regionGroups property value. The regionGroups property
     * @param array<CloudPcRegionGroupConfiguration>|null $value Value to set for the regionGroups property.
    */
    public function setRegionGroups(?array $value): void {
        $this->getBackingStore()->set('regionGroups', $value);
    }

}
