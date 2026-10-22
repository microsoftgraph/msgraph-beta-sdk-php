<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Freshness of each source that contributed to a computed balance or selection.
*/
class SelectionDataStatus implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SelectionDataStatus and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SelectionDataStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SelectionDataStatus {
        return new SelectionDataStatus();
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
     * Gets the evaluatedDateTime property value. When the result was evaluated. Always present.
     * @return DateTime|null
    */
    public function getEvaluatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('evaluatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'evaluatedDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'evaluatedDateTime' => fn(ParseNode $n) => $o->setEvaluatedDateTime($n->getDateTimeValue()),
            'groupMembershipAsOfDateTime' => fn(ParseNode $n) => $o->setGroupMembershipAsOfDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'policyConfigurationAsOfDateTime' => fn(ParseNode $n) => $o->setPolicyConfigurationAsOfDateTime($n->getDateTimeValue()),
            'usageAsOfDateTime' => fn(ParseNode $n) => $o->setUsageAsOfDateTime($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the groupMembershipAsOfDateTime property value. As-of time of the group membership used.
     * @return DateTime|null
    */
    public function getGroupMembershipAsOfDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('groupMembershipAsOfDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupMembershipAsOfDateTime'");
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
     * Gets the policyConfigurationAsOfDateTime property value. As-of time of the policy configuration used.
     * @return DateTime|null
    */
    public function getPolicyConfigurationAsOfDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('policyConfigurationAsOfDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyConfigurationAsOfDateTime'");
    }

    /**
     * Gets the usageAsOfDateTime property value. As-of time of the usage data used. Omitted when no usage read was performed.
     * @return DateTime|null
    */
    public function getUsageAsOfDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('usageAsOfDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usageAsOfDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('evaluatedDateTime', $this->getEvaluatedDateTime());
        $writer->writeDateTimeValue('groupMembershipAsOfDateTime', $this->getGroupMembershipAsOfDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('policyConfigurationAsOfDateTime', $this->getPolicyConfigurationAsOfDateTime());
        $writer->writeDateTimeValue('usageAsOfDateTime', $this->getUsageAsOfDateTime());
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
     * Sets the evaluatedDateTime property value. When the result was evaluated. Always present.
     * @param DateTime|null $value Value to set for the evaluatedDateTime property.
    */
    public function setEvaluatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('evaluatedDateTime', $value);
    }

    /**
     * Sets the groupMembershipAsOfDateTime property value. As-of time of the group membership used.
     * @param DateTime|null $value Value to set for the groupMembershipAsOfDateTime property.
    */
    public function setGroupMembershipAsOfDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('groupMembershipAsOfDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the policyConfigurationAsOfDateTime property value. As-of time of the policy configuration used.
     * @param DateTime|null $value Value to set for the policyConfigurationAsOfDateTime property.
    */
    public function setPolicyConfigurationAsOfDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('policyConfigurationAsOfDateTime', $value);
    }

    /**
     * Sets the usageAsOfDateTime property value. As-of time of the usage data used. Omitted when no usage read was performed.
     * @param DateTime|null $value Value to set for the usageAsOfDateTime property.
    */
    public function setUsageAsOfDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('usageAsOfDateTime', $value);
    }

}
