<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PasswordCredentialConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateInterval|null $maxLifetime The maxLifetime property
    */
    private ?DateInterval $maxLifetime = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var DateTime|null $restrictForAppsCreatedAfterDateTime Enforces the policy for an app created on or after the enforcement date. For existing applications, the enforcement date would be backdated. To apply to all applications, this date would be null.
    */
    private ?DateTime $restrictForAppsCreatedAfterDateTime = null;
    
    /**
     * @var AppCredentialRestrictionType|null $restrictionType The type of restriction being applied. The possible values are: passwordAddition, passwordLifetime, symmetricKeyAddition, symmetricKeyLifetime,customPasswordAddition, unknownFutureValue. Each value of restrictionType can be used only once per policy.
    */
    private ?AppCredentialRestrictionType $restrictionType = null;
    
    /**
     * Instantiates a new passwordCredentialConfiguration and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.passwordCredentialConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PasswordCredentialConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PasswordCredentialConfiguration {
        return new PasswordCredentialConfiguration();
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
        return  [
            'maxLifetime' => fn(ParseNode $n) => $o->setMaxLifetime($n->getDateIntervalValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'restrictForAppsCreatedAfterDateTime' => fn(ParseNode $n) => $o->setRestrictForAppsCreatedAfterDateTime($n->getDateTimeValue()),
            'restrictionType' => fn(ParseNode $n) => $o->setRestrictionType($n->getEnumValue(AppCredentialRestrictionType::class)),
        ];
    }

    /**
     * Gets the maxLifetime property value. The maxLifetime property
     * @return DateInterval|null
    */
    public function getMaxLifetime(): ?DateInterval {
        return $this->maxLifetime;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the restrictForAppsCreatedAfterDateTime property value. Enforces the policy for an app created on or after the enforcement date. For existing applications, the enforcement date would be backdated. To apply to all applications, this date would be null.
     * @return DateTime|null
    */
    public function getRestrictForAppsCreatedAfterDateTime(): ?DateTime {
        return $this->restrictForAppsCreatedAfterDateTime;
    }

    /**
     * Gets the restrictionType property value. The type of restriction being applied. The possible values are: passwordAddition, passwordLifetime, symmetricKeyAddition, symmetricKeyLifetime,customPasswordAddition, unknownFutureValue. Each value of restrictionType can be used only once per policy.
     * @return AppCredentialRestrictionType|null
    */
    public function getRestrictionType(): ?AppCredentialRestrictionType {
        return $this->restrictionType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateIntervalValue('maxLifetime', $this->maxLifetime);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeDateTimeValue('restrictForAppsCreatedAfterDateTime', $this->restrictForAppsCreatedAfterDateTime);
        $writer->writeEnumValue('restrictionType', $this->restrictionType);
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
     * Sets the maxLifetime property value. The maxLifetime property
     *  @param DateInterval|null $value Value to set for the maxLifetime property.
    */
    public function setMaxLifetime(?DateInterval $value ): void {
        $this->maxLifetime = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the restrictForAppsCreatedAfterDateTime property value. Enforces the policy for an app created on or after the enforcement date. For existing applications, the enforcement date would be backdated. To apply to all applications, this date would be null.
     *  @param DateTime|null $value Value to set for the restrictForAppsCreatedAfterDateTime property.
    */
    public function setRestrictForAppsCreatedAfterDateTime(?DateTime $value ): void {
        $this->restrictForAppsCreatedAfterDateTime = $value;
    }

    /**
     * Sets the restrictionType property value. The type of restriction being applied. The possible values are: passwordAddition, passwordLifetime, symmetricKeyAddition, symmetricKeyLifetime,customPasswordAddition, unknownFutureValue. Each value of restrictionType can be used only once per policy.
     *  @param AppCredentialRestrictionType|null $value Value to set for the restrictionType property.
    */
    public function setRestrictionType(?AppCredentialRestrictionType $value ): void {
        $this->restrictionType = $value;
    }

}
