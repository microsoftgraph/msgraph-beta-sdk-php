<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EnrollmentRestrictionsConfigurationPolicySetItem extends PolicySetItem implements Parsable 
{
    /**
     * @var int|null $limit Limit of the EnrollmentRestrictionsConfigurationPolicySetItem.
    */
    private ?int $limit = null;
    
    /**
     * @var int|null $priority Priority of the EnrollmentRestrictionsConfigurationPolicySetItem.
    */
    private ?int $priority = null;
    
    /**
     * Instantiates a new EnrollmentRestrictionsConfigurationPolicySetItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EnrollmentRestrictionsConfigurationPolicySetItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EnrollmentRestrictionsConfigurationPolicySetItem {
        return new EnrollmentRestrictionsConfigurationPolicySetItem();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'limit' => function (ParseNode $n) use ($o) { $o->setLimit($n->getIntegerValue()); },
            'priority' => function (ParseNode $n) use ($o) { $o->setPriority($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the limit property value. Limit of the EnrollmentRestrictionsConfigurationPolicySetItem.
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the priority property value. Priority of the EnrollmentRestrictionsConfigurationPolicySetItem.
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->priority;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('limit', $this->limit);
        $writer->writeIntegerValue('priority', $this->priority);
    }

    /**
     * Sets the limit property value. Limit of the EnrollmentRestrictionsConfigurationPolicySetItem.
     *  @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value ): void {
        $this->limit = $value;
    }

    /**
     * Sets the priority property value. Priority of the EnrollmentRestrictionsConfigurationPolicySetItem.
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value ): void {
        $this->priority = $value;
    }

}
