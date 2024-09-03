<?php

namespace Microsoft\Graph\Beta\Generated\Models\Partner\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomersSpendingBudgetSecurityRequirement extends SecurityRequirement implements Parsable 
{
    /**
     * Instantiates a new CustomersSpendingBudgetSecurityRequirement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomersSpendingBudgetSecurityRequirement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomersSpendingBudgetSecurityRequirement {
        return new CustomersSpendingBudgetSecurityRequirement();
    }

    /**
     * Gets the customersWithSpendBudgetCount property value. The number of customers with a spending budget set.
     * @return int|null
    */
    public function getCustomersWithSpendBudgetCount(): ?int {
        $val = $this->getBackingStore()->get('customersWithSpendBudgetCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customersWithSpendBudgetCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customersWithSpendBudgetCount' => fn(ParseNode $n) => $o->setCustomersWithSpendBudgetCount($n->getIntegerValue()),
            'totalCustomersCount' => fn(ParseNode $n) => $o->setTotalCustomersCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the totalCustomersCount property value. The total number of customers associated with the partner.
     * @return int|null
    */
    public function getTotalCustomersCount(): ?int {
        $val = $this->getBackingStore()->get('totalCustomersCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalCustomersCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('customersWithSpendBudgetCount', $this->getCustomersWithSpendBudgetCount());
        $writer->writeIntegerValue('totalCustomersCount', $this->getTotalCustomersCount());
    }

    /**
     * Sets the customersWithSpendBudgetCount property value. The number of customers with a spending budget set.
     * @param int|null $value Value to set for the customersWithSpendBudgetCount property.
    */
    public function setCustomersWithSpendBudgetCount(?int $value): void {
        $this->getBackingStore()->set('customersWithSpendBudgetCount', $value);
    }

    /**
     * Sets the totalCustomersCount property value. The total number of customers associated with the partner.
     * @param int|null $value Value to set for the totalCustomersCount property.
    */
    public function setTotalCustomersCount(?int $value): void {
        $this->getBackingStore()->set('totalCustomersCount', $value);
    }

}
