<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidDeviceOwnerKioskModeManagedFolderReference extends AndroidDeviceOwnerKioskModeHomeScreenItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
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
        $this->additionalData = [];
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
        return array_merge(parent::getFieldDeserializers(), [
            'folderIdentifier' => function (ParseNode $n) use ($o) { $o->setFolderIdentifier($n->getStringValue()); },
            'folderName' => function (ParseNode $n) use ($o) { $o->setFolderName($n->getStringValue()); },
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
     * Sets the folderName property value. Name of the folder
     *  @param string|null $value Value to set for the folderName property.
    */
    public function setFolderName(?string $value ): void {
        $this->folderName = $value;
    }

}
