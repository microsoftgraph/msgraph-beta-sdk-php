<?php

namespace Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\RoleManagementAlerts\Alerts\Refresh;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class RefreshPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new RefreshPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RefreshPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RefreshPostRequestBody {
        return new RefreshPostRequestBody();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'scopeId' => fn(ParseNode $n) => $o->setScopeId($n->getStringValue()),
            'scopeType' => fn(ParseNode $n) => $o->setScopeType($n->getStringValue()),
        ];
    }

    /**
     * Gets the scopeId property value. The scopeId property
     * @return string|null
    */
    public function getScopeId(): ?string {
        $val = $this->getBackingStore()->get('scopeId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopeId'");
    }

    /**
     * Gets the scopeType property value. The scopeType property
     * @return string|null
    */
    public function getScopeType(): ?string {
        $val = $this->getBackingStore()->get('scopeType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopeType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('scopeId', $this->getScopeId());
        $writer->writeStringValue('scopeType', $this->getScopeType());
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
     * Sets the scopeId property value. The scopeId property
     * @param string|null $value Value to set for the scopeId property.
    */
    public function setScopeId(?string $value): void {
        $this->getBackingStore()->set('scopeId', $value);
    }

    /**
     * Sets the scopeType property value. The scopeType property
     * @param string|null $value Value to set for the scopeType property.
    */
    public function setScopeType(?string $value): void {
        $this->getBackingStore()->set('scopeType', $value);
    }

}
