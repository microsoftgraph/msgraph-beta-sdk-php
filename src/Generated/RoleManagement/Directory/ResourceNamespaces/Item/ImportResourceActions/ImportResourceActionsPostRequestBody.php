<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\Directory\ResourceNamespaces\Item\ImportResourceActions;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ImportResourceActionsPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new importResourceActionsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImportResourceActionsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImportResourceActionsPostRequestBody {
        return new ImportResourceActionsPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
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
            'format' => fn(ParseNode $n) => $o->setFormat($n->getStringValue()),
            'overwriteResourceNamespace' => fn(ParseNode $n) => $o->setOverwriteResourceNamespace($n->getBooleanValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the format property value. The format property
     * @return string|null
    */
    public function getFormat(): ?string {
        $val = $this->getBackingStore()->get('format');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'format'");
    }

    /**
     * Gets the overwriteResourceNamespace property value. The overwriteResourceNamespace property
     * @return bool|null
    */
    public function getOverwriteResourceNamespace(): ?bool {
        $val = $this->getBackingStore()->get('overwriteResourceNamespace');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'overwriteResourceNamespace'");
    }

    /**
     * Gets the value property value. The value property
     * @return string|null
    */
    public function getValue(): ?string {
        $val = $this->getBackingStore()->get('value');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('format', $this->getFormat());
        $writer->writeBooleanValue('overwriteResourceNamespace', $this->getOverwriteResourceNamespace());
        $writer->writeStringValue('value', $this->getValue());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the format property value. The format property
     * @param string|null $value Value to set for the format property.
    */
    public function setFormat(?string $value): void {
        $this->getBackingStore()->set('format', $value);
    }

    /**
     * Sets the overwriteResourceNamespace property value. The overwriteResourceNamespace property
     * @param bool|null $value Value to set for the overwriteResourceNamespace property.
    */
    public function setOverwriteResourceNamespace(?bool $value): void {
        $this->getBackingStore()->set('overwriteResourceNamespace', $value);
    }

    /**
     * Sets the value property value. The value property
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
