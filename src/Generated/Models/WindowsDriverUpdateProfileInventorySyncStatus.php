<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * A complex type to store the status of a driver and firmware profile inventory sync. The status includes the last successful sync date time and the state of the last sync.
*/
class WindowsDriverUpdateProfileInventorySyncStatus implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new WindowsDriverUpdateProfileInventorySyncStatus and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsDriverUpdateProfileInventorySyncStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsDriverUpdateProfileInventorySyncStatus {
        return new WindowsDriverUpdateProfileInventorySyncStatus();
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
     * Gets the driverInventorySyncState property value. Windows DnF update inventory sync state.
     * @return WindowsDriverUpdateProfileInventorySyncState|null
    */
    public function getDriverInventorySyncState(): ?WindowsDriverUpdateProfileInventorySyncState {
        $val = $this->getBackingStore()->get('driverInventorySyncState');
        if (is_null($val) || $val instanceof WindowsDriverUpdateProfileInventorySyncState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driverInventorySyncState'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'driverInventorySyncState' => fn(ParseNode $n) => $o->setDriverInventorySyncState($n->getEnumValue(WindowsDriverUpdateProfileInventorySyncState::class)),
            'lastSuccessfulSyncDateTime' => fn(ParseNode $n) => $o->setLastSuccessfulSyncDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the lastSuccessfulSyncDateTime property value. The last successful sync date and time in UTC.
     * @return DateTime|null
    */
    public function getLastSuccessfulSyncDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastSuccessfulSyncDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSuccessfulSyncDateTime'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('driverInventorySyncState', $this->getDriverInventorySyncState());
        $writer->writeDateTimeValue('lastSuccessfulSyncDateTime', $this->getLastSuccessfulSyncDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the driverInventorySyncState property value. Windows DnF update inventory sync state.
     * @param WindowsDriverUpdateProfileInventorySyncState|null $value Value to set for the driverInventorySyncState property.
    */
    public function setDriverInventorySyncState(?WindowsDriverUpdateProfileInventorySyncState $value): void {
        $this->getBackingStore()->set('driverInventorySyncState', $value);
    }

    /**
     * Sets the lastSuccessfulSyncDateTime property value. The last successful sync date and time in UTC.
     * @param DateTime|null $value Value to set for the lastSuccessfulSyncDateTime property.
    */
    public function setLastSuccessfulSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSuccessfulSyncDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
