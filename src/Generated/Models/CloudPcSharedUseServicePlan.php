<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcSharedUseServicePlan extends Entity implements Parsable 
{
    /**
     * Instantiates a new cloudPcSharedUseServicePlan and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcSharedUseServicePlan
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcSharedUseServicePlan {
        return new CloudPcSharedUseServicePlan();
    }

    /**
     * Gets the displayName property value. The display name of the shared-use service plan.
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
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'totalCount' => fn(ParseNode $n) => $o->setTotalCount($n->getIntegerValue()),
            'usedCount' => fn(ParseNode $n) => $o->setUsedCount($n->getIntegerValue()),
        ]);
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
     * Gets the totalCount property value. Total number of shared-use service plans purchased by the customer.
     * @return int|null
    */
    public function getTotalCount(): ?int {
        $val = $this->getBackingStore()->get('totalCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalCount'");
    }

    /**
     * Gets the usedCount property value. The number of service plans that the account uses.
     * @return int|null
    */
    public function getUsedCount(): ?int {
        $val = $this->getBackingStore()->get('usedCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usedCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('totalCount', $this->getTotalCount());
        $writer->writeIntegerValue('usedCount', $this->getUsedCount());
    }

    /**
     * Sets the displayName property value. The display name of the shared-use service plan.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the totalCount property value. Total number of shared-use service plans purchased by the customer.
     * @param int|null $value Value to set for the totalCount property.
    */
    public function setTotalCount(?int $value): void {
        $this->getBackingStore()->set('totalCount', $value);
    }

    /**
     * Sets the usedCount property value. The number of service plans that the account uses.
     * @param int|null $value Value to set for the usedCount property.
    */
    public function setUsedCount(?int $value): void {
        $this->getBackingStore()->set('usedCount', $value);
    }

}
