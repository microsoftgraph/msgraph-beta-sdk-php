<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidDeviceOwnerKioskModeManagedFolderReference extends AndroidDeviceOwnerKioskModeHomeScreenItem implements Parsable 
{
    /**
     * @var string|null $folderIdentifier Unique identifier for the folder
    */
    private ?string $folderIdentifier = null;
    
    /**
     * @var string|null $folderName Name of the folder
    */
    private ?string $folderName = null;
    
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
     * @return array<string, callable>
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
        return $this->folderIdentifier;
    }

    /**
     * Gets the folderName property value. Name of the folder
     * @return string|null
    */
    public function getFolderName(): ?string {
        return $this->folderName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('folderIdentifier', $this->folderIdentifier);
        $writer->writeStringValue('folderName', $this->folderName);
    }

    /**
     * Sets the folderIdentifier property value. Unique identifier for the folder
     *  @param string|null $value Value to set for the folderIdentifier property.
    */
    public function setFolderIdentifier(?string $value ): void {
        $this->folderIdentifier = $value;
    }

    /**
     * Sets the folderName property value. Name of the folder
     *  @param string|null $value Value to set for the folderName property.
    */
    public function setFolderName(?string $value ): void {
        $this->folderName = $value;
    }

}
