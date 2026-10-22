<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Contains in-use deferral and prompt countdown settings for Required and Available Win32 app installation assignments. These settings apply only when the app's `installExperience.inUseBehavior` is `terminateWithUserInteraction`. They are not supported for Uninstall assignments.
*/
class Win32LobAppInUseSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new Win32LobAppInUseSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppInUseSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppInUseSettings {
        return new Win32LobAppInUseSettings();
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
     * Gets the countdownMinutes property value. Indicates the prompt countdown duration in minutes before installation is enforced. For Required assignments, the countdown starts after the final deferral and valid values are 1 to 240 (4 hours). Available assignments require a fixed value of 5.
     * @return int|null
    */
    public function getCountdownMinutes(): ?int {
        $val = $this->getBackingStore()->get('countdownMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countdownMinutes'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'countdownMinutes' => fn(ParseNode $n) => $o->setCountdownMinutes($n->getIntegerValue()),
            'minutesBetweenDeferrals' => fn(ParseNode $n) => $o->setMinutesBetweenDeferrals($n->getIntegerValue()),
            'numberOfDeferrals' => fn(ParseNode $n) => $o->setNumberOfDeferrals($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the minutesBetweenDeferrals property value. Indicates the duration in minutes between deferral attempts. For Required assignments, valid values are 1 to 1440 (24 hours). Available assignments require 1 as a fixed placeholder because deferrals are not supported.
     * @return int|null
    */
    public function getMinutesBetweenDeferrals(): ?int {
        $val = $this->getBackingStore()->get('minutesBetweenDeferrals');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minutesBetweenDeferrals'");
    }

    /**
     * Gets the numberOfDeferrals property value. Indicates the maximum number of times the user can defer installation. For Required assignments, valid values are 0 to 5. Available assignments require 0.
     * @return int|null
    */
    public function getNumberOfDeferrals(): ?int {
        $val = $this->getBackingStore()->get('numberOfDeferrals');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberOfDeferrals'");
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
        $writer->writeIntegerValue('countdownMinutes', $this->getCountdownMinutes());
        $writer->writeIntegerValue('minutesBetweenDeferrals', $this->getMinutesBetweenDeferrals());
        $writer->writeIntegerValue('numberOfDeferrals', $this->getNumberOfDeferrals());
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
     * Sets the countdownMinutes property value. Indicates the prompt countdown duration in minutes before installation is enforced. For Required assignments, the countdown starts after the final deferral and valid values are 1 to 240 (4 hours). Available assignments require a fixed value of 5.
     * @param int|null $value Value to set for the countdownMinutes property.
    */
    public function setCountdownMinutes(?int $value): void {
        $this->getBackingStore()->set('countdownMinutes', $value);
    }

    /**
     * Sets the minutesBetweenDeferrals property value. Indicates the duration in minutes between deferral attempts. For Required assignments, valid values are 1 to 1440 (24 hours). Available assignments require 1 as a fixed placeholder because deferrals are not supported.
     * @param int|null $value Value to set for the minutesBetweenDeferrals property.
    */
    public function setMinutesBetweenDeferrals(?int $value): void {
        $this->getBackingStore()->set('minutesBetweenDeferrals', $value);
    }

    /**
     * Sets the numberOfDeferrals property value. Indicates the maximum number of times the user can defer installation. For Required assignments, valid values are 0 to 5. Available assignments require 0.
     * @param int|null $value Value to set for the numberOfDeferrals property.
    */
    public function setNumberOfDeferrals(?int $value): void {
        $this->getBackingStore()->set('numberOfDeferrals', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
