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
 * A complex type to store the expedited quality update settings such as release date and days until forced reboot.
*/
class ExpeditedWindowsQualityUpdateSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ExpeditedWindowsQualityUpdateSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExpeditedWindowsQualityUpdateSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExpeditedWindowsQualityUpdateSettings {
        return new ExpeditedWindowsQualityUpdateSettings();
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
     * Gets the daysUntilForcedReboot property value. The number of days after installation that forced reboot will happen.
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'qualityUpdateRelease' => fn(ParseNode $n) => $o->setQualityUpdateRelease($n->getStringValue()),
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
     * Gets the qualityUpdateRelease property value. The release date to identify a quality update.
     * @return string|null
    */
    public function getQualityUpdateRelease(): ?string {
        $val = $this->getBackingStore()->get('qualityUpdateRelease');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'qualityUpdateRelease'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('daysUntilForcedReboot', $this->getDaysUntilForcedReboot());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('qualityUpdateRelease', $this->getQualityUpdateRelease());
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
     * Sets the daysUntilForcedReboot property value. The number of days after installation that forced reboot will happen.
     * @param int|null $value Value to set for the daysUntilForcedReboot property.
    */
    public function setDaysUntilForcedReboot(?int $value): void {
        $this->getBackingStore()->set('daysUntilForcedReboot', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the qualityUpdateRelease property value. The release date to identify a quality update.
     * @param string|null $value Value to set for the qualityUpdateRelease property.
    */
    public function setQualityUpdateRelease(?string $value): void {
        $this->getBackingStore()->set('qualityUpdateRelease', $value);
    }

}
