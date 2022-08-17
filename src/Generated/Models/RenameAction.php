<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RenameAction implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $newName The new name of the item.
    */
    private ?string $newName = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $oldName The previous name of the item.
    */
    private ?string $oldName = null;
    
    /**
     * Instantiates a new renameAction and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.renameAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RenameAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RenameAction {
        return new RenameAction();
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
            'newName' => function (ParseNode $n) use ($o) { $o->setNewName($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'oldName' => function (ParseNode $n) use ($o) { $o->setOldName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the newName property value. The new name of the item.
     * @return string|null
    */
    public function getNewName(): ?string {
        return $this->newName;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the oldName property value. The previous name of the item.
     * @return string|null
    */
    public function getOldName(): ?string {
        return $this->oldName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('newName', $this->newName);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('oldName', $this->oldName);
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
     * Sets the newName property value. The new name of the item.
     *  @param string|null $value Value to set for the newName property.
    */
    public function setNewName(?string $value ): void {
        $this->newName = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the oldName property value. The previous name of the item.
     *  @param string|null $value Value to set for the oldName property.
    */
    public function setOldName(?string $value ): void {
        $this->oldName = $value;
    }

}
