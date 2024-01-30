<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PrivateAccessDetails implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new privateAccessDetails and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivateAccessDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivateAccessDetails {
        return new PrivateAccessDetails();
    }

    /**
     * Gets the accessType property value. The accessType property
     * @return AccessType|null
    */
    public function getAccessType(): ?AccessType {
        $val = $this->getBackingStore()->get('accessType');
        if (is_null($val) || $val instanceof AccessType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessType'");
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
     * Gets the connectionStatus property value. The connectionStatus property
     * @return ConnectionStatus|null
    */
    public function getConnectionStatus(): ?ConnectionStatus {
        $val = $this->getBackingStore()->get('connectionStatus');
        if (is_null($val) || $val instanceof ConnectionStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectionStatus'");
    }

    /**
     * Gets the connectorId property value. The connectorId property
     * @return string|null
    */
    public function getConnectorId(): ?string {
        $val = $this->getBackingStore()->get('connectorId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectorId'");
    }

    /**
     * Gets the connectorIp property value. The connectorIp property
     * @return string|null
    */
    public function getConnectorIp(): ?string {
        $val = $this->getBackingStore()->get('connectorIp');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectorIp'");
    }

    /**
     * Gets the connectorName property value. The connectorName property
     * @return string|null
    */
    public function getConnectorName(): ?string {
        $val = $this->getBackingStore()->get('connectorName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectorName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessType' => fn(ParseNode $n) => $o->setAccessType($n->getEnumValue(AccessType::class)),
            'connectionStatus' => fn(ParseNode $n) => $o->setConnectionStatus($n->getEnumValue(ConnectionStatus::class)),
            'connectorId' => fn(ParseNode $n) => $o->setConnectorId($n->getStringValue()),
            'connectorIp' => fn(ParseNode $n) => $o->setConnectorIp($n->getStringValue()),
            'connectorName' => fn(ParseNode $n) => $o->setConnectorName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'processingRegion' => fn(ParseNode $n) => $o->setProcessingRegion($n->getStringValue()),
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
     * Gets the processingRegion property value. The processingRegion property
     * @return string|null
    */
    public function getProcessingRegion(): ?string {
        $val = $this->getBackingStore()->get('processingRegion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processingRegion'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('accessType', $this->getAccessType());
        $writer->writeEnumValue('connectionStatus', $this->getConnectionStatus());
        $writer->writeStringValue('connectorId', $this->getConnectorId());
        $writer->writeStringValue('connectorIp', $this->getConnectorIp());
        $writer->writeStringValue('connectorName', $this->getConnectorName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('processingRegion', $this->getProcessingRegion());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accessType property value. The accessType property
     * @param AccessType|null $value Value to set for the accessType property.
    */
    public function setAccessType(?AccessType $value): void {
        $this->getBackingStore()->set('accessType', $value);
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
     * Sets the connectionStatus property value. The connectionStatus property
     * @param ConnectionStatus|null $value Value to set for the connectionStatus property.
    */
    public function setConnectionStatus(?ConnectionStatus $value): void {
        $this->getBackingStore()->set('connectionStatus', $value);
    }

    /**
     * Sets the connectorId property value. The connectorId property
     * @param string|null $value Value to set for the connectorId property.
    */
    public function setConnectorId(?string $value): void {
        $this->getBackingStore()->set('connectorId', $value);
    }

    /**
     * Sets the connectorIp property value. The connectorIp property
     * @param string|null $value Value to set for the connectorIp property.
    */
    public function setConnectorIp(?string $value): void {
        $this->getBackingStore()->set('connectorIp', $value);
    }

    /**
     * Sets the connectorName property value. The connectorName property
     * @param string|null $value Value to set for the connectorName property.
    */
    public function setConnectorName(?string $value): void {
        $this->getBackingStore()->set('connectorName', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the processingRegion property value. The processingRegion property
     * @param string|null $value Value to set for the processingRegion property.
    */
    public function setProcessingRegion(?string $value): void {
        $this->getBackingStore()->set('processingRegion', $value);
    }

}
