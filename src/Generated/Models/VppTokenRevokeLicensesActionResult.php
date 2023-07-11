<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The status of the action performed with an Apple Volume Purchase Program token.
*/
class VppTokenRevokeLicensesActionResult extends VppTokenActionResult implements Parsable 
{
    /**
     * Instantiates a new vppTokenRevokeLicensesActionResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VppTokenRevokeLicensesActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VppTokenRevokeLicensesActionResult {
        return new VppTokenRevokeLicensesActionResult();
    }

    /**
     * Gets the actionFailureReason property value. Possible types of reasons for an Apple Volume Purchase Program token action failure.
     * @return VppTokenActionFailureReason|null
    */
    public function getActionFailureReason(): ?VppTokenActionFailureReason {
        $val = $this->getBackingStore()->get('actionFailureReason');
        if (is_null($val) || $val instanceof VppTokenActionFailureReason) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionFailureReason'");
    }

    /**
     * Gets the failedLicensesCount property value. A count of the number of licenses that failed to revoke.
     * @return int|null
    */
    public function getFailedLicensesCount(): ?int {
        $val = $this->getBackingStore()->get('failedLicensesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedLicensesCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionFailureReason' => fn(ParseNode $n) => $o->setActionFailureReason($n->getEnumValue(VppTokenActionFailureReason::class)),
            'failedLicensesCount' => fn(ParseNode $n) => $o->setFailedLicensesCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'totalLicensesCount' => fn(ParseNode $n) => $o->setTotalLicensesCount($n->getIntegerValue()),
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
     * Gets the totalLicensesCount property value. A count of the number of licenses that were attempted to revoke.
     * @return int|null
    */
    public function getTotalLicensesCount(): ?int {
        $val = $this->getBackingStore()->get('totalLicensesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalLicensesCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('actionFailureReason', $this->getActionFailureReason());
        $writer->writeIntegerValue('failedLicensesCount', $this->getFailedLicensesCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('totalLicensesCount', $this->getTotalLicensesCount());
    }

    /**
     * Sets the actionFailureReason property value. Possible types of reasons for an Apple Volume Purchase Program token action failure.
     * @param VppTokenActionFailureReason|null $value Value to set for the actionFailureReason property.
    */
    public function setActionFailureReason(?VppTokenActionFailureReason $value): void {
        $this->getBackingStore()->set('actionFailureReason', $value);
    }

    /**
     * Sets the failedLicensesCount property value. A count of the number of licenses that failed to revoke.
     * @param int|null $value Value to set for the failedLicensesCount property.
    */
    public function setFailedLicensesCount(?int $value): void {
        $this->getBackingStore()->set('failedLicensesCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the totalLicensesCount property value. A count of the number of licenses that were attempted to revoke.
     * @param int|null $value Value to set for the totalLicensesCount property.
    */
    public function setTotalLicensesCount(?int $value): void {
        $this->getBackingStore()->set('totalLicensesCount', $value);
    }

}
