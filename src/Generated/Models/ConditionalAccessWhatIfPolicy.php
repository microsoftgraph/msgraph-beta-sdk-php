<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ConditionalAccessWhatIfPolicy extends ConditionalAccessPolicy implements Parsable 
{
    /**
     * Instantiates a new ConditionalAccessWhatIfPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessWhatIfPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessWhatIfPolicy {
        return new ConditionalAccessWhatIfPolicy();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'policyApplies' => fn(ParseNode $n) => $o->setPolicyApplies($n->getBooleanValue()),
            'reasons' => fn(ParseNode $n) => $o->setReasons($n->getCollectionOfEnumValues(ConditionalAccessWhatIfReasons::class)),
        ]);
    }

    /**
     * Gets the policyApplies property value. The policyApplies property
     * @return bool|null
    */
    public function getPolicyApplies(): ?bool {
        $val = $this->getBackingStore()->get('policyApplies');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyApplies'");
    }

    /**
     * Gets the reasons property value. The reasons property
     * @return array<ConditionalAccessWhatIfReasons>|null
    */
    public function getReasons(): ?array {
        $val = $this->getBackingStore()->get('reasons');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConditionalAccessWhatIfReasons::class);
            /** @var array<ConditionalAccessWhatIfReasons>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reasons'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('policyApplies', $this->getPolicyApplies());
        $writer->writeCollectionOfEnumValues('reasons', $this->getReasons());
    }

    /**
     * Sets the policyApplies property value. The policyApplies property
     * @param bool|null $value Value to set for the policyApplies property.
    */
    public function setPolicyApplies(?bool $value): void {
        $this->getBackingStore()->set('policyApplies', $value);
    }

    /**
     * Sets the reasons property value. The reasons property
     * @param array<ConditionalAccessWhatIfReasons>|null $value Value to set for the reasons property.
    */
    public function setReasons(?array $value): void {
        $this->getBackingStore()->set('reasons', $value);
    }

}
