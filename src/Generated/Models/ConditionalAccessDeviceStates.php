<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ConditionalAccessDeviceStates implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new conditionalAccessDeviceStates and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.conditionalAccessDeviceStates');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessDeviceStates
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessDeviceStates {
        return new ConditionalAccessDeviceStates();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the excludeStates property value. States excluded from the scope of the policy. Possible values: Compliant, DomainJoined.
     * @return array<string>|null
    */
    public function getExcludeStates(): ?array {
        return $this->getBackingStore()->get('excludeStates');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'excludeStates' => fn(ParseNode $n) => $o->setExcludeStates($n->getCollectionOfPrimitiveValues()),
            'includeStates' => fn(ParseNode $n) => $o->setIncludeStates($n->getCollectionOfPrimitiveValues()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the includeStates property value. States in the scope of the policy. All is the only allowed value.
     * @return array<string>|null
    */
    public function getIncludeStates(): ?array {
        return $this->getBackingStore()->get('includeStates');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('excludeStates', $this->getExcludeStates());
        $writer->writeCollectionOfPrimitiveValues('includeStates', $this->getIncludeStates());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the excludeStates property value. States excluded from the scope of the policy. Possible values: Compliant, DomainJoined.
     *  @param array<string>|null $value Value to set for the excludeStates property.
    */
    public function setExcludeStates(?array $value): void {
        $this->getBackingStore()->set('excludeStates', $value);
    }

    /**
     * Sets the includeStates property value. States in the scope of the policy. All is the only allowed value.
     *  @param array<string>|null $value Value to set for the includeStates property.
    */
    public function setIncludeStates(?array $value): void {
        $this->getBackingStore()->set('includeStates', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
