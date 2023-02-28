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
 * Windows 10 force update schedule for Apps
*/
class Windows10AppsForceUpdateSchedule implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new windows10AppsForceUpdateSchedule and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10AppsForceUpdateSchedule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10AppsForceUpdateSchedule {
        return new Windows10AppsForceUpdateSchedule();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'recurrence' => fn(ParseNode $n) => $o->setRecurrence($n->getEnumValue(Windows10AppsUpdateRecurrence::class)),
            'runImmediatelyIfAfterStartDateTime' => fn(ParseNode $n) => $o->setRunImmediatelyIfAfterStartDateTime($n->getBooleanValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
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
     * Gets the recurrence property value. Possible values for App update on Windows10 recurrence.
     * @return Windows10AppsUpdateRecurrence|null
    */
    public function getRecurrence(): ?Windows10AppsUpdateRecurrence {
        return $this->getBackingStore()->get('recurrence');
    }

    /**
     * Gets the runImmediatelyIfAfterStartDateTime property value. If true, runs the task immediately if StartDateTime is in the past, else, runs at the next recurrence.
     * @return bool|null
    */
    public function getRunImmediatelyIfAfterStartDateTime(): ?bool {
        return $this->getBackingStore()->get('runImmediatelyIfAfterStartDateTime');
    }

    /**
     * Gets the startDateTime property value. The start time for the force restart.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('recurrence', $this->getRecurrence());
        $writer->writeBooleanValue('runImmediatelyIfAfterStartDateTime', $this->getRunImmediatelyIfAfterStartDateTime());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the recurrence property value. Possible values for App update on Windows10 recurrence.
     * @param Windows10AppsUpdateRecurrence|null $value Value to set for the recurrence property.
    */
    public function setRecurrence(?Windows10AppsUpdateRecurrence $value): void {
        $this->getBackingStore()->set('recurrence', $value);
    }

    /**
     * Sets the runImmediatelyIfAfterStartDateTime property value. If true, runs the task immediately if StartDateTime is in the past, else, runs at the next recurrence.
     * @param bool|null $value Value to set for the runImmediatelyIfAfterStartDateTime property.
    */
    public function setRunImmediatelyIfAfterStartDateTime(?bool $value): void {
        $this->getBackingStore()->set('runImmediatelyIfAfterStartDateTime', $value);
    }

    /**
     * Sets the startDateTime property value. The start time for the force restart.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

}
