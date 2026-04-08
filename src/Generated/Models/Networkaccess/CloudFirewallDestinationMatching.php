<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CloudFirewallDestinationMatching implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudFirewallDestinationMatching and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudFirewallDestinationMatching
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudFirewallDestinationMatching {
        return new CloudFirewallDestinationMatching();
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
     * Gets the addresses property value. The destination addresses to match. An empty collection means don't filter by destination addresses (match all). Required.
     * @return array<CloudFirewallDestinationAddress>|null
    */
    public function getAddresses(): ?array {
        $val = $this->getBackingStore()->get('addresses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudFirewallDestinationAddress::class);
            /** @var array<CloudFirewallDestinationAddress>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addresses'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'addresses' => fn(ParseNode $n) => $o->setAddresses($n->getCollectionOfObjectValues([CloudFirewallDestinationAddress::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'ports' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPorts($val);
            },
            'protocols' => fn(ParseNode $n) => $o->setProtocols($n->getEnumValue(CloudFirewallProtocol::class)),
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
     * Gets the ports property value. The destination ports to match, for example, 80, 443, 1024-2048. An empty collection means don't filter by destination ports (match all). Required.
     * @return array<string>|null
    */
    public function getPorts(): ?array {
        $val = $this->getBackingStore()->get('ports');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ports'");
    }

    /**
     * Gets the protocols property value. The protocols property
     * @return CloudFirewallProtocol|null
    */
    public function getProtocols(): ?CloudFirewallProtocol {
        $val = $this->getBackingStore()->get('protocols');
        if (is_null($val) || $val instanceof CloudFirewallProtocol) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protocols'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('addresses', $this->getAddresses());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('ports', $this->getPorts());
        $writer->writeEnumValue('protocols', $this->getProtocols());
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
     * Sets the addresses property value. The destination addresses to match. An empty collection means don't filter by destination addresses (match all). Required.
     * @param array<CloudFirewallDestinationAddress>|null $value Value to set for the addresses property.
    */
    public function setAddresses(?array $value): void {
        $this->getBackingStore()->set('addresses', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the ports property value. The destination ports to match, for example, 80, 443, 1024-2048. An empty collection means don't filter by destination ports (match all). Required.
     * @param array<string>|null $value Value to set for the ports property.
    */
    public function setPorts(?array $value): void {
        $this->getBackingStore()->set('ports', $value);
    }

    /**
     * Sets the protocols property value. The protocols property
     * @param CloudFirewallProtocol|null $value Value to set for the protocols property.
    */
    public function setProtocols(?CloudFirewallProtocol $value): void {
        $this->getBackingStore()->set('protocols', $value);
    }

}
