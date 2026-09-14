<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ThirdPartyWorkItem implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ThirdPartyWorkItem and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ThirdPartyWorkItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ThirdPartyWorkItem {
        return new ThirdPartyWorkItem();
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
            'identifier' => fn(ParseNode $n) => $o->setIdentifier($n->getStringValue()),
            'instance' => fn(ParseNode $n) => $o->setInstance($n->getStringValue()),
            'lastSyncedOnDateTime' => fn(ParseNode $n) => $o->setLastSyncedOnDateTime($n->getDateTimeValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([ThirdPartyWorkItemMetadata::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getEnumValue(ThirdPartyWorkItemProvider::class)),
            'syncedBy' => fn(ParseNode $n) => $o->setSyncedBy($n->getStringValue()),
            'workItemType' => fn(ParseNode $n) => $o->setWorkItemType($n->getEnumValue(ThirdPartyWorkItemType::class)),
        ];
    }

    /**
     * Gets the identifier property value. The identifier property
     * @return string|null
    */
    public function getIdentifier(): ?string {
        $val = $this->getBackingStore()->get('identifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identifier'");
    }

    /**
     * Gets the instance property value. The instance property
     * @return string|null
    */
    public function getInstance(): ?string {
        $val = $this->getBackingStore()->get('instance');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'instance'");
    }

    /**
     * Gets the lastSyncedOnDateTime property value. The lastSyncedOnDateTime property
     * @return DateTime|null
    */
    public function getLastSyncedOnDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastSyncedOnDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSyncedOnDateTime'");
    }

    /**
     * Gets the metadata property value. The metadata property
     * @return ThirdPartyWorkItemMetadata|null
    */
    public function getMetadata(): ?ThirdPartyWorkItemMetadata {
        $val = $this->getBackingStore()->get('metadata');
        if (is_null($val) || $val instanceof ThirdPartyWorkItemMetadata) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'metadata'");
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
     * Gets the provider property value. The provider property
     * @return ThirdPartyWorkItemProvider|null
    */
    public function getProvider(): ?ThirdPartyWorkItemProvider {
        $val = $this->getBackingStore()->get('provider');
        if (is_null($val) || $val instanceof ThirdPartyWorkItemProvider) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'provider'");
    }

    /**
     * Gets the syncedBy property value. The syncedBy property
     * @return string|null
    */
    public function getSyncedBy(): ?string {
        $val = $this->getBackingStore()->get('syncedBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'syncedBy'");
    }

    /**
     * Gets the workItemType property value. The workItemType property
     * @return ThirdPartyWorkItemType|null
    */
    public function getWorkItemType(): ?ThirdPartyWorkItemType {
        $val = $this->getBackingStore()->get('workItemType');
        if (is_null($val) || $val instanceof ThirdPartyWorkItemType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workItemType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('identifier', $this->getIdentifier());
        $writer->writeStringValue('instance', $this->getInstance());
        $writer->writeDateTimeValue('lastSyncedOnDateTime', $this->getLastSyncedOnDateTime());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('provider', $this->getProvider());
        $writer->writeStringValue('syncedBy', $this->getSyncedBy());
        $writer->writeEnumValue('workItemType', $this->getWorkItemType());
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
     * Sets the identifier property value. The identifier property
     * @param string|null $value Value to set for the identifier property.
    */
    public function setIdentifier(?string $value): void {
        $this->getBackingStore()->set('identifier', $value);
    }

    /**
     * Sets the instance property value. The instance property
     * @param string|null $value Value to set for the instance property.
    */
    public function setInstance(?string $value): void {
        $this->getBackingStore()->set('instance', $value);
    }

    /**
     * Sets the lastSyncedOnDateTime property value. The lastSyncedOnDateTime property
     * @param DateTime|null $value Value to set for the lastSyncedOnDateTime property.
    */
    public function setLastSyncedOnDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSyncedOnDateTime', $value);
    }

    /**
     * Sets the metadata property value. The metadata property
     * @param ThirdPartyWorkItemMetadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?ThirdPartyWorkItemMetadata $value): void {
        $this->getBackingStore()->set('metadata', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the provider property value. The provider property
     * @param ThirdPartyWorkItemProvider|null $value Value to set for the provider property.
    */
    public function setProvider(?ThirdPartyWorkItemProvider $value): void {
        $this->getBackingStore()->set('provider', $value);
    }

    /**
     * Sets the syncedBy property value. The syncedBy property
     * @param string|null $value Value to set for the syncedBy property.
    */
    public function setSyncedBy(?string $value): void {
        $this->getBackingStore()->set('syncedBy', $value);
    }

    /**
     * Sets the workItemType property value. The workItemType property
     * @param ThirdPartyWorkItemType|null $value Value to set for the workItemType property.
    */
    public function setWorkItemType(?ThirdPartyWorkItemType $value): void {
        $this->getBackingStore()->set('workItemType', $value);
    }

}
