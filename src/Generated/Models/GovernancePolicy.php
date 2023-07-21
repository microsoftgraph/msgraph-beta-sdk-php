<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class GovernancePolicy implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new governancePolicy and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GovernancePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GovernancePolicy {
        return new GovernancePolicy();
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
     * Gets the decisionMakerCriteria property value. The decisionMakerCriteria property
     * @return array<GovernanceCriteria>|null
    */
    public function getDecisionMakerCriteria(): ?array {
        $val = $this->getBackingStore()->get('decisionMakerCriteria');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GovernanceCriteria::class);
            /** @var array<GovernanceCriteria>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'decisionMakerCriteria'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'decisionMakerCriteria' => fn(ParseNode $n) => $o->setDecisionMakerCriteria($n->getCollectionOfObjectValues([GovernanceCriteria::class, 'createFromDiscriminatorValue'])),
            'notificationPolicy' => fn(ParseNode $n) => $o->setNotificationPolicy($n->getObjectValue([GovernanceNotificationPolicy::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the notificationPolicy property value. The notificationPolicy property
     * @return GovernanceNotificationPolicy|null
    */
    public function getNotificationPolicy(): ?GovernanceNotificationPolicy {
        $val = $this->getBackingStore()->get('notificationPolicy');
        if (is_null($val) || $val instanceof GovernanceNotificationPolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationPolicy'");
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
        $writer->writeCollectionOfObjectValues('decisionMakerCriteria', $this->getDecisionMakerCriteria());
        $writer->writeObjectValue('notificationPolicy', $this->getNotificationPolicy());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the decisionMakerCriteria property value. The decisionMakerCriteria property
     * @param array<GovernanceCriteria>|null $value Value to set for the decisionMakerCriteria property.
    */
    public function setDecisionMakerCriteria(?array $value): void {
        $this->getBackingStore()->set('decisionMakerCriteria', $value);
    }

    /**
     * Sets the notificationPolicy property value. The notificationPolicy property
     * @param GovernanceNotificationPolicy|null $value Value to set for the notificationPolicy property.
    */
    public function setNotificationPolicy(?GovernanceNotificationPolicy $value): void {
        $this->getBackingStore()->set('notificationPolicy', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
