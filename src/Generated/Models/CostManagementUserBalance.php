<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * A user's computed per-service consumption balance. Addressed by the user's identifier; onebalance resource exists per user.
*/
class CostManagementUserBalance extends Entity implements Parsable 
{
    /**
     * Instantiates a new CostManagementUserBalance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CostManagementUserBalance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CostManagementUserBalance {
        return new CostManagementUserBalance();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'selectionDataStatus' => fn(ParseNode $n) => $o->setSelectionDataStatus($n->getObjectValue([SelectionDataStatus::class, 'createFromDiscriminatorValue'])),
            'serviceBalances' => fn(ParseNode $n) => $o->setServiceBalances($n->getCollectionOfObjectValues([CostManagementUserServiceBalance::class, 'createFromDiscriminatorValue'])),
            'unevaluatedServices' => fn(ParseNode $n) => $o->setUnevaluatedServices($n->getCollectionOfObjectValues([CostManagementUnevaluatedService::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the selectionDataStatus property value. Freshness of each source that contributed to a computed balance or selection.
     * @return SelectionDataStatus|null
    */
    public function getSelectionDataStatus(): ?SelectionDataStatus {
        $val = $this->getBackingStore()->get('selectionDataStatus');
        if (is_null($val) || $val instanceof SelectionDataStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'selectionDataStatus'");
    }

    /**
     * Gets the serviceBalances property value. Per-service balance rows for the user. Services listed in unevaluatedServices areomitted. Expand to inline them.
     * @return array<CostManagementUserServiceBalance>|null
    */
    public function getServiceBalances(): ?array {
        $val = $this->getBackingStore()->get('serviceBalances');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CostManagementUserServiceBalance::class);
            /** @var array<CostManagementUserServiceBalance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceBalances'");
    }

    /**
     * Gets the unevaluatedServices property value. Services whose balance could not be evaluated. Empty on a fully successful read; anon-empty collection means the result is partial. When no service could be evaluated, therequest fails with 503 sourceUnavailable. Read-only.
     * @return array<CostManagementUnevaluatedService>|null
    */
    public function getUnevaluatedServices(): ?array {
        $val = $this->getBackingStore()->get('unevaluatedServices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CostManagementUnevaluatedService::class);
            /** @var array<CostManagementUnevaluatedService>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unevaluatedServices'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('selectionDataStatus', $this->getSelectionDataStatus());
        $writer->writeCollectionOfObjectValues('serviceBalances', $this->getServiceBalances());
    }

    /**
     * Sets the selectionDataStatus property value. Freshness of each source that contributed to a computed balance or selection.
     * @param SelectionDataStatus|null $value Value to set for the selectionDataStatus property.
    */
    public function setSelectionDataStatus(?SelectionDataStatus $value): void {
        $this->getBackingStore()->set('selectionDataStatus', $value);
    }

    /**
     * Sets the serviceBalances property value. Per-service balance rows for the user. Services listed in unevaluatedServices areomitted. Expand to inline them.
     * @param array<CostManagementUserServiceBalance>|null $value Value to set for the serviceBalances property.
    */
    public function setServiceBalances(?array $value): void {
        $this->getBackingStore()->set('serviceBalances', $value);
    }

    /**
     * Sets the unevaluatedServices property value. Services whose balance could not be evaluated. Empty on a fully successful read; anon-empty collection means the result is partial. When no service could be evaluated, therequest fails with 503 sourceUnavailable. Read-only.
     * @param array<CostManagementUnevaluatedService>|null $value Value to set for the unevaluatedServices property.
    */
    public function setUnevaluatedServices(?array $value): void {
        $this->getBackingStore()->set('unevaluatedServices', $value);
    }

}
