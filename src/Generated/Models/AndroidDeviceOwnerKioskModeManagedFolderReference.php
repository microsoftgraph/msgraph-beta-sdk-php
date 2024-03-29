<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A reference to folder containing apps and weblinks on the Managed Home Screen
*/
class AndroidDeviceOwnerKioskModeManagedFolderReference extends AndroidDeviceOwnerKioskModeHomeScreenItem implements Parsable 
{
    /**
     * Instantiates a new AndroidDeviceOwnerKioskModeManagedFolderReference and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidDeviceOwnerKioskModeManagedFolderReference');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceOwnerKioskModeManagedFolderReference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceOwnerKioskModeManagedFolderReference {
        return new AndroidDeviceOwnerKioskModeManagedFolderReference();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'folderIdentifier' => fn(ParseNode $n) => $o->setFolderIdentifier($n->getStringValue()),
            'folderName' => fn(ParseNode $n) => $o->setFolderName($n->getStringValue()),
        ]);
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
     * Gets the folderName property value. Name of the folder
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('folderIdentifier', $this->getFolderIdentifier());
        $writer->writeStringValue('folderName', $this->getFolderName());
    }

    /**
     * Sets the folderIdentifier property value. Unique identifier for the folder
     * @param string|null $value Value to set for the folderIdentifier property.
    */
    public function setFolderIdentifier(?string $value): void {
        $this->getBackingStore()->set('folderIdentifier', $value);
    }

    /**
     * Sets the folderName property value. Name of the folder
     * @param string|null $value Value to set for the folderName property.
    */
    public function setFolderName(?string $value): void {
        $this->getBackingStore()->set('folderName', $value);
    }

}
