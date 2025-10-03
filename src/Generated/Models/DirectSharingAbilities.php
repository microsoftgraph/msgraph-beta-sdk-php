<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DirectSharingAbilities implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DirectSharingAbilities and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DirectSharingAbilities
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DirectSharingAbilities {
        return new DirectSharingAbilities();
    }

    /**
     * Gets the addExistingExternalUsers property value. Indicates whether the current user can add existing guest recipients to this item using direct sharing.
     * @return SharingOperationStatus|null
    */
    public function getAddExistingExternalUsers(): ?SharingOperationStatus {
        $val = $this->getBackingStore()->get('addExistingExternalUsers');
        if (is_null($val) || $val instanceof SharingOperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addExistingExternalUsers'");
    }

    /**
     * Gets the addInternalUsers property value. Indicates whether the current user can add internal recipients to this item using direct sharing.
     * @return SharingOperationStatus|null
    */
    public function getAddInternalUsers(): ?SharingOperationStatus {
        $val = $this->getBackingStore()->get('addInternalUsers');
        if (is_null($val) || $val instanceof SharingOperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addInternalUsers'");
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
     * Gets the addNewExternalUsers property value. Indicates whether the current user can add new guest recipients to this item using direct sharing.
     * @return SharingOperationStatus|null
    */
    public function getAddNewExternalUsers(): ?SharingOperationStatus {
        $val = $this->getBackingStore()->get('addNewExternalUsers');
        if (is_null($val) || $val instanceof SharingOperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addNewExternalUsers'");
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
            'addExistingExternalUsers' => fn(ParseNode $n) => $o->setAddExistingExternalUsers($n->getObjectValue([SharingOperationStatus::class, 'createFromDiscriminatorValue'])),
            'addInternalUsers' => fn(ParseNode $n) => $o->setAddInternalUsers($n->getObjectValue([SharingOperationStatus::class, 'createFromDiscriminatorValue'])),
            'addNewExternalUsers' => fn(ParseNode $n) => $o->setAddNewExternalUsers($n->getObjectValue([SharingOperationStatus::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'requestGrantAccess' => fn(ParseNode $n) => $o->setRequestGrantAccess($n->getObjectValue([SharingOperationStatus::class, 'createFromDiscriminatorValue'])),
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
     * Gets the requestGrantAccess property value. Indicates whether the user querying this endpoint can request access for the user or on behalf of other users, after which, site admins, can approve or deny the creation of a potential sharing link.
     * @return SharingOperationStatus|null
    */
    public function getRequestGrantAccess(): ?SharingOperationStatus {
        $val = $this->getBackingStore()->get('requestGrantAccess');
        if (is_null($val) || $val instanceof SharingOperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestGrantAccess'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('addExistingExternalUsers', $this->getAddExistingExternalUsers());
        $writer->writeObjectValue('addInternalUsers', $this->getAddInternalUsers());
        $writer->writeObjectValue('addNewExternalUsers', $this->getAddNewExternalUsers());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('requestGrantAccess', $this->getRequestGrantAccess());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the addExistingExternalUsers property value. Indicates whether the current user can add existing guest recipients to this item using direct sharing.
     * @param SharingOperationStatus|null $value Value to set for the addExistingExternalUsers property.
    */
    public function setAddExistingExternalUsers(?SharingOperationStatus $value): void {
        $this->getBackingStore()->set('addExistingExternalUsers', $value);
    }

    /**
     * Sets the addInternalUsers property value. Indicates whether the current user can add internal recipients to this item using direct sharing.
     * @param SharingOperationStatus|null $value Value to set for the addInternalUsers property.
    */
    public function setAddInternalUsers(?SharingOperationStatus $value): void {
        $this->getBackingStore()->set('addInternalUsers', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the addNewExternalUsers property value. Indicates whether the current user can add new guest recipients to this item using direct sharing.
     * @param SharingOperationStatus|null $value Value to set for the addNewExternalUsers property.
    */
    public function setAddNewExternalUsers(?SharingOperationStatus $value): void {
        $this->getBackingStore()->set('addNewExternalUsers', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the requestGrantAccess property value. Indicates whether the user querying this endpoint can request access for the user or on behalf of other users, after which, site admins, can approve or deny the creation of a potential sharing link.
     * @param SharingOperationStatus|null $value Value to set for the requestGrantAccess property.
    */
    public function setRequestGrantAccess(?SharingOperationStatus $value): void {
        $this->getBackingStore()->set('requestGrantAccess', $value);
    }

}
