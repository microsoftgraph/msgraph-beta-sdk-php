<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ApplicableContent implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ApplicableContent and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplicableContent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplicableContent {
        return new ApplicableContent();
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
     * Gets the catalogEntry property value. Catalog entry for the update or content.
     * @return CatalogEntry|null
    */
    public function getCatalogEntry(): ?CatalogEntry {
        $val = $this->getBackingStore()->get('catalogEntry');
        if (is_null($val) || $val instanceof CatalogEntry) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'catalogEntry'");
    }

    /**
     * Gets the catalogEntryId property value. ID of the catalog entry for the applicable content.
     * @return string|null
    */
    public function getCatalogEntryId(): ?string {
        $val = $this->getBackingStore()->get('catalogEntryId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'catalogEntryId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'catalogEntry' => fn(ParseNode $n) => $o->setCatalogEntry($n->getObjectValue([CatalogEntry::class, 'createFromDiscriminatorValue'])),
            'catalogEntryId' => fn(ParseNode $n) => $o->setCatalogEntryId($n->getStringValue()),
            'matchedDevices' => fn(ParseNode $n) => $o->setMatchedDevices($n->getCollectionOfObjectValues([ApplicableContentDeviceMatch::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the matchedDevices property value. Collection of devices and recommendations for applicable catalog content.
     * @return array<ApplicableContentDeviceMatch>|null
    */
    public function getMatchedDevices(): ?array {
        $val = $this->getBackingStore()->get('matchedDevices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ApplicableContentDeviceMatch::class);
            /** @var array<ApplicableContentDeviceMatch>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'matchedDevices'");
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
        $writer->writeObjectValue('catalogEntry', $this->getCatalogEntry());
        $writer->writeStringValue('catalogEntryId', $this->getCatalogEntryId());
        $writer->writeCollectionOfObjectValues('matchedDevices', $this->getMatchedDevices());
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
     * Sets the catalogEntry property value. Catalog entry for the update or content.
     * @param CatalogEntry|null $value Value to set for the catalogEntry property.
    */
    public function setCatalogEntry(?CatalogEntry $value): void {
        $this->getBackingStore()->set('catalogEntry', $value);
    }

    /**
     * Sets the catalogEntryId property value. ID of the catalog entry for the applicable content.
     * @param string|null $value Value to set for the catalogEntryId property.
    */
    public function setCatalogEntryId(?string $value): void {
        $this->getBackingStore()->set('catalogEntryId', $value);
    }

    /**
     * Sets the matchedDevices property value. Collection of devices and recommendations for applicable catalog content.
     * @param array<ApplicableContentDeviceMatch>|null $value Value to set for the matchedDevices property.
    */
    public function setMatchedDevices(?array $value): void {
        $this->getBackingStore()->set('matchedDevices', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
