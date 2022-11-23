<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class MacOSAppleEventReceiver implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new macOSAppleEventReceiver and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSAppleEventReceiver
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSAppleEventReceiver {
        return new MacOSAppleEventReceiver();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the allowed property value. Allow or block this app from receiving Apple events.
     * @return bool|null
    */
    public function getAllowed(): ?bool {
        return $this->getBackingStore()->get('allowed');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the codeRequirement property value. Code requirement for the app or binary that receives the Apple Event.
     * @return string|null
    */
    public function getCodeRequirement(): ?string {
        return $this->getBackingStore()->get('codeRequirement');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowed' => fn(ParseNode $n) => $o->setAllowed($n->getBooleanValue()),
            'codeRequirement' => fn(ParseNode $n) => $o->setCodeRequirement($n->getStringValue()),
            'identifier' => fn(ParseNode $n) => $o->setIdentifier($n->getStringValue()),
            'identifierType' => fn(ParseNode $n) => $o->setIdentifierType($n->getEnumValue(MacOSProcessIdentifierType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the identifier property value. Bundle ID of the app or file path of the process or executable that receives the Apple Event.
     * @return string|null
    */
    public function getIdentifier(): ?string {
        return $this->getBackingStore()->get('identifier');
    }

    /**
     * Gets the identifierType property value. Process identifier types for MacOS Privacy Preferences
     * @return MacOSProcessIdentifierType|null
    */
    public function getIdentifierType(): ?MacOSProcessIdentifierType {
        return $this->getBackingStore()->get('identifierType');
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
        $writer->writeBooleanValue('allowed', $this->getAllowed());
        $writer->writeStringValue('codeRequirement', $this->getCodeRequirement());
        $writer->writeStringValue('identifier', $this->getIdentifier());
        $writer->writeEnumValue('identifierType', $this->getIdentifierType());
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
     * Sets the allowed property value. Allow or block this app from receiving Apple events.
     *  @param bool|null $value Value to set for the allowed property.
    */
    public function setAllowed(?bool $value): void {
        $this->getBackingStore()->set('allowed', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the codeRequirement property value. Code requirement for the app or binary that receives the Apple Event.
     *  @param string|null $value Value to set for the codeRequirement property.
    */
    public function setCodeRequirement(?string $value): void {
        $this->getBackingStore()->set('codeRequirement', $value);
    }

    /**
     * Sets the identifier property value. Bundle ID of the app or file path of the process or executable that receives the Apple Event.
     *  @param string|null $value Value to set for the identifier property.
    */
    public function setIdentifier(?string $value): void {
        $this->getBackingStore()->set('identifier', $value);
    }

    /**
     * Sets the identifierType property value. Process identifier types for MacOS Privacy Preferences
     *  @param MacOSProcessIdentifierType|null $value Value to set for the identifierType property.
    */
    public function setIdentifierType(?MacOSProcessIdentifierType $value): void {
        $this->getBackingStore()->set('identifierType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
