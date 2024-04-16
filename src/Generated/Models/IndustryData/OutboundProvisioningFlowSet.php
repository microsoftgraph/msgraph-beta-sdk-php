<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class OutboundProvisioningFlowSet extends Entity implements Parsable 
{
    /**
     * Instantiates a new OutboundProvisioningFlowSet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OutboundProvisioningFlowSet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OutboundProvisioningFlowSet {
        return new OutboundProvisioningFlowSet();
    }

    /**
     * Gets the createdDateTime property value. The date and time when the flowSet was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the displayName property value. The display name of the flowSet provided by the caller.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'filter' => fn(ParseNode $n) => $o->setFilter($n->getObjectValue([Filter::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'provisioningFlows' => fn(ParseNode $n) => $o->setProvisioningFlows($n->getCollectionOfObjectValues([ProvisioningFlow::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the filter property value. The collection of provisioning filters applicable to all the flows under the given flowSet.
     * @return Filter|null
    */
    public function getFilter(): ?Filter {
        $val = $this->getBackingStore()->get('filter');
        if (is_null($val) || $val instanceof Filter) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filter'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the flowSet was most recently changed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the provisioningFlows property value. A flow that provisions relevant records of a given entity type in the Microsoft 365 tenant.
     * @return array<ProvisioningFlow>|null
    */
    public function getProvisioningFlows(): ?array {
        $val = $this->getBackingStore()->get('provisioningFlows');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProvisioningFlow::class);
            /** @var array<ProvisioningFlow>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'provisioningFlows'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('filter', $this->getFilter());
        $writer->writeCollectionOfObjectValues('provisioningFlows', $this->getProvisioningFlows());
    }

    /**
     * Sets the createdDateTime property value. The date and time when the flowSet was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. The display name of the flowSet provided by the caller.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the filter property value. The collection of provisioning filters applicable to all the flows under the given flowSet.
     * @param Filter|null $value Value to set for the filter property.
    */
    public function setFilter(?Filter $value): void {
        $this->getBackingStore()->set('filter', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the flowSet was most recently changed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the provisioningFlows property value. A flow that provisions relevant records of a given entity type in the Microsoft 365 tenant.
     * @param array<ProvisioningFlow>|null $value Value to set for the provisioningFlows property.
    */
    public function setProvisioningFlows(?array $value): void {
        $this->getBackingStore()->set('provisioningFlows', $value);
    }

}
