<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RiskUserActivity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var RiskDetail|null $detail The possible values are none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue.
    */
    private ?RiskDetail $detail = null;
    
    /**
     * @var array<string>|null $eventTypes The eventTypes property
    */
    private ?array $eventTypes = null;
    
    /**
     * @var array<string>|null $riskEventTypes The type of risk event detected.
    */
    private ?array $riskEventTypes = null;
    
    /**
     * Instantiates a new riskUserActivity and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RiskUserActivity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RiskUserActivity {
        return new RiskUserActivity();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the detail property value. The possible values are none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue.
     * @return RiskDetail|null
    */
    public function getDetail(): ?RiskDetail {
        return $this->detail;
    }

    /**
     * Gets the eventTypes property value. The eventTypes property
     * @return array<string>|null
    */
    public function getEventTypes(): ?array {
        return $this->eventTypes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'detail' => function (ParseNode $n) use ($o) { $o->setDetail($n->getEnumValue(RiskDetail::class)); },
            'eventTypes' => function (ParseNode $n) use ($o) { $o->setEventTypes($n->getCollectionOfPrimitiveValues()); },
            'riskEventTypes' => function (ParseNode $n) use ($o) { $o->setRiskEventTypes($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the riskEventTypes property value. The type of risk event detected.
     * @return array<string>|null
    */
    public function getRiskEventTypes(): ?array {
        return $this->riskEventTypes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('detail', $this->detail);
        $writer->writeCollectionOfPrimitiveValues('eventTypes', $this->eventTypes);
        $writer->writeCollectionOfPrimitiveValues('riskEventTypes', $this->riskEventTypes);
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
     * Sets the detail property value. The possible values are none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue.
     *  @param RiskDetail|null $value Value to set for the detail property.
    */
    public function setDetail(?RiskDetail $value ): void {
        $this->detail = $value;
    }

    /**
     * Sets the eventTypes property value. The eventTypes property
     *  @param array<string>|null $value Value to set for the eventTypes property.
    */
    public function setEventTypes(?array $value ): void {
        $this->eventTypes = $value;
    }

    /**
     * Sets the riskEventTypes property value. The type of risk event detected.
     *  @param array<string>|null $value Value to set for the riskEventTypes property.
    */
    public function setRiskEventTypes(?array $value ): void {
        $this->riskEventTypes = $value;
    }

}
