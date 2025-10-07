<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class OnPremisesWritebackConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new OnPremisesWritebackConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPremisesWritebackConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPremisesWritebackConfiguration {
        return new OnPremisesWritebackConfiguration();
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'unifiedGroupContainer' => fn(ParseNode $n) => $o->setUnifiedGroupContainer($n->getStringValue()),
            'userContainer' => fn(ParseNode $n) => $o->setUserContainer($n->getStringValue()),
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
     * Gets the unifiedGroupContainer property value. The distinguished name of the on-premises container that the customer is using to store unified groups which are created in the cloud.
     * @return string|null
    */
    public function getUnifiedGroupContainer(): ?string {
        $val = $this->getBackingStore()->get('unifiedGroupContainer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unifiedGroupContainer'");
    }

    /**
     * Gets the userContainer property value. The distinguished name of the on-premises container that the customer is using to store users which are created in the cloud.
     * @return string|null
    */
    public function getUserContainer(): ?string {
        $val = $this->getBackingStore()->get('userContainer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userContainer'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('unifiedGroupContainer', $this->getUnifiedGroupContainer());
        $writer->writeStringValue('userContainer', $this->getUserContainer());
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the unifiedGroupContainer property value. The distinguished name of the on-premises container that the customer is using to store unified groups which are created in the cloud.
     * @param string|null $value Value to set for the unifiedGroupContainer property.
    */
    public function setUnifiedGroupContainer(?string $value): void {
        $this->getBackingStore()->set('unifiedGroupContainer', $value);
    }

    /**
     * Sets the userContainer property value. The distinguished name of the on-premises container that the customer is using to store users which are created in the cloud.
     * @param string|null $value Value to set for the userContainer property.
    */
    public function setUserContainer(?string $value): void {
        $this->getBackingStore()->set('userContainer', $value);
    }

}
