<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Settings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new Settings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Settings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Settings {
        return new Settings();
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
            'hasGraphMailbox' => fn(ParseNode $n) => $o->setHasGraphMailbox($n->getBooleanValue()),
            'hasLicense' => fn(ParseNode $n) => $o->setHasLicense($n->getBooleanValue()),
            'hasOptedOut' => fn(ParseNode $n) => $o->setHasOptedOut($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the hasGraphMailbox property value. Specifies if the user's primary mailbox is hosted in the cloud and is enabled for Microsoft Graph.
     * @return bool|null
    */
    public function getHasGraphMailbox(): ?bool {
        $val = $this->getBackingStore()->get('hasGraphMailbox');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasGraphMailbox'");
    }

    /**
     * Gets the hasLicense property value. Specifies if the user has a MyAnalytics license assigned.
     * @return bool|null
    */
    public function getHasLicense(): ?bool {
        $val = $this->getBackingStore()->get('hasLicense');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasLicense'");
    }

    /**
     * Gets the hasOptedOut property value. Specifies if the user opted out of MyAnalytics.
     * @return bool|null
    */
    public function getHasOptedOut(): ?bool {
        $val = $this->getBackingStore()->get('hasOptedOut');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasOptedOut'");
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
        $writer->writeBooleanValue('hasGraphMailbox', $this->getHasGraphMailbox());
        $writer->writeBooleanValue('hasLicense', $this->getHasLicense());
        $writer->writeBooleanValue('hasOptedOut', $this->getHasOptedOut());
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
     * Sets the hasGraphMailbox property value. Specifies if the user's primary mailbox is hosted in the cloud and is enabled for Microsoft Graph.
     * @param bool|null $value Value to set for the hasGraphMailbox property.
    */
    public function setHasGraphMailbox(?bool $value): void {
        $this->getBackingStore()->set('hasGraphMailbox', $value);
    }

    /**
     * Sets the hasLicense property value. Specifies if the user has a MyAnalytics license assigned.
     * @param bool|null $value Value to set for the hasLicense property.
    */
    public function setHasLicense(?bool $value): void {
        $this->getBackingStore()->set('hasLicense', $value);
    }

    /**
     * Sets the hasOptedOut property value. Specifies if the user opted out of MyAnalytics.
     * @param bool|null $value Value to set for the hasOptedOut property.
    */
    public function setHasOptedOut(?bool $value): void {
        $this->getBackingStore()->set('hasOptedOut', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
