<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Settings for local admin account password automatic rotation.
*/
class DepProfileAdminAccountPasswordRotationSetting implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DepProfileAdminAccountPasswordRotationSetting and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DepProfileAdminAccountPasswordRotationSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DepProfileAdminAccountPasswordRotationSetting {
        return new DepProfileAdminAccountPasswordRotationSetting();
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
     * Gets the autoRotationPeriodInDays property value. Indicates the number of days between 1-180 since the last rotation after which to rotate the local admin password.
     * @return int|null
    */
    public function getAutoRotationPeriodInDays(): ?int {
        $val = $this->getBackingStore()->get('autoRotationPeriodInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'autoRotationPeriodInDays'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the depProfileDelayAutoRotationSetting property value. Settings for delaying automatic password rotation upon retrieval.
     * @return DepProfileDelayAutoRotationSetting|null
    */
    public function getDepProfileDelayAutoRotationSetting(): ?DepProfileDelayAutoRotationSetting {
        $val = $this->getBackingStore()->get('depProfileDelayAutoRotationSetting');
        if (is_null($val) || $val instanceof DepProfileDelayAutoRotationSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'depProfileDelayAutoRotationSetting'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'autoRotationPeriodInDays' => fn(ParseNode $n) => $o->setAutoRotationPeriodInDays($n->getIntegerValue()),
            'depProfileDelayAutoRotationSetting' => fn(ParseNode $n) => $o->setDepProfileDelayAutoRotationSetting($n->getObjectValue([DepProfileDelayAutoRotationSetting::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('autoRotationPeriodInDays', $this->getAutoRotationPeriodInDays());
        $writer->writeObjectValue('depProfileDelayAutoRotationSetting', $this->getDepProfileDelayAutoRotationSetting());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the autoRotationPeriodInDays property value. Indicates the number of days between 1-180 since the last rotation after which to rotate the local admin password.
     * @param int|null $value Value to set for the autoRotationPeriodInDays property.
    */
    public function setAutoRotationPeriodInDays(?int $value): void {
        $this->getBackingStore()->set('autoRotationPeriodInDays', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the depProfileDelayAutoRotationSetting property value. Settings for delaying automatic password rotation upon retrieval.
     * @param DepProfileDelayAutoRotationSetting|null $value Value to set for the depProfileDelayAutoRotationSetting property.
    */
    public function setDepProfileDelayAutoRotationSetting(?DepProfileDelayAutoRotationSetting $value): void {
        $this->getBackingStore()->set('depProfileDelayAutoRotationSetting', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
