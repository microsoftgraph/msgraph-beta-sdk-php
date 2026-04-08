<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ApproverDelegate implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ApproverDelegate and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApproverDelegate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApproverDelegate {
        return new ApproverDelegate();
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
     * Gets the delegate property value. The delegate property
     * @return SubjectSet|null
    */
    public function getDelegate(): ?SubjectSet {
        $val = $this->getBackingStore()->get('delegate');
        if (is_null($val) || $val instanceof SubjectSet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'delegate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'delegate' => fn(ParseNode $n) => $o->setDelegate($n->getObjectValue([SubjectSet::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'schedule' => fn(ParseNode $n) => $o->setSchedule($n->getObjectValue([RequestSchedule::class, 'createFromDiscriminatorValue'])),
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
     * Gets the schedule property value. The schedule property
     * @return RequestSchedule|null
    */
    public function getSchedule(): ?RequestSchedule {
        $val = $this->getBackingStore()->get('schedule');
        if (is_null($val) || $val instanceof RequestSchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schedule'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('delegate', $this->getDelegate());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('schedule', $this->getSchedule());
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
     * Sets the delegate property value. The delegate property
     * @param SubjectSet|null $value Value to set for the delegate property.
    */
    public function setDelegate(?SubjectSet $value): void {
        $this->getBackingStore()->set('delegate', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the schedule property value. The schedule property
     * @param RequestSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?RequestSchedule $value): void {
        $this->getBackingStore()->set('schedule', $value);
    }

}
