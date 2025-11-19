<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PlanUsageRight implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PlanUsageRight and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlanUsageRight
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlanUsageRight {
        return new PlanUsageRight();
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
            'hasSensitivityLabel' => fn(ParseNode $n) => $o->setHasSensitivityLabel($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'planId' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
            'usageRights' => fn(ParseNode $n) => $o->setUsageRights($n->getObjectValue([UsageRightsInfo::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the hasSensitivityLabel property value. Indicates whether the plan has a sensitivity label applied. If true, the plan has a sensitivity label assignment; if false, no sensitivity label is applied.
     * @return bool|null
    */
    public function getHasSensitivityLabel(): ?bool {
        $val = $this->getBackingStore()->get('hasSensitivityLabel');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasSensitivityLabel'");
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
     * Gets the planId property value. The unique identifier of the plan for which usage rights are under evaluation.
     * @return string|null
    */
    public function getPlanId(): ?string {
        $val = $this->getBackingStore()->get('planId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'planId'");
    }

    /**
     * Gets the usageRights property value. The detailed usage rights information for the requesting user on the plan. This property is null when no sensitivity label is applied to the plan. Optional.
     * @return UsageRightsInfo|null
    */
    public function getUsageRights(): ?UsageRightsInfo {
        $val = $this->getBackingStore()->get('usageRights');
        if (is_null($val) || $val instanceof UsageRightsInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usageRights'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('hasSensitivityLabel', $this->getHasSensitivityLabel());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('planId', $this->getPlanId());
        $writer->writeObjectValue('usageRights', $this->getUsageRights());
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
     * Sets the hasSensitivityLabel property value. Indicates whether the plan has a sensitivity label applied. If true, the plan has a sensitivity label assignment; if false, no sensitivity label is applied.
     * @param bool|null $value Value to set for the hasSensitivityLabel property.
    */
    public function setHasSensitivityLabel(?bool $value): void {
        $this->getBackingStore()->set('hasSensitivityLabel', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the planId property value. The unique identifier of the plan for which usage rights are under evaluation.
     * @param string|null $value Value to set for the planId property.
    */
    public function setPlanId(?string $value): void {
        $this->getBackingStore()->set('planId', $value);
    }

    /**
     * Sets the usageRights property value. The detailed usage rights information for the requesting user on the plan. This property is null when no sensitivity label is applied to the plan. Optional.
     * @param UsageRightsInfo|null $value Value to set for the usageRights property.
    */
    public function setUsageRights(?UsageRightsInfo $value): void {
        $this->getBackingStore()->set('usageRights', $value);
    }

}
