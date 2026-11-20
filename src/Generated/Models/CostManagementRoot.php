<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The Copilot Cost Management administration root.
*/
class CostManagementRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new CostManagementRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CostManagementRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CostManagementRoot {
        return new CostManagementRoot();
    }

    /**
     * Gets the creditRequests property value. The collection of credit requests for this tenant. Excludes audit-only requests by default.A list or requested-count dependency failure returns a Graph serviceNotAvailable error.Supports $filter on state and serviceId (eq), $select, $count=true, and $top (default 50, maximum 200).Results are ordered newest-first; $orderby is not supported.Server-driven paging returns an OData nextLink when additional pages are available.
     * @return array<CreditRequest>|null
    */
    public function getCreditRequests(): ?array {
        $val = $this->getBackingStore()->get('creditRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CreditRequest::class);
            /** @var array<CreditRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'creditRequests'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'creditRequests' => fn(ParseNode $n) => $o->setCreditRequests($n->getCollectionOfObjectValues([CreditRequest::class, 'createFromDiscriminatorValue'])),
            'spendingPolicies' => fn(ParseNode $n) => $o->setSpendingPolicies($n->getCollectionOfObjectValues([SpendingPolicy::class, 'createFromDiscriminatorValue'])),
            'usageReports' => fn(ParseNode $n) => $o->setUsageReports($n->getObjectValue([CostManagementUsageReportRoot::class, 'createFromDiscriminatorValue'])),
            'userBalances' => fn(ParseNode $n) => $o->setUserBalances($n->getCollectionOfObjectValues([CostManagementUserBalance::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the spendingPolicies property value. The spending policies that govern Copilot Credits consumption.
     * @return array<SpendingPolicy>|null
    */
    public function getSpendingPolicies(): ?array {
        $val = $this->getBackingStore()->get('spendingPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SpendingPolicy::class);
            /** @var array<SpendingPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'spendingPolicies'");
    }

    /**
     * Gets the usageReports property value. Reported consumption of Copilot Credits, split by user, group, service and funding.
     * @return CostManagementUsageReportRoot|null
    */
    public function getUsageReports(): ?CostManagementUsageReportRoot {
        $val = $this->getBackingStore()->get('usageReports');
        if (is_null($val) || $val instanceof CostManagementUsageReportRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usageReports'");
    }

    /**
     * Gets the userBalances property value. Per-user consumption balances, addressed by the user's identifier.
     * @return array<CostManagementUserBalance>|null
    */
    public function getUserBalances(): ?array {
        $val = $this->getBackingStore()->get('userBalances');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CostManagementUserBalance::class);
            /** @var array<CostManagementUserBalance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userBalances'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('creditRequests', $this->getCreditRequests());
        $writer->writeCollectionOfObjectValues('spendingPolicies', $this->getSpendingPolicies());
        $writer->writeObjectValue('usageReports', $this->getUsageReports());
        $writer->writeCollectionOfObjectValues('userBalances', $this->getUserBalances());
    }

    /**
     * Sets the creditRequests property value. The collection of credit requests for this tenant. Excludes audit-only requests by default.A list or requested-count dependency failure returns a Graph serviceNotAvailable error.Supports $filter on state and serviceId (eq), $select, $count=true, and $top (default 50, maximum 200).Results are ordered newest-first; $orderby is not supported.Server-driven paging returns an OData nextLink when additional pages are available.
     * @param array<CreditRequest>|null $value Value to set for the creditRequests property.
    */
    public function setCreditRequests(?array $value): void {
        $this->getBackingStore()->set('creditRequests', $value);
    }

    /**
     * Sets the spendingPolicies property value. The spending policies that govern Copilot Credits consumption.
     * @param array<SpendingPolicy>|null $value Value to set for the spendingPolicies property.
    */
    public function setSpendingPolicies(?array $value): void {
        $this->getBackingStore()->set('spendingPolicies', $value);
    }

    /**
     * Sets the usageReports property value. Reported consumption of Copilot Credits, split by user, group, service and funding.
     * @param CostManagementUsageReportRoot|null $value Value to set for the usageReports property.
    */
    public function setUsageReports(?CostManagementUsageReportRoot $value): void {
        $this->getBackingStore()->set('usageReports', $value);
    }

    /**
     * Sets the userBalances property value. Per-user consumption balances, addressed by the user's identifier.
     * @param array<CostManagementUserBalance>|null $value Value to set for the userBalances property.
    */
    public function setUserBalances(?array $value): void {
        $this->getBackingStore()->set('userBalances', $value);
    }

}
