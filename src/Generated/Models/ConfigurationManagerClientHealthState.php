<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Configuration manager client health state
*/
class ConfigurationManagerClientHealthState implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ConfigurationManagerClientHealthState and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConfigurationManagerClientHealthState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConfigurationManagerClientHealthState {
        return new ConfigurationManagerClientHealthState();
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
     * Gets the errorCode property value. Error code for failed state.
     * @return int|null
    */
    public function getErrorCode(): ?int {
        $val = $this->getBackingStore()->get('errorCode');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorCode'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getIntegerValue()),
            'lastSyncDateTime' => fn(ParseNode $n) => $o->setLastSyncDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(ConfigurationManagerClientState::class)),
        ];
    }

    /**
     * Gets the lastSyncDateTime property value. Datetime for last sync with configuration manager management point.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastSyncDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSyncDateTime'");
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
     * Gets the state property value. Configuration manager client state
     * @return ConfigurationManagerClientState|null
    */
    public function getState(): ?ConfigurationManagerClientState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof ConfigurationManagerClientState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('errorCode', $this->getErrorCode());
        $writer->writeDateTimeValue('lastSyncDateTime', $this->getLastSyncDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('state', $this->getState());
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
     * Sets the errorCode property value. Error code for failed state.
     * @param int|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?int $value): void {
        $this->getBackingStore()->set('errorCode', $value);
    }

    /**
     * Sets the lastSyncDateTime property value. Datetime for last sync with configuration manager management point.
     * @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSyncDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the state property value. Configuration manager client state
     * @param ConfigurationManagerClientState|null $value Value to set for the state property.
    */
    public function setState(?ConfigurationManagerClientState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
