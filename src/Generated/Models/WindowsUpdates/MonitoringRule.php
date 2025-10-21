<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class MonitoringRule implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new MonitoringRule and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MonitoringRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MonitoringRule {
        return new MonitoringRule();
    }

    /**
     * Gets the action property value. The action triggered when the threshold for the given signal is reached. Possible values are: alertError, pauseDeployment, offerFallback, unknownFutureValue. The offerFallback member is only supported on feature update deployments of Windows 11 and must be paired with the ineligible signal. The fallback version offered is the version 22H2 of Windows 10.
     * @return MonitoringAction|null
    */
    public function getAction(): ?MonitoringAction {
        $val = $this->getBackingStore()->get('action');
        if (is_null($val) || $val instanceof MonitoringAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'action'");
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
            'action' => fn(ParseNode $n) => $o->setAction($n->getEnumValue(MonitoringAction::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'signal' => fn(ParseNode $n) => $o->setSignal($n->getEnumValue(MonitoringSignal::class)),
            'threshold' => fn(ParseNode $n) => $o->setThreshold($n->getIntegerValue()),
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
     * Gets the signal property value. The signal to monitor. Possible values are: rollback, ineligible, unknownFutureValue. The ineligible member is only supported on feature update deployments of Windows 11 and must be paired with the offerFallback action.
     * @return MonitoringSignal|null
    */
    public function getSignal(): ?MonitoringSignal {
        $val = $this->getBackingStore()->get('signal');
        if (is_null($val) || $val instanceof MonitoringSignal) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signal'");
    }

    /**
     * Gets the threshold property value. The threshold for a signal at which to trigger the action. An integer from 1 to 100 (inclusive). This value is ignored when the signal is ineligible and the action is offerFallback.
     * @return int|null
    */
    public function getThreshold(): ?int {
        $val = $this->getBackingStore()->get('threshold');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'threshold'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('action', $this->getAction());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('signal', $this->getSignal());
        $writer->writeIntegerValue('threshold', $this->getThreshold());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the action property value. The action triggered when the threshold for the given signal is reached. Possible values are: alertError, pauseDeployment, offerFallback, unknownFutureValue. The offerFallback member is only supported on feature update deployments of Windows 11 and must be paired with the ineligible signal. The fallback version offered is the version 22H2 of Windows 10.
     * @param MonitoringAction|null $value Value to set for the action property.
    */
    public function setAction(?MonitoringAction $value): void {
        $this->getBackingStore()->set('action', $value);
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
     * Sets the signal property value. The signal to monitor. Possible values are: rollback, ineligible, unknownFutureValue. The ineligible member is only supported on feature update deployments of Windows 11 and must be paired with the offerFallback action.
     * @param MonitoringSignal|null $value Value to set for the signal property.
    */
    public function setSignal(?MonitoringSignal $value): void {
        $this->getBackingStore()->set('signal', $value);
    }

    /**
     * Sets the threshold property value. The threshold for a signal at which to trigger the action. An integer from 1 to 100 (inclusive). This value is ignored when the signal is ineligible and the action is offerFallback.
     * @param int|null $value Value to set for the threshold property.
    */
    public function setThreshold(?int $value): void {
        $this->getBackingStore()->set('threshold', $value);
    }

}
