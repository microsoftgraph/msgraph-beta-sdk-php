<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\IndustryData;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AdditionalClassGroupOptions implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AdditionalClassGroupOptions and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdditionalClassGroupOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdditionalClassGroupOptions {
        return new AdditionalClassGroupOptions();
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
     * Gets the createTeam property value. Indicates whether a team should be created for the class group.
     * @return bool|null
    */
    public function getCreateTeam(): ?bool {
        $val = $this->getBackingStore()->get('createTeam');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createTeam'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'createTeam' => fn(ParseNode $n) => $o->setCreateTeam($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'writeDisplayNameOnCreateOnly' => fn(ParseNode $n) => $o->setWriteDisplayNameOnCreateOnly($n->getBooleanValue()),
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
     * Gets the writeDisplayNameOnCreateOnly property value. Indicates whether the class group display name should be set on create.
     * @return bool|null
    */
    public function getWriteDisplayNameOnCreateOnly(): ?bool {
        $val = $this->getBackingStore()->get('writeDisplayNameOnCreateOnly');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'writeDisplayNameOnCreateOnly'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('createTeam', $this->getCreateTeam());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('writeDisplayNameOnCreateOnly', $this->getWriteDisplayNameOnCreateOnly());
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
     * Sets the createTeam property value. Indicates whether a team should be created for the class group.
     * @param bool|null $value Value to set for the createTeam property.
    */
    public function setCreateTeam(?bool $value): void {
        $this->getBackingStore()->set('createTeam', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the writeDisplayNameOnCreateOnly property value. Indicates whether the class group display name should be set on create.
     * @param bool|null $value Value to set for the writeDisplayNameOnCreateOnly property.
    */
    public function setWriteDisplayNameOnCreateOnly(?bool $value): void {
        $this->getBackingStore()->set('writeDisplayNameOnCreateOnly', $value);
    }

}
