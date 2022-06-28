<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RiskyServicePrincipalHistoryItem extends RiskyServicePrincipal implements AdditionalDataHolder, Parsable 
{
    /**
     * @var RiskServicePrincipalActivity|null $activity The activity related to service principal risk level change.
    */
    private ?RiskServicePrincipalActivity $activity = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $initiatedBy The identifier of the actor of the operation.
    */
    private ?string $initiatedBy = null;
    
    /**
     * @var string|null $servicePrincipalId The identifier of the service principal.
    */
    private ?string $servicePrincipalId = null;
    
    /**
     * Instantiates a new RiskyServicePrincipalHistoryItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RiskyServicePrincipalHistoryItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RiskyServicePrincipalHistoryItem {
        return new RiskyServicePrincipalHistoryItem();
    }

    /**
     * Gets the activity property value. The activity related to service principal risk level change.
     * @return RiskServicePrincipalActivity|null
    */
    public function getActivity(): ?RiskServicePrincipalActivity {
        return $this->activity;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activity' => function (ParseNode $n) use ($o) { $o->setActivity($n->getObjectValue(array(RiskServicePrincipalActivity::class, 'createFromDiscriminatorValue'))); },
            'initiatedBy' => function (ParseNode $n) use ($o) { $o->setInitiatedBy($n->getStringValue()); },
            'servicePrincipalId' => function (ParseNode $n) use ($o) { $o->setServicePrincipalId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the initiatedBy property value. The identifier of the actor of the operation.
     * @return string|null
    */
    public function getInitiatedBy(): ?string {
        return $this->initiatedBy;
    }

    /**
     * Gets the servicePrincipalId property value. The identifier of the service principal.
     * @return string|null
    */
    public function getServicePrincipalId(): ?string {
        return $this->servicePrincipalId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('activity', $this->activity);
        $writer->writeStringValue('initiatedBy', $this->initiatedBy);
        $writer->writeStringValue('servicePrincipalId', $this->servicePrincipalId);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the activity property value. The activity related to service principal risk level change.
     *  @param RiskServicePrincipalActivity|null $value Value to set for the activity property.
    */
    public function setActivity(?RiskServicePrincipalActivity $value ): void {
        $this->activity = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the initiatedBy property value. The identifier of the actor of the operation.
     *  @param string|null $value Value to set for the initiatedBy property.
    */
    public function setInitiatedBy(?string $value ): void {
        $this->initiatedBy = $value;
    }

    /**
     * Sets the servicePrincipalId property value. The identifier of the service principal.
     *  @param string|null $value Value to set for the servicePrincipalId property.
    */
    public function setServicePrincipalId(?string $value ): void {
        $this->servicePrincipalId = $value;
    }

}
