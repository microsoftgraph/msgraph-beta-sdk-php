<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VppTokenRevokeLicensesActionResult extends VppTokenActionResult implements Parsable 
{
    /**
     * @var VppTokenActionFailureReason|null $actionFailureReason Possible types of reasons for an Apple Volume Purchase Program token action failure.
    */
    private ?VppTokenActionFailureReason $actionFailureReason = null;
    
    /**
     * @var int|null $failedLicensesCount A count of the number of licenses that failed to revoke.
    */
    private ?int $failedLicensesCount = null;
    
    /**
     * @var int|null $totalLicensesCount A count of the number of licenses that were attempted to revoke.
    */
    private ?int $totalLicensesCount = null;
    
    /**
     * Instantiates a new VppTokenRevokeLicensesActionResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.vppTokenRevokeLicensesActionResult');
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
        return $this->actionFailureReason;
    }

    /**
     * Gets the failedLicensesCount property value. A count of the number of licenses that failed to revoke.
     * @return int|null
    */
    public function getFailedLicensesCount(): ?int {
        return $this->failedLicensesCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionFailureReason' => fn(ParseNode $n) => $o->setActionFailureReason($n->getEnumValue(VppTokenActionFailureReason::class)),
            'failedLicensesCount' => fn(ParseNode $n) => $o->setFailedLicensesCount($n->getIntegerValue()),
            'totalLicensesCount' => fn(ParseNode $n) => $o->setTotalLicensesCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the totalLicensesCount property value. A count of the number of licenses that were attempted to revoke.
     * @return int|null
    */
    public function getTotalLicensesCount(): ?int {
        return $this->totalLicensesCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('actionFailureReason', $this->actionFailureReason);
        $writer->writeIntegerValue('failedLicensesCount', $this->failedLicensesCount);
        $writer->writeIntegerValue('totalLicensesCount', $this->totalLicensesCount);
    }

    /**
     * Sets the actionFailureReason property value. Possible types of reasons for an Apple Volume Purchase Program token action failure.
     *  @param VppTokenActionFailureReason|null $value Value to set for the actionFailureReason property.
    */
    public function setActionFailureReason(?VppTokenActionFailureReason $value ): void {
        $this->actionFailureReason = $value;
    }

    /**
     * Sets the failedLicensesCount property value. A count of the number of licenses that failed to revoke.
     *  @param int|null $value Value to set for the failedLicensesCount property.
    */
    public function setFailedLicensesCount(?int $value ): void {
        $this->failedLicensesCount = $value;
    }

    /**
     * Sets the totalLicensesCount property value. A count of the number of licenses that were attempted to revoke.
     *  @param int|null $value Value to set for the totalLicensesCount property.
    */
    public function setTotalLicensesCount(?int $value ): void {
        $this->totalLicensesCount = $value;
    }

}
