<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GovernancePolicy implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<GovernanceCriteria>|null $decisionMakerCriteria The decisionMakerCriteria property */
    private ?array $decisionMakerCriteria = null;
    
    /** @var GovernanceNotificationPolicy|null $notificationPolicy The notificationPolicy property */
    private ?GovernanceNotificationPolicy $notificationPolicy = null;
    
    /**
     * Instantiates a new governancePolicy and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GovernancePolicy
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): GovernancePolicy {
        return new GovernancePolicy();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the decisionMakerCriteria property value. The decisionMakerCriteria property
     * @return array<GovernanceCriteria>|null
    */
    public function getDecisionMakerCriteria(): ?array {
        return $this->decisionMakerCriteria;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'decisionMakerCriteria' => function (self $o, ParseNode $n) { $o->setDecisionMakerCriteria($n->getCollectionOfObjectValues(GovernanceCriteria::class)); },
            'notificationPolicy' => function (self $o, ParseNode $n) { $o->setNotificationPolicy($n->getObjectValue(GovernanceNotificationPolicy::class)); },
        ];
    }

    /**
     * Gets the notificationPolicy property value. The notificationPolicy property
     * @return GovernanceNotificationPolicy|null
    */
    public function getNotificationPolicy(): ?GovernanceNotificationPolicy {
        return $this->notificationPolicy;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('decisionMakerCriteria', $this->decisionMakerCriteria);
        $writer->writeObjectValue('notificationPolicy', $this->notificationPolicy);
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
     * Sets the decisionMakerCriteria property value. The decisionMakerCriteria property
     *  @param array<GovernanceCriteria>|null $value Value to set for the decisionMakerCriteria property.
    */
    public function setDecisionMakerCriteria(?array $value ): void {
        $this->decisionMakerCriteria = $value;
    }

    /**
     * Sets the notificationPolicy property value. The notificationPolicy property
     *  @param GovernanceNotificationPolicy|null $value Value to set for the notificationPolicy property.
    */
    public function setNotificationPolicy(?GovernanceNotificationPolicy $value ): void {
        $this->notificationPolicy = $value;
    }

}
