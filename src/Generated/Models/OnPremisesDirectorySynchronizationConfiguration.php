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
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the anchorAttribute property value. The anchor attribute allows customers to customize the property used to create source anchors for synchronization enabled objects.
     * @return string|null
    */
    public function getAnchorAttribute(): ?string {
        return $this->getBackingStore()->get('anchorAttribute');
    }

    /**
     * Gets the applicationId property value. The identifier of the on-premises directory synchronization client application that is configured for the tenant.
     * @return string|null
    */
    public function getApplicationId(): ?string {
        return $this->getBackingStore()->get('applicationId');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the currentExportData property value. Data for the current export run.
     * @return OnPremisesCurrentExportData|null
    */
    public function getCurrentExportData(): ?OnPremisesCurrentExportData {
        return $this->getBackingStore()->get('currentExportData');
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
            'anchorAttribute' => fn(ParseNode $n) => $o->setAnchorAttribute($n->getStringValue()),
            'applicationId' => fn(ParseNode $n) => $o->setApplicationId($n->getStringValue()),
            'currentExportData' => fn(ParseNode $n) => $o->setCurrentExportData($n->getObjectValue([OnPremisesCurrentExportData::class, 'createFromDiscriminatorValue'])),
            'customerRequestedSynchronizationInterval' => fn(ParseNode $n) => $o->setCustomerRequestedSynchronizationInterval($n->getDateIntervalValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'synchronizationClientVersion' => fn(ParseNode $n) => $o->setSynchronizationClientVersion($n->getStringValue()),
            'synchronizationInterval' => fn(ParseNode $n) => $o->setSynchronizationInterval($n->getDateIntervalValue()),
            'writebackConfiguration' => fn(ParseNode $n) => $o->setWritebackConfiguration($n->getObjectValue([OnPremisesWritebackConfiguration::class, 'createFromDiscriminatorValue'])),
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
     * Gets the synchronizationClientVersion property value. Indicates the version of the on-premises directory synchronization application.
     * @return string|null
    */
    public function getSynchronizationClientVersion(): ?string {
        return $this->getBackingStore()->get('synchronizationClientVersion');
    }

    /**
     * Gets the synchronizationInterval property value. Interval of time the sync client should honor between sync cycles
     * @return DateInterval|null
    */
    public function getSynchronizationInterval(): ?DateInterval {
        return $this->getBackingStore()->get('synchronizationInterval');
    }

    /**
     * Gets the writebackConfiguration property value. Configuration to control how cloud created or owned objects are synchronized back to the on-premises directory.
     * @return OnPremisesWritebackConfiguration|null
    */
    public function getWritebackConfiguration(): ?OnPremisesWritebackConfiguration {
        return $this->getBackingStore()->get('writebackConfiguration');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('accidentalDeletionPrevention', $this->getAccidentalDeletionPrevention());
        $writer->writeStringValue('anchorAttribute', $this->getAnchorAttribute());
        $writer->writeStringValue('applicationId', $this->getApplicationId());
        $writer->writeObjectValue('currentExportData', $this->getCurrentExportData());
        $writer->writeDateIntervalValue('customerRequestedSynchronizationInterval', $this->getCustomerRequestedSynchronizationInterval());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('synchronizationClientVersion', $this->getSynchronizationClientVersion());
        $writer->writeDateIntervalValue('synchronizationInterval', $this->getSynchronizationInterval());
        $writer->writeObjectValue('writebackConfiguration', $this->getWritebackConfiguration());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accidentalDeletionPrevention property value. Contains the accidental deletion prevention configuration for a tenant.
     * @param OnPremisesAccidentalDeletionPrevention|null $value Value to set for the accidentalDeletionPrevention property.
    */
    public function setAccidentalDeletionPrevention(?OnPremisesAccidentalDeletionPrevention $value): void {
        $this->getBackingStore()->set('accidentalDeletionPrevention', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the anchorAttribute property value. The anchor attribute allows customers to customize the property used to create source anchors for synchronization enabled objects.
     * @param string|null $value Value to set for the anchorAttribute property.
    */
    public function setAnchorAttribute(?string $value): void {
        $this->getBackingStore()->set('anchorAttribute', $value);
    }

    /**
     * Sets the applicationId property value. The identifier of the on-premises directory synchronization client application that is configured for the tenant.
     * @param string|null $value Value to set for the applicationId property.
    */
    public function setApplicationId(?string $value): void {
        $this->getBackingStore()->set('applicationId', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the currentExportData property value. Data for the current export run.
     * @param OnPremisesCurrentExportData|null $value Value to set for the currentExportData property.
    */
    public function setCurrentExportData(?OnPremisesCurrentExportData $value): void {
        $this->getBackingStore()->set('currentExportData', $value);
    }

    /**
     * Sets the customerRequestedSynchronizationInterval property value. Interval of time that the customer requested the sync client waits between sync cycles.
     * @param DateInterval|null $value Value to set for the customerRequestedSynchronizationInterval property.
    */
    public function setCustomerRequestedSynchronizationInterval(?DateInterval $value): void {
        $this->getBackingStore()->set('customerRequestedSynchronizationInterval', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the synchronizationClientVersion property value. Indicates the version of the on-premises directory synchronization application.
     * @param string|null $value Value to set for the synchronizationClientVersion property.
    */
    public function setSynchronizationClientVersion(?string $value): void {
        $this->getBackingStore()->set('synchronizationClientVersion', $value);
    }

    /**
     * Sets the synchronizationInterval property value. Interval of time the sync client should honor between sync cycles
     * @param DateInterval|null $value Value to set for the synchronizationInterval property.
    */
    public function setSynchronizationInterval(?DateInterval $value): void {
        $this->getBackingStore()->set('synchronizationInterval', $value);
    }

    /**
     * Sets the writebackConfiguration property value. Configuration to control how cloud created or owned objects are synchronized back to the on-premises directory.
     * @param OnPremisesWritebackConfiguration|null $value Value to set for the writebackConfiguration property.
    */
    public function setWritebackConfiguration(?OnPremisesWritebackConfiguration $value): void {
        $this->getBackingStore()->set('writebackConfiguration', $value);
    }

}
