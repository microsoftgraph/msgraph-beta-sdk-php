<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DriveItemAccessOperationsViewpoint implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DriveItemAccessOperationsViewpoint and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DriveItemAccessOperationsViewpoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DriveItemAccessOperationsViewpoint {
        return new DriveItemAccessOperationsViewpoint();
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
     * Gets the canComment property value. Indicates whether the user can comment on this item.
     * @return bool|null
    */
    public function getCanComment(): ?bool {
        $val = $this->getBackingStore()->get('canComment');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'canComment'");
    }

    /**
     * Gets the canCreateFile property value. Indicates whether the user can create files within this object. Returned only on folders.
     * @return bool|null
    */
    public function getCanCreateFile(): ?bool {
        $val = $this->getBackingStore()->get('canCreateFile');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'canCreateFile'");
    }

    /**
     * Gets the canCreateFolder property value. Indicates whether the user can create folders within this object. Returned only on folders.
     * @return bool|null
    */
    public function getCanCreateFolder(): ?bool {
        $val = $this->getBackingStore()->get('canCreateFolder');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'canCreateFolder'");
    }

    /**
     * Gets the canDelete property value. Indicates whether the user can delete this item.
     * @return bool|null
    */
    public function getCanDelete(): ?bool {
        $val = $this->getBackingStore()->get('canDelete');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'canDelete'");
    }

    /**
     * Gets the canDownload property value. Indicates whether the user can download this item.
     * @return bool|null
    */
    public function getCanDownload(): ?bool {
        $val = $this->getBackingStore()->get('canDownload');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'canDownload'");
    }

    /**
     * Gets the canRead property value. Indicates whether the user can read this item.
     * @return bool|null
    */
    public function getCanRead(): ?bool {
        $val = $this->getBackingStore()->get('canRead');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'canRead'");
    }

    /**
     * Gets the canUpdate property value. Indicates whether the user can update this item.
     * @return bool|null
    */
    public function getCanUpdate(): ?bool {
        $val = $this->getBackingStore()->get('canUpdate');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'canUpdate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'canComment' => fn(ParseNode $n) => $o->setCanComment($n->getBooleanValue()),
            'canCreateFile' => fn(ParseNode $n) => $o->setCanCreateFile($n->getBooleanValue()),
            'canCreateFolder' => fn(ParseNode $n) => $o->setCanCreateFolder($n->getBooleanValue()),
            'canDelete' => fn(ParseNode $n) => $o->setCanDelete($n->getBooleanValue()),
            'canDownload' => fn(ParseNode $n) => $o->setCanDownload($n->getBooleanValue()),
            'canRead' => fn(ParseNode $n) => $o->setCanRead($n->getBooleanValue()),
            'canUpdate' => fn(ParseNode $n) => $o->setCanUpdate($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('canComment', $this->getCanComment());
        $writer->writeBooleanValue('canCreateFile', $this->getCanCreateFile());
        $writer->writeBooleanValue('canCreateFolder', $this->getCanCreateFolder());
        $writer->writeBooleanValue('canDelete', $this->getCanDelete());
        $writer->writeBooleanValue('canDownload', $this->getCanDownload());
        $writer->writeBooleanValue('canRead', $this->getCanRead());
        $writer->writeBooleanValue('canUpdate', $this->getCanUpdate());
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
     * Sets the canComment property value. Indicates whether the user can comment on this item.
     * @param bool|null $value Value to set for the canComment property.
    */
    public function setCanComment(?bool $value): void {
        $this->getBackingStore()->set('canComment', $value);
    }

    /**
     * Sets the canCreateFile property value. Indicates whether the user can create files within this object. Returned only on folders.
     * @param bool|null $value Value to set for the canCreateFile property.
    */
    public function setCanCreateFile(?bool $value): void {
        $this->getBackingStore()->set('canCreateFile', $value);
    }

    /**
     * Sets the canCreateFolder property value. Indicates whether the user can create folders within this object. Returned only on folders.
     * @param bool|null $value Value to set for the canCreateFolder property.
    */
    public function setCanCreateFolder(?bool $value): void {
        $this->getBackingStore()->set('canCreateFolder', $value);
    }

    /**
     * Sets the canDelete property value. Indicates whether the user can delete this item.
     * @param bool|null $value Value to set for the canDelete property.
    */
    public function setCanDelete(?bool $value): void {
        $this->getBackingStore()->set('canDelete', $value);
    }

    /**
     * Sets the canDownload property value. Indicates whether the user can download this item.
     * @param bool|null $value Value to set for the canDownload property.
    */
    public function setCanDownload(?bool $value): void {
        $this->getBackingStore()->set('canDownload', $value);
    }

    /**
     * Sets the canRead property value. Indicates whether the user can read this item.
     * @param bool|null $value Value to set for the canRead property.
    */
    public function setCanRead(?bool $value): void {
        $this->getBackingStore()->set('canRead', $value);
    }

    /**
     * Sets the canUpdate property value. Indicates whether the user can update this item.
     * @param bool|null $value Value to set for the canUpdate property.
    */
    public function setCanUpdate(?bool $value): void {
        $this->getBackingStore()->set('canUpdate', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
