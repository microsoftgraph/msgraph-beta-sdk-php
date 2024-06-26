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

class RemoteNetworkConnectivityConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new RemoteNetworkConnectivityConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemoteNetworkConnectivityConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RemoteNetworkConnectivityConfiguration {
        return new RemoteNetworkConnectivityConfiguration();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'links' => fn(ParseNode $n) => $o->setLinks($n->getCollectionOfObjectValues([ConnectivityConfigurationLink::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'remoteNetworkId' => fn(ParseNode $n) => $o->setRemoteNetworkId($n->getStringValue()),
            'remoteNetworkName' => fn(ParseNode $n) => $o->setRemoteNetworkName($n->getStringValue()),
        ];
    }

    /**
     * Gets the links property value. List of connectivity configurations for deviceLink objects.
     * @return array<ConnectivityConfigurationLink>|null
    */
    public function getLinks(): ?array {
        $val = $this->getBackingStore()->get('links');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConnectivityConfigurationLink::class);
            /** @var array<ConnectivityConfigurationLink>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'links'");
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
     * Gets the remoteNetworkId property value. Unique identifier or a specific reference assigned to a branchSite. Key.
     * @return string|null
    */
    public function getRemoteNetworkId(): ?string {
        $val = $this->getBackingStore()->get('remoteNetworkId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remoteNetworkId'");
    }

    /**
     * Gets the remoteNetworkName property value. Display name assigned to a branchSite.
     * @return string|null
    */
    public function getRemoteNetworkName(): ?string {
        $val = $this->getBackingStore()->get('remoteNetworkName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remoteNetworkName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('links', $this->getLinks());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('remoteNetworkId', $this->getRemoteNetworkId());
        $writer->writeStringValue('remoteNetworkName', $this->getRemoteNetworkName());
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
     * Sets the links property value. List of connectivity configurations for deviceLink objects.
     * @param array<ConnectivityConfigurationLink>|null $value Value to set for the links property.
    */
    public function setLinks(?array $value): void {
        $this->getBackingStore()->set('links', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the remoteNetworkId property value. Unique identifier or a specific reference assigned to a branchSite. Key.
     * @param string|null $value Value to set for the remoteNetworkId property.
    */
    public function setRemoteNetworkId(?string $value): void {
        $this->getBackingStore()->set('remoteNetworkId', $value);
    }

    /**
     * Sets the remoteNetworkName property value. Display name assigned to a branchSite.
     * @param string|null $value Value to set for the remoteNetworkName property.
    */
    public function setRemoteNetworkName(?string $value): void {
        $this->getBackingStore()->set('remoteNetworkName', $value);
    }

}
