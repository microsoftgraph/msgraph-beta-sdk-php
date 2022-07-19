<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidDeviceOwnerKioskModeManagedFolder implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $folderIdentifier Unique identifier for the folder
    */
    private ?string $folderIdentifier = null;
    
    /**
     * @var string|null $folderName Display name for the folder
    */
    private ?string $folderName = null;
    
    /**
     * @var array<AndroidDeviceOwnerKioskModeFolderItem>|null $items Items to be added to managed folder. This collection can contain a maximum of 500 elements.
    */
    private ?array $items = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new androidDeviceOwnerKioskModeManagedFolder and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.androidDeviceOwnerKioskModeManagedFolder');
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'folderIdentifier' => function (ParseNode $n) use ($o) { $o->setFolderIdentifier($n->getStringValue()); },
            'folderName' => function (ParseNode $n) use ($o) { $o->setFolderName($n->getStringValue()); },
            'items' => function (ParseNode $n) use ($o) { $o->setItems($n->getCollectionOfObjectValues(array(AndroidDeviceOwnerKioskModeFolderItem::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the folderIdentifier property value. Unique identifier for the folder
     * @return string|null
    */
    public function getFolderIdentifier(): ?string {
        return $this->folderIdentifier;
    }

    /**
     * Gets the folderName property value. Display name for the folder
     * @return string|null
    */
    public function getFolderName(): ?string {
        return $this->folderName;
    }

    /**
     * Gets the items property value. Items to be added to managed folder. This collection can contain a maximum of 500 elements.
     * @return array<AndroidDeviceOwnerKioskModeFolderItem>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('folderIdentifier', $this->folderIdentifier);
        $writer->writeStringValue('folderName', $this->folderName);
        $writer->writeCollectionOfObjectValues('items', $this->items);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the folderIdentifier property value. Unique identifier for the folder
     *  @param string|null $value Value to set for the folderIdentifier property.
    */
    public function setFolderIdentifier(?string $value ): void {
        $this->folderIdentifier = $value;
    }

    /**
     * Sets the folderName property value. Display name for the folder
     *  @param string|null $value Value to set for the folderName property.
    */
    public function setFolderName(?string $value ): void {
        $this->folderName = $value;
    }

    /**
     * Sets the items property value. Items to be added to managed folder. This collection can contain a maximum of 500 elements.
     *  @param array<AndroidDeviceOwnerKioskModeFolderItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value ): void {
        $this->items = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
