<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConfigurationManagerActionResult extends DeviceActionResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var ConfigurationManagerActionDeliveryStatus|null $actionDeliveryStatus State of the action being delivered to on-prem server. Possible values are: unknown, pendingDelivery, deliveredToConnectorService, failedToDeliverToConnectorService, deliveredToOnPremisesServer.
    */
    private ?ConfigurationManagerActionDeliveryStatus $actionDeliveryStatus = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $errorCode Error code of Configuration Manager action from client
    */
    private ?int $errorCode = null;
    
    /**
     * Instantiates a new ConfigurationManagerActionResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConfigurationManagerActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConfigurationManagerActionResult {
        return new ConfigurationManagerActionResult();
    }

    /**
     * Gets the actionDeliveryStatus property value. State of the action being delivered to on-prem server. Possible values are: unknown, pendingDelivery, deliveredToConnectorService, failedToDeliverToConnectorService, deliveredToOnPremisesServer.
     * @return ConfigurationManagerActionDeliveryStatus|null
    */
    public function getActionDeliveryStatus(): ?ConfigurationManagerActionDeliveryStatus {
        return $this->actionDeliveryStatus;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the errorCode property value. Error code of Configuration Manager action from client
     * @return int|null
    */
    public function getErrorCode(): ?int {
        return $this->errorCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionDeliveryStatus' => function (ParseNode $n) use ($o) { $o->setActionDeliveryStatus($n->getEnumValue(ConfigurationManagerActionDeliveryStatus::class)); },
            'errorCode' => function (ParseNode $n) use ($o) { $o->setErrorCode($n->getIntegerValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('actionDeliveryStatus', $this->actionDeliveryStatus);
        $writer->writeIntegerValue('errorCode', $this->errorCode);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the actionDeliveryStatus property value. State of the action being delivered to on-prem server. Possible values are: unknown, pendingDelivery, deliveredToConnectorService, failedToDeliverToConnectorService, deliveredToOnPremisesServer.
     *  @param ConfigurationManagerActionDeliveryStatus|null $value Value to set for the actionDeliveryStatus property.
    */
    public function setActionDeliveryStatus(?ConfigurationManagerActionDeliveryStatus $value ): void {
        $this->actionDeliveryStatus = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the errorCode property value. Error code of Configuration Manager action from client
     *  @param int|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?int $value ): void {
        $this->errorCode = $value;
    }

}
