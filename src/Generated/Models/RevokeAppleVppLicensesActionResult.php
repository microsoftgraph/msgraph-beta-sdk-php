<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RevokeAppleVppLicensesActionResult extends DeviceActionResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $failedLicensesCount Total number of Apple Vpp licenses that failed to revoke
    */
    private ?int $failedLicensesCount = null;
    
    /**
     * @var int|null $totalLicensesCount Total number of Apple Vpp licenses associated
    */
    private ?int $totalLicensesCount = null;
    
    /**
     * Instantiates a new RevokeAppleVppLicensesActionResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RevokeAppleVppLicensesActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RevokeAppleVppLicensesActionResult {
        return new RevokeAppleVppLicensesActionResult();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the failedLicensesCount property value. Total number of Apple Vpp licenses that failed to revoke
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
            'failedLicensesCount' => function (ParseNode $n) use ($o) { $o->setFailedLicensesCount($n->getIntegerValue()); },
            'totalLicensesCount' => function (ParseNode $n) use ($o) { $o->setTotalLicensesCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the totalLicensesCount property value. Total number of Apple Vpp licenses associated
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
        $writer->writeIntegerValue('failedLicensesCount', $this->failedLicensesCount);
        $writer->writeIntegerValue('totalLicensesCount', $this->totalLicensesCount);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the failedLicensesCount property value. Total number of Apple Vpp licenses that failed to revoke
     *  @param int|null $value Value to set for the failedLicensesCount property.
    */
    public function setFailedLicensesCount(?int $value ): void {
        $this->failedLicensesCount = $value;
    }

    /**
     * Sets the totalLicensesCount property value. Total number of Apple Vpp licenses associated
     *  @param int|null $value Value to set for the totalLicensesCount property.
    */
    public function setTotalLicensesCount(?int $value ): void {
        $this->totalLicensesCount = $value;
    }

}
