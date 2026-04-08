<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudFirewallMatchingConditions implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudFirewallMatchingConditions and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudFirewallMatchingConditions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudFirewallMatchingConditions {
        return new CloudFirewallMatchingConditions();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the destinations property value. Destination address, port, and protocol matching criteria. null means don't match on destination. Optional.
     * @return CloudFirewallDestinationMatching|null
    */
    public function getDestinations(): ?CloudFirewallDestinationMatching {
        $val = $this->getBackingStore()->get('destinations');
        if (is_null($val) || $val instanceof CloudFirewallDestinationMatching) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinations'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'destinations' => fn(ParseNode $n) => $o->setDestinations($n->getObjectValue([CloudFirewallDestinationMatching::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sources' => fn(ParseNode $n) => $o->setSources($n->getObjectValue([CloudFirewallSourceMatching::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the sources property value. Source address and port matching criteria. null means don't match on source. Optional.
     * @return CloudFirewallSourceMatching|null
    */
    public function getSources(): ?CloudFirewallSourceMatching {
        $val = $this->getBackingStore()->get('sources');
        if (is_null($val) || $val instanceof CloudFirewallSourceMatching) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sources'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('destinations', $this->getDestinations());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('sources', $this->getSources());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the destinations property value. Destination address, port, and protocol matching criteria. null means don't match on destination. Optional.
     * @param CloudFirewallDestinationMatching|null $value Value to set for the destinations property.
    */
    public function setDestinations(?CloudFirewallDestinationMatching $value): void {
        $this->getBackingStore()->set('destinations', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sources property value. Source address and port matching criteria. null means don't match on source. Optional.
     * @param CloudFirewallSourceMatching|null $value Value to set for the sources property.
    */
    public function setSources(?CloudFirewallSourceMatching $value): void {
        $this->getBackingStore()->set('sources', $value);
    }

}
