<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Settings related to auto rotation of local admin account password after password retrieval through Graph. These are optional settings
*/
class DepProfileDelayAutoRotationSetting implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DepProfileDelayAutoRotationSetting and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DepProfileDelayAutoRotationSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DepProfileDelayAutoRotationSetting {
        return new DepProfileDelayAutoRotationSetting();
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
            'onRetrievalAutoRotatePasswordEnabled' => fn(ParseNode $n) => $o->setOnRetrievalAutoRotatePasswordEnabled($n->getBooleanValue()),
            'onRetrievalDelayAutoRotatePasswordInHours' => fn(ParseNode $n) => $o->setOnRetrievalDelayAutoRotatePasswordInHours($n->getIntegerValue()),
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
     * Gets the onRetrievalAutoRotatePasswordEnabled property value. Indicates whether the admin account password should be rotated when retrieved by IT Admin through Intune.
     * @return bool|null
    */
    public function getOnRetrievalAutoRotatePasswordEnabled(): ?bool {
        $val = $this->getBackingStore()->get('onRetrievalAutoRotatePasswordEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onRetrievalAutoRotatePasswordEnabled'");
    }

    /**
     * Gets the onRetrievalDelayAutoRotatePasswordInHours property value. Indicates how long in hours (between 1 and 24 hours) after password retrieval through Graph should automatic rotation be initiated for the admin account password.
     * @return int|null
    */
    public function getOnRetrievalDelayAutoRotatePasswordInHours(): ?int {
        $val = $this->getBackingStore()->get('onRetrievalDelayAutoRotatePasswordInHours');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onRetrievalDelayAutoRotatePasswordInHours'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('onRetrievalAutoRotatePasswordEnabled', $this->getOnRetrievalAutoRotatePasswordEnabled());
        $writer->writeIntegerValue('onRetrievalDelayAutoRotatePasswordInHours', $this->getOnRetrievalDelayAutoRotatePasswordInHours());
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
     * Sets the onRetrievalAutoRotatePasswordEnabled property value. Indicates whether the admin account password should be rotated when retrieved by IT Admin through Intune.
     * @param bool|null $value Value to set for the onRetrievalAutoRotatePasswordEnabled property.
    */
    public function setOnRetrievalAutoRotatePasswordEnabled(?bool $value): void {
        $this->getBackingStore()->set('onRetrievalAutoRotatePasswordEnabled', $value);
    }

    /**
     * Sets the onRetrievalDelayAutoRotatePasswordInHours property value. Indicates how long in hours (between 1 and 24 hours) after password retrieval through Graph should automatic rotation be initiated for the admin account password.
     * @param int|null $value Value to set for the onRetrievalDelayAutoRotatePasswordInHours property.
    */
    public function setOnRetrievalDelayAutoRotatePasswordInHours(?int $value): void {
        $this->getBackingStore()->set('onRetrievalDelayAutoRotatePasswordInHours', $value);
    }

}
