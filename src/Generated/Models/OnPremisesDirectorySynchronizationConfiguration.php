<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class OnPremisesDirectorySynchronizationConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new onPremisesDirectorySynchronizationConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPremisesDirectorySynchronizationConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPremisesDirectorySynchronizationConfiguration {
        return new OnPremisesDirectorySynchronizationConfiguration();
    }

    /**
     * Gets the accidentalDeletionPrevention property value. Contains the accidental deletion prevention configuration for a tenant.
     * @return OnPremisesAccidentalDeletionPrevention|null
    */
    public function getAccidentalDeletionPrevention(): ?OnPremisesAccidentalDeletionPrevention {
        return $this->getBackingStore()->get('accidentalDeletionPrevention');
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the customerRequestedSynchronizationInterval property value. Interval of time that the customer requested the sync client waits between sync cycles.
     * @return DateInterval|null
    */
    public function getCustomerRequestedSynchronizationInterval(): ?DateInterval {
        return $this->getBackingStore()->get('customerRequestedSynchronizationInterval');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accidentalDeletionPrevention' => fn(ParseNode $n) => $o->setAccidentalDeletionPrevention($n->getObjectValue([OnPremisesAccidentalDeletionPrevention::class, 'createFromDiscriminatorValue'])),
            'customerRequestedSynchronizationInterval' => fn(ParseNode $n) => $o->setCustomerRequestedSynchronizationInterval($n->getDateIntervalValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'synchronizationInterval' => fn(ParseNode $n) => $o->setSynchronizationInterval($n->getDateIntervalValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the synchronizationInterval property value. Interval of time the sync client should honor between sync cycles
     * @return DateInterval|null
    */
    public function getSynchronizationInterval(): ?DateInterval {
        return $this->getBackingStore()->get('synchronizationInterval');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('accidentalDeletionPrevention', $this->getAccidentalDeletionPrevention());
        $writer->writeDateIntervalValue('customerRequestedSynchronizationInterval', $this->getCustomerRequestedSynchronizationInterval());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateIntervalValue('synchronizationInterval', $this->getSynchronizationInterval());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accidentalDeletionPrevention property value. Contains the accidental deletion prevention configuration for a tenant.
     *  @param OnPremisesAccidentalDeletionPrevention|null $value Value to set for the accidentalDeletionPrevention property.
    */
    public function setAccidentalDeletionPrevention(?OnPremisesAccidentalDeletionPrevention $value): void {
        $this->getBackingStore()->set('accidentalDeletionPrevention', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the customerRequestedSynchronizationInterval property value. Interval of time that the customer requested the sync client waits between sync cycles.
     *  @param DateInterval|null $value Value to set for the customerRequestedSynchronizationInterval property.
    */
    public function setCustomerRequestedSynchronizationInterval(?DateInterval $value): void {
        $this->getBackingStore()->set('customerRequestedSynchronizationInterval', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the synchronizationInterval property value. Interval of time the sync client should honor between sync cycles
     *  @param DateInterval|null $value Value to set for the synchronizationInterval property.
    */
    public function setSynchronizationInterval(?DateInterval $value): void {
        $this->getBackingStore()->set('synchronizationInterval', $value);
    }

}
