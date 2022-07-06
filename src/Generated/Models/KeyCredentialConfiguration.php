<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class KeyCredentialConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateInterval|null $maxLifetime The maxLifetime property
    */
    private ?DateInterval $maxLifetime = null;
    
    /**
     * @var DateTime|null $restrictForAppsCreatedAfterDateTime Timestamp when the policy is enforced for all apps created on or after the specified date. For existing applications, the enforcement date would be back dated. To apply to all applications regardless of their creation date, this property would be null. Nullable.
    */
    private ?DateTime $restrictForAppsCreatedAfterDateTime = null;
    
    /**
     * @var AppKeyCredentialRestrictionType|null $restrictionType The type of restriction being applied. Possible values are asymmetricKeyLifetime, unknownFutureValue. Each value of restrictionType can be used only once per policy.
    */
    private ?AppKeyCredentialRestrictionType $restrictionType = null;
    
    /**
     * Instantiates a new keyCredentialConfiguration and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return KeyCredentialConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): KeyCredentialConfiguration {
        return new KeyCredentialConfiguration();
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
            'maxLifetime' => function (ParseNode $n) use ($o) { $o->setMaxLifetime($n->getDateIntervalValue()); },
            'restrictForAppsCreatedAfterDateTime' => function (ParseNode $n) use ($o) { $o->setRestrictForAppsCreatedAfterDateTime($n->getDateTimeValue()); },
            'restrictionType' => function (ParseNode $n) use ($o) { $o->setRestrictionType($n->getEnumValue(AppKeyCredentialRestrictionType::class)); },
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
     * Gets the restrictForAppsCreatedAfterDateTime property value. Timestamp when the policy is enforced for all apps created on or after the specified date. For existing applications, the enforcement date would be back dated. To apply to all applications regardless of their creation date, this property would be null. Nullable.
     * @return DateTime|null
    */
    public function getRestrictForAppsCreatedAfterDateTime(): ?DateTime {
        return $this->restrictForAppsCreatedAfterDateTime;
    }

    /**
     * Gets the restrictionType property value. The type of restriction being applied. Possible values are asymmetricKeyLifetime, unknownFutureValue. Each value of restrictionType can be used only once per policy.
     * @return AppKeyCredentialRestrictionType|null
    */
    public function getRestrictionType(): ?AppKeyCredentialRestrictionType {
        return $this->restrictionType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateIntervalValue('maxLifetime', $this->maxLifetime);
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
     * Sets the restrictForAppsCreatedAfterDateTime property value. Timestamp when the policy is enforced for all apps created on or after the specified date. For existing applications, the enforcement date would be back dated. To apply to all applications regardless of their creation date, this property would be null. Nullable.
     *  @param DateTime|null $value Value to set for the restrictForAppsCreatedAfterDateTime property.
    */
    public function setRestrictForAppsCreatedAfterDateTime(?DateTime $value ): void {
        $this->restrictForAppsCreatedAfterDateTime = $value;
    }

    /**
     * Sets the restrictionType property value. The type of restriction being applied. Possible values are asymmetricKeyLifetime, unknownFutureValue. Each value of restrictionType can be used only once per policy.
     *  @param AppKeyCredentialRestrictionType|null $value Value to set for the restrictionType property.
    */
    public function setRestrictionType(?AppKeyCredentialRestrictionType $value ): void {
        $this->restrictionType = $value;
    }

}
