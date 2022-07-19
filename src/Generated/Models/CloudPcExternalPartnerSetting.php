<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcExternalPartnerSetting extends Entity implements Parsable 
{
    /**
     * @var bool|null $enableConnection The enableConnection property
    */
    private ?bool $enableConnection = null;
    
    /**
     * @var DateTime|null $lastSyncDateTime The lastSyncDateTime property
    */
    private ?DateTime $lastSyncDateTime = null;
    
    /**
     * @var string|null $partnerId The partnerId property
    */
    private ?string $partnerId = null;
    
    /**
     * @var CloudPcExternalPartnerStatus|null $status The status property
    */
    private ?CloudPcExternalPartnerStatus $status = null;
    
    /**
     * @var string|null $statusDetails The statusDetails property
    */
    private ?string $statusDetails = null;
    
    /**
     * Instantiates a new CloudPcExternalPartnerSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcExternalPartnerSetting');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcExternalPartnerSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcExternalPartnerSetting {
        return new CloudPcExternalPartnerSetting();
    }

    /**
     * Gets the enableConnection property value. The enableConnection property
     * @return bool|null
    */
    public function getEnableConnection(): ?bool {
        return $this->enableConnection;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enableConnection' => function (ParseNode $n) use ($o) { $o->setEnableConnection($n->getBooleanValue()); },
            'lastSyncDateTime' => function (ParseNode $n) use ($o) { $o->setLastSyncDateTime($n->getDateTimeValue()); },
            'partnerId' => function (ParseNode $n) use ($o) { $o->setPartnerId($n->getStringValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(CloudPcExternalPartnerStatus::class)); },
            'statusDetails' => function (ParseNode $n) use ($o) { $o->setStatusDetails($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastSyncDateTime property value. The lastSyncDateTime property
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        return $this->lastSyncDateTime;
    }

    /**
     * Gets the partnerId property value. The partnerId property
     * @return string|null
    */
    public function getPartnerId(): ?string {
        return $this->partnerId;
    }

    /**
     * Gets the status property value. The status property
     * @return CloudPcExternalPartnerStatus|null
    */
    public function getStatus(): ?CloudPcExternalPartnerStatus {
        return $this->status;
    }

    /**
     * Gets the statusDetails property value. The statusDetails property
     * @return string|null
    */
    public function getStatusDetails(): ?string {
        return $this->statusDetails;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('enableConnection', $this->enableConnection);
        $writer->writeDateTimeValue('lastSyncDateTime', $this->lastSyncDateTime);
        $writer->writeStringValue('partnerId', $this->partnerId);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('statusDetails', $this->statusDetails);
    }

    /**
     * Sets the enableConnection property value. The enableConnection property
     *  @param bool|null $value Value to set for the enableConnection property.
    */
    public function setEnableConnection(?bool $value ): void {
        $this->enableConnection = $value;
    }

    /**
     * Sets the lastSyncDateTime property value. The lastSyncDateTime property
     *  @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value ): void {
        $this->lastSyncDateTime = $value;
    }

    /**
     * Sets the partnerId property value. The partnerId property
     *  @param string|null $value Value to set for the partnerId property.
    */
    public function setPartnerId(?string $value ): void {
        $this->partnerId = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param CloudPcExternalPartnerStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CloudPcExternalPartnerStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the statusDetails property value. The statusDetails property
     *  @param string|null $value Value to set for the statusDetails property.
    */
    public function setStatusDetails(?string $value ): void {
        $this->statusDetails = $value;
    }

}
