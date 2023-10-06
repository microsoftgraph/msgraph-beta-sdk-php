<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * A folder containing pages of apps and weblinks on the Managed Home Screen
*/
class AndroidDeviceOwnerKioskModeManagedFolder implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new androidDeviceOwnerKioskModeManagedFolder and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceOwnerKioskModeManagedFolder
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceOwnerKioskModeManagedFolder {
        return new AndroidDeviceOwnerKioskModeManagedFolder();
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
            'folderIdentifier' => fn(ParseNode $n) => $o->setFolderIdentifier($n->getStringValue()),
            'folderName' => fn(ParseNode $n) => $o->setFolderName($n->getStringValue()),
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([AndroidDeviceOwnerKioskModeFolderItem::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the folderIdentifier property value. Unique identifier for the folder
     * @return string|null
    */
    public function getFolderIdentifier(): ?string {
        $val = $this->getBackingStore()->get('folderIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'folderIdentifier'");
    }

    /**
     * Gets the folderName property value. Display name for the folder
     * @return string|null
    */
    public function getFolderName(): ?string {
        $val = $this->getBackingStore()->get('folderName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'folderName'");
    }

    /**
     * Gets the items property value. Items to be added to managed folder. This collection can contain a maximum of 500 elements.
     * @return array<AndroidDeviceOwnerKioskModeFolderItem>|null
    */
    public function getItems(): ?array {
        $val = $this->getBackingStore()->get('items');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AndroidDeviceOwnerKioskModeFolderItem::class);
            /** @var array<AndroidDeviceOwnerKioskModeFolderItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'items'");
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
        $writer->writeStringValue('folderIdentifier', $this->getFolderIdentifier());
        $writer->writeStringValue('folderName', $this->getFolderName());
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
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
     * Sets the folderIdentifier property value. Unique identifier for the folder
     * @param string|null $value Value to set for the folderIdentifier property.
    */
    public function setFolderIdentifier(?string $value): void {
        $this->getBackingStore()->set('folderIdentifier', $value);
    }

    /**
     * Sets the folderName property value. Display name for the folder
     * @param string|null $value Value to set for the folderName property.
    */
    public function setFolderName(?string $value): void {
        $this->getBackingStore()->set('folderName', $value);
    }

    /**
     * Sets the items property value. Items to be added to managed folder. This collection can contain a maximum of 500 elements.
     * @param array<AndroidDeviceOwnerKioskModeFolderItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->getBackingStore()->set('items', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
