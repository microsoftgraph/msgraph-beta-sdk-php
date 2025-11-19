<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UserExperienceSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UserExperienceSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceSettings {
        return new UserExperienceSettings();
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
     * Gets the daysUntilForcedReboot property value. Specifies the number of days after an update is installed, during which the user of the device can control when the device restarts.
     * @return int|null
    */
    public function getDaysUntilForcedReboot(): ?int {
        $val = $this->getBackingStore()->get('daysUntilForcedReboot');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'daysUntilForcedReboot'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'daysUntilForcedReboot' => fn(ParseNode $n) => $o->setDaysUntilForcedReboot($n->getIntegerValue()),
            'isHotpatchEnabled' => fn(ParseNode $n) => $o->setIsHotpatchEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'offerAsOptional' => fn(ParseNode $n) => $o->setOfferAsOptional($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the isHotpatchEnabled property value. Specifies whether the update is offered as a hotpatch. It can only be set to true on automatic policies that target monthly security updates.
     * @return bool|null
    */
    public function getIsHotpatchEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isHotpatchEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isHotpatchEnabled'");
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
     * Gets the offerAsOptional property value. Specifies whether the update is offered as Optional rather than Required.
     * @return bool|null
    */
    public function getOfferAsOptional(): ?bool {
        $val = $this->getBackingStore()->get('offerAsOptional');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'offerAsOptional'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('daysUntilForcedReboot', $this->getDaysUntilForcedReboot());
        $writer->writeBooleanValue('isHotpatchEnabled', $this->getIsHotpatchEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('offerAsOptional', $this->getOfferAsOptional());
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
     * Sets the daysUntilForcedReboot property value. Specifies the number of days after an update is installed, during which the user of the device can control when the device restarts.
     * @param int|null $value Value to set for the daysUntilForcedReboot property.
    */
    public function setDaysUntilForcedReboot(?int $value): void {
        $this->getBackingStore()->set('daysUntilForcedReboot', $value);
    }

    /**
     * Sets the isHotpatchEnabled property value. Specifies whether the update is offered as a hotpatch. It can only be set to true on automatic policies that target monthly security updates.
     * @param bool|null $value Value to set for the isHotpatchEnabled property.
    */
    public function setIsHotpatchEnabled(?bool $value): void {
        $this->getBackingStore()->set('isHotpatchEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the offerAsOptional property value. Specifies whether the update is offered as Optional rather than Required.
     * @param bool|null $value Value to set for the offerAsOptional property.
    */
    public function setOfferAsOptional(?bool $value): void {
        $this->getBackingStore()->set('offerAsOptional', $value);
    }

}
